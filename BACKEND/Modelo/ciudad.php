<?php

    class ciudad {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function ciudad(){
    $con= "SELECT * FROM ciudad ORDER BY  id_ciudad ";
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

        $del = "DELETE FROM ciudad WHERE id_usuario = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "la ciudd  ha sido eliminada de la base de datos  ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO nombre_ciudad (nombre_ciudad) 
                VALUES ('$params -> nombre_usuario' )";
        mysqli_query($this -> conexion,$ins);
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "la ciudad fue registrada exitosamente ";
        return $vec;

    }
    

    public function editar ($id, $params){
        $editar = "UPDATE ciudad ->  id_ciudad,nombre_ciudad ='$params -> nombre_ciudad '
         WHERE id_areainv =$id";
        mysqli_query($this -> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec = ["mensaje "]= "La ciudad ha sido editada ";
        return $vec;




    }
        


    
    


   

    }


?>