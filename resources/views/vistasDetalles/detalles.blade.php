<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 ml-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <div class="row mr-3 ml-3">
        <div class="col bg-primary text-center text-white border-right">
            Recolectores
        </div>
    </div>

        <form class="m-3" action="darAlta" method="POST">
            @csrf
            <input type="hidden" name="id_punto" value="{{$punto->id}}">
            <select name="id_recolector">
                @if(!is_null($recolectores))
                    @foreach($recolectores as $r)
                        <option value="{{$r->id}}">{{$r->nombre}}</option> 
                    @endforeach
                @endif
            </select>    
            <input type="submit" value="Dar de Alta">      
        </form>

        @foreach($punto->getRecolectores() as $m)    
            <div class="row  mr-3 ml-3">   
                <div class="col bg-light text-center">
                    {{$m->nombre}}
                </div>
            </div>
        @endforeach


    


</body>
</html>