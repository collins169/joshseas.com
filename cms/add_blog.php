<?php 
    include('functions/add_blog.php');
    GLOBAL $alert; 
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>CMS | Add Blog</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Josh Joshseas Josh-seas CMS Content Management System" name="description" />
        <meta content="author" name="Collins Onyetube" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
       <link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout2/css/themes/dark.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.php">
                        <img src="assets/logo/logo.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
               <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.php">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?php echo $user_info['profile_pic'] ?> " width='40px'/>
                                    <span class="username username-hide-on-mobile"> <?php  echo $name; ?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="user_profile.php">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.php">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="user_profile.php#tab_1_3">
                                            <i class="icon-lock"></i> Change Password </a>
                                    </li>
                                    <li>
                                        <a href="functions/logout.php">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start">
                            <a href="#" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="logo.php" class="nav-link nav-toggle">
                                <i class="icon-picture"></i>
                                <span class="title">Logo</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="nav_link.php" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Navigation Links</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="slider.php" class="nav-link nav-toggle">
                                <i class="icon-loop"></i>
                                <span class="title">Slider</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="gallery.php" class="nav-link nav-toggle">
                                <i class="icon-picture"></i>
                                <span class="title">Gallery</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="content.php" class="nav-link nav-toggle">
                                <i class="icon-book-open"></i>
                                <span class="title">Content</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item active open ">
                            <a href="blog.php" class="nav-link nav-toggle">
                                <i class="icon-feed"></i>
                                <span class="title">Blogs</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Users Management</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="user_profile.php" class="nav-link ">
                                        <span class="title">Profile</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="list_users.php" class="nav-link ">
                                        <span class="title">List Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Configuration</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="sub_menus.php" class="nav-link ">
                                        <span class="title">Sub Menu</span>
                                    </a>
                                </li>
                                 <li class="nav-item  ">
                                    <a href="configurations.php" class="nav-link ">
                                        <span class="title">Website</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <h1 class="page-title"> Blog
                        <small>Add Blogs for the main website</small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.php">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Blog</span>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Add Blog</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXTRAS PORTLET-->
                             <div class="portlet light form-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-plus font-red"></i>
                                        <span class="caption-subject font-red bold uppercase">Add Blog</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <!-- BEGIN FORM-->
                                    <form method='post' class="form-horizontal form-bordered" enctype="multipart/form-data">
                                        <?php echo $alert; ?>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Title</label>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control" name='title' placeholder="Enter the Title of the content" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Summary</label>
                                                <div class="col-md-6">
                                                    <textarea class='form-control' name='summary' rows="6" style="resize: none;" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Content</label>
                                                <div class="col-md-6">
                                                    <textarea class="ckeditor form-control" name="content" rows="7" style="resize: none;" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Image Caption</label>
                                                <div class="col-md-6">
                                                     <input type="text" class="form-control" name='image_caption' placeholder="Enter the Image Caption" required>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="form-body">
                                        <div class="form-group">
                                                <label class="control-label col-md-3">Image Upload </label>
                                                <div class="col-md-6">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" accept='image/jpg, image/gif, image/jpeg, image/png' name="image" > </span>
                                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE!</span>&nbsp; Image file format includes jpeg, jpg, png and gif </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group last">
                                                    <label class="control-label col-md-3">Display Image</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" required name='status'>
                                                            <option value=''> --- Select Menu --- </option>
                                                            <option value='1'>Yes </option>
                                                            <option value='0'>NO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-6">
                                                    <button type="Submit" name='submit' class="btn green">
                                                        <i class="fa fa-check"></i> Submit</button> 
                                                    <a href="blog.php" class="btn btn-outline grey-salsa">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
             <div class="page-footer-inner"> 2017 &copy; Josh-Seas CMS By
                <a target="_blank" href="#">KED System</a> &nbsp;
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
           <!-- BEGIN CORE PLUGINS -->
            <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/autosize/autosize.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="assets/pages/scripts/components-form-tools.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
            <script src="assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
            <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>