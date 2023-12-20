<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectAssignment extends Model
{
    use HasFactory;
    public function evaluator()
    {
        return $this->belongsTo(User::class, 'evaluator_id');
    }

    public function fypGroup()
    {
        return $this->belongsTo(FYPGroup::class);
    }
}
