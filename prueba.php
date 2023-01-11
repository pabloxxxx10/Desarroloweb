<?php
//Recibir informacion del formulario HTML (Metodo POST)
    include 'conexion.php';
    $nombre =$_POST['nombre-usuario'];
    $password =$_POST['password-usuario'];
     
    $resultado = mysqli_query($conexion,$consulta="SELECT*FROM usuario where Usuario='$nombre' and password='$password'");
   
    // $filas = msqli_num_rows ($resultado);
    
    // if ($filas > 0){

    //     echo '<script> alert ("Bienvenido al Sistema");</script>';

    // }else{
        
    //     echo '<script> alert ("Error al Entrar al sistema")window.history.go(-1);</script>';

    // }
    $Filas=mysqli_num_rows($resultado);

    if($Filas){
        echo '<script> alert ("Bienvenido al Sistema");</script>';
    }else{

        echo '<script> alert ("Error al Entrar al sistema");
        window.history.go(-1);
        </script>';
    }
    
  
    mysqli_free_result($resultado);
    mysqli_close($conexion );
    ?>
    <!-- mysqli_close($conexion);
    mysqli_free_result($resultado);
?>
     -->

