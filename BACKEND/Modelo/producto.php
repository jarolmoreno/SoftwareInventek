<?php

    class Producto{

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM producto ORDER BY  nombre ";
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
        echo "Modelo producto funcionando";
        $del = "DELETE FROM producto WHERE id_producto = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec ["resultado"] = "OK";
        $vec ["mensaje "]= "El producto ha sido eliminado ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO producto(nombre,cantidad,fo_proveedores) 
                VALUES ('$params -> nombre', $params -> cantidad, $params -> fo_proveedores)";
        mysqli_query($this -> conexion,$ins);
        $vec  ["resultado"]= "OK";
        $vec  ["mensaje "]= "El producto ha sido Guardado ";
        return $vec;

    }

    public function editar ($id, $params){
        $editar = "UPDATE producto SET nombre ='$params -> nombre',fo_proveedores = $params-> fo_proveedores WHERE id_producto =$id";
        mysqli_query($this -> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec["mensaje "]= "El producto ha sido editado ";
        return $vec;




    }
        

    


   

    }


?>