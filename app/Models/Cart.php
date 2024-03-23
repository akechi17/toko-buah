<?php

namespace App\Models;

use App\Models\Member;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_barang', 'id');
    }

    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member', 'id');
    }
}
