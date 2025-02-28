<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    protected $table = 'family_members';
    public function applicationForm()
    {
        return $this->belongsTo(ApplicationForm::class, 'application_id', 'id');
    }
}
