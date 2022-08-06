@extends('layouts.plantilla')

@section('title','cursos')

@section('content')
    <h1><b>Bienvenido a la página principal de cursos</b></h1><br>
    <a href="{{route('cursos.create')}}">Crear Curso</a>
    <ul>
       @foreach ($cursos as $curso)
           <li>
               <a href="{{route('cursos.show', $curso)}}">{{$curso->name}}</a>
           </li>
       @endforeach
    </ul>

    {{$cursos->links()}}

@endsection
