<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherCourse extends Model
{
    protected $table = 'teachers_courses';

    protected $fillable = [
        'teacher_id',
        'course_id',
        'n_students',
        'seccion',
        //'rol_id',
        'nivel',
        'estado',
        'observation',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
