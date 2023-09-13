<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Produk::class, 'category_id');
    }
}
