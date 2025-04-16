<?php
require '../includes/session.php';
?>
<!DOCTYPE html>
<html lang="es">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/favicon.html">
    <title>SIECRO</title>
    <link rel="stylesheet" type="text/css" href="../assets/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="../assets/lib/theme-switcher/theme-switcher.min.css"/><link type="text/css" href="../assets/css/style.css" rel="stylesheet">  </head>

    <?php include '../templates/header.php' ?>
  <body>
    <div class="am-wrapper am-fixed-sidebar">

      <div class="am-left-sidebar">
        <div class="content">
          <div class="am-logo"></div>
          <ul class="sidebar-elements">
            <li class="parent"><a href="#"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
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
      <div class="am-content">
        <div class="main-content">
          <div class="row">
            <div class="col-md-7">
              <div class="widget widget-fullwidth line-chart">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Download Stats</span>
                </div>
                <div class="chart-container">
                  <div class="counter">
                    <div class="value">19.5%</div>
                    <div class="desc">New Downloads</div>
                  </div>
                  <div id="line-chart-live" style="height: 285px;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="row">
                <div class="col-md-6">
                            <div class="widget widget-tile">
                              <div class="data-info">
                                <div data-toggle="counter" data-end="18.6" data-decimals="1" data-suffix="%" class="value">0%</div>
                                <div class="desc">Download Files</div>
                              </div>
                              <div class="icon"><span class="s7-cloud-download"></span></div>
                            </div>
                </div>
                <div class="col-md-6">
                            <div class="widget widget-tile">
                              <div class="data-info">
                                <div data-toggle="counter" data-end="33" data-suffix="%" class="value">0%</div>
                                <div class="desc">Server CPU</div>
                              </div>
                              <div class="icon"><span class="s7-timer"></span></div>
                            </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                            <div class="widget widget-tile">
                              <div class="data-info">
                                <div data-toggle="counter" data-end="156" class="value">0</div>
                                <div class="desc">Support Tickets</div>
                              </div>
                              <div class="icon"><span class="s7-graph1"></span></div>
                            </div>
                </div>
                <div class="col-md-6">
                            <div class="widget widget-tile">
                              <div class="data-info">
                                <div data-toggle="counter" data-decimals="1" data-end="7.5" data-suffix="K" class="value">0</div>
                                <div class="desc">Followers</div>
                              </div>
                              <div class="icon"><span class="s7-like2"></span></div>
                            </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="widget widget-tile widget-tile-wide">
                    <div class="tile-info">
                      <div class="icon"><span class="s7-like"></span></div>
                      <div class="data-info">
                        <div class="title">Total Purchases</div>
                        <div class="desc">Monthly sales number</div>
                      </div>
                    </div>
                    <div class="tile-value"><span data-toggle="counter" data-decimals="2" data-end="28458" data-prefix="$">$0</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="widget widget-fullwidth line-chart">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Site Visits</span>
                </div>
                <div class="chart-container">
                  <div class="counter">
                    <div class="value">80%</div>
                    <div class="desc">More Visits</div>
                  </div>
                  <div id="line-chart1" style="height: 290px;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Social</span>
                </div>
                <div class="chart-container">
                  <div id="pie-chart4" style="height: 260px;"></div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="widget widget-fullwidth">
                <div class="widget-head">
                  <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div><span class="title">Earnings</span>
                </div>
                <div class="chart-container">
                  <div class="counter">
                    <div class="value">35%</div>
                    <div class="desc">More Sales</div>
                  </div>
                  <div id="bar-chart1" style="height: 290px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="widget widget-calendar">
                <div class="cal-container">
                  <div class="cal-notes"><span class="day">Thursday</span><span class="date">September 24</span><span class="title">Notes<span class="icon s7-plus"></span></span>
                    <ul>
                      <li><span class="hour">14h</span><span class="event-name">Meeting with investors</span></li>
                      <li><span class="hour">8h</span><span class="event-name">Dentist date</span></li>
                    </ul>
                  </div>
                  <div class="cal-calendar">
                    <div class="ui-datepicker"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget widget-weather">
                <div class="wt-container">
                  <div class="wt-hour"><span class="hour">2:45</span><span class="meridian">PM</span></div>
                  <div class="wt-info">
                    <div class="wt-day"><span class="day">Today</span>
                      <canvas height="35" width="55" class="icon1"></canvas><span class="date">30°/28°</span>
                    </div>
                    <div class="wt-day"><span class="day">Tue</span>
                      <canvas height="35" width="45" class="icon2"></canvas><span class="date">28°/25°</span>
                    </div>
                    <div class="wt-day"><span class="day">Wed</span>
                      <canvas height="35" width="45" class="icon3"></canvas><span class="date">23°/18°</span>
                    </div>
                  </div>
                  <div class="wt-location"><span class="icon s7-map-marker"></span><span class="city">Toronto, Canada</span></div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="widget widget-download-list">
                <div class="widget-head"><span class="icon s7-cloud"></span><span class="title">Download Files</span></div>
                <ul class="widget-list">
                  <li><a href="#">Faucibus tempor<span class="icon s7-download"></span></a></li>
                  <li><a href="#">Commodo pharetra<span class="icon s7-download"></span></a></li>
                  <li><a href="#">Aliquam aliquet<span class="icon s7-download"></span></a></li>
                  <li><a href="#">Phasellus accumsan<span class="icon s7-download"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="am-right-sidebar">
        <div class="sb-content">
          <div class="user-info"><img src="assets/img/avatar.jpg"><span class="name"><?php echo $_SESSION['username']; ?><span class="status"></span></span><span class="position">Art Director</span></div>
          <div class="tab-navigation">
            <ul role="tablist" class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#tab1" aria-controls="home" role="tab" data-toggle="tab"> <span class="icon s7-smile"></span></a></li>
              <li role="presentation"><a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab"> <span class="icon s7-chat"></span></a></li>
              <li role="presentation"><a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab"> <span class="icon s7-help2"></span></a></li>
              <li role="presentation"><a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab"> <span class="icon s7-ticket"></span></a></li>
            </ul>
          </div>
          <div class="tab-panel">
            <div class="tab-content">
              <div id="tab1" role="tabpanel" class="tab-pane announcement active am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>Announcement</h2>
                    <ul>
                      <li>
                        <div class="icon"><span class="icon s7-sun"></span></div>
                        <div class="content"><a href="#">Happy Day</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                      <li>
                        <div class="icon"><span class="icon s7-gift"></span></div>
                        <div class="content"><a href="#">Congratulations Developers</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                      <li>
                        <div class="icon"><span class="icon s7-star"></span></div>
                        <div class="content"><a href="#">High Score</a><span>Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</span></div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="search">
                  <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                </div>
              </div>
              <div id="tab2" role="tabpanel" class="tab-pane chat">
                <div class="chat-contacts">
                  <div class="chat-sections">
                    <div class="am-scroller nano">
                      <div class="content nano-content">
                        <h2>Recent</h2>
                        <div class="recent">
                          <div class="user"><a href="#"><img src="assets/img/avatar4.jpg">
                              <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                              <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar3.jpg">
                              <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                        </div>
                        <h2>Contacts</h2>
                        <div class="contact">
                          <div class="user"><a href="#"><img src="assets/img/avatar6.jpg">
                              <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar7.jpg">
                              <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                          <div class="user"><a href="#"><img src="assets/img/avatar8.jpg">
                              <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="search">
                    <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                  </div>
                </div>
                <div class="chat-window">
                  <div class="title">
                    <div class="user"><img src="assets/img/avatar7.jpg">
                      <h2>Maggie jackson</h2><span>Active 1h ago</span>
                    </div><span class="icon return s7-angle-left"></span>
                  </div>
                  <div class="chat-messages">
                    <div class="am-scroller nano">
                      <div class="content nano-content">
                        <ul>
                          <li class="friend">
                            <div class="msg">Hello</div>
                          </li>
                          <li class="self">
                            <div class="msg">Hi, how are you?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">Good, I'll need support with my pc</div>
                          </li>
                          <li class="self">
                            <div class="msg">Sure, just tell me what is going on with your computer?</div>
                          </li>
                          <li class="friend">
                            <div class="msg">I don't know it just turns off suddenly</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="chat-input">
                    <div class="input-wrapper"><span class="photo s7-camera"></span>
                      <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg s7-paper-plane"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab3" role="tabpanel" class="tab-pane faqs am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>FAQs</h2>
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group accordion">
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="true" aria-controls="collapseOne">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Under Error 352</span></a></h4>
                        </div>
                        <div id="faq1" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Failure platform</span></a></h4>
                        </div>
                        <div id="faq2" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">Error 404</span></a></h4>
                        </div>
                        <div id="faq3" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                      <div class="panel">
                        <div role="tab" class="panel-heading">
                          <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                              <div class="icon"><span class="s7-angle-down"></span></div><span class="title">New workstation</span></a></h4>
                        </div>
                        <div id="faq4" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                          <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="search">
                  <input type="text" placeholder="Search..." name="q"><span class="s7-search"></span>
                </div>
              </div>
              <div id="tab4" role="tabpanel" class="tab-pane ticket am-scroller nano">
                <div class="nano-content">
                  <div class="content">
                    <h2>New Ticket</h2>
                    <form>
                      <div class="form-group send-ticket">
                        <input type="text" placeholder="Title" class="form-control">
                      </div>
                      <div class="form-group send-ticket">
                        <textarea rows="3" placeholder="Write Here..." class="form-control"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg">Create Ticket</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script src="../assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="../assets/js/main.js" type="text/javascript"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="../assets/lib/skycons/skycons.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="../assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard2();
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>

  </body>
</html>

</body>
</html>
