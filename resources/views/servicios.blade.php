@extends('layout')

@section('paginaActual')
    <h2>SERVICIOS!!!</h2> 
    <h4>aqui se describiran todos los servicios</h4>
@endsection

@section('contenidoPrincipal')
     
   <h2>Lista de servicio</h2>
  
   @foreach ($servicios as $servicio)
   <h3>{{$servicio->title}}</h3>
   @endforeach






@endsection

@section('framework')
     <img src="" alt="">
     <h1 class='flutter'></h1>
@endsection