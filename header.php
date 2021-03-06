<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
   <meta name="author" content="AdminKit">
   <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

   <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

   <title>Pensar Education </title>

   <link href="css/app.css" rel="stylesheet">
</head>

<body>
   <div class="wrapper">
      <nav id="sidebar" class="sidebar">
         <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.html">
               <span class="align-middle">Pensar Education</span>
            </a>

            <ul class="sidebar-nav">
               <li class="sidebar-header">
                  Pages
               </li>

               <li class="sidebar-item <?php if ($page == 'home') {
                                          echo 'active';
                                       } ?>">
                  <a class="sidebar-link" href="index.php">
                     <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                  </a>
               </li>

               <li class="sidebar-item <?php if ($page == 'topic') {
                                          echo 'active';
                                       } ?>">
                  <a class="sidebar-link" href="topic.php">
                     <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Topic</span>
                  </a>
               </li>

               <li class="sidebar-item <?php if ($page == 'lesson') {
                                          echo 'active';
                                       } ?>">
                  <a class="sidebar-link" href="lesson.php">
                     <i class="align-middle" data-feather="file-text"></i> <span class="align-middle">Lesson</span>
                  </a>
               </li>

               <li class="sidebar-item <?php if ($page == 'quiz') {
                                          echo 'active';
                                       } ?>">
                  <a class="sidebar-link" href="quiz.php">
                     <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">Quiz</span>
                  </a>
               </li>
               <li class="sidebar-item <?php if ($page == 'student') {
                                          echo 'active';
                                       } ?>">
                  <a class="sidebar-link" href="quiz.php">
                     <i class="align-middle" data-feather="users"></i> <span class="align-middle">Students</span>
                  </a>
               </li>
               <!-- 

               <li class="sidebar-item">
                  <a href="#auth" data-toggle="collapse" class="sidebar-link collapsed">
                     <i class="align-middle" data-feather="users"></i> <span class="align-middle">Auth</span>
                  </a>
                  <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                     <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-in.html">Sign In</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="pages-sign-up.html">Sign Up</a></li>
                  </ul>
               </li>

               <li class="sidebar-header">
                  Tools & Components
               </li>
               <li class="sidebar-item">
                  <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed">
                     <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">UI Elements</span>
                  </a>
                  <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-alerts.html">Alerts</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-buttons.html">Buttons</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-cards.html">Cards</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-general.html">General</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-grid.html">Grid</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-modals.html">Modals</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="ui-typography.html">Typography</a></li>
                  </ul>
               </li>

               <li class="sidebar-item">
                  <a class="sidebar-link" href="icons-feather.html">
                     <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                  </a>
               </li>

               <li class="sidebar-item">
                  <a data-target="#forms" data-toggle="collapse" class="sidebar-link collapsed">
                     <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Forms</span>
                  </a>
                  <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-parent="#sidebar">
                     <li class="sidebar-item"><a class="sidebar-link" href="forms-layouts.html">Form Layouts</a></li>
                     <li class="sidebar-item"><a class="sidebar-link" href="forms-basic-inputs.html">Basic Inputs</a></li>
                  </ul>
               </li>

               <li class="sidebar-item">
                  <a class="sidebar-link" href="tables-bootstrap.html">
                     <i class="align-middle" data-feather="list"></i> <span class="align-middle">Tables</span>
                  </a>
               </li>

               <li class="sidebar-header">
                  Plugins & Addons
               </li>

               <li class="sidebar-item">
                  <a class="sidebar-link" href="charts-chartjs.html">
                     <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                  </a>
               </li>

               <li class="sidebar-item">
                  <a class="sidebar-link" href="maps-google.html">
                     <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                  </a>
               </li> -->
            </ul>

            <!-- <div class="sidebar-cta">
               <div class="sidebar-cta-content">
                  <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                  <div class="mb-3 text-sm">
                     Are you looking for more components? Check out our premium version.
                  </div>
                  <a href="https://adminkit.io/pricing" target="_blank" class="btn btn-primary btn-block">Upgrade to Pro</a>
               </div>
            </div> -->
         </div>
      </nav>

      <div class="main">
         <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle d-flex">
               <i class="hamburger align-self-center"></i>
            </a>

            <!-- <form class="d-none d-sm-inline-block">
               <div class="input-group input-group-navbar">
                  <input type="text" class="form-control" placeholder="Search…" aria-label="Search">
                  <button class="btn" type="button">
                     <i class="align-middle" data-feather="search"></i>
                  </button>
               </div>
            </form> -->

            <div class="navbar-collapse collapse">
               <ul class="navbar-nav navbar-align">
                  <!-- <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
                        <div class="position-relative">
                           <i class="align-middle" data-feather="bell"></i>
                           <span class="indicator">4</span>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                           4 New Notifications
                        </div>
                        <div class="list-group">
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">30m ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.8</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="dropdown-menu-footer">
                           <a href="#" class="text-muted">Show all notifications</a>
                        </div>
                     </div>
                  </li> -->


                  <!-- <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
                        <div class="position-relative">
                           <i class="align-middle" data-feather="message-square"></i>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                           <div class="position-relative">
                              4 New Messages
                           </div>
                        </div>
                        <div class="list-group">
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                 </div>
                                 <div class="col-10 pl-2">
                                    <div class="text-dark">Vanessa Tucker</div>
                                    <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                 </div>
                                 <div class="col-10 pl-2">
                                    <div class="text-dark">William Harris</div>
                                    <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                 </div>
                                 <div class="col-10 pl-2">
                                    <div class="text-dark">Christina Mason</div>
                                    <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                    <div class="text-muted small mt-1">4h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                 </div>
                                 <div class="col-10 pl-2">
                                    <div class="text-dark">Sharon Lessman</div>
                                    <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="dropdown-menu-footer">
                           <a href="#" class="text-muted">Show all messages</a>
                        </div>
                     </div>
                  </li> -->
                  <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
                        <i class="align-middle" data-feather="settings"></i>
                     </a>

                     <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
                        <img src="img/team_pranay1.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Pranay Das</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-settings.html"><i class="align-middle mr-1" data-feather="settings"></i> Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="help-circle"></i> Help Center</a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="#">Log out</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>

         <main class="content">