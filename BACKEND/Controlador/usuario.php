<?php

//accesos a los servicios en angular 

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type. Accept");

    // llamado a la conexion de la bases de datos 

    require_once ("../conexion.php");
    //llamado al modelo usuarios 
    require_once ("../Modelo/usuario.php");

    $control = $_GET['control'];

    $prod = new Usuario( $conexion );

    switch ($control) {

        case 'consulta':
          $vec= $prod -> consulta() ;
        break;
        case 'insertar':
             $json = file_get_contents("php://input");
             $params = json_decode($json);
             $vec = $prod -> insertar($params);
        break;
        case 'eliminar':
            $id = $_GET("id");
            $vec = $prod-> eliminar ($id);

        break;

        case 'editar':
            $json = file_get_contents("php://input");
            $params = json_decode($json);
            $id =$_GET('id');
            $vec = $prod-> editar ($id, $params);

            break;

    }

    $datosj = json_encode($vec);
    echo $datosj;
    header('Content-Type: application/json');


?>;