<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            label{
                background-color: lightpink;
                width: 100px;
                height: 50px;
            }
        </style>
    </head>
    <body class="antialiased">
    <label for="links" class="col">
            <a href="portada">Inicio |</a> 
            <a href="busqueda">Busqueda por categoria |</a>
    </label>



<?php
        foreach($productos as $producto){
        if ($producto->nombre == $_GET["nombre"]) {
        
        
?>

            
            <h1><?= $producto->nombre?></h1><br>
            <img src="/../practica2/assets/img/<?= $producto->imagen?>" alt="<?= $producto->nombre?>" height="200px" width="200px">
            <p>Descripcion: <?= $producto->descripcion?></p>
            <p>Precio: <?= $producto->precio?> con un iva del <?= $producto->iva?>%</p>
            <p>Stock: <?= $producto->stock?></p>
            
<?php
        }}
?>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </body>
</html>
