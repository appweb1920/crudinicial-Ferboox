<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    <link rel="stylesheet" href="/CSS/basic.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!--- Header ------->
    <div class="d-flex p-2 bg-success">
        <div class="mr-auto p-2 ml-3 text-white"><a href="/" style="text-decoration:none;color:white;">Inicio</a></div>
        <div class="p-2 ml-2 text-white"><a href="/puntosReciclaje" style="text-decoration:none;color:white;">Puntos de Reciclaje</a></div>
        <div class="p-2 ml-2 text-white"><a href="/recolectores" style="text-decoration:none;color:white;">Recolectores</a></div>
    </div>

    <div class = "row zero">
            <div class="col-sm-2 mt-4 bg-white containerReg shadow-sm">
                        <h4 class="p-2">Puntos</h4>
                        <form class="m-3" action="darAltaPunto" method="POST">
                            @csrf
                            <input type="hidden" name="id_recolector" value="{{$recolector->id}}">
                            <select name="id_punto">
                                @if(!is_null($puntos))
                                    @foreach($puntos as $p)
                                        <option value="{{$p->id}}">{{$p->direccion}}</option> 
                                    @endforeach
                                @endif
                            </select>
                                
                            <input class="mt-2" type="submit" value="Dar de Alta">      
                        </form>
            </div>
            <div class="col-sm-9 table-responsive-sm bg-white containerTab" id="ovr">
                    <!--Tabla de puntos-->
                    <table class="table table-striped ovr">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th scope="col">Dirección</th>
                            </tr>
                        </thead>
                        <tbody>
                        <!--Despliega todos los datos de la tabla puntos-->
                        @foreach($recolector->getPuntos() as $m)    
                            <tr class="text-center">
                                <th scope="row">
                                    {{$m->direccion}}
                                </th>
                            </tr>
                        @endforeach         
                        </tbody>
                    </table>
                </div>

                

    </div>

</body>
</html>