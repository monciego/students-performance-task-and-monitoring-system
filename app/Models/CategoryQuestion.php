<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'question_category',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
