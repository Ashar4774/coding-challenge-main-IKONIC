<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'request_from'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function request_from(){
        return $this->belongsTo(User::class, 'request_from', 'id');
    }
}
