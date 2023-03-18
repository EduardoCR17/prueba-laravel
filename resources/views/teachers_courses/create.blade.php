@extends('layouts.app')

@section('title', 'REGISTRAR PROFESOR |CURSO')

@section('content') 
   
<h2>Registrar Profesor</h2>

@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<form action="{{ url('profesores_cursos')}}" method="post">
    @csrf

    <div class="mb-3 row">
        <label for="teacher" class="col-sm-2 col-form-label">PROFESOR:</label>
        <div class="col-sm-5">
            <select name="teacher" id="teacher" class="form-select" required>
                <option value="">Selecionar profesor</option>
                @foreach ($teachers as $teacher){
                    <option value="{{ $teacher->id }}">{{ $teacher->name." ".$teacher->lastname }}</option>
                }
                    
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="course" class="col-sm-2 col-form-label">CURSO:</label>
        <div class="col-sm-5">
            <select name="course" id="course" class="form-select" required>
                <option value="">Selecionar curso</option>
                @foreach ($courses as $course){
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                }
                    
                @endforeach
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="n_students" class="col-sm-2 col-form-label">NÚMERO ALUMNOS:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="n_students" id="n_students" value="{{ old('n_students')}}" required>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="seccion" class="col-sm-2 col-form-label">SECCIÓN:</label>
        <div class="col-sm-5">
            <select name="seccion" id="seccion" class="form-select" required>
                <option value="">Selecionar seccion</option>
                
                <option value="1">A</option>
                <option value="2">B</option>
                <option value="3">C</option>                       
                
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="nivel" class="col-sm-2 col-form-label">NIVEL:</label>
        <div class="col-sm-5">
            <select name="nivel" id="nivel" class="form-select" required>
                <option value="">Selecionar nivel</option>                       
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>                       
            
                </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="observation" class="col-sm-2 col-form-label">OBSERVACIÓN:</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="observation" id="observation" value="{{ old('observation')}}">
        </div>
    </div>


    <a href="{{ url('profesores_cursos')}}"  class="btn btn-secondary">Regresar</a>

    <button type="submit" class="btn btn-success"> Guardar</button>
    
</form>
   
@endsection