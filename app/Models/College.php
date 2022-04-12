<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    protected $table = 'colleges';

    protected $guarded = [];

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'student_id', 'id');
    }

}
