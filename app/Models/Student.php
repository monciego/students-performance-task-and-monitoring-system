<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'class_code',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function classes() {
        return $this->hasMany(Classes::class);
    }
}
