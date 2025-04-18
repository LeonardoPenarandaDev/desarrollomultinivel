<?php
    require '../includes/session.php';
    include '../templates/header.php';

?>
  <body>
    <div class="am-wrapper am-fixed-sidebar">

      <div class="am-left-sidebar">
        <div class="content">
          <div class="am-logo"></div>
          <ul class="sidebar-elements">
            <li class="parent"><a href="#"><i class="icon s7-monitor"></i><span>Plataforma</span></a>
              <ul class="sub-menu">
                <li><a href="index.html">Version 1</a>
                </li>
                <li class="active"><a href="dashboard2.html">Version 2</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-diamond"></i><span>UI Elements</span></a>
              <ul class="sub-menu">
                <li><a href="ui-general.html">General</a>
                </li>
                <li><a href="ui-alerts.html">Alerts</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-graph"></i><span>Charts</span></a>
              <ul class="sub-menu">
                <li><a href="charts-flot.html">Flot</a>
                </li>
                <li><a href="charts-morris.html">Morris.js</a>
                </li>
                <li><a href="charts-sparkline.html">Sparklines</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-ribbon"></i><span>Forms</span></a>
              <ul class="sub-menu">
                <li><a href="form-elements.html">Elements</a>
                </li>
                <li><a href="form-validation.html">Validation</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-box2"></i><span>Tables</span></a>
              <ul class="sub-menu">
                <li><a href="tables-general.html">General</a>
                </li>
                <li><a href="tables-datatables.html">Data Tables</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-note2"></i><span>Pages</span></a>
              <ul class="sub-menu">
                <li><a href="pages-blank.html">Blank Page</a>
                </li>
                <li><a href="pages-blank-header.html">Blank Page Header</a>
                </li>
                <li><a href="pages-login.html">Login</a>
                </li>
                <li><a href="pages-404.html">404 Page</a>
                </li>
                <li><a href="pages-sign-up.html">Sign Up</a>
                </li>
                <li><a href="pages-forgot-password.html">Forgot Password</a>
                </li>
                <li><a href="pages-profile.html">Profile</a>
                </li>
                <li><a href="pages-calendar.html">Calendar</a>
                </li>
                <li><a href="pages-gallery.html">Gallery</a>
                </li>
              </ul>
            </li>

          </ul>
          <!--Sidebar bottom content-->
        </div>
      </div>

      <nav class="am-right-sidebar">
        <div class="sb-content">
          <div class="user-info"><img src="../assets/img/avatar3.jpg"><span class="name"><?php echo $_SESSION['username']; ?><span class="status"></span></span><span class="position"><?php echo $_SESSION['rol']; ?></span></div>
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab"> <span class="icon s7-smile"></span></a></li>
              <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab"> <span class="icon s7-chat"></span></a></li>
              <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab"> <span class="icon s7-help2"></span></a></li>
              <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab"> <span class="icon s7-ticket"></span></a></li>
            </ul>
          </div>

        </div>
      </nav>
    </div>
    <?php

      include '../templates/footer.php';

    ?>

  </body>
</html>

</body>
</html>
