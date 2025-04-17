<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <title>SIECRO</title>
    
    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.nanoscroller/css/nanoscroller.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/theme-switcher/theme-switcher.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/themes/theme-google.css"/>  


    <![endif]-->
</head>

<body class="am-splash-screen">
    <div class="am-wrapper am-login">
        <div class="am-content">
            <div class="main-content">
                <div class="login-container">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <img src="assets/img/logo.png" alt="logo" width="150px" height="150px" class="logo-img">
                            <h1 style="color:white ; font-size: 20px">SIECRO</h1>
                            <span>Iniciar sesión</span>
                        </div>
                        <?php if(isset($_SESSION['error'])): ?>
                            <p style="color: red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
                        <?php endif; ?>
                        <div class="panel-body">
                            <form action="controladores/login.php" method="POST">
                                <div class="login-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon s7-user"></i></span>
                                            <input id="username" name="username" type="text" placeholder="Usuario" autocomplete="off" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon s7-lock"></i></span>
                                            <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group login-submit">
                                        <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/lib/jquery/jquery.min.js"></script>
    <script src="assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/theme-switcher/theme-switcher.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function(){
            App.init();
            App.livePreview();
        });
    </script>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-68396117-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
