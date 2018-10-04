<?php 
$S = isset ($_REQUEST['S'])?$_REQUEST['S']:""; //Sistema
$A = isset ($_REQUEST['A'])?$_REQUEST['A']:""; //Acción Menú
$SA = isset ($_REQUEST['SA'])?$_REQUEST['SA']:""; //Sub Acción Menú
$Accion = isset ($_REQUEST['Accion'])?$_REQUEST['Accion']:""; //Acción Formulario

?>
<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->
  
<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/collapsible-menu/ui-extended-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 18:34:55 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
	

<?php

	include_once('include/parametros.php');
	include_once('../../clases/sysbarrio/funciones.class.php');
	include_once('../../clases/sysbarrio/configuration.php');
	include_once('../../clases/sysbarrio/usuarioEx.class.php');
	include_once('../../clases/sysbarrio/auditausuario.class.php');
	include_once('../../clases/sysbarrio/permisoEx.class.php');

	
	include_once('../../clases/sysbarrio/personaex.class.php');
	
$funcion = new Funciones();

include_once ("seguridad.php");
include_once("../../clases/sysbarrio/menu.class.php"); 
	

	
if(($funcion->permControl(SISTEMABASE,3))) // Permiso para Acceder
{
	
?>

<title>Sistema de Reportes</title>

  <!-- Favicons-->
 <!-- <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32"> -->

  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="images/favicon" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="images/favicon" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="images/favicon" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="images/favicon" sizes="16x16" href="images/favicon/favicon-16x16Sistema Tarjetas.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">  
  <!-- Favicons-->
  <!-- For iPhone -->
<!--  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="msapplication-TileColor" content="#00bcd4" />
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />-->
  <meta name="keywords" content="Sistema Tarjetas" />
  <meta name="description" content="Sistema Sistema Tarjetas" />
  <meta name="author" content="Depto Sistemas - Sistema Tarjetas" />
  <meta name="robots" content="NOINDEX,NOFOLLOW,NOARCHIVE,NOODP,NOSNIPPET" />
	
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="../../css/materialize/materialize.css" type="text/css" rel="stylesheet">
    <link href="../../css/materialize/style.css" type="text/css" rel="stylesheet">
	<!-- Fonts CSS-->
  	<link href="../../css/fonts/adc/style.css" type="text/css" rel="stylesheet" media="screen,projection">		
    <!-- Custome CSS-->
    <link href="../../css/custom/custom.css" type="text/css" rel="stylesheet">
 
	<!-- CSS VALIDACIÓN -->
	<link href="../../externos/jquery-validation/jquery.validate.css" type="text/css" rel="stylesheet" media="screen,projection">  

	    <!-- Custome CSS-->    
    <link href="css/sitio.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../../externos/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

	<link href="../../externos/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="../../externos/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">	

	
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../clases/materialize/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../clases/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../externos/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">	
	<!-- MENSAJES -->
  <link href="../../externos/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- MENSAJES -->
	
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
   <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-purple-deep-orange gradient-shadow">
            <ul class="right hide-on-med-and-down">
				<li>
					<a href="#" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
					  <span class="avatar-status avatar-online">
						  <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
						<!--<img src="../../images/avatar/avatar-7.png" alt="avatar">-->
						<i></i>
					  </span>
					</a>
				</li>
				<li>
					<a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
					  <i class="material-icons">settings_overscan</i>
					</a>
				</li>
				
			</ul>
 
				   
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=2" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=3" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Config</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=4" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Ayuda</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Bloquear</a>
              </li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Salir</a>
              </li>
            </ul>				   
                </div>
  			
            </nav>
        </div>
        <!-- end header nav-->
  </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
          <div class="brand-sidebar">
            <h1 class="logo-wrapper">
              <a href="#" class="brand-logo darken-1">
                <img src="images/logob.png" alt="Sistema Tarjetas">
                <span class="logo-text hide-on-med-and-down"></span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>

		  
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
			

            <?php
			 	$menu = new muestraMenu();  
 				echo $menu->armaMenu(SISTEMABASE,$A,$SA,1);
			//	$prueba=$menu->padrehijos(SISTEMABASE,1);
		//print_r($prueba);
			?>
         
        </ul>
        
<!--        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>-->
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>		  
        </aside>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper">
<!-- Muestra esta Parte SOLO cuando se achica la pantalla -->
            <div class="header-search-wrapper grey hide-on-large-only">
			
                <a href="#" class="right waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown1">
                  <span class="avatar-status avatar-online">
					  <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    <!--<img src="../../images/avatar/avatar-7.png" alt="avatar">-->
                    <i></i>
                  </span>
                </a>	

            <ul id="profile-dropdown1" class="dropdown-content">
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=2" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=3" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Config</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=4" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Ayuda</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Bloquear</a>
              </li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Salir</a>
              </li>
            </ul>	
            </div>
<!-- FIN Muestra esta Parte SOLO cuando se achica la pantalla -->
<!-- INICIA UN ESPACIO PARA COLOCAR UN MENÚ En la parte superior del de la parte central -->

          </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Título de la Sección</h5>

                </div>
                <div class="col s2 m6 l6">
                 
                </div>
              </div>
            </div>
			<!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
              <p class="caption">The advanced buttons contain gradient color buttons with customization options.</p>
              <div class="divider"></div>
              <!--Gradient Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Gradient Button</h4>
                <div class="row">
                  <div class="col s12">
                    <p>Here are the examples of regular & fab style gradient button with medium & large size. You can apply any gradient color css class to material buttons i.e <code>.gradient-45deg-purple-deep-orange</code></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn waves-effect waves-light gradient-45deg-purple-deep-orange">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-light-blue-cyan">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-red-pink">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-amber-amber">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-green-teal">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-red-pink">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-amber-amber">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-green-teal">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-purple-deep-orange">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-light-blue-cyan">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-red-pink">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-amber-amber">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-green-teal">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-purple-deep-orange">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-light-blue-cyan">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-red-pink">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-amber-amber">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-green-teal">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <p>If you want to add shadow also use <code>.gradient-shadow</code> class. All othere materialize framwork button classes will support with gradient buttons.</p>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-red-pink gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-green-teal gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-red-pink gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-green-teal gradient-shadow">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-green-teal gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12">
                    <p>
                      <span class="font-weight-600">Note:</span> Please refer <a href="css-color.html" target="_blank">css-color.html</a> file for all colors classes & more details.</p>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <!--Round Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Round Button</h4>
                <div class="row">
                  <div class="col s12">
                    <p>For round button you need to use class <code>.border-round</code></p>
                  </div>
                  <div class="col s12">
                    <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1">copy</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1">upload</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-amber-amber box-shadow-none border-round mr-1">backup</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-green-teal box-shadow-none border-round mr-1">download</a>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <!--Border Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Gradient button with shadow</h4>
                <div class="row">
                  <div class="col s12">
                    <p>For shadow button you ave to use class <code>z-depth-1, z-depth-2, z-depth-3, z-depth-4, z-depth-5</code></p>
                  </div>
                  <div class="col s12">
                    <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan z-depth-4 mr-1">copy</a>
                    <a class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1">upload</a>
                    <a class="waves-effect waves-light btn gradient-45deg-amber-amber z-depth-4 mr-1">backup</a>
                    <a class="waves-effect waves-light btn gradient-45deg-green-teal z-depth-4 mr-1">download</a>
                  </div>
                </div>
              </div>
              <!-- Floating Action Button -->
              <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                  <i class="material-icons">add</i>
                </a>
                <ul>
                  <li>
                    <a href="css-helpers.html" class="btn-floating blue">
                      <i class="material-icons">help_outline</i>
                    </a>
                  </li>
                  <li>
                    <a href="app-widget.html" class="btn-floating green">
                      <i class="material-icons">widgets</i>
                    </a>
                  </li>
                  <li>
                    <a href="app-calendar.html" class="btn-floating amber">
                      <i class="material-icons">today</i>
                    </a>
                  </li>
                  <li>
                    <a href="app-email.html" class="btn-floating red">
                      <i class="material-icons">mail_outline</i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Floating Action Button -->
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
                <div id="chatapp" class="col s12">
                  <div class="collection border-none">
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Elizabeth Elliott </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Mary Adams </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Caleb Richards </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-4.png" alt="" class="circle cyan">
                      <span class="line-height-0">June Lane </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-5.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Edward Fletcher </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-6.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Crystal Bates </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-7.png" alt="" class="circle cyan">
                      <span class="line-height-0">Nathan Watts </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-8.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Willard Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-9.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Ronnie Ellis </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Gwendolyn Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-2.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Daniel Russell </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Sarah Graves </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-4.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Andrew Hoffman </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="../../images/avatar/avatar-5.png" alt="" class="circle cyan">
                      <span class="line-height-0">Camila Lynch </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                    </a>
                  </div>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside>
        <!-- END RIGHT SIDEBAR NAV-->
        </div>
        <!-- END WRAPPER -->
      </div>
      <!-- END MAIN -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START FOOTER -->
      <footer class="page-footer gradient-45deg-purple-deep-orange">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-4" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-4" href="https://pixinvent.com/">PIXINVENT</a></span>
          </div>
        </div>
      </footer>
      <!-- END FOOTER -->
      <!-- ================================================
    Scripts
    ================================================ -->
      <!-- jQuery Library -->
      <script type="text/javascript" src="../../externos/jquery-3.2.1.min.js"></script>
      <!--materialize js-->
      <script type="text/javascript" src="../../js/materialize.min.js"></script>
      <!--prism-->
      <script type="text/javascript" src="../../externos/prism/prism.js"></script>
      <!--scrollbar-->
      <script type="text/javascript" src="../../externos/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
      <script type="text/javascript" src="../../js/plugins.js"></script>
      <!--custom-script.js - Add your own theme custom JS-->
      <script type="text/javascript" src="../../js/custom-script.js"></script>
		
		<?php }else{
      session_destroy(); 
      header("Location: index.php?E=1&P=4"); 
	
}
?>
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/collapsible-menu/ui-extended-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 18:35:03 GMT -->
</html>