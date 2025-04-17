<?php
  $rol = $_POST['rol'];
?>
<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <title>SIECRO</title>
    <link rel="stylesheet" type="text/css" href="../assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../assets/lib/theme-switcher/theme-switcher.min.css"/><link type="text/css" href="../assets/css/style.css" rel="stylesheet">  </head>

<nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">

          <div class="navbar-header">
            <div class="page-title"><span>Plataforma</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="../vistas/dashboard.php" class="navbar-brand"></a>
          </div><a href="#" class="am-toggle-right-sidebar"><span class="icon s7-menu2"></span></a><a href="#" data-toggle="collapse" data-target="#am-navbar-collapse" class="am-toggle-top-header-menu collapsed"><span class="icon s7-angle-down"></span></a>
          <div id="am-navbar-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right am-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../assets/img/avatar3.jpg"><span class="user-name"><h2><?php echo $_SESSION['username']; ?></h2></span><span class="angle-down s7-angle-down"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"> <span class="icon s7-user"></span>Mi Perfil</a></li>
                  <li><a href="#"> <span class="icon s7-config"></span>Configuracion</a></li>
                  <li><a href="../logout.php"> <span class="icon s7-power"></span>Cerrar Sesion</a></li>
                </ul>
              </li>
            </ul>

          </div>
        </div>
      </nav>