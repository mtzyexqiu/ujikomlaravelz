<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Nama tabel di database

    protected $fillable = [
        'category_id',
        'category_name',
        'status',
    ];
}
