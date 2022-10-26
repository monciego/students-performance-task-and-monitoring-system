<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'subject_name',
        'subject_description',
    ];

    public function classes() {
        return $this->belongsTo(Classes::class);
    }
}
