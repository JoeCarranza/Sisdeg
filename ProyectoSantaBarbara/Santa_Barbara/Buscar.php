<?php

  include_once('db.php');
  
	if(isset($_POST['enviar'])){
		$busqueda = $_POST['busqueda'];
		$resultado = 'Estado';

		$conectar = conn();

		$consulta = $conectar->query ("SELECT * FROM solicitud WHERE CodAlfanumerico ='$busqueda'");

			if ($consulta->num_rows == 0) {
                // Si no se encontraron resultados, muestra un mensaje de error y redirige al usuario a la p�gina anterior
                echo '<script language="javascript">
                        alert("No se encontraron resultados para la busqueda, por favor intentelo de nuevo.");
                        window.history.back();
                      </script>';
            } else {
                // Si se encontraron resultados, muestra el estado de la solicitud al usuario
                while ($row = $consulta->fetch_array()) {
                    echo '<script language="javascript">
                            alert("El estado de su solicitud es: ' .$row['Estado'] . '");
                            window.history.back();
                          </script>';
                }
            }
	}
?>