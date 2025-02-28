<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;

    protected $table = 'application_forms';

    public function japaneseExams()
    {
        return $this->hasMany(JapaneseExam::class, 'application_id', 'id');
    }

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class, 'application_id', 'id');
    }
}
