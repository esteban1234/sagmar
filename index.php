<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<div class="container1 pull-left">
<figure class="logo">
  <img src="img/sagmar.png" class="img-responsive" alt="SAGMAR">
</figure>
  <nav class="nav">
    <ul id="menu_principal">
      <li><a class="selector"  id="select" href="#"><span class="fa fa-home fa-4x principales"></span> INICIO</a></li>
      <li><a class="selector" href="#"><span class="fa fa-users fa-4x principales"></span> NOSOTROS</a></li>
      <li><a class="selector" href="#"><span class="fa fa-home fa-4x principales"></span> SERVICIOS</a></li>
      <li><a class="selector" href="#"><span class="fa fa-id-card fa-4x principales"></span> CONTACTO</a></li>
      <!-- <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li>
      <li><a href="#"></a></li> -->
    </ul>
  </nav>
</div>

<div class="container2 pull-right">
 <div class="container3">
  <div class="row">
    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="img/textiles.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                              <span>Comercio</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Productos textiles</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/productos4.jpg" alt="Second slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                           <h2>
                              <span>Comercio</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Artículos para la limpieza</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="img/papeleria.jpg" alt="Third slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                              <span>Comercio</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Papelería para uso escolar y de oficina</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="fa fa-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="fa fa-chevron-right"></span>
      </a>
    </div><!-- /carousel -->
  </div>
</div>


      <div class="container4">
        <div class="row">
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <h2 class="text-center">A Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <h2 class="text-center">A title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
          <div class="col-md-4">
            <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
            class="img-responsive">
            <h2 class="text-center">A title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p>
          </div>
        </div>
      </div>

</div>


<a class="go-top" href="#">Subir</a>
<?php include 'vistas/pie.php' ?>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
