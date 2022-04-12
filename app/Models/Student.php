<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = 'students';

    protected $fillable = [];

    public function covids()
    {
        return $this->hasOne('App\Models\Covid', 'student_id', 'id');
    }

    public function colleges()
    {
        return $this->hasOne('App\Models\College', 'student_id', 'id');
    }
}
