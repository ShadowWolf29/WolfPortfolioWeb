<?php
  require("lib/page.php")
  //page::navini('inicio')
?>
  <!DOCTYPE html>
  <html>
    <head>
      <!--Importamos los iconos-->
      <link href='css/icons.css' rel='stylesheet'>
      <!--Importamos el materialize.css-->
      <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
      <link type='text/css' rel='stylesheet' href='css/main.css'  media='screen,projection'/>
      <link type='text/css' rel='stylesheet' href='css/tablet.css'  media='screen,projection'/>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    </head>

    <body class='grey darken-3'>

        <div id="trans" class='navbar-fixed '>
          <nav class='nav-extended grey darken-4' >
              <div  class='nav-wrapper grey darken-3' >
                <div class=''>
                  <a  href='index.php' class='brand-logo left logo_wolf hide-on-med-and-down'><img class='logo_wolf' src='img/wolf-titulo.png'></a>
                  <a  href='index.php' class='brand-logo center logo_wolf hide-on-large-only'><img class='logo_wolf' src='img/wolf-titulo.png'></a>
                  <a href='#' data-target='mobile-demo' class='sidenav-trigger right'><i class='material-icons'>menu</i></a>
                  <ul id='nav-mobile' class='right hide-on-med-and-down'>
                    <li><a href='sass.html'>Nosotros</a></li>
                    <li><a href='badges.html'>STAFF</a></li>
                    <li><a href='sass.html'>Noticias</a></li>
                    <li><a href='sass.html'>Contactanos</a></li>
                    <li><a href='badges.html'>Servicios</a></li>
                    <li><a href='sass.html' >Directos</a></li>
                    <li class='red darken-3'><a href='sass.html' >Tienda</a></li>
                    
                  </ul>
                </div>
              </div>
            </nav>
          </div>

          <!--parte del movil-->
          <ul class="sidenav" id="mobile-demo">
              <div class="background center">
                  <img src="img/logo_prueba.png">
                </div>
                <div class='center'><h3>Categorias</h3></div>
                <div class="divider black"></div>
                <li><a href='sass.html'>Nosotros</a></li>
                    <li><a href='badges.html'>STAFF</a></li>
                    <li><a href='sass.html'>Noticias</a></li>
                    <li><a href='sass.html'>Contactanos</a></li>
                    <li><a href='badges.html'>Servicios</a></li>
                    <li><a href='sass.html' >Tienda</a></li>
            </ul>

            <!--titulo-->
            <div class='white-text center-align quan '><h3>NOTICIAS</h3></div><br>

            <!--parte del slider-->
            <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="img/lol.jpg">
                    <div class="caption right-align">
                      <h3>titulo 1</h3>
                      <h5 class="light grey-text text-lighten-3">eslogan 1</h5>
                    </div>
                  </li>
                  <li>
                    <img src="img/gamer.jpg">
                    <div class="caption right-align">
                      <h3>titulo 2</h3>
                      <h5 class="light grey-text text-lighten-3">eslogan 2</h5>
                    </div>
                  </li>
                  <li>
                    <img src="img/gamer2.jpg">
                    <div class="caption left-align">
                      <h3>titulo 3</h3>
                      <h5 class="light grey-text text-lighten-3">eslogan 3</h5>
                    </div>
                  </li>
                  <li>
                    <img src="img/gamer3.jpg">
                    <div class="caption right-align">
                      <h3>titulo 4</h3>
                      <h5 class="light grey-text text-lighten-3">eslogan 4</h5>
                    </div>
                  </li>
                </ul>
              </div>
              <br>

       <!--Patrocinadores-->
       
      <div class='row'>
        <div class='container'>
            <div class="col s12 m3 center">
                <img src="img/bla.png" class='responsive-img'>
            </div>

            <div class="col s12 m3 center">
                <img src="img/bla.png" class='responsive-img'>
            </div>

            <div class="col s12 m3 center">
                <img src="img/bla.png" class='responsive-img'>
            </div>

            <div class="col s12 m3 center">
                <img src="img/bla.png" class='responsive-img'>
            </div>
          </div>
        </div>  

        <!--Juegos-->
        <div class='grey darken-4'><div class='white-text center-align quan '><h3>EQUIPOS</h3></div><br>
        <div class='row'>
              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <img src="img/bla.png" class='responsive-img'>
                  </div> 
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <img src="img/bla.png" class='responsive-img'>
                  </div> 
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <img src="img/bla.png" class='responsive-img'>
                  </div> 
                </div>
              </div>

              <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">
                    <img src="img/bla.png" class='responsive-img'>
                  </div> 
                </div>
              </div>
        </div>  
<?php
  page::js();
?>

     