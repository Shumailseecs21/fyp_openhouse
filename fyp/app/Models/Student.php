<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=["name","cms"];
    public function fypGroups()
    {
        return $this->hasMany(FYPGroup::class);
    }
}
