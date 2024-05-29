<?php

    class usuario {

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function usuario(){
    $con= "SELECT * FROM usuario ORDER BY  id_usuario ";
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

        $del = "DELETE FROM usuario WHERE id_usuario = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El usuario ha sido eliminado de la base de datos  ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO nombre_usuario (usuario,
        ,clave,nombre,email) 
                VALUES ('$params -> nombre_usuario', '$params -> clave', $''$params -> nombre', $params -> '$params -> email', )";
        mysqli_query($this -> conexion,$ins);
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "El usuario fue registrado exitosamente ";
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