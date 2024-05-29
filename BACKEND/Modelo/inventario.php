<?php

    class Inventario {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM inventario ORDER BY  id_insumo ";
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

        $del = "DELETE FROM inventario WHERE id_areainv = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El insumo ha sido eliminado de la base de datos  ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO inventario (nombre_Area,
        ,nombre_insumo,cantidad,total_stock,fo_producto,fo_usuario) 
                VALUES ('$params -> nombre_Area', $params -> id_insumo, $'$params -> nombre_insumo', $params -> cantidad, $params -> total_stock,'$params -> fo_producto' )";
        mysqli_query($this -> conexion,$ins);
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El insumo fue ingresado al inventario exitosamente ";
        return $vec;

    }
    

    public function editar ($id, $params){
        $editar = "UPDATE inventario SET nombre_Area ='$params -> nombre_Area ', id_insumo = $params->  id_insumo,nombre_insumo ='$params -> nombre_insumo ', cantidad = $params->  cantidad , total_stock = $params->  total_stock, fo_producto = $params->  fo_producto,   
         WHERE id_areainv =$id";
        mysqli_query($this -> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec = ["mensaje "]= "El producto ha sido editado ";
        return $vec;




    }
        

    


   

    }


?>