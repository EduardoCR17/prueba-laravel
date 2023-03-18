@extends('layouts.app')

@section('title', 'PROFESOR |ESCUELA')

@section('content') 

<h2>{{ $msg }}</h2>
<a href="{{ url('profesores_cursos')}}" class="btn btn-secondary">Regresar</a>
@endsection

