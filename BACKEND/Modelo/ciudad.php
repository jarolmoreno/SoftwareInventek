<?php

    class ciudad {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM ciudad ORDER BY  idciudad ";
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

        $del = "DELETE FROM ciudad WHERE idciudad = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec  ["resultado"]= "OK";
        $vec  ["mensaje "]= "El insumo ha sido eliminado de la base de datos  ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO ciudad (idciudad,nombre_ciudad) 
                VALUES ('$params -> idciudad', $params -> nombre_ciudad)";
        mysqli_query($this -> conexion,$ins);
        $vec  ["resultado"]= "OK";
        $vec  ["mensaje "]= "El registro de la ciudad ha sido exitoso ";
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