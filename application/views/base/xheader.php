<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>static/img/favicon-32x32.png" sizes="32x32">
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/assets/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/icons/flags/flags.min.css" media="all">

    <!-- style switcher -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style_switcher.min.css" media="all">
    
    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.min.css" media="all">

    <!-- themes -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/themes/themes_combined.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/assets/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>static/assets/matchMedia/matchMedia.addListener.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>static/css/ie.css" media="all">
    <![endif]-->

</head>
<body class="disable_transitions sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                            <div class="uk-dropdown uk-dropdown-width-3">
                                <div class="uk-grid uk-dropdown-grid">
                                    <div class="uk-width-2-3">
                                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-bottom uk-text-center">
                                            <a href="staffs" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-light-green-600">supervised_user_circle</i>
                                                <span class="uk-text-muted uk-display-block">Staffs</span>
                                            </a>
                                            <a href="employers" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-purple-600">supervised_user_circle</i>
                                                <span class="uk-text-muted uk-display-block">Employers</span>
                                            </a>
                                            <a href="finance" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-purple-600">&#xE53E;</i>
                                                <span class="uk-text-muted uk-display-block">Finance</span>
                                            </a>
                                            <a href="employees" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-cyan-600">supervised_user_circle</i>
                                                <span class="uk-text-muted uk-display-block">Job Seekers</span>
                                            </a>
                                            <a href="jobs" class="uk-margin-top">
                                                <i class="material-icons md-36 md-color-red-600">&#xE85C;</i>
                                                <span class="uk-text-muted uk-display-block">Posts</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <ul class="uk-nav uk-nav-dropdown uk-panel">
                                            <li class="uk-nav-header">Components</li>
                                            <li><a href="staffs">Staffs</a></li>
                                            <li><a href="employers">Employers</a></li>
                                            <li><a href="employees">Job Seekers</a></li>
                                            <li><a href="jobs">Posts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">fullscreen</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><i class="material-icons md-36 md-color-cyan-600">perm_identity</i></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="myProfile">My profile</a></li>
                                    <li><a href="exit">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="index-2.html" class="sSidebar_hide sidebar_logo_large">
                    <img class="logo_regular" src="<?php echo base_url(); ?>static/img/logo_main.png" alt="" height="15" width="71"/>
                    <img class="logo_light" src="<?php echo base_url(); ?>static/img/logo_main_white.png" alt="" height="15" width="71"/>
                </a>
                <a href="index-2.html" class="sSidebar_show sidebar_logo_small">
                    <img class="logo_regular" src="<?php echo base_url(); ?>static/img/logo_main_small.png" alt="" height="32" width="32"/>
                    <img class="logo_light" src="<?php echo base_url(); ?>static/img/logo_main_small_light.png" alt="" height="32" width="32"/>
                </a>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li title="Dashboard">
                    <a href="dashboard">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                    
                </li>
                <li title="Chats">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">supervisor_account</i></span>
                        <span class="menu_title">Staffs</span>
                    </a>
                    <ul>
                        <li><a href="create_staff">Create</a></li>
                        <li><a href="staffs">All Staffs</a></li>
                    </ul>
                
                </li>
                <li title="Scrum Board">
                    <a href="finance">
                        <span class="menu_icon"><i class="material-icons">&#xE85C;</i></span>
                        <span class="menu_title">Finance</span>
                    </a>
                    
                </li>
                <li title="Employers Area">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">supervised_user_circle</i></span>
                        <span class="menu_title">Employers</span>
                    </a>
                    <ul>
                        <li><a href="create_employer">Create</a></li>
                        <li><a href="employers">All Employers</a></li>
                        <li><a href="suspended_employers">Suspended</a></li>
                        <li><a href="active_employers">Active</a></li>
                    </ul>
                
                </li>
                <li title="Job Seekers Area">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">supervised_user_circle</i></span>
                        <span class="menu_title">Job Seekers</span>
                    </a>
                    <ul>
                        <li><a href="create_employee">Create</a></li>
                        <li><a href="employees">All Job Seekers</a></li>
                        <li><a href="suspended_employees">Suspended</a></li>
                        <li><a href="active_employees">Active</a></li>
                    </ul>
                
                </li>
                <li title="Job Posts Area">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">library_books</i></span>
                        <span class="menu_title">Job Posts</span>
                    </a>
                    <ul>
                        <li><a href="create_job">Create</a></li>
                        <li><a href="jobs">All Jobs</a></li>
                        <li><a href="open_jobs">Open</a></li>
                        <li><a href="closed_jobs">Closed</a></li>
                        <li><a href="suspended_jobs">Suspended</a></li>
                    </ul>
                
                </li>
                <li title="Support Documentations">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8C0;</i></span>
                        <span class="menu_title">Support</span>
                    </a>
                    <ul>
                        <li><a href="supportStaff">Managing Staff</a></li>
                        <li><a href="supportEmployers">Managing Employers</a></li>
                        <li><a href="supportEmployees">Managing Employees</a></li>
                        <li><a href="supportPosts">Managing Posts</a></li>
                    </ul>
                
                </li>
                <li title="User Profile">
                    <a href="myProfile">
                        <span class="menu_icon"><i class="material-icons">&#xE8B9;</i></span>
                        <span class="menu_title">Settings</span>
                    </a>
                    
                </li>
                <li title="Kill Session">
                    <a href="exit">
                        <span class="menu_icon"><i class="material-icons">power_settings_new</i></span>
                        <span class="menu_title">Logout</span>
                    </a>
                    
                </li>
            </ul>
        </div>
    </aside><!-- main sidebar end -->
