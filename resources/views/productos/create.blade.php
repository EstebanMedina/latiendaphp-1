@extends('layouts.principal')
@section('contenido')


    <form class="col s8"
     method="POST" 
     action="{{ route('productos.store') }}"
     enctype="multipart/form-data"
     >
     @csrf
     @if( session('mensajito') )
     <div class="row-8">
      <strong>{{session('mensajito')}}</strong>
     </div>
     @endif
     
        <div class="row">
            <div class="col s8">
                <h1 class="blue-text light-text-darken-2">
                    Nuevo Producto
                </h1>
            </div>
        </div>
      <div class="row">
        <div class="input-field col s8">
          <input  id="nombre" type="text" class="validate"name="nombre">
          <label for="nombre">Nombre del producto</label>
          <strong class="red-text">{{ $errors->first('nombre') }}</strong> 
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="desc" type="text" class="validate"name="desc">
          <label for="desc">Descripcion</label>
          <strong class="red-text">{{ $errors->first('desc') }}</strong> 
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
          <input id="precio" type="number"  class="validate"name="precio">
          <label for="precio">Precio</label>
          <strong class="red-text">{{ $errors->first('precio') }}</strong> 
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-field">
          <select name="marca" id="marca">
            <option value="">Elija su marca</option >
            @foreach($marcas as $marca)
            <option value="{{ $marca->id}}">
              {{ $marca->nombre }}
            </option>
            @endforeach
          </select>
          <label> Elija Marca </label>
          <strong class="red-text">{{ $errors->first('marca') }}</strong> 
        </div>
      </div>
      <div class="row">
        <div class="col s8 input-filed">
          <select name="categoria" id="categoria">
          <option value="">Elija su categoria</option>
            @foreach($categorias as $categoria)
            <option value="{{ $categoria->id}}">
              {{ $categoria->nombre }}
            </option>
            @endforeach
          </select>
          <label> Elija Categoria</label>
          <strong class="red-text">{{ $errors->first('categoria') }}</strong> 
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field ">
      <div class="btn light-blue darken-1">
        <span>Ingrese Imagen...</span>
        <input type="file" name="imagen" multiple>
        
      </div>
     <strong class="red-text">{{ $errors->first('imagen') }}</strong>
      <div class="file-path-wrapper">
        <input class="file-path validate" 
        type="text"
        placeholder="Cargar uno o mas archivos">
      </div>
      </div>
      <div class="row">
      <button class="btn waves-effect waves-light light-blue darken-1" type="submit" name="action">
        Guardar
      </button>
        </div>
    </form>
  @endsection