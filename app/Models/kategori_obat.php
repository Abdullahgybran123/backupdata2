<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_obat extends Model
{
    use HasFactory;
    public $fillabel = ['id', 'nama_kategori'];
    public $timestamps = true;

    // membuat relasi one to one di model
    // public function kategori_obat()
    // {
    //     // data dari model 'Wali' bisa dimiliki
    //     // oleh model 'kategori_obat' melalui 'id_kategori_obat'
    //     return $this->hasMany(kategori_obat::class, 'id_kategori_obat');
    // }

    // // method menampilkan image(foto)
    // public function image()
    // {
    //     if ($this->foto && file_exists(public_path('images/wali/' . $this->foto))) {
    //         return asset('images/wali/' . $this->foto);
    //     } else {
    //         return asset('images/no_image.jpg');
    //     }
    // }
    // // mengahupus image(foto) di storage(penyimpanan) public
    // public function deleteImage()
    // {
    //     if ($this->foto && file_exists(public_path('images/wali/' . $this->foto))) {
    //         return unlink(public_path('images/wali/' . $this->foto));
    //     }
    // }
}
