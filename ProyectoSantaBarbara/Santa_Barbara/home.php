<?php
session_start();
$usuario = $_SESSION['username'];
echo "<h1> Bienvenido $usuario </h1>";
?>
<!DOCTYPE html>
<html lang="es">
 
<!DOCTYPE html>
<html lang="es">
 
<head>
  <meta charset="utf-8">
  <title>Solicitudes</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">
  <!-- SCRIPT PARA EL SWEETALERT-->
  <link rel="stylesheet" href="../Santa_Barbara/plugins/SweetAlert/dist/sweetalert2.min.css">
</head>

<body>
  <div id="preloader"></div>

  <header id="header">
    <div class="container">
      <!--<div id="logo" class="pull-left">-->
        <!--<a href="#hero"><img src="img/LogoMunicipalidad.png" alt="" title="" /></img></a> -->
        <!-- Descomenta abajo si prefieres usar una imagen de texto -->
        <!--<h1><a href="#hero">Encabezado 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
         <li class="menu-active"> <a href="#about">Realizar una solicitud</a>
            <ul>
              <li><a href ="#" onclick = "mostrarQuejaAnonima();">Queja anónima</a></li>
              <li><a href ="#" onclick = "mostrarQueja();">Queja no anónima</a></li>
              <li><a href ="#"  onclick = "mostrarDenuncia();">Denuncia</a> </li>
              <li><a href ="#" onclick = "mostrarRecomendacionAnonima();">Recomendación anónima</a></li>
              <li><a href="#" onclick = "mostrarRecomendacionNoAnonima();">Recomendación no anónima</a></li>
              <li><a href="#" onclick = "mostrarFelicitacionAnonima();">Felicitación anónima</a></li>
              <li><a href="#" onclick="mostrarFelicitacionNoAnonima();">Felicitación no anónima</a></li>
            </ul>     
          </li>
          <li class="menu-active2"> <a href="#about">Funciones</a>
            <ul>
              <li><a href ="#" onclick = "">Buscar Solicitudes</a>
                  <ul>
                      <li><a href ="../Santa_Barbara/BusquedaPorCedula.php">Búsqueda por número de cedula</a></li>
                      <li><a href ="../Santa_Barbara/BusquedaCodAlfanumerico.php">Búsqueda por código alfanumérico</a></li>
                      <li><a href ="../Santa_Barbara/BusquedaTipoSolicitud.php">Búsqueda por tipo de solicitud</a></li>
                  </ul>
              </li>
            </ul>     
          </li>
          <li><a href="#services">Consultar el estado de la solicitud</a></li>
           
        </ul>
      </nav>

      <nav id="nav-menu-container2">
        <ul class="nav-menu2">  
          <li><a href="https://www.santabarbara.go.cr/">Contáctenos</a></li>
          <li><a href="../Santa_Barbara/IniciarSesion.php">Iniciar Sesión</a></li>
        </ul>  
      </nav>

      <!-- #nav-menu-container -->
    </div>
  </header>

  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Bienvenidos al módulo de administrativos</h3>
          <p class="section-description"></p>
          <!--<p class="section-title-divider">...</p>-->
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-6 col-md-push-6 about-content">

          <form class="FormularioQuejaAnonima" method ="post" action="InsertarQuejaAnonima_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor1" class = "contenedor1">
              <div class = "insertar1">
                <h2>DÉJENOS CONOCER SU QUEJA DE FORMA ANÓNIMA</h2> 
                <label>Fecha</label>
                <!--<br></br>-->
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha" name="FechaQuejaAnonima" id="FechaQuejaAnonima">
                <label>Dirección física</label>
                <!--<br></br>-->
                <textarea class="controls" name="DireccionFisicaQuejaAnonima" id="DireccionFisicaQuejaAnonima" rows="3" required data-msg="Por favor ingrese una dirección fisica" placeholder="Dirección fisica"></textarea>
                <!--<br></br>-->
                <label>Descripción</label>  
                <!--<br></br>-->
                <textarea class="controls" name="DescripcionQuejaAnonima"id="DescripcionQuejaAnonima" rows="5" required data-msg="Por favor ingrese su queja" placeholder="Motivo"></textarea>
                <!--<br></br>-->
                <label>Estado</label>
                <!--<br></br>-->
                <textarea class="controls" name="EstadoQuejaAnonima"id="EstadoQuejaAnonima" placeholder="En proceso" disabled ></textarea>
                <label>Tipo</label>
                <!--<br></br>-->
                <textarea class="controls" name="TipoQuejaAnonima"id="TipoQuejaAnonima" placeholder="Queja anónima" disabled></textarea>
                <label>Sitio Creación</label>
                <!--<br></br>-->
                <textarea class="controls" name="SitioCreacionQuejaAnonima"id="SitioCreacionQuejaAnonima" placeholder="Vía Web" disabled></textarea>
              
                <div class="botones2">
                  <br>
                    <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <!--se agrega los [] al name para trabajar con los multiples archivos como un array-->
                  <br>
                <button type="submit" name="submit" id="btninsert1" value="Enviar">Enviar</button>
                  <!--se agrega el name=submit-->
                </div>
              </div>
            </div>
          </form>

          <form class="FormularioRecomendacionAnonima" method ="post" action="InsertarRecomendacionAnonima_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor2" class = "contenedor2">
              <div class = "insertar2">
                <h2>DÉJENOS CONOCER SU RECOMENDACIÓN DE FORMA ANÓNIMA</h2> 
                <label>Fecha</label>
                <!--<br></br>-->
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha"  name="FechaRecomendacionAnonima" id="FechaRecomendacionAnonima">
                <label>Destinatario</label>
                <!--<br></br>-->
                <textarea class="controls" name="DestinatarioRecomendacionAnonima" id="DestinatarioRecomendacionAnonima" rows="3" required data-msg="Por favor ingrese un destinatario" placeholder="¿A quién va dirigida su recomendación?"></textarea>
                <!--<br></br>-->
                <label>Motivo de la recomendación</label>
                <!--<br></br>-->
                <textarea class="controls" name="DescripcionRecomendacionAnonima"id="DescripcionRecomendacionAnonima" rows="5" required data-msg="Por favor ingrese su recomendación" placeholder="Motivo"></textarea>
                <!--<br></br>-->
                <label>Estado</label>
                <!--<br></br>-->
                <textarea class="controls" name="EstadoRecomendacionAnonima"id="EstadoRecomendacionAnonima" placeholder="En proceso" disabled></textarea>
                <label>Tipo</label>
                <!--<br></br>-->
                <textarea class="controls" name="TipoRecomendacionAnonima"id="TipoRecomendacionAnonima" placeholder="Recomendación anónima" disabled></textarea>
                <label>Sitio Creación</label>
                <!--<br></br>-->
                <textarea class="controls" name="SitioCreacionRecomendacionAnonima"id="SitioCreacionRecomendacionAnonima" placeholder="Vía Web" disabled></textarea>
            
                <div class = "botones2"> 
                  <br>
                      <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <br>
                  <button type="submit" name="submit" id="btninsert2" value="Enviar">Enviar</button>
                </div>
              </div>
            </div>
          </form>
          
          <form class="FormularioQueja" method ="post" action="InsertarQueja_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor3" class = "contenedor3" >
              <br class = "insertar3">
              <h2>DÉJENOS CONOCER SU QUEJA</h2> 
              <label>Fecha</label>
              <!--<br></br>-->
              <input class="controls" type="date" required data-msg="Por favor ingrese la fecha" name="FechaQueja" id="FechaQueja">
              <!--<br></br>-->
              <label>Nombre</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su nombre" placeholder="Ingrese su nombre"name="NomCliente" id="NomCliente">
              <!--<br></br>-->
              <label>Primer Apellido</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su primer apellido" placeholder="Ingrese su primer apellido" name="Apellido1" id="Apellido1">
              <!--<br></br>-->
              <label>Segundo Apellido</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su segundo apellido" placeholder="Ingrese su segundo apellido" name="Apellido2" id="Apellido2">
              <!--<br></br>-->
              <label>Número de identificación (9 dígitos)</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su número de identificación" placeholder="ejm: 101110111" name="IdClienteQueja" id="IdClienteQueja">
              <!--<br></br>-->
              <label>Teléfono</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su teléfono" placeholder="ejm: XXYYXXYY" name="TelClienteQueja" id="TelClienteQueja">
              <!--<br></br>-->
              <label>Correo Electrónico</label>
              <!--<br></br>-->
              <input class="controls" type="text" required data-msg="Por favor ingrese su correo electrónico" placeholder="ejm: pablito@gmail.com" name="EmailClienteQueja" id="EmailClienteQueja">
              <!--<br></br>-->
              <label>Dirección física de donde ocurrió la incidencia</label>
              <!--<br></br>-->
              <textarea class="controls" name="DireccionQueja" id="DireccionQueja" rows="3" required data-msg="Por favor ingrese una dirección" placeholder="Dirección"></textarea>
              <!--<br></br>-->
              <label>Descripción de lo sucedido</label>
              <!--<br></br>-->
              <textarea class="controls" name="DescripcionQueja" id="DescripcionQueja" rows="5" required data-msg="Por favor ingrese la descripción de lo sucedido" placeholder="Motivo"></textarea>
              <!--<br></br>-->
              <label>Tipo</label>
              <!--<br></br>-->
              <textarea class="controls" name="TipoQueja" id="TipoQueja" placeholder="Queja no anónima" disabled></textarea>
              <!--<br></br>-->
              <label>Sitio creación</label>
              <!--<br></br>-->
              <textarea class="controls" name="SitioCreacionQueja" id="SitioCreacionQueja" placeholder="Vía web" disabled></textarea>
              <!--<br></br>-->
              <label>Estado</label>
              <!--<br></br>-->
              <textarea class="controls" name="EstadoQueja" id="EstadoQueja" placeholder="En proceso" disabled></textarea>
              <!--<br></br>-->
              <div class = "botones3">
                <br>
                  <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                    
                 <br> 
                <button type="submit" name="submit" id="btninsert3" value="Enviar">Enviar</button>
              </div>
            </div>
          </form>

          <form class="FormularioDenuncia" method ="post" action="InsertarDenuncia_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor4" class = "contenedor4">
              <div class = "insertar4">
                <h2>DÉJENOS CONOCER SU DENUNCIA</h2> 
                <label>Fecha</label>
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha"  name="FechaDenuncia" id="FechaDenuncia">
                <label>Nombre</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su nombre" placeholder="Ingrese su nombre"name="NomDenuncia" id="NomDenuncia">
                <label>Primer Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su primer apellido" placeholder="Ingrese su primer apellido" name="Apellido1Denuncia" id="Apellido1Denuncia">
                <label>Segundo Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su segundo apellido" placeholder="Ingrese su segundo apellido" name="Apellido2Denuncia" id="Apellido2Denuncia">
                <label>Número de identificación (9 dígitos)</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su número de identificación" placeholder="ejm: 101110111" name="IdClienteDenuncia" id="IdClienteDenuncia">
                <label>Teléfono</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su teléfono" placeholder="ejm: XXYYXXYY" name="TelClienteDenuncia" id="TelClienteDenuncia">
                <label>Correo Electrónico</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su correo electrónico" placeholder="ejm: pablito@gmail.com" name="EmailClienteDenuncia" id="EmailClienteDenuncia">
                <label>Dirección física de donde ocurrió la incidencia</label>
                <textarea class="controls" name="DireccionFisicaDenuncia" id="DireccionFisicaDenuncia" rows="3" required data-msg="Por favor ingrese una direccion fisica" placeholder="Direccion Denuncia"></textarea>
                <label>Descripción de lo sucedido</label>
                <textarea class="controls" name="DescripcionDenuncia" id="DescripcionDenuncia" rows="5" required data-msg="Por favor ingrese un Motivo de la denuncia" placeholder="Motivo de la denuncia"></textarea>
                <label>Estado</label>
                <textarea class="controls" name="EstadoDenuncia" id="EstadoDenuncia" placeholder="En proceso" disabled></textarea>
                <label>Sitio creación</label>
                <textarea class="controls" name="SitioCreacionDenuncia" id="SitioCreacionDenuncia" placeholder="Vía web" disabled></textarea>
                <label>Tipo</label>
                <textarea class="controls" name="TipoDenuncia" id="TipoDenuncia" placeholder="Denuncia" disabled></textarea>
            
                <div class = "botones4"> 
                  <br>
                    <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <br>
                  <button type="submit" name="submit" id="btninsert4" value="Enviar">Enviar</button>
                </div>
              </div>
            </div>
          </form>

          <form method ="post" action="InsertarRecomendacion_Admi.php"  enctype="multipart/form-data">
            <div id ="contenedoor5" class = "contenedor5">
              <div class = "insertar5">
                <h2>DÉJENOS CONOCER SU RECOMENDACIÓN</h2> 
                <label>Fecha</label>
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha" name="FechaRecomendacion" id="FechaRecomendacion">
                <label>Nombre</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su nombre" placeholder="Ingrese su nombre"name="NomRecomendacion" id="NomRecomendacion">
                <label>Primer Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su primer apellido" placeholder="Ingrese su primer apellido" name="Apellido1Recomendacion" id="Apellido1Recomendacion">
                <label>Segundo Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su segundo apellido" placeholder="Ingrese su segundo apellido" name="Apellido2Recomendacion" id="Apellido2Recomendacion">
                <label>Número de identificación (9 dígitos)</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su número de identificación" placeholder="ejm: 101110111" name="IdClienteRecomendacion" id="IdClienteRecomendacion">
                <label>Teléfono</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su teléfono" placeholder="ejm: XXYYXXYY" name="TelClienteRecomendacion" id="TelClienteRecomendacion">
                <label>Correo Electrónico</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su correo electrónico" placeholder="ejm: pablito@gmail.com" name="EmailClienteRecomendacion" id="EmailClienteRecomendacion">
                <label>Lugar o persona que desea recomendar</label>
                <textarea class="controls" name="DireccionRecomendacion" id="DireccionRecomendacion" rows="3" required data-msg="Por favor ingrese una dirección" placeholder="Dirección o nombre "></textarea>
                <label>Motivo</label>
                <textarea class="controls" name="DescripcionRecomendacion" id="DescripcionRecomendacion" rows="5" required data-msg="Por favor ingrese la descripción de lo sucedido" placeholder="Motivo de la recomendación"></textarea>
                <label>Estado</label>
                <textarea class="controls" name="EstadoRecomendacion" id="EstadoRecomendacion" placeholder="En proceso" disabled></textarea>
                <label>Tipo </label>
                <textarea class="controls" name="TipoRecomendacion" id="TipoRecomendacion" placeholder="Recomendación no anónima" disabled></textarea>
                <label>Sitio Creación</label>
                <textarea class="controls" name="SitioCreacionRecomendacion" id="SitioCreacionRecomendacion" placeholder="Vía Web" disabled></textarea>
      
                <div class = "botones5"> 
                  <br>
                    <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <br>
                  <button type="submit" name="submit" id="btninsert5" value="Enviar">Enviar</button>
                </div>
              </div>
            </div>
          </form>

          <form class="FormularioFelicitacionAnonima" method ="post" action="InsertarFelicitacionAnonima_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor6" class = "contenedor6" >
              <div class = "insertar6">
                <h2>DÉJENOS CONOCER SU FELICITACIÓN DE FORMA ANÓNIMA</h2>  
                <label>Fecha</label>
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha" name="FechaFelicitacionAnonima" id="FechaFelicitacionAnonima">
                <label>Destinatario</label>
                <textarea class="controls" name="DestinatarioFelicitacionAnonima" id="DestinatarioFelicitacionAnonima" rows="3" required data-msg="Por favor ingrese un destinatario" placeholder="¿A quién va dirigida su felicitación?"></textarea>
                <label>Motivo de la felicitación</label>
                <textarea class="controls" name="DescripcionFelicitacionAnonima" id="DescripcionFelicitacionAnonima" rows="5" required data-msg="Por favor ingrese su felicitación" placeholder="Motivo"></textarea> 
                <label>Estado</label>
                <textarea class="controls" name="EstadoFelicitacionAnonima" id="EstadoFelicitacionAnonima" placeholder="En proceso" disabled></textarea> 
                <label>Tipo</label>
                <textarea class="controls" name="TipoFelicitacionAnonima" id="TipoFelicitacionAnonima" placeholder="Felicitación anónima" disabled></textarea>
                <label>Sitio de creación</label>
                <textarea class="controls" name="SitioCreacionFelicitacionAnonima" id="SitioCreacionFelicitacionAnonima" placeholder="Vía Web" disabled></textarea>
                <!--<button type="submit" id="btninsert6" value="Enviar" onclick="VerificarFelicitacionAnonima()">Enviar</button>-->
                <div class = "botones6">  
                  <br>
                    <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <br>
                  <button type="submit" name="submit"  id="btninsert6" value="Enviar" >Enviar</button>
                </div>
              </div>
            </div>  
          </form>

          <form class = "FormularioFelicitacion" method ="post" action="InsertarFelicitacion_Admi.php" enctype="multipart/form-data">
            <div id ="contenedoor7" class = "contenedor7">
              <div class = "insertar7">
                <h2>DÉJENOS CONOCER SU FELICITACIÓN</h2> 
                <label>Fecha</label>
                <input class="controls" type="date" required data-msg="Por favor ingrese la fecha" name="FechaFelicitacion" id="FechaFelicitacion">
                <label>Nombre</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su nombre" placeholder="Ingrese su nombre"name="NomFelicitacion" id="NomFelicitacion">
                <label>Primer Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su primer apellido" placeholder="Ingrese su primer apellido" name="Apellido1Felicitacion" id="Apellido1Felicitacion">
                <label>Segundo Apellido</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su segundo apellido" placeholder="Ingrese su segundo apellido" name="Apellido2Felicitacion" id="Apellido2Felicitacion">
                <label>Número de identificación (9 dígitos)</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su número de identificación" placeholder="ejm: 101110111" name="IdClienteFelicitacion" id="IdClienteFelicitacion">
                <label>Teléfono</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su teléfono" placeholder="ejm: XXYYXXYY" name="TelClienteFelicitacion" id="TelClienteFelicitacion">
                <label>Correo Electrónico</label>
                <input class="controls" type="text" required data-msg="Por favor ingrese su correo electrónico" placeholder="ejm: pablito@gmail.com" name="EmailClienteFelicitacion" id="EmailClienteFelicitacion">
                <label>Destinatario</label>
                <textarea class="controls" name="DireccionFelicitacion" id="DireccionFelicitacion" rows="3" required data-msg="Por favor ingrese un destinatario" placeholder="¿A quién va dirigida su felicitación?"></textarea>
                <label>Motivo de la felicitación</label>
                <!--<br></br>-->
                <textarea class="controls" name="DescripcionFelicitacion" id="DescripcionFelicitacion" rows="5" required data-msg="Por favor ingrese su felicitación" placeholder="Motivo"></textarea>
                <!--<br></br>-->
                <label>Estado</label>
                <!--<br></br>-->
                <textarea class="controls" name="EstadoFelicitacion" id="EstadoFelicitacion"placeholder = "En proceso" disabled></textarea>
                <label>Tipo</label>
                <!--<br></br>-->
                <textarea class="controls" name="TipoFelicitacion" id="TipoFelicitacion"placeholder = "Felicitación no anónima" disabled></textarea>
                <label>Sitio creación</label>
                <!--<br></br>-->
                <textarea class="controls" name="SitioCreacionFelicitacion" id="SitioCreacionFelicitacion"placeholder = "Vía Web" disabled></textarea>  
                <div class = "botones7"> 
                  <br>
                    <input type="file" name="adjunto[]" accept=".pdf,.jpg,.png" multiple />
                  <br>
                  <button type="submit" name="submit" id="btninsert7" value="Enviar">Enviar</button>
                </div>
              </div>
            </div>
          </form>
                  </div>

              </div>
            </div>
            
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
          <div class="col-md-12">
              <h3 class="section-title">CONSULTAR ESTADO DE SU SOLICITUD</h3>
              <div class="section-title-divider"></div>
              <p class="section-description1">Dijite su código Alfanumérico para consultar el estado de su solicitud: </p>


              <form action="Buscar.php" method="get" >
                <textarea class="controls1" name="busqueda" id="SitioCreacionFelicitacion"placeholder = "Ejemplo: mS1d"></textarea>


                <button class="Botonbus" type="submit" name="enviar" id="btninsert8" value="Buscar">Buscar</button>



              </form>

              
          </div>
      </div>

  

    </div>
  </section>

  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contáctenos</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Prueba para contacto y establecimiento de input</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <!--<div>
              <i class="fa fa-map-marker"></i>
              <p>A108 Adam Street<br>New York, NY 535022</p>
            </div>-->

            <div>
              <i class="fa fa-envelope"></i>
              <p>info@example.com</p>
            </div>

            <!--<div>x
              <i class="fa fa-phone"></i>
              <p>+1 5589 55488 55s</p>
            </div>-->

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
             
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Ingresa un Correo Valido" />
                <div class="validation"></div>
              </div>
              <!--<div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
                <div class="validation"></div>
              </div>-->
              <!--<div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>-->
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
           <strong>Sitio Web desarrollado por la Unión Nacional de Gobiernos Locales como parte de las acciones para mejorar la gestión municipal por medio de herramientas tecnológicas </strong>  &copy; 2022 Municipalidad de Santa Bárbara. Todos los derechos reservados
          </div>
          <!--<div class="credits">
        
            Templates by <a href="https://www.youtube.com/channel/UCDH0DJaVLkCDtl_YN9hhByw?view_as=subscriber">ProOnliPc</a>
          </div>-->
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>
  <script src="js/prueba.js"></script>
  <script src="contactform/contactform.js"></script>


</body>

<!--JS del Sweet Alert-->
<script src = "../Santa_Barbara/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>

</html>