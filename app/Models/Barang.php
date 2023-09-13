<?php

namespace App\Models;

use App\Models\Pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->hasMany(Pesanan::class, 'id', 'barang_id');
    }
}
