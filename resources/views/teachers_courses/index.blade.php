@extends('layouts.app')

@section('title', 'PROFESORES |CURSO')

@section('content') 


<h2>Listado de Profesores</h2>

<a href="{{ url('profesores_cursos/create') }}" class="btn btn-primary btn-sm" >Nuevo registro</a>


<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>PROFESOR</th>
            <th>CURSO</th>
            <th>NUMERO ALUMNOS</th>
            <th>SECCION</th>
            <th>NIVEL</th>
            <th>OBSERVACIÓN</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($teachers_courses as $teacher_course)
        <tr>
            <td>{{ $teacher_course->id}}</td>
            <td>{{ $teacher_course->teacher->name." " .$teacher_course->teacher->lastname}}</td>
            <td>{{ $teacher_course->course->name}}</td>
            <td>{{ $teacher_course->n_students}}</td>                    
            <td>{{ $teacher_course->seccion}}</td>
            <td>{{ $teacher_course->nivel}}</td>
            <td>{{ $teacher_course->observation}}</td>
            <td><a href="{{ url('profesores_cursos/'.$teacher_course->id.'/edit')}}" class="btn btn-warning btn-sm">Editar</a></td>
            <td>
                <form action="{{ url('profesores_cursos/'.$teacher_course->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>

</table>
@endsection
