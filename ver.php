<!-- DEPENDENCIES -->
<?php 
    include("crudJson.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tarea 1</title>

        <!-- RESOURCES -->
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include("header.php"); ?>
        
        <!-- MAIN -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col s12 marginArriba">
                        <div class="card blue darken-4">
                            <div class="card-content white-text">
                                <span class="tituloCarta negrita">Detalle persona:</span>
                                <div>
                                    <span class="subtitulos negrita">Cédula: </span> 
                                        <br/>
                                        <span class="respuestas negrita"> - <?php echo $valores["cedula"]; ?> </span>
                                    <br/>
                                    <span class="subtitulos negrita">Nombre: 
                                        <br/>
                                        <span class="respuestas negrita"> - <?php echo $valores["nombre"]; ?> </span>
                                    <br/>
                                    <span class="subtitulos negrita">Apellidos: </span>
                                        <br/>
                                        <span class="respuestas negrita"> - <?php echo $valores["apellido"]; ?> </span>
                                    <br/>
                                    <span class="subtitulos negrita">Comportamiento: </span>
                                        <br/>
                                        <span class="respuestas negrita"> - <?php echo $valores["comportamiento"]; ?> </span>    
                                </div>
                            </div>
                                <div class="card-action">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </main>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>
    </body>
</html>

<!-- <h6>soy <?php echo $valores["cedula"]; ?> </h6>
               <h6>soy</h6>
               <h6>soy <?php echo $valores["apellido"]; ?> </h6>
               <h6>soy <?php echo $valores["comportamiento"]; ?> </h6> -->