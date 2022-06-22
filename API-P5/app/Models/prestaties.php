<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestaties extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'prestaties';
    public $fillable = ['userId', 'exerciseId', 'startedAt', 'finishedAt', 'amount'];

    public function user()
    {
        return $this->belongsTo(user::class, 'userId', 'id');
    }
    public function oefeningen()
    {
        return $this->belongsTo(oefeningen::class, 'exerciseId', 'id');
    }
}
