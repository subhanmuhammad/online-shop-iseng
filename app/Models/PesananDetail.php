<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesananDetail extends Model
{
    use HasFactory;
    protected $table = "PesananDetail";
    protected $guarded = [];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id');
    }

    public function pesananl()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
}
