<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    use HasFactory;

    protected $table = 'covids';

    protected $fillable = [];

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'student_id', 'id');
    }
}
