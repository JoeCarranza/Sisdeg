<?php

  include_once('db.php');
  
	if(isset($_GET["enviar"])){
		$busqueda = $_GET['busqueda'];
		$resultado = 'Estado';

		$conectar = conn();

		$consulta = $conectar->query ("SELECT * FROM solicitud WHERE CodAlfanumerico LIKE '%$busqueda%'");

			if ($consulta->num_rows == 0) {
                // Si no se encontraron resultados, muestra un mensaje de error y redirige al usuario a la página anterior
                echo '<script language="javascript">
                        alert("No se encontraron resultados para la busqueda, por favor intentelo de nuevo.");
                        window.history.back();
                      </script>';
            } else {
                // Si se encontraron resultados, muestra el estado de la solicitud al usuario
                while ($row = $consulta->fetch_array()) {
                    echo '<script language="javascript">
                            alert("El estado de su solicitud es: ' . $row['Estado'] . '");
                            window.history.back();
                          </script>';
                }
            }
	}
		
?>