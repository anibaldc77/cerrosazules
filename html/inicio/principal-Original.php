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
    <link href="../../externos/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet">	
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

<?php 
	/*INICIO ÁREA DE PÁGINAS*/
	
	include_once("lote.php");
	
	
	/*FIN ÁREA DE PÁGINAS*/
?>
			
			
			
      </div>
      <!-- END MAIN -->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START FOOTER -->
</div>
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
      <script type="text/javascript" src="../../js/materialize.js"></script>
      <!--prism-->
      <script type="text/javascript" src="../../externos/prism/prism.js"></script>
      <!--scrollbar-->
      <script type="text/javascript" src="../../externos/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="../../externos/data-tables/js/jquery.dataTables.min.js"></script>
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
      <script type="text/javascript" src="../../js/plugins.js"></script>
      <!--custom-script.js - Add your own theme custom JS-->
      <script type="text/javascript" src="../../js/custom-script.js"></script>
    <!--form-elements.js - Page Specific JS codes-->
    <script type="text/javascript" src="../../js/scripts/form-elements.js"></script>
		<?php }else{
      session_destroy(); 
      header("Location: index.php?E=1&P=4"); 
	
}
?>
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/collapsible-menu/ui-extended-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Mar 2018 18:35:03 GMT -->
</html>