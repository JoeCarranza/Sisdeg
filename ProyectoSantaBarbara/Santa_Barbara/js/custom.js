jQuery(document).ready(function( $ ) {

  // Preloader
  $(window).on('load', function() {
    $('#preloader').delay(100).fadeOut('slow',function(){$(this).remove();});
  });

  // Hero rotating texts
  $("#hero .rotating").Morphext({
    animation: "flipInX",
    separator: ",",
    speed: 3000
  });
  
  // Initiate the wowjs
  new WOW().init();
  
  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {opacity:'show'},
    speed: 400
  });
  
  // Mobile Navigation
  /*
  if( $('#nav-menu-container').length ) {
      var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav'});
      $mobile_nav.find('> ul').attr({ 'class' : '', 'id' : '' });
      $('body').append( $mobile_nav );
      $('body').prepend( '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>' );
      $('body').append( '<div id="mobile-body-overly"></div>' );
      $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
      
      $(document).on('click', '.menu-has-children i', function(e){
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
      });
      
      $(document).on('click', '#mobile-nav-toggle', function(e){
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
      });
      
      $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
             if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
          }
      });
  } else if ( $("#mobile-nav, #mobile-nav-toggle").length ) {
      $("#mobile-nav, #mobile-nav-toggle").hide();
  }
  */
  // Stick the header at top on scroll
  $("#header").sticky({topSpacing:0, zIndex: '50'});

  // Smoth scroll on page hash links
  $('a[href*="#"]:not([href="#"])').on('click', function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          if (target.length) {
              
              var top_space = 0;
              
              if( $('#header').length ) {
                top_space = $('#header').outerHeight();
              }
              
              $('html, body').animate({
                  scrollTop: target.offset().top - top_space
              }, 1500, 'easeInOutExpo');

              if ( $(this).parents('.nav-menu').length ) {
                $('.nav-menu .menu-active').removeClass('menu-active');
                $(this).closest('li').addClass('menu-active');
              }

              if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
              
              return false;
          }
      }
  });
  
  // Back to top button
  $(window).scroll(function() {

      if ($(this).scrollTop() > 100) {
          $('.back-to-top').fadeIn('slow');
      } else {
          $('.back-to-top').fadeOut('slow');
      }
      
  });
  
  $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
      return false;
  });

});
function mostrarQuejaAnonima() {
    document.getElementById('contenedoor1').style.display = 'block';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
}
function mostrarQueja() {
    document.getElementById('contenedoor3').style.display = 'block';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarDenuncia() {
    document.getElementById('contenedoor4').style.display = 'block';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarRecomendacionNoAnonima() {
    document.getElementById('contenedoor5').style.display = 'block';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarFelicitacionAnonima() { 
    document.getElementById('contenedoor6').style.display = 'block';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarRecomendacionAnonima() { 
    document.getElementById('contenedoor2').style.display = 'block';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarFelicitacionNoAnonima(){
    document.getElementById('contenedoor7').style.display = 'block';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}
function mostrarBusquedaCedula(){
    document.getElementById('contenedoor8').style.display = 'block';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
    document.getElementById('contenedoor9').style.display = 'none';
    document.getElementById('contenedoor10').style.display = 'none';
}
function mostrarBusquedaCodAlfanumerico(){
    document.getElementById('contenedoor9').style.display = 'block';
    document.getElementById('contenedoor8').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
    document.getElementById('contenedoor10').style.display = 'none';
}
function mostrarBusquedaTipoSolicitud(){
    document.getElementById('contenedoor10').style.display = 'block';
    document.getElementById('contenedoor9').style.display = 'none';
    document.getElementById('contenedoor8').style.display = 'none';
    document.getElementById('contenedoor7').style.display = 'none';
    document.getElementById('contenedoor2').style.display = 'none';
    document.getElementById('contenedoor6').style.display = 'none';
    document.getElementById('contenedoor3').style.display = 'none';
    document.getElementById('contenedoor4').style.display = 'none';
    document.getElementById('contenedoor5').style.display = 'none';
    document.getElementById('contenedoor1').style.display = 'none';
}


function VerficacionDatosQuejaAnonima(){
    var Fecha = document.getElementById("FechaQuejaAnonima").value;
    var Destinatario = document.getElementById("DestinatarioQuejaAnonima").value;
    var Motivo = document.getElementById("DescripcionQuejaAnonima").value;
    if(Fecha!=""&& Destinatario!=""&& Motivo!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}
function VerificarDatosQuejaNoAnonima(){
    var Fecha = document.getElementById("FechaQueja").value;
    var Nombre = document.getElementById("NomCliente").value;
    var Primerape = document.getElementById("Apellido1").value;
    var Segundoape = document.getElementById("Apellido2").value;
    var NumIde = document.getElementById("IdClienteQueja").value;
    var NumTele = document.getElementById("TelClienteQueja").value;
    var Correo = document.getElementById("EmailClienteQueja").value;
    var DireccionFisica = document.getElementById("DireccionQueja").value;
    var Descripcion = document.getElementById("DescripcionQueja").value;
    if(Fecha!=""&& Nombre!=""&& Primerape!=""&& Segundoape!="" && NumIde!=""&& NumTele!=""&& Correo!=""&&DireccionFisica!=""&& Descripcion!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}
function VerficacionDatosDenuncia(){
   var Fecha = document.getElementById("FechaDenuncia").value;
    var Nombre = document.getElementById("NomDenuncia").value;
    var Primerape = document.getElementById("Apellido1Denuncia").value;
    var Segundoape = document.getElementById("Apellido2Denuncia").value;
    var NumIde = document.getElementById("IdClienteDenuncia").value;
    var NumTele = document.getElementById("TelClienteDenuncia").value;
    var Correo = document.getElementById("EmailClienteDenuncia").value;
    var DireccionFisica = document.getElementById("TextAreaDireccionDenuncia").value;
    var Descripcion = document.getElementById("TextAreaDescripcionDenuncia").value;
    if(Fecha!=""&& Nombre!=""&& Primerape!=""&& Segundoape!="" && NumIde!=""&& NumTele!=""&& Correo!=""&&DireccionFisica!=""&& Descripcion!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}
function VerificacionRecomendacionAnonima(){
    var Fecha = document.getElementById("FechaRecomendacionAnonima").value;
    var Destinatario = document.getElementById("DestinatarioRecomendacionAnonima").value;
    var Motivo = document.getElementById("DescripcionRecomendacionAnonima").value;
    if(Fecha!=""&& Destinatario!=""&& Motivo!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}
function VerificarRecomendacionNoAnonima(){
    var Fecha = document.getElementById("FechaRecomendacion").value;
    var Nombre = document.getElementById("NomRecomendacion").value;
    var Primerape = document.getElementById("Apellido1Recomendacion").value;
    var Segundoape = document.getElementById("Apellido2Recomendacion").value;
    var NumIde = document.getElementById("IdClienteRecomendacion").value;
    var NumTele = document.getElementById("TelClienteRecomendacion").value;
    var Correo = document.getElementById("EmailClienteRecomendacion").value;
    var DireccionFisica = document.getElementById("DireccionRecomendacion").value;
    var Descripcion = document.getElementById("DescripcionRecomendacion").value;
    if(Fecha!=""&& Nombre!=""&& Primerape!=""&& Segundoape!="" && NumIde!=""&& NumTele!=""&& Correo!=""&&DireccionFisica!=""&& Descripcion!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}
function VerificarFelicitacionAnonima(){
    var Fecha = document.getElementById("FechaFelicitacionAnonima").value;
    var Destinatario = document.getElementById("DestinatarioFelicitacionAnonima").value;
    var Motivo = document.getElementById("DescripcionFelicitacionAnonima").value;
    if(Fecha!=""&& Destinatario!=""&& Motivo!=""){
        alert ("Datos enviados correctamente");
    }else{
       alert  ("Ha ocurrido un error.")
   }
}




//function VerificarFelicitacionNoAnonima(){
  //  var Fecha = document.getElementById("FechaFelicitacion").value;
    //var Nombre = document.getElementById("NomFelicitacion").value;
    //var Primerape = document.getElementById("Apellido1Felicitacion").value;
    //var Segundoape = document.getElementById("Apellido2Felicitacion").value;
    //var NumIde = document.getElementById("IdClienteFelicitacion").value;
    //var NumTele = document.getElementById("TelClienteFelicitacion").value;
    //var Correo = document.getElementById("EmailClienteFelicitacion").value;
    //var DireccionFisica = document.getElementById("DireccionFelicitacion").value;
    //var Descripcion = document.getElementById("DescripcionFelicitacion").value;
    //if(Fecha!=""&& Nombre!=""&& Primerape!=""&& Segundoape!="" && NumIde!=""&& NumTele!=""&& Correo!=""&&DireccionFisica!=""&& Descripcion!=""){
      //  alert ("Datos enviados correctamente");
    //}else{
     //  alert  ("Ha ocurrido un error.")
   //}
//}