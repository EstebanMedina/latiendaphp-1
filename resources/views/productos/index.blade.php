@extends('layouts.principal')

@section('contenido')
<div class="row">
<h1>Catalogo de productos</h1>
</div>
@foreach($productos as $producto)
<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="{{asset('img/'.$producto->imagen)}}">
          <span class="card-title">{{$producto->nombre}}</span>
         
        </div>
        <div class="card-content">
          <p>{{$producto->desc}}</p>
          <ul>
            <li>precio: $ {{$producto->precio}}</li>
            <li>marca: {{$producto->marca->nombre}}</li>
            <li>categoria {{$producto->categoria->nombre}}</li>
          </ul>
        </div>
      </div>
    </div>
</div>
@endforeach
@endsection