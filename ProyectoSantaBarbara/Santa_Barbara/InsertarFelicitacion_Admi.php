<?php

  include_once('db.php');

  $fecha = $_POST['FechaFelicitacion'];
  $nombrePersona = $_POST['NomFelicitacion'];
  $primerApellido = $_POST['Apellido1Felicitacion'];
  $segundoApellido = $_POST['Apellido2Felicitacion'];
  $cedula = $_POST['IdClienteFelicitacion'];
  $telefono = $_POST['TelClienteFelicitacion'];
  $correoElectronico = $_POST['EmailClienteFelicitacion'];
  $destinatario = $_POST['DireccionFelicitacion'];
  $motivo = $_POST['DescripcionFelicitacion'];
  $estado = "En proceso";
  $codigo = alfanumerico();
  $tipo = "Felicitacion Anonima";
  $sitioCreacion = "Vía web";

   // INICIO DE CODIGO NUEVO PARA MULTIPLES ARCHIVOS
 $adjunto = '';
 if(isset($_POST['submit'])){
     // Cuenta la cantidad de archivos subidos
     $totalfiles = count($_FILES['adjunto']['name']);

     // Ciclo para recorrer hasta los n archivos
     for($i=0;$i<$totalfiles;$i++){
         //variables necesarias para las restricciones
         $filename = $_FILES['adjunto']['name'][$i];
         $tipoArchivo = $_FILES['adjunto']['type'][$i];
         $size = $_FILES['adjunto']['size'][$i];

         if($tipoArchivo != 'image/jpg' && $tipoArchivo != 'image/JPG' && $tipoArchivo != 'image/jpg' && $tipoArchivo != 'image/jpeg'
         && $tipoArchivo != 'image/png' && $tipoArchivo != 'image/gif' && $tipoArchivo != 'application/pdf'){
            echo "Error, archivo incompatible";
         }else if ($size > 3*1024*1024){
            echo "Error";
         }else{
             // Subida de cada uno de los archivos en el directorio /archivos
             if(move_uploaded_file($_FILES["adjunto"]["tmp_name"][$i],'archivos/'.$filename)){
                echo 'Archivos agregados correctamente.';
                //se concatena la ruta de cada uno de los archivos y se separa con "-"
                $adjunto .= 'archivos/'.$filename.'-';
                // quedaria asi:  archivos/pdf1-archivos/pdf2
	         }else{
		        echo 'Error al subir el archivo - '.$_FILES['adjunto']['name'][$i].'<br/>';
	         }
         }

     }
 } 
 // FIN DE CODIGO NUEVO PARA MULTIPLES ARCHIVOS

  
  //echo "$fecha, $destinatario, $descripcion, $estado, $codigo, $adjunto, $tipo";

  $conectar = conn();  //tiene que estar en el mismo nombre de la bd


  $sql = "INSERT INTO solicitud (CodAlfanumerico, Tipo, SitioCreacion, Estado, Fecha) 
  VALUES ('$codigo', '$tipo', '$sitioCreacion', '$estado', '$fecha')";
  $resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! - Error: ".mysqli_error($conectar), E_USER_ERROR);
  //echo "$sql";  //aqui conecta con la tabla solicitud




  $sql2 = "INSERT INTO felicitacionnoanonima (Fecha, Nombre, PrimerApellido, SegundoApellido, Cedula, Telefono, CorreoElectronico, Destinatario, Motivo, Estado, ArchivoAdjunto, CodAlfanumerico, Tipo, SitioCreacion) 
  VALUES ('$fecha','$nombrePersona','$primerApellido','$segundoApellido','$cedula','$telefono','$correoElectronico','$destinatario','$motivo','$estado','$adjunto','$codigo','$tipo','$sitioCreacion')";

  $resul = mysqli_query($conectar, $sql2) or trigger_error("Query Failed! - Error: ".mysqli_error($conectar), E_USER_ERROR);
 // echo "$sql2"; //aqui conecta con la tabla felicitacionanonima
 echo '<script language="javascript">alert("Solicitud enviada con exito \nPor favor guarde este codigo para consultar por el estado de su solicitud \nCodigo: '.$codigo.'");</script>';
 alerta();
 function alfanumerico() {
    $strength = 4; 
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $randomString = '';
    for ($i = 0; $i < $strength; $i++) {
        $randomCharacter = $input[mt_rand(0, $input_length - 1)];
        $randomString .= $randomCharacter;
    }
    return $randomString;
}
function alerta(){
  echo '<script type="text/javascript">'
    , 'window.location.href = "home.php";'
    , '</script>'
 ;
 }

  ?>