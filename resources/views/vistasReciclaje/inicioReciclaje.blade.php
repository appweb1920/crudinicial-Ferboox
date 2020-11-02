<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos de Reciclaje</title>
    <link rel="stylesheet" href="CSS/basic.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style> 
    
    .imageTav{
            display: inline !important;
        }
        @media screen and (max-width: 800px) {

        .imageTav{
            display: none !important;
        }
        
}
    </style>
</head>
<body>
  

    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="mr-auto p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <!--- Contenido ------->
    <div>
        <h1 class=" text-center text-blue p-4">Puntos de Reciclaje</h1>
    </div>    

    <!---Autenticación de usuario--->
    @if($usuario->tipo == 1)
        <div class = "row zero">
                <div class="col-sm-4 bg-white containerReg shadow-sm">
                            <h4 class="p-2">Registrate</h4>
                            <form class="m-3" action="/registroPunto" method="POST">
                                @csrf
                                <div class="mb-2"><span>Horario Apertura </span><input type="time" name="horaApertura"></div>
                                <div class="mb-2"><span> Horario Cierre </span><input type="time" name="horaSalida"></div>
                                <div class="mb-2"><span> Dirección </span><input type="text" name="direccion"></div>
                                <div class="mb-2"><span> Tipo de Basura </span><input type="text" name="tipoBasura"></div>
                                <input class="sumb" type="submit">
                            </form>
                </div>
        </div>
    @endif

        <div class="row zero">
            <div class="col-sm-9 table-responsive-sm bg-white containerTab" id="ovr">
                <!--Tabla de puntos-->
                <table class="table table-striped ovr">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Tipo Basura</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Hora Apertura</th>
                            <th scope="col">Hora Cierre</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!--Despliega todos los datos de la tabla puntos-->
                    @if(!is_null($puntos))   
                        @foreach($puntos as $p)  
                        <tr class="text-center">
                            <th scope="row">
                                <a href="/detalles/{{$p->id}}">{{$p->tipoBasura}}</a>
                            </th>
                            <td>{{$p->direccion}}</td>
                            <td>{{$p->horaApertura}}</td>
                            <td>{{$p->horaSalida}}</td>
                            <td>
                                <a href="/actualizaPunto/{{$p->id}}">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach         
                    @endif
                    </tbody>
                </table>
             </div>
            <div class="col-sm-2 imageTav">
                <img src="https://media1.giphy.com/media/etKPlfE85HW8udMMDl/giphy.gif" height="250">
            </div>
        </div>
        
</body>
</html>