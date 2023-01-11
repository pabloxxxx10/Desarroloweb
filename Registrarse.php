<?php

$conexion = mysqli_connect("localhost", "root", "", "prueba1");

    $nombre =$_POST['nombre-usuario'];
    $password =$_POST['password-usuario'];
     

$insertar = "Insert into Usuario(usuario,password) values ('$nombre','$password')";


$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo'<script>
        alert("Se ha insertado al regristro exitosamente");
        window.history.go(-2);
    </script>';     
}
else{
    echo "Se ha producido un error";
}
mysqli_close($conexion);

?>