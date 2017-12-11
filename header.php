<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/custom.css">
  <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/menu.css">
  
  <?php wp_head(); ?>
<body>


<!-- head -->
<div class="blue-full-width-line-bancomer"></div>
  <header class="hidden-xs body-header">
    <div class="container">
      <ul class="top-menu">
          <li>
            <i class="sprite-iconos-bbva sprite-iconos-bbva-ico-ayuda"></i>
              <a href="#" class="ico-ayuda">Ayuda Bancomer</a>
          </li>    
          <li>
            <i class="sprite-iconos-bbva sprite-iconos-bbva-ico-oficinas"></i>
            <a target="_BLANK" href="https://sucursales.mapdata.com.mx/" rel="lightbox;975;508" class="ico-oficinas" title="" id="lb_0" data-original-title="">Oficinas y Cajeros</a>
          </li>
          <li>
              <i class="sprite-iconos-bbva sprite-iconos-bbva-ico-lineabbva"></i>
              <a href="">Contáctanos</a>
          </li>
      </ul>
      <div class="logo-container">
        <a class="navbar-trigger">&nbsp;</a>  
          <a href="" class="logo-cabecera"><img height="90" class="hidden-xs" src="http://localhost/wp-content/uploads/2017/12/logo_seguros.png"></a>
      </div>
      <!-- color bar -->
      <div class="color-bar">
          <span class="first">&nbsp;</span> <span class="second">&nbsp;</span> <span class="third">&nbsp;</span> <span class="fourth">&nbsp;</span> <span class="fifth">&nbsp;</span> <span class="sixth">&nbsp;</span>
      </div>
        <!-- color bar -->
        <div class="main-menu">
        <div class="header-buttons">
          <button class="boton-azul" data-toggle="modal" data-target="#usuario"><i class="icon-16 user"></i>Acceso usuarios</button>
          <button class="boton-verde" data-toggle="modal" data-target="#registro">Registro</button>
        </div>

        <div class="grouper" role="navigation">
            <ul id="submenu-Personas" aria-labelledby="Personas" class="sub-menu with-levels active">
                  <li>
                      <a href="" class="home">
                        <img src="http://localhost/wp-content/uploads/2017/12/home.png">
                      </a>
                  </li>
                  <li>
                      <a href="" class="home">
                        <img src="http://localhost/wp-content/uploads/2017/12/circle.png">
                      </a>
                  </li>
                  <li>
                    <a href="">
                      <span id="auto" class="imghead"></span>
                      <span class="text-menu">Autos y <br> Bienes</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                        <span id="vida" class="imghead"></span>
                        <span class="text-menu">Vida y <br> Familia</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                        <span id="corazon", class="imghead"></span>
                        <span class="text-menu">Accidentes y <br> Enfermedades</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" data-original-title="" title="">
                        <span id="salud", class="imghead"></span>
                        <span class="text-menu">Salud y GMM</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" data-original-title="" title="">
                        <span id="pymes", class="imghead"></span>
                        <span class="text-menu">Pymes</span>
                      </a>       
                  </li>
                  <li>
                      <a href="#" data-original-title="" title="">
                        <span id="empresas", class="imghead"></span>
                        <span class="text-menu">Empresas</span>
                      </a>   
                  </li>
              </ul>
        </div>
        </div>
  </header>
  <nav class="navbar navbar-default visible-xs">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="#"><img class="visible-xs" style="top: -17px; position: relative;" src="http://localhost/wp-content/uploads/2017/12/logo-xs.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav col-md-11">
              <li class="col-md-1 text-center sp"><a href=""><img src="http://localhost/wp-content/uploads/2017/12/home.png"> </a></li>
              <li class="col-md-1 text-center sp"><a href=""><img src="http://localhost/wp-content/uploads/2017/12/circle.png"> </a></li>
              <li class="col-md-3 text-center sp"><a href="">Autos y Bienes</a></li>
              <li class="col-md-3 text-center sp"><a href="">Vida y Familia</a></li>
              <li class="col-md-3 text-center sp"><a href="">Accidentes y Enfermedades</a></li>
            <li class="col-md-3 text-center sp"><a href="#">Salud y GMM<span></span></a></li>
              <li class="col-md-3 text-center sp"><a href="#">Pymes<span></span></a></li>
              <li class="col-md-3 text-center sp"><a href="#">Empresas<span></span></a></li>
            </ul>
        </div>
      </div>
  </nav>
</div>
<!-- head -->


<body <?php body_class(); ?>>