<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory; 
    public $fillable = ['id', 'id_pembeli', 'id_obat', 'jumlah', 'total'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function pembeli()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(Pembeli::class, 'id_pembeli');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id');
    }
}
