<?php

    class usuario {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM usuario ORDER BY  nombre ";
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

        $del= "DELETE FROM usuario WHERE id_usuario = $id";
        mysqli_query($this->conexion,$del);
        $vec=[];
        $vec["resultado"]= "OK";
        $vec["mensaje "]= "El usuario ha sido eliminado de la base de datos";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO usuario (nombre_usuario,clave,nombre,email)  
        VALUES ('$params -> nombre_usuario','$params -> clave','$params -> nombre','$params -> email')";
               
        mysqli_query($this->conexion,$ins);
        $vec  ["resultado"]= "OK";
        $vec  ["mensaje "]= "El usuario fue registrado exitosamente ";
        return $vec;

    }
    

    public function editar ($id, $params){
        $editar = "UPDATE usuario SET nombre_usuario ='$params -> nombre_usuario ' WHERE id_usuario = $id";
        mysqli_query($this-> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec  ["mensaje "]= "El usuario ha sido editado ";
        return $vec;




    }
        

    


   

    }


?>