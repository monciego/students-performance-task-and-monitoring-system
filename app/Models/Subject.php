<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'subject_details',
        'subject_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
