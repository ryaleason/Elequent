<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'no_hp', 'alamat'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
