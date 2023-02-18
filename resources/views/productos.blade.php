@extends('layout')

@section('paginaActual')
    Pagina de PRODUCTOS.
    <h3>aqui se describiran todos los productos</h3>
@endsection

@section('contenidoPrincipal')
     <p>ESTA ES LA PARTE PRINCIPAL DE LA PAGINA DE PRODUCTOS</p>
     <h4>lista de productos</h4>

     @foreach ($productos as $producto)
         
          <div class="card" style="width: 18rem;">
               <img src="..." class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title">{{$producto->Nombre}}</h5>
                 <p class="card-text">{{$producto->Descripcion}}</p>
                 <a href="#" class="btn btn-primary">Go somewhere</a>
               </div>
             </div>
      @endforeach


      @foreach ($productos as $producto)

      <h3></h3>
         
      @endforeach
@endsection

@section('numeroPagina')
     <h4>pagina 1 productos</h4>
@endsection

@section('framework')
     <h4>REACT NATIVE</h4>
@endsection