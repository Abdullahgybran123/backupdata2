<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    public $fillable = ['id', 'supplier','id_obat','jumlah'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
