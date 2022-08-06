@extends('layouts.plantilla')

@section('title','cursos create')

@section('content')
    <h1><b>En esta página podras crear un curso</b></h1>
    <form action="{{route('cursos.store')}}" method="post">

        @csrf

        <label>
            Nombre:<br>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            Descripcion:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <label>
            Categoria:<br>
            <input type="text" name="categoria" value="{{old('categoria')}}">
            <br>
        </label>
        @error('categoria')
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
@endsection
