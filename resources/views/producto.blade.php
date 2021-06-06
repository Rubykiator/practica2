@extends('layout')

@section('body')

        @foreach($productos as $producto)
        @if ($producto->nombre == $_GET["nombre"]) 
        
        


            
            <h1><?= $producto->nombre?></h1><br>
            <img src="/../practica2/assets/img/<?= $producto->imagen?>" alt="<?= $producto->nombre?>" height="200px" width="200px">
            <p>Descripcion: <?= $producto->descripcion?></p>
            <p>Precio: <?= $producto->precio?>€ con un iva del <?= $producto->iva?>%</p>
            <p>Unidades restantes: <?= $producto->stock?></p>
            <button>Añadir al carrito</button>
            

        
        @endif
        @endforeach

@endsection