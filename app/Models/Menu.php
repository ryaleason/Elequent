<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['nama_menu', 'kategori', 'harga', 'status'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
