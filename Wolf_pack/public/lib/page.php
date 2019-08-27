<?php

class page
{
  public static function nav($nombre = 'sss')
  {
    session_start();
    print("
    <!DOCTYPE html>
    <html>
      <head>
        <title>"+$nombre+"</title>
        <!--Importamos los iconos-->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <!--Importamos el materialize.css-->
        <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
        <link type='text/css' rel='stylesheet' href='css/main.css'  media='screen,projection'/>

        <!--Let browser know website is optimized for mobile-->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
      </head>

      <body>
          <nav class='nav-extended' >
              <div class='nav-wrapper blue accent-2' >
                <a href='#' class='center brand-logo'>Logo</a>
                <a href='#' data-target='mobile-demo' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
                <ul id='nav-mobile' class='right hide-on-med-and-down'>
                  <li><a href='sass.html'><i class='left material-icons'>people</i>Quienes somos </a></li>
                  <li><a href='badges.html'><i class='left material-icons'>security</i>Servicios</a></li>
                  <a class='waves-effect waves-light btn  blue darken-4'><i class='material-icons left'>email</i>Contactanos</a>
                </ul>
              </div>
            </nav>
      ");
  }
  public static function navini($nombre)
  {
    session_start();
    print("
    <!DOCTYPE html>
    <html>
      <head>
        <!--Importamos los iconos-->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <!--Importamos el materialize.css-->
        <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>
        <link type='text/css' rel='stylesheet' href='css/main.css'  media='screen,projection'/>

        <!--Let browser know website is optimized for mobile-->
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
      </head>

      <body>
          <nav class='nav-extended' >
              <div class='nav-wrapper blue accent-2' >
                <a href='#' class='center brand-logo'>Logo</a>
                <a href='#' data-target='mobile-demo' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
                <ul id='nav-mobile' class='right hide-on-med-and-down'>
                  <li><a href='sass.html'><i class='left material-icons'>people</i>Quienes somos </a></li>
                  <li><a href='badges.html'><i class='left material-icons'>security</i>Servicios</a></li>
                  <a class='waves-effect waves-light btn  blue darken-4'><i class='material-icons left'>email</i>Contactanos</a>
                </ul>
              </div>
            </nav>
      ");
  }
  public static function js()
  {
      print("
      <!--JavaScript at end of body for optimized loading-->
      <script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
      <script type='text/javascript' src='js/materialize.min.js'></script>
      <script type='text/javascript' src='js/ini.js'></script>
    </body>
  </html>
      ");
  }
}

?>