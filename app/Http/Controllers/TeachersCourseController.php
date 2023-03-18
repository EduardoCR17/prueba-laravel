<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Course;
use App\Models\TeacherCourse;
use Illuminate\Http\Request;

class TeachersCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers_courses =  TeacherCourse::all();
        return view('teachers_courses.index', ['teachers_courses' => $teachers_courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers_courses.create', ['teachers' => Teacher::all(), 'courses' => Course::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teacher' => 'required',
            'course' => 'required',
            'n_students' => 'required',
            'seccion' => 'required',
            'nivel' => 'nullable',
            'observation' => 'required'
        ]);

        $teacher_course = new TeacherCourse();
        $teacher_course->teacher_id = $request->input('teacher');
        $teacher_course->course_id = $request->input('course');
        $teacher_course->n_students = $request->input('n_students');
        $teacher_course->seccion = $request->input('seccion');
        $teacher_course->nivel = $request->input('nivel');
        $teacher_course->observation = $request->input('observation');
        $teacher_course->save();

        return view("teachers_courses.message", ["msg"=>"Registro guardado"]);

    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Alumno $alumno)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    public function edit($id)
    {
        $teacher_course = TeacherCourse::find($id);
        return view('teachers_courses.edit', ['teacher_course' => $teacher_course, 'teachers' => Teacher::all(), 'courses' => Course::all()]);

        
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'teacher' => 'required',
            'course' => 'required',
            'n_students' => 'required',
            'seccion' => 'required',
            'nivel' => 'nullable',
            'observation' => 'required'
        ]);

        $teacher_course = TeacherCourse::find($id);
        $teacher_course->teacher_id = $request->input('teacher');
        $teacher_course->course_id = $request->input('course');
        $teacher_course->n_students = $request->input('n_students');
        $teacher_course->seccion = $request->input('seccion');
        $teacher_course->nivel = $request->input('nivel');
        $teacher_course->observation = $request->input('observation');
        $teacher_course->save();

        return view("teachers_courses.message", ["msg"=>"Registro modificado"]);
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy($id)
    {
        $alumno = TeacherCourse::find($id);
        $alumno->delete();

        return redirect('profesores_cursos');
        
    }
}
