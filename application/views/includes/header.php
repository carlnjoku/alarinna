<!DOCTYPE html>
<!-- 

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $title;?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for "
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url(); ?>assets/layouts/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        
            

        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid">
   
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                    <!-- BEGIN HEADER -->
                  
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                                <div class="page-logo">
                                    <a href="index.html">
                                        <img src="<?php echo base_url();?>assets/layouts/layout3/img/logo-default1.jpg" alt="logo" class="logo-default img-responsive">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                                <div class="top-menu">
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-heart"></i>
                                                <span class="badge badge-default">7</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="external">
                                                    <h3>You have
                                                        <strong>12 pending</strong> tasks</h3>
                                                    <a href="app_todo.html">view all</a>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END NOTIFICATION DROPDOWN -->
                                        <!-- BEGIN TODO DROPDOWN -->
                                        <li class="dropdown dropdown-extended dropdown-tasks dropdown-dark" id="header_task_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-question"></i>
                                                <span class="badge badge-red">3</span>
                                            </a>
                                           
                                        </li>
                                        <!-- END TODO DROPDOWN -->
                                        <li class="droddown dropdown-separator">
                                            <span class="separator"></span>
                                        </li>
                                        <!-- BEGIN INBOX DROPDOWN -->
                                        <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <span class="circle">4</span>
                                                <span class="corner"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="external">
                                                    <h3>You have
                                                        <strong>3 New</strong> Messages</h3>
                                                    <a href="app_inbox.html">view all</a>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="<?php echo base_url();?>assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Lisa Wong </span>
                                                                    <span class="time">Just Now </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Richard Doe </span>
                                                                    <span class="time">16 mins </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="../assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Bob Nilson </span>
                                                                    <span class="time">2 hrs </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Lisa Wong </span>
                                                                    <span class="time">40 mins </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="../assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Richard Doe </span>
                                                                    <span class="time">46 mins </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" id="member_avatar" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                
                                                <span class="username username-hide-mobile"><i class="fa fa-bar fa-2x"></i></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inbox/message">
                                                        <i class="icon-envelope-open"></i> My Inbox
                                                        <span class="badge badge-danger"> 31 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>page/requests">
                                                        <i class="icon-rocket"></i> Requests
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>page/visitors">
                                                        <i class="icon-rocket"></i> Visitors
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>page/fancies">
                                                        <i class="icon-rocket"></i> Fancies
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li class="divider"> </li>
                                                <li>
                                                    <a href="page_user_lock_1.html">
                                                        <i class="icon-lock"></i> Lock Screen </a>
                                                </li>
                                                <li>
                                                    <a href="page_user_login_1.html">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                                        <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                            <span class="sr-only">Toggle Quick Sidebar</span>
                                            <i class="icon-logout"></i>
                                        </li>
                                        <!-- END QUICK SIDEBAR TOGGLER -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu" style="background-color:#4299d4">
                            <div class="container">
                                <!-- BEGIN HEADER SEARCH BOX -->
                                
                                <span style="position:relative; top:10px; top:10px; left:55%"><button class="btn btn-sx btn-circle  white btn-outline">UPGRADE</button></span>
                                <!-- END HEADER SEARCH BOX -->
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu" style="background-color:#ccc">
                                    <ul class="nav navbar-nav"  style="background-color:#4299d4;">
                                        <li class="menu-dropdown classic-menu-dropdown">
                                            <a class="font-white" href="<?php echo base_url();?>home/dashboard"> Dashboard
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a class="font-white" href="javascript:;"> Profile
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li class=" ">
                                                    <a class="font-white" href="<?php echo base_url();?>profile/edit_profile" class="nav-link  ">
                                                        <i class="icon-pencil"></i> Edit Profile
                                                        
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a class="font-white" href="<?php echo base_url();?>profile/p_preview" class="nav-link  ">
                                                        <i class="icon-eye"></i> View Profile </a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a class="font-white" href="<?php echo base_url();?>page/matches"> Match
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>

                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a class="font-white" href="<?php echo base_url();?>page/search"> Search
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>

                                        <li class="menu-dropdown classic-menu-dropdown ">
                                            <a class="font-white" href="<?php echo base_url();?>home/dashboard"> Event
                                                <span class="arrow"></span>
                                            </a>
                                            
                                        </li>
                                       
                                      
                                
                                        
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                   
                    <!-- END HEADER -->
                    

<!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <!-- END THEME GLOBAL SCRIPTS -->

                    
                    

                </div>
            </div>
     
        <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
    
    