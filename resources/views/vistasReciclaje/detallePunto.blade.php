<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Punto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 ml-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <div class="row m-4 border border-light" style="padding-left: 40%;">
        <form action="guardaPunto" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$punto->id}}">
            <div class="col text-center mb-2">
                <input type="text" class = "text-center" size="30" name="tipoBasura" value="{{$punto->tipoBasura}}">
            </div>  
            <div class="col text-center mb-2">
                <input type="text" class = "text-center" size="30" name="direccion" value="{{$punto->direccion}}">
            </div>  
            <div class="col text-center mb-2">
                <input type="time" class = "text-center" size="30" name="horaApertura" value="{{$punto->horaApertura}}">
            </div>  
            <div class="col text-center mb-2">
                <input type="time" class = "text-center" size="30" name="horaSalida" value="{{$punto->horaSalida}}">
            </div>  
            <div class="col text-center mb-2">
                <input type="submit" value="Actualizar">
            </div>  
        </form>
    </div>


</body>
</html>