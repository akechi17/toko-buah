<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = request(['email', 'password']);

        if (auth()->attempt($credentials)){
            $token = Auth::guard('api')->attempt($credentials);
            return response()->json([
                'success' => true,
                'message' => 'login successful',
                'token' => $token
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'email or password is incorrect'
        ]);
}

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function register_member_action(Request $request){
        $validator = Validator::make($request->all(),[
            'nama_member' => 'required',
            'no_hp' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:konfirmasi_password',
            'konfirmasi_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
           Session::flash('errors', $validator->errors()->toArray());
           return redirect('/register_member');
        }

        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        unset($input['konfirmasi_password']);
        Member::create($input);
        Session::flash('success', 'Account successfully registered');
        return redirect('/login_member');
    }

    public function login_member(){
        return view('auth.login_member');
    }

    public function login_member_action(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            Session::flash('errors_login', $validator->errors()->toArray());
            return redirect('/login_member');
         }

        $credentials = $request->only('email', 'password');
        $member = Member::where('email', $request->email)->first();
        if ($member){
            if(Auth::guard('webmember')->attempt($credentials)){
                $request->session()->regenerate();
                return redirect("/");
            } else {
                Session::flash('failed', "Wrong password");
                return redirect('/login_member');
            }
        } else {
            Session::flash('failed', "Email not found");
            return redirect('/login_member');
        }
    }

    public function register_member(){
        return view('auth.register_member');
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }

    public function logout_member(){
        Auth::guard('webmember')->logout();
        Session::flush();
        return redirect('/');
    }
}
