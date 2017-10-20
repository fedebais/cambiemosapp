<?php
 include "db/db.php";
 if(isset($_POST['insert']))
 {
 $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
    $genero=$_POST['genero'];
      $distrito=$_POST['distrito'];
        $tipo=$_POST['tipo'];
 $dni=$_POST['dni'];
        $email=$_POST['email'];
               $telefono=$_POST['telefono'];
                      $fiscaliza=$_POST['fiscaliza'];
 $direccion=$_POST['direccion'];
        $comentarios=$_POST['comentarios'];
 $q=mysqli_query($con,"INSERT INTO `marcadores` (`colaborador`,`tipo`,`nombre`,`apellido`,`genero`,`dni`,`distrito`,`direccion`,`celular`,`email` ,`descripcion` ,`fiscaliza`) VALUES ('app','$tipo','$nombre','$apellido','$genero','$dni','$distrito','$direccion','$telefono','$email','$comentarios','$fiscaliza')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>