<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table = 'tb_wisata';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'tahun',
        'harga_tiket',
        'deskripsi',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
