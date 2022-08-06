@extends('layouts.plantilla')

@section('title','Curso' . $curso->name)

@section('content')
    <h1><b>Bienvenido al curso: </b>{{$curso->name}}</h1><br>
    <a href="{{route('cursos.index')}}">Volver a Cursos</a><br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <p><strong>Descripción: </strong>{{$curso->descripcion}}</p>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p><br>

    <form action="{{route('cursos.destroy',$curso)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
