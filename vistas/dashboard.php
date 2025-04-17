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
                <li><a href="dashboard3.html"><span class="label label-primary pull-right">New</span>Version 3</a>
                </li>
                <li><a href="dashboard4.html"><span class="label label-primary pull-right">New</span>Version 4</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-diamond"></i><span>UI Elements</span></a>
              <ul class="sub-menu">
                <li><a href="ui-general.html">General</a>
                </li>
                <li><a href="ui-alerts.html">Alerts</a>
                </li>
                <li><a href="ui-panels.html">Panels</a>
                </li>
                <li><a href="ui-buttons.html">Buttons</a>
                </li>
                <li><a href="ui-modals.html">Modals</a>
                </li>
                <li><a href="ui-notifications.html">Notifications</a>
                </li>
                <li><a href="ui-icons.html">Icons</a>
                </li>
                <li><a href="ui-grid.html">Grid</a>
                </li>
                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
                </li>
                <li><a href="ui-chat.html"><span class="label label-primary pull-right">New</span>Chat Component</a>
                </li>
                <li><a href="ui-nestable-lists.html">Nestable Lists</a>
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
                <li><a href="form-wizard.html">Wizard</a>
                </li>
                <li><a href="form-masks.html">Input Masks</a>
                </li>
                <li><a href="form-wysiwyg.html">WYSIWYG Editor</a>
                </li>
                <li><a href="form-upload.html">Multi Upload</a>
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
            <li class="parent"><a href="#"><i class="icon s7-mail"></i><span>Email</span></a>
              <ul class="sub-menu">
                <li><a href="email-inbox.html">Inbox</a>
                </li>
                <li><a href="email-read.html">Email Detail</a>
                </li>
                <li><a href="email-compose.html">Email Compose</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-browser"></i><span>Layouts</span></a>
              <ul class="sub-menu">
                <li><a href="layouts-nosidebar-left.html">Without Left Sidebar</a>
                </li>
                <li><a href="layouts-nosidebar-right.html">Without Right Sidebar</a>
                </li>
                <li><a href="layouts-nosidebars.html">Without Both Sidebars</a>
                </li>
                <li><a href="layouts-white-header.html">White Header</a>
                </li>
                <li><a href="layouts-fixed-sidebar.html">Fixed Left Sidebar</a>
                </li>
                <li><a href="layouts-left-sidebar-click.html"><span class="label label-primary pull-right">New</span>Open left sidebar on click</a>
                </li>
                <li><a href="pages-blank-aside.html">Page Aside</a>
                </li>
              </ul>
            </li>
            <li class="parent"><a href="#"><i class="icon s7-map-marker"></i><span>Maps</span></a>
              <ul class="sub-menu">
                <li><a href="maps-google.html">Google Maps</a>
                </li>
                <li><a href="maps-vector.html">Vector Maps</a>
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
    
      include '../templates/header.php';

    ?>

  </body>
</html>

</body>
</html>
