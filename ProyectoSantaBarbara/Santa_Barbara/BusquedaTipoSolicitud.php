<!DOCTYPE html>
<html lang="es">
 
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="stylesheet" href="../Santa_Barbara/css/styleBusqueda.css">
    </head>
        <body>
            <form action="<?=$_SERVER['PHP_SELF']?>" method ="post"  enctype="multipart/form-data">
                <div class="tipos">
                    <button type="submit" name="submit1" id="bnts" value="Enviar">Denuncia</button>
                    <button type="submit" name="submit2" id="bnts" value="Enviar">Queja anónima</button>
                    <button type="submit" name="submit3" id="bnts" value="Enviar">Queja no anónima</button>
                    <button type="submit" name="submit4" id="bnts" value="Enviar">Recomendación anónima</button>
                    <button type="submit" name="submit5" id="bnts" value="Enviar">Recomendación no anónima</button>
                    <button type="submit" name="submit6" id="bnts" value="Enviar">Felicitación anónima</button>
                    <button type="submit" name="submit7" id="bnts" value="Enviar">Felicitación no anónima</button>
                </div>
                <?php
                    if(isset($_POST['submit1'])){
                ?>
                <!--TABLA DE DENUNCIAS-->
           
                <h2>Denuncias registradas</h2>
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
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM denuncia");  
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



                      <?php
                    if(isset($_POST['submit2'])){
                ?>
                <!--TABLA DE QUEJA ANONIMA-->
           
                <h2>Quejas anónimas registradas</h2>
                <table class ="table-fill"> 
                  <thead>
                    <tr>
                      <th class = "table-left">Fecha</th>
                      <th class = "table-left">Dirección Fisica</th>
                      <th class = "table-left">Descripción</th>
                      <th class = "table-left">Estado</th>
                      <th class = "table-left">Código alfanumérico</th>
                      <th class = "table-left">Archivo Adjunto</th>
                      <th class = "table-left">Tipo</th>
                      <th class = "table-left">Sitio Creación</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                          include_once('db.php');
                          $conectar = conn();
                          $consulta = $conectar->query ("SELECT * FROM quejaanonima");  
                        while($row = $consulta->fetch_array()){
                      ?>
                          <tr>
                            <td><?php echo $row['Fecha']?> </td>
                            <td><?php echo $row['DireccionFisica']?> </td>
                            <td><?php echo $row['Descripcion']?> </td>
                            <td><?php echo $row['Estado']?> </td>
                            <td><?php echo $row['CodAlfanumerico']?> </td>
                            <td><?php echo $row['ArchivoAdjunto']?> </td>
                            <td><?php echo $row['Tipo']?> </td>
                            <td><?php echo $row['SitioCreacion']?> </td>
                          </tr>
                        <?php
                      }
                    } 
                          ?>
                        </tbody>
                      </table>
            </form>
        </body>
</html>