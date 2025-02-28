<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JapaneseExam extends Model
{
    use HasFactory;

    protected $table = 'japanese_exams';

    public function applicationForm()
    {
        return $this->belongsTo(ApplicationForm::class, 'application_id', 'id');
    }
}
