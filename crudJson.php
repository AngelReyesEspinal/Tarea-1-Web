<?php

    $valores = array("cedula" => "", "nombre" => "", "apellido" => "", "comportamiento" => "");

    if($_POST){
        if($_POST['cedula'] && $_POST['nombre'] && $_POST['apellido'] && $_POST['comportamiento']){
            $cedula = $_POST['cedula'];

            if(!is_dir('bd')){
                mkdir('bd');
            }
            
            $json = json_encode($_POST);
            file_put_contents("bd/$cedula.json", $json);
        } else {
            echo "<script> alert('¡Hay campos vacios!'); </script>"; 
        }
        
    } else {
        if(isset($_GET['editar'])){
            $id = $_GET['editar'];
            $path = "bd/$id.json"; 
            
            if(is_file($path)){
                $valores = json_decode(file_get_contents($path), 1);
            }
        }
        
        if(isset($_GET['eliminar'])){
            $id = $_GET['eliminar'];
            $path = "bd/$id.json"; 
            
            if(is_file($path)){
                unlink($path);
            }
        }
    }
    
    function mostrarUsuarios(){
        if(is_dir('bd')){
            $files = scandir('bd');
        }

        foreach($files as $file){
            $path = "bd/$file";

            if(is_file($path)){

                $persona = json_decode(file_get_contents($path), 1);
                
                echo 
                " 
                    <tr>
                        <td> {$persona['cedula']} </td>
                        <td> {$persona['nombre']} </td>
                        <td> {$persona['apellido']} </td>

                        <td>
                            <a href='index.php?editar={$persona['cedula']}' class='waves-effect yellow darken-4 btn-large'><i class='material-icons'>mode_edit</i></a>
                            <a href='ver.php?editar={$persona['cedula']}' target='_blank' class='waves-effect blue darken-4 btn-large'><i class='material-icons'>remove_red_eye</i></a>
                            <a href='index.php?eliminar={$persona['cedula']}' onclick=\"return confirm('¿Estás seguro?')\" class='waves-effect red darken-4 btn-large'><i class='material-icons'>delete_forever</i></a>
                        </td>
                    </tr>
                ";
            }
        }
    }

?>