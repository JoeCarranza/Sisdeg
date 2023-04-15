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
            <h2>Búsqueda de solicitudes por código alfanumérico</h2>
            <label for="BusquedaCodAlfanumerico">Código alfanumérico</label>
            <input class="controls" type="text" placeholder="Ej: YXd7" name="BusquedaCodAlfanumerico" id="BusquedaCodAlfanumerico">
              <div class="botones">
                <button type="submit" name="enviar" id="bnts" value="Enviar">Buscar</button>
              </div>
          </div>


                <!--TABLA DE Solicitudes-->
                <h2>Solicitud realizada</h2>
                <table class ="table-fill"> 
                  <thead>
                    <tr>
                      <th class = "table-left">Código alfanumérico</th>
                      <th class = "table-left">Tipo</th>
                      <th class = "table-left">Sitio creación</th>
                      <th class = "table-left">Estado</th>
                      <th class = "table-left">Fecha</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php
                        if(isset($_POST['enviar'])){
                
                          include_once('db.php');
                          $busqueda = $_POST['BusquedaCodAlfanumerico'];
                          if(empty($_POST['BusquedaCodAlfanumerico'])){
                            echo "<script language='JavaScript'>
                                    alert('Por favor ingrese el código alfanumérico');
                                    location.assign('BusquedaCodAlfanumerico.php');
                                    </script>
                                    ";
                          }else{
                          $conectar = conn();
                          $consulta = $conectar->query("SELECT * FROM solicitud WHERE CodAlfanumerico ='$busqueda'"); 
                                            
                          while($row = $consulta->fetch_array()){
                      ?>
                          <tr>
                            <td><?php echo $row['CodAlfanumerico']?> </td>
                            <td><?php echo $row['Tipo']?> </td>
                            <td><?php echo $row['SitioCreacion']?> </td>
                            <td><?php echo $row['Estado']?> </td>
                            <td><?php echo $row['Fecha']?> </td>                          
                          </tr>
                        <?php
                        }
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