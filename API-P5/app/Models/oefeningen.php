<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oefeningen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'oefeningen';
    public $fillable = ['nameNL', 'nameEN', 'instructionNL', 'instructionEN'];

    public function prestaties()
    {
        return $this->hasMany(prestaties::class, 'exerciseId', 'id');
    }
}
