@extends('layouts.plantilla')

@section('title','cursos edit')

@section('content')
    <h1><b>En esta página podras editar un curso</b></h1><br>
    <form action="{{route('cursos.update', $curso)}}" method="post"><br>

        @csrf

        @method('put')

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}"><br>
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea><br>
        </label>
        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
            <br>
        </label>
        @error('categoria')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
@endsection
