<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'Tikets';
    protected $fillable = [
        'group_name',
        'category_id',
        'status',
        'details',
        'handled_by',
        'sender'
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function handledBy()
    {
        return $this->belongsTo(User::class, 'handled_by');
    }
}

