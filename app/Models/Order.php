<?php

namespace App\Models;

use App\Models\Member;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function member(){
        return $this->belongsTo(Member::class, 'id_member', 'id');
    }

    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
