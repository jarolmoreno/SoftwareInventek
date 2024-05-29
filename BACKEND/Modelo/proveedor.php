<?php

    class Proveedor {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM proveedor ORDER BY  nombre ";
    $res = mysqli_query($this -> conexion,$con);
    // se crea un arreglo para almacenar las consultas 
    $vec =[];
    
    while($row = mysqli_fetch_array($res)){
        $vec[] = $row;
    }

    return $vec;    

}


    // eliminar de bd 
    public function eliminar($id){

        $del = "DELETE FROM proveedor WHERE Nit_idproveedor = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El proveedor ha sido eliminado de la base de datos ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO proveedor (nombre,direccion,celular,email,fo_ciudad,) 
                VALUES ('$params -> nombre', $params -> direccion, $params -> celular, $params -> email, $params -> fo_ciudad)";
        mysqli_query($this -> conexion,$ins);
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El registro del proveedor ha sido exitoso ";
        return $vec;

    }
    

    public function editar ($id, $params){
        $editar = "UPDATE proveedor SET nombre ='$params -> nombre ',direccion = $params-> direccion,  celular = $params-> celular, email = $params-> email, fo_ciudad = $params-> fo_ciudad  
         WHERE Nit_idproveedor =$id";
        mysqli_query($this -> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec = ["mensaje "]= "El producto ha sido editado ";
        return $vec;




    }
        

    


   

    }


?>