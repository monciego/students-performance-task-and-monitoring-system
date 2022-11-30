<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'user_id',
        'score',
        'activity_id',
        'file',
        'comment'
    ];

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function activity() {
        return $this->belongsTo(Activity::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
