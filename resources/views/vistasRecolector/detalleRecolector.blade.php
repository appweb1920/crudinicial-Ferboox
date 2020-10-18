<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Recolector</title>
    <link rel="stylesheet" href="CSS/basic.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style> 

    .margin-Card{
                    margin: 5% 40%;
                }
    @media screen and (max-width: 800px) {
        .margin-Card{
            margin: 10px 20%;
        }

    }
    </style>
</head>
<body>
    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="mr-auto p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 ml-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <div class="margin-Card">
        <div class="card text-center" style="width: 18rem;">
            <form action="guardaPunto" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$recolector->id}}">
                <img src="https://media.giphy.com/media/3o7abAHdYvZdBNnGZq/giphy.gif" class="card-img-top">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nombre<br><input type="text" class = "text-center" size="30" name="nombre" value="{{$recolector->nombre}}"></li>
                    <li class="list-group-item"> Días de Recolección<br><input type="text" class = "text-center" size="30" name="diasRecoleccion" value="{{$recolector->diasRecoleccion}}"></li>
                    <li class="list-group-item"><input type="submit" value="Actualizar"></li>
                </ul>
            </form>
        </div>
    </div>


 


</body>
</html>