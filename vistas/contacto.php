<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <header class="header4">
  <div class="conten">
  <div class="contennavmenu">
    <nav class="pull-left animated fadeInDown">
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">SERVICIOS</a>
        <a class="selector" id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </nav>
    <figure class="logo pull-right animated fadeInDown">
      <img src="../img/gaba.png" alt="GABA" class="img-responsive"> 
    </figure>
    <div class="menu-op">
      <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
    </div>
  </div>
  <p class="texto animated fadeInDown">
    Contacto <br> GABA
  </p>
  </div>
</header> 
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5655678782737!2d-89.64126288596!3d21.010044593794824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567411fe5d1ef9%3A0x651ff377a33e9cc9!2sCalle+26%E1%B4%B0+162A%2C+Chuburn%C3%A1+de+Hidalgo%2C+97205+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1504217768923" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<section id="contact">
      <div class="section-content">
        <h1 class="section-header">Formulario de contacto </h1>
        <h4>CONTÁCTANOS AHORA Y COMENCEMOS A TRABAJAR.</h4>
      </div>
      <div class="contact-section">
      <div class="container">
        <form onSubmit="return false">
          <div class="col-sm-6 col-md-6 form-line">
              <div class="form-group">
                <label for="exampleInputUsername">Escribe tu nombre</label>
                <input type="text" class="form-control" id="txtNOMBRE" placeholder=" Nombre">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Escribe tu correo</label>
                <input type="email" class="form-control" id="txtCORREO" placeholder=" Correo">
              </div>  
              <div class="form-group">
                <label for="telephone">Escribe tu teléfono</label>
                <input type="tel" class="form-control" id="txtTELEFONO" placeholder=" Teléfono">
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="form-group">
                <label for ="description">Escribe tu comentario</label>
                <textarea  class="form-control" id="txtCOMENTARIO" placeholder=" Comentario"></textarea>
              </div>
              <div class="btn-enviar">
                <div id="_AJAX_PRE_"></div>
                <button type="button" class="btn btn-danger submit new-btn" onclick="sendCORREO()"><i class="fa fa-paper-plane" aria-hidden="true" ></i> ENVIAR</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>

    <div class="section seccion3">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 text-right cicono">
            <span class="fa-stack fa-3x icono">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-street-view fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <p class="text-left mtc centrar-text">C. 26-D No162-A, por C. 23 y C. 25, Col. Chuburna de Hidalgo, Mérida, Yucatán, C.P. 97205</p>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 text-right cicono">
            <span class="fa-stack fa-3x icono">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <p class="text-left mtc2 centrar-text">Lunes a Viernes de 9 am a 6 pm.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 text-right cicono">
            <span class="fa-stack fa-3x icono">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            
            <p class="text-left mtc2 centrar-text">PENDIENTE</p>
          </div>
          <div class="col-xs-12 col-sm-2 col-md-2 text-right cicono">
            <span class="fa-stack fa-3x icono">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
            </span>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 text-center">
           
            <p class="text-left mtc2 centrar-text">info@grupogastronomicogaba.com</p>
          </div>
        </div>
      </div>
    </div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>