
@extends('layout')

@section('body')
    <h2>Productos de la categoria <?=$_GET["categoria_id"]?></h2>


        @foreach($productos as $producto)
        @if ($producto->categoria_id == $_GET["categoria_id"]) 
        
      

            <li>
            <img src="/../practica2/assets/img/<?= $producto->imagen?>" alt="<?= $producto->nombre?>" height="100px" width="100px"><br>
            <a href="http://localhost/practica2/public/producto?nombre=<?= $producto->nombre?>"><?= $producto->nombre?></a><br>
            <small><?= $producto->descripcion?></small><br><br>
            </li>


        @endif
        @endforeach

@endsection
