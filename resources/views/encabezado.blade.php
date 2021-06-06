@php

use App\Models\BusquedaMod;

$categorias = BusquedaMod::get();
@endphp

<style>
    label{
       background-color: lightpink;
       width: 100px;
       height: 50px;
    }
</style>

<label for="links" class="col">
            <a href="portada">Inicio |</a> 
            

        @foreach($categorias as $categoria)
        
            <a href="http://localhost/practica2/public/resbusqueda?categoria_id=<?=$categoria->id?>"><?= $categoria->nombre?> |</a>

        @endforeach

</label>