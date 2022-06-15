<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class difficulties extends Model
{
    use HasFactory;
    protected $table = 'difficulties';
    protected $fillable = [
        'id',
        'name',
    ];
}
