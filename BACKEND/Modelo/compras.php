<?php

    class Compras{

    //atributo    
    public $conexion;

    //metodo constructor
    public function __construct($conexion){

        $this ->conexion = $conexion;
    }

    //consultar de la bd 
   public function consulta(){
    $con= "SELECT * FROM compras ORDER BY  nombre ";
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

        $del = "DELETE FROM compras WHERE id_compras = $id";
        mysqli_query($this -> conexion,$del);
        $vec = [];
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "La orden de compra ha sido  eliminada ";
        return $vec;
    }

    public function insertar ($params){

        $ins = "INSERT INTO compras (numero_factura,fecha,fo_insumo,cantidad,subtotal,iva,total,fo_usuario, fo_proveedorinv) 
                VALUES ('$params -> numero_factura', $params -> fecha, $params -> fo_insumo, $params -> cantidad, $params -> subtotal ,$params -> iva, $params -> total,$params -> fo_usuario, $params -> fo_proveedorinv,)";
        mysqli_query($this -> conexion,$ins);
        $vec = ["resultado"]= "OK";
        $vec = ["mensaje "]= "La orden de compra ha sido generada  ";
        return $vec;

    }

    public function editar ($id, $params){
        $editar = "UPDATE compra SET numero_factura ='$params -> numero_factura',fecha = $params->fecha,  fo_insumo = $params-> fo_insumo, cantidad = $params-> cantidad, subtotal = $params-> subtotal,  iva = $params-> iva, 
        total = $params-> total, fo_usuario = $params-> fo_usuario,fo_proveedorinv = 
        $params->fo_proveedorinv,
         WHERE id_compras =$id";
        mysqli_query($this -> conexion,$editar);
        $vec =[];
        $vec["resultado"] ="OK";
        $vec = ["mensaje "]= "El producto ha sido editado ";
        return $vec;




    }
        

    


   

    }


?>