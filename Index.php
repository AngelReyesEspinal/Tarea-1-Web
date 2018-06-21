<!-- DEPENDENCIES -->
<?php 
    include("componentes.php");
    include("crudJson.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TAREA I</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- RESOURCES -->
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    </head>
    <body>
        <!-- HEADER -->
        <?php include("header.php"); ?>

        <!--MAIN-->
        <main class="container"> 
            <!-- FORM -->
            <form action="" method="post" class="marginArriba">
                <div class="row">
                    <?php 
                        input("la Cédula", "cedula", "", $valores["cedula"]);
                        input("el Nombre", "nombre", "", $valores["nombre"]);
                        input("el Apellido", "apellido", "", $valores["apellido"]);
                        input("el Comportamiento", "comportamiento", "textarea", $valores["comportamiento"]);
                    ?>

                    <!-- submit -->
                    <button class='btn-large waves-effect green darken-4 right margenIzquierdo' type='submit'>
                        <i class='material-icons'>check</i>
                    </button>
                    <a href='index.php' class='waves-effect blue darken-4 btn-large right'><i class='material-icons'>autorenew</i></a>
                </div>
            </form>

            <!-- TABLE -->
            <table class="striped centered">
                <thead>
                    <tr>
                        <th>Cédula</th>
                        <th>Nombre:</th>
                        <th>Apellido:</th>
                        <th>Acciones:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php mostrarUsuarios(); ?>
                </tbody>
            </table>
        </main>

        <!-- FOOTER -->
        <?php include("footer.php"); ?>

        <!-- cdns -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </body>
</html>