<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    public $fillable = ['id', 'image', 'slug', 'nama_obat', 'keterangan', 'stok', 'harga', 'id_kategori'];
    public $timestamps = true;

    // membuat relasi one to one di model
    public function kategori_obat()
    {
        // data dari model 'Wali' bisa dimiliki
        // oleh model 'Siswa' melalui 'id_siswa'
        return $this->belongsTo(kategori_obat::class, 'id_kategori');
    }

    public function obat()
    {
        return $this->hasmany(Obat::class, 'id_obat');
    }

    public function image()
    {
        if ($this->image && file_exists(public_path('images/obat/' . $this->image))) {
            return asset('images/obat/' . $this->image);
        } else {
            return asset('images/no_image.jpg');
        }
    }

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/obat/' . $this->image))) {
            return unlink(public_path('images/obat/' . $this->image));
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
