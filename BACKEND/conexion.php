</php
    $servidor ="localhost";
    $usuario = "root";
    $clave = "";
    $bd = "inventario2";


    $conexion = mysqli_connect( $servidor, $usuario, $clave) or die ("no se encontro el servidor ");
     
    mysqli_select_db ($conexion,$bd) or die ("no se encontro la base de datos ");
    mysqli_set_charset($conexion, "utf 8");
    echo: "se conecto correctamente ":
    
?>