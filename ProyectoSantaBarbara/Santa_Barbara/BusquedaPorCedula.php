<!DOCTYPE html>
<html lang="es">
 
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel ="stylesheet" href="../Santa_Barbara/css/styleBusqueda.css">
    </head>
        <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method ="post"  enctype="multipart/form-data">
          <div class="container">
            <h2>Búsqueda de solicitudes por número de cédula</h2>
            <label for="BusquedaCedula">Número de cédula</label>
            <input class="controls" type="number" placeholder="Ej: 201230123" name="BusquedaCedula" id="BusquedaCedula">
              <div class="botones">
                <button type="submit" name="enviar" id="bnts" value="Enviar">Buscar</button>
              </div>
          </div>

          <?php
           if(isset($_POST['enviar'])){
            ?>
           <!--TABLA DE DENUNCIAS-->
           
           <h2>Denuncias realizadas</h2>
                <table class ="table-fill"> 
                  <thead>
                    <tr>
                      <th class = "table-left">Código alfanumérico</th>
                      <th class = "table-left">Tipo</th>
                      <th class = "table-left">Sitio Creación</th>
                      <th class = "table-left">Fecha</th>
                      <th class = "table-left">Nombre</th>
                      <th class = "table-left">Primer Apellido</th>
                      <th class = "table-left">Segundo Apellido</th>
                      <th class = "table-left">Cédula</th>
                      <th class = "table-left">Teléfono</th>
                      <th class = "table-left">Correo Electrónico</th>
                      <th class = "table-left">Dirección Fisica</th>
                      <th class = "table-left">Descripción</th>
                      <th class = "table-left">Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                          include_once('db.php');
                          $busqueda = $_POST['BusquedaCedula'];
                          if(empty($_POST['BusquedaCedula'])){
                            echo "<script language='JavaScript'>
                                    alert('Por favor ingrese el número de cédula');
                                    location.assign('BusquedaPorCedula.php');
                                    </script>
                                    ";
                          }else{
                            
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM denuncia WHERE Cedula = '$busqueda'");  
                        while($row = $consulta->fetch_array()){
                      ?>
                          <tr>
                            <td><?php echo $row['CodAlfanumerico']?> </td>
                            <td><?php echo $row['Tipo']?> </td>
                            <td><?php echo $row['SitioCreacion']?> </td>
                            <td><?php echo $row['Fecha']?> </td>
                            <td><?php echo $row['Nombre']?> </td>
                            <td><?php echo $row['PrimerApellido']?> </td>
                            <td><?php echo $row['SegundoApellido']?> </td>
                            <td><?php echo $row['Cedula']?> </td>
                            <td><?php echo $row['Telefono']?> </td>
                            <td><?php echo $row['CorreoElectronico']?> </td>
                            <td><?php echo $row['DireccionFisica']?> </td>
                            <td><?php echo $row['Descripcion']?> </td>
                            <td><?php echo $row['Estado']?> </td>
                          </tr>
                        <?php
                      }
                       }
                        
                          ?>
                        </tbody>
                      </table>
                      <br></br>
                        <br></br>

                      <!--TABLA DE QUEJA NO ANONIMA-->
                    <h2>Quejas no anónimas realizadas</h2>
                      <table class ="table-fill"> 
                        <thead>
                        <tr>
                          <th class = "table-left">Fecha</th>
                          <th class = "table-left">Nombre</th>
                          <th class = "table-left">Primer Apellido</th>
                          <th class = "table-left">Segundo Apellido</th>
                          <th class = "table-left">Cédula</th>
                          <th class = "table-left">Teléfono</th>
                          <th class = "table-left">Correo Electrónico</th>
                          <th class = "table-left">Dirección Fisica</th>
                          <th class = "table-left">Descripción</th>
                          <th class = "table-left">Estado</th>
                          <th class = "table-left">Código alfanumérico</th>
                          <th class = "table-left">Tipo</th>           
                          <th class = "table-left">Sitio de Creacion</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                        
                        
                       
                          include_once('db.php');
                          $busqueda = $_POST['BusquedaCedula'];
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM quejanoanonima WHERE Cedula = '$busqueda'");  
                                           
                  
                        while($row = $consulta->fetch_array()){
                          ?>
                              <tr>
                                <td><?php echo $row['Fecha']?> </td>
                                <td><?php echo $row['Nombre']?> </td>
                                <td><?php echo $row['PrimerApellido']?> </td>
                                <td><?php echo $row['SegundoApellido']?> </td>
                                <td><?php echo $row['Cedula']?> </td>
                                <td><?php echo $row['Telefono']?> </td>
                                <td><?php echo $row['CorreoElectronico']?> </td>
                                <td><?php echo $row['DireccionFisica']?> </td>
                                <td><?php echo $row['Estado']?> </td>
                                <td><?php echo $row['CodAlfanumerico']?> </td>
                                <td><?php echo $row['Tipo']?> </td>
                                <td><?php echo $row['SitioCreacion']?> </td>
                        </tr>
                          <?php
                      }
                        
                          ?>
                        </tbody>
                      </table>
                      <br></br>
                        <br></br>
                      <!--TABLA DE Recomendaciones NO ANONIMA-->
                    <h2>Recomendaciones no anónimas realizadas</h2>
                      <table class ="table-fill"> 
                        <thead>
                        <tr>
                          <th class = "table-left">Fecha</th>
                          <th class = "table-left">Nombre</th>
                          <th class = "table-left">Primer Apellido</th>
                          <th class = "table-left">Segundo Apellido</th>
                          <th class = "table-left">Cédula</th>
                          <th class = "table-left">Teléfono</th>
                          <th class = "table-left">Correo Electrónico</th>
                          <th class = "table-left">Destinatario</th>
                          <th class = "table-left">Motivo</th>
                          <th class = "table-left">Estado</th>
                          <th class = "table-left">Archivo Adjunto</th>
                          <th class = "table-left">Código alfanumérico</th>  
                          <th class = "table-left">Tipo</th>          
                          <th class = "table-left">Sitio de Creacion</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                        
                        
                        
                          include_once('db.php');
                          $busqueda = $_POST['BusquedaCedula'];
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM recomendacionnoanonima WHERE Cedula = '$busqueda'");  
                                           
                  
                        while($row = $consulta->fetch_array()){
                          ?>
                              <tr>
                                <td><?php echo $row['Fecha']?> </td>
                                <td><?php echo $row['Nombre']?> </td>
                                <td><?php echo $row['PrimerApellido']?> </td>
                                <td><?php echo $row['SegundoApellido']?> </td>
                                <td><?php echo $row['Cedula']?> </td>
                                <td><?php echo $row['Telefono']?> </td>
                                <td><?php echo $row['CorreoElectronico']?> </td>
                                <td><?php echo $row['Destinatario']?> </td>
                                <td><?php echo $row['Motivo']?> </td>
                                <td><?php echo $row['Estado']?> </td>
                                <td><?php echo $row['ArchivoAdjunto']?> </td>
                                <td><?php echo $row['CodAlfanumerico']?> </td>
                                <td><?php echo $row['Tipo']?> </td>
                                <td><?php echo $row['SitioCreacion']?> </td>
                        </tr>
                          <?php
                      }
                        
                          ?>
                        </tbody>
                      </table>
                     <br></br>
                     <br></br>
                      <!--TABLA DE Felicitacion NO ANONIMA-->
                    <h2>Felicitaciones no anónimas realizadas</h2>
                      <table class ="table-fill"> 
                        <thead>
                        <tr>
                          <th class = "table-left">Fecha</th>
                          <th class = "table-left">Nombre</th>
                          <th class = "table-left">Primer Apellido</th>
                          <th class = "table-left">Segundo Apellido</th>
                          <th class = "table-left">Cédula</th>
                          <th class = "table-left">Teléfono</th>
                          <th class = "table-left">Correo Electrónico</th>
                          <th class = "table-left">Destinatario</th>
                          <th class = "table-left">Motivo</th>
                          <th class = "table-left">Estado</th>
                          <th class = "table-left">Archivo Adjunto</th>
                          <th class = "table-left">Código alfanumérico</th>  
                          <th class = "table-left">Tipo</th>          
                          <th class = "table-left">Sitio de Creacion</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php
                        
                       
                          include_once('db.php');
                          $busqueda = $_POST['BusquedaCedula'];
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM felicitacionnoanonima WHERE Cedula = '$busqueda'");  
                  
                        while($row = $consulta->fetch_array()){
                          ?>
                              <tr>
                                <td><?php echo $row['Fecha']?> </td>
                                <td><?php echo $row['Nombre']?> </td>
                                <td><?php echo $row['PrimerApellido']?> </td>
                                <td><?php echo $row['SegundoApellido']?> </td>
                                <td><?php echo $row['Cedula']?> </td>
                                <td><?php echo $row['Telefono']?> </td>
                                <td><?php echo $row['CorreoElectronico']?> </td>
                                <td><?php echo $row['Destinatario']?> </td>
                                <td><?php echo $row['Motivo']?> </td>
                                <td><?php echo $row['Estado']?> </td>
                                <td><?php echo $row['ArchivoAdjunto']?> </td>
                                <td><?php echo $row['CodAlfanumerico']?> </td>
                                <td><?php echo $row['Tipo']?> </td>
                                <td><?php echo $row['SitioCreacion']?> </td>
                        </tr>
                          <?php
                      }
                    }
                          ?>
                        </tbody>
                      </table>

                      <br></br>
                     <br></br>
          </form>
        </body>
</html>