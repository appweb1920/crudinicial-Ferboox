<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos de Reciclaje</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 ml-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <!--- Contenido ------->
    <div>
        <h1 class=" text-center text-blue">Puntos de Reciclaje</h1>
    </div>    

    <form class="m-3" action="/registroPunto" method="POST">
        @csrf
        <span>Horario Apertura </span><input type="time" name="horaApertura">
        <span> Horario Cierre </span><input type="time" name="horaSalida">
        <span> Dirección </span><input type="text" name="direccion">
        <span> Tipo de Basura </span><input type="text" name="tipoBasura">
        <input type="submit">
    </form>

    <div class="row mr-3 ml-3">
        <div class="col bg-primary text-center text-white border-right">
            Tipo Basura
        </div>
        <div class="col bg-primary text-center text-white border-right">
            Dirección
        </div>
        <div class="col bg-primary text-center text-white">
            Horario Apertura
        </div>
        <div class="col bg-primary text-center text-white">
            Horario Cierre
        </div>
        <div class="col bg-primary text-center text-white">
            Editar
        </div>
    </div>

    @if(!is_null($puntos))   
                @foreach($puntos as $p)  
                <div class="row mr-3 ml-3 bg-light border-bottom"> 
                    <div class="col text-center">
                       {{$p->tipoBasura}}
                    </div>  
                    <div class="col text-center">
                        {{$p->direccion}}
                    </div>  
                    <div class="col text-center">
                        {{$p->horaApertura}}
                    </div>  
                    <div class="col text-center">
                        {{$p->horaSalida}}
                    </div>  
                    <div class="col text-center">
                        <a href="/actualizaPunto/{{$p->id}}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </a>
                    </div>  
                </div>
                @endforeach         
        @endif




</body>
</html>