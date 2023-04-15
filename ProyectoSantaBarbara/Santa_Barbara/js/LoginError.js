window.onload = function alert_error_login(){
  Swal.fire({
    icon: 'error',
    title: 'Error...',
    text: 'Usuario o clave incorrecto, intentelo de nuevo',
    showConfirmButton: false,
    footer: '<a href="IniciarSesion.php">Regresar</a>'
  })
}
