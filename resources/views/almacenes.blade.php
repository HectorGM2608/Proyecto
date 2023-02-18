@extends('layout')

@section('paginaActual')
    <h2>Articulos!!!</h2> 
    <h4>aqui se describiran todos los articulos</h4>
@endsection

@section('contenidoPrincipal')
     
   <h2>Lista de servicio</h2>
  
   

   @foreach ($almacenes as $almacen)
         
          <div class="card" style="width: 18rem;">
               <img src="..." class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$almacen->Nombre}}</h5>
                 <p class="card-text">{{$almacen->Descripcion}}</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
             </div>
      @endforeach






@endsection

@section('framework')
     <img src="" alt="">
     <h1 class='flutter'></h1>
@endsection