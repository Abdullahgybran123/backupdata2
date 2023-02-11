<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;
    public $fillable = ['id', 'nama', 'no_hp','alamat'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
