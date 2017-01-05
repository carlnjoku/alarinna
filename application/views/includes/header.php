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

    <style>
    .heart-outline-menu:before{
    content:"\f08a";
    color:#dedede;
    cursor:pointer;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: 1px;
    text-decoration: inherit;
/*--adjust as necessary--*/
    
    font-size: 27px;
    }
    .heart-outline-menu:hover:before{
   color: #FF1493; 
}
img.logo-shadow {
    
}
    </style>

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
                                        <img src="<?php echo base_url();?>assets/layouts/layout3/img/logo-default1.png" alt="logo" width="180" class="logo-default img-responsive logo-shadow">
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
                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-heart-o fa-4x"></i>
                                                    <span style="position:relative; top:-10px; left:-40px" class="badge badge-danger"> 9 </span>
                                             </a>
                                        </li>

                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-commenting-o fa-4x"></i>
                                                    <span style="position:relative; top:-10px; left:-40px" class="badge badge-danger"> 3 </span>
                                             </a>
                                        </li>

                                        <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="icon-envelope"></i>
                                                    <span style="position:relative; top:-10px; left:-40px" class="badge badge-inverse"> 6 </span>
                                             </a>
                                        </li>

                                         <li class="dropdown dropdown-extended dropdown-notification dropdown-dark"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                    <i class="fa fa-bell-o fa-4x"></i>
                                                    <span style="position:relative; top:-10px; left:-35px" class="badge badge-info"> 6 </span>
                                             </a>
                                        </li>

                                        
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-dark">
                                            <a href="javascript:;" id="member_avatar" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                
                                                <span class="username username-hide-mobile"><i class="fa fa-bars"></i></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="page_user_profile_1.html">
                                                        <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inbox/message">
                                                        <i class="icon-settings"></i> Account Settings
                                                        
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>page/requests">
                                                        <i class="icon-question"></i> Requests
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>page/visitors">
                                                        <i class="icon-eye"></i> Visitors
                                                        
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
    
    