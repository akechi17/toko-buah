<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container sign-up-mode">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/login_member" method="POST" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            @if (Session::has('errors_login'))
                @foreach (Session::get('errors_login') as $error)
                  <li style="color: red">{{ $error[0] }}</li>
                @endforeach
              </ul>       
            @endif
            @if (Session::has('success'))
                <p style="color: green">{{ Session::get('success') }}</p>
            @endif
            @if (Session::has('failed'))
                <p style="color: red">{{ Session::get('failed') }}</p>
            @endif
            <div class="input-field">
              <i class="fas fa-mail-bulk"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <a href="/register_member" >
              <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </a>
          </div>
          <img src="../assets/images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="../assets/images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="../js/app.js"></script>
    <script>
      document.querySelector(".container").classList.remove("sign-up-mode");
    </script>
  </body>
</html>
