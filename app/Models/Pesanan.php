<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = ['id_menu', 'id_pelanggan', 'jumlah', 'total_harga', 'tanggal_pesanan', 'status_pesanan'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
