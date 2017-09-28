<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
	
  <div class="container1 ">
<figure class="logo">
  <img src="../img/sagmar.png" class="img-responsive" alt="SAGMAR">
</figure>
  <nav class="nav">
    <ul id="menu_principal">
      <li><a class="selector" href="../index.php"><span class="fa fa-home fa-4x principales"></span> INICIO</a></li>
      <li><a class="selector" href="nosotros.php"><span class="fa fa-users fa-4x principales"></span> NOSOTROS</a></li>
      <li><a class="selector" href="servicios.php"><span class="fa fa-home fa-4x principales"></span> SERVICIOS</a></li>
      <li><a class="selector"  id="select" href="contacto.php"><span class="fa fa-id-card fa-4x principales"></span> CONTACTO</a></li>
    </ul>
  </nav>
</div>

<div class="container2">

   <div class="bannerc">
    <p class="textos">
      Contacto</p>
  </div>


  <div class="contenedor">
  	<div class="izquierda"> <br><br>
  			<h3 class="text-center tit" >Formulario de contacto</h3>
  				<form action="" class="contact-form" method="POST">
  					<div class="form-group">
  					<input type="text" name="username" id="username" class="username form-control" placeholder="Nombre completo" value="">
  					<i class="fa fa-user"></i>
  					<span class="asterix">*</span>
  					
  					</div>
  	
  					
  					<div class="form-group">
  					<input type="text" name="email" class=" email form-control" placeholder="Escribe tu correo" value="">
  					<i class="fa fa-envelope"></i>
  					<span class="asterix">*</span>
  					
  					</div>
  	
  					
  					<div class="form-group">
  					<input type="text" name="subject" class="subject form-control" placeholder="Escribe tu teléfono" value="">
  					<i class="fa fa-phone"></i>
  					<span class="asterix">*</span>
  					
  					</div>
  	
  					
  					<div class="form-group">
  					<textarea class=" message form-control" name="message" placeholder="Escribe tu comentario"></textarea>
  					<i class="fa fa-comments message-icon"></i>
  					<span class="asterix">*</span>
  					
  					</div>
  	
  					<div class="form-group">
  					<input type="submit" value="ENVIAR" class="btn btn-success btn-block">
  					<i class="fa fa-paper-plane send-icon"></i>
  					</div>
  				</form>
  			</div>

  			<div class="derecha">
  				<legend><span class="fa fa-globe"></span> Información adicional</legend>
  				<address>
                <strong>Dirección</strong><br>
                Priv. Agua # 592 A entre C. Las Flores Sur. Col. La Gloria, Tuxtla Gutiérrez, Chiapas. C.P. 29038
            </address>
            <address>
                <strong>Teléfono</strong><br>
                PENDIENTE
            </address>
            <address>
                <strong>Correo</strong><br>
                <a href="mailto:info@comercializadorasagmar.com">info@comercializadorasagmar.com</a>
            </address>
            <address>
                <strong>Horario</strong><br>
                Lunes a Viernes de 9 am a 6 pm
            </address>
  			</div>
  </div>


		<div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4471914757423!2d-93.17907048575672!3d16.75441262516231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d977e5d03%3A0xf949657d7faf26d0!2sAgua+592%2C+La+Gloria%2C+29054+La+Gloria%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1506624315118" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>




<?php include 'pie.php' ?>
</div>
<a class="go-top" href="#">Subir</a>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>

</body>
</html>