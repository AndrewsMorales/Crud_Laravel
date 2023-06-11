@extends('adminlte::page')

@section('title', 'Crud Laravel')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')
  <form action="/articulos/{{$articulo->id}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="codigo" class="form-label">Codigo</label>
      <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripcion</label>
      <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" tabindex="3" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="any" class="form-control" id="precio" name="precio" tabindex="4" value="{{$articulo->precio}}">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Editar</button>
  </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop