@extends('layout')

@section('body')
<h1>Productos Destacados</h1>

<?php
        
        foreach($productos as $producto){
        if ($producto->destacado) {
?>

            <li>
            <img src="/../practica2/assets/img/<?= $producto->imagen?>" alt="<?= $producto->nombre?>" height="100px" width="100px"><br>
            <a href="http://localhost/practica2/public/producto?nombre=<?= $producto->nombre?>"><?= $producto->nombre?></a>
            <br>
            <small><?= $producto->descripcion?></small><br><br><br>
            </li>
<?php
        }}
?>
 
@endsection
