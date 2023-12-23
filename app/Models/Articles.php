<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul', 'deskripsi', 'gambar', 'role_id',
    ];

    public function role()
    {
        return $this->belongsTo(Roles::class);
    }
}
