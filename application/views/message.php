<style>
.input-box{
    padding:15px 10px 1px 10px;
    background-color: #f4f4f4;
    
}

.friend-list {
  list-style: none;
margin-left: -40px;

}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 0px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name, 
.friend-list li a .friend-name:hover {
  color: #777;

}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}
.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}

</style>

<!-- BEGIN PAGE LEVEL STYLES -->
    
         <link href="<?php echo base_url(); ?>assets/apps/css/inbox.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->

<!-- BEGIN CONTAINER -->
<div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                            <!-- BEGIN PAGE HEAD-->
                            <div class="page-head">
                                <div class="container">
                                    <!-- BEGIN PAGE TITLE -->
                                    <div class="page-title">
                                        <h1>Inbox
                                            <small>user inbox</small>
                                        </h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                    
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="inbox">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="inbox-sidebar" style="600px">
                                                        <a href="javascript:;" data-title="Compose" class="btn red compose-btn btn-block">
                                                            <i class="fa fa-edit"></i> Compose </a>
                                                        <ul class="inbox-nav">
                                                            <li class="active">
                                                                <a href="javascript:;" data-type="inbox" data-title="Inbox"> Inbox
                                                                    <span class="badge badge-success">3</span>
                                                                </a>
                                                            </li>

                                                        </ul>
                                                    <div class="scroller" style="height:315px" data-always-visible="0" data-rail-visible="1">
                                                        <ul class="friend-list" style="min-height:430px;">
                
                                                            <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/woman_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Barry</strong> 
                                                                        
                                                                    </div>
                                                                    <div class="last-message text-muted">&nbsp; Request for a drink </div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>  
                                                            <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/woman_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Judo</strong>
                                                                       
                                                                    </div>
                                                                    <div class="last-message text-muted">&nbsp; Normal message</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>     
                                                            <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/man_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Ibro</strong>
                                                                     
                                                                    </div>
                                                                    <div class="last-message text-muted">&nbsp; Admin</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>        
                                                            <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/man_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Foxy</strong>
                                                                       
                                                                    </div>
                                                                    <div class="last-message text-muted"> &nbsp; Request photos</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>   

                                                             <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/woman_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Juicy</strong>
                                                                       
                                                                    </div>
                                                                    <div class="last-message text-muted"> &nbsp; Request personality</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>  

                                                             <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/woman_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Wendy</strong>
                                                                       
                                                                    </div>
                                                                    <div class="last-message text-muted"> &nbsp; Online</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>  

                                                             <li>
                                                                <a href="#" class="clearfix">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>profile-images/man_avatar.jpg">
                                                                    <div class="friend-name">	
                                                                        <strong>&nbsp; Tontop</strong>
                                                                       
                                                                    </div>
                                                                    <div class="last-message text-muted"> &nbsp; Online</div>
                                                                    <small class="time text-muted">Yesterday</small>
                                                                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                                                                </a>
                                                            </li>         
                                                            
                                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="inbox-body">
                                                        <div class="inbox-header">
                                                           
                                                            
                                                        </div>

                                                       

                                                        <!-- BEGIN Portlet PORTLET-->
                                                <div class="portlet light">
                                                    <div class="portlet-title">
                                                        <div class="caption font-red-sunglo">
                                                            <i class="icon-envelope font-red-sunglo"></i>
                                                            <span class="caption-subject bold uppercase"> Message</span>
                                                            <span class="caption-helper"> some text</span>
                                                        </div>
                                                        <div class="actions">
                                                            
                                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                                <i class="icon-trash"></i>
                                                            </a>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height:300px" data-always-visible="0" data-rail-visible="1">
                                                            <h4>Heading Text</h4>
                                                            <p> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat
                                                                porttitor ligula, eget lacinia odio sem nec elit. </p>
                                                            <p>Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem
                                                                nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus
                                                                sit amet fermentum. consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
                                                                amet fermentum. </p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END Portlet PORTLET-->

                                                       
                                                        

                                                            <div class="input-box"> 
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="3" name="aboutme" id="aboutme" placeholder="Write your reply here"> </textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-actions pull-right">
                                                                <button type="submit" class="btn blue"><i class="fa fa-reply"></i> Reply</button>
                                                            </div>
                                                            <div style="clear:both"></div>
                                                        
                                                         
                                                                                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                        <!-- BEGIN QUICK SIDEBAR -->
                        <a href="javascript:;" class="page-quick-sidebar-toggler">
                            <i class="icon-login"></i>
                        </a>
                        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
                            <div class="page-quick-sidebar">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                                            <span class="badge badge-danger">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                                            <span class="badge badge-success">7</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-bell"></i> Alerts </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-info"></i> Notifications </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-speech"></i> Activities </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                                    <i class="icon-settings"></i> Settings </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                                        <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                            <h3 class="list-heading">Staff</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">8</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar3.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Bob Nilson</h4>
                                                        <div class="media-heading-sub"> Project Manager </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar1.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Nick Larson</h4>
                                                        <div class="media-heading-sub"> Art Director </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">3</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar4.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Hubert</h4>
                                                        <div class="media-heading-sub"> CTO </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar2.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ella Wong</h4>
                                                        <div class="media-heading-sub"> CEO </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">Customers</h3>
                                            <ul class="media-list list-items">
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-warning">2</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar6.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lara Kunis</h4>
                                                        <div class="media-heading-sub"> CEO, Loop Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="label label-sm label-success">new</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar7.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Ernie Kyllonen</h4>
                                                        <div class="media-heading-sub"> Project Manager,
                                                            <br> SmartBizz PTL </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar8.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Lisa Stone</h4>
                                                        <div class="media-heading-sub"> CTO, Keort Inc </div>
                                                        <div class="media-heading-small"> Last seen 13:10 PM </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-success">7</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar9.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Deon Portalatin</h4>
                                                        <div class="media-heading-sub"> CFO, H&D LTD </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar10.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Irina Savikova</h4>
                                                        <div class="media-heading-sub"> CEO, Tizda Motors Inc </div>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-status">
                                                        <span class="badge badge-danger">4</span>
                                                    </div>
                                                    <img class="media-object" src="../assets/layouts/layout/img/avatar11.jpg" alt="...">
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Maria Gomez</h4>
                                                        <div class="media-heading-sub"> Manager, Infomatic Inc </div>
                                                        <div class="media-heading-small"> Last seen 03:10 AM </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="page-quick-sidebar-item">
                                            <div class="page-quick-sidebar-chat-user">
                                                <div class="page-quick-sidebar-nav">
                                                    <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                                        <i class="icon-arrow-left"></i>Back</a>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-messages">
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> When could you send me the report ? </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Its almost done. I will be sending it shortly </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:15</span>
                                                            <span class="body"> Alright. Thanks! :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:16</span>
                                                            <span class="body"> You are most welcome. Sorry for the delay. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> No probs. Just take your time :) </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Alright. I just emailed it to you. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Great! Thanks. Will check it right away. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post in">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar2.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Ella Wong</a>
                                                            <span class="datetime">20:40</span>
                                                            <span class="body"> Please let me know if you have any comment. </span>
                                                        </div>
                                                    </div>
                                                    <div class="post out">
                                                        <img class="avatar" alt="" src="../assets/layouts/layout/img/avatar3.jpg" />
                                                        <div class="message">
                                                            <span class="arrow"></span>
                                                            <a href="javascript:;" class="name">Bob Nilson</a>
                                                            <span class="datetime">20:17</span>
                                                            <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="page-quick-sidebar-chat-user-form">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Type a message here...">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn green">
                                                                <i class="icon-paper-clip"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                                        <div class="page-quick-sidebar-alerts-list">
                                            <h3 class="list-heading">General</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-success">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-danger">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-warning"> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-default">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <h3 class="list-heading">System</h3>
                                            <ul class="feeds list-items">
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-check"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 4 pending tasks.
                                                                    <span class="label label-sm label-warning "> Take action
                                                                        <i class="fa fa-share"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> Just now </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-danger">
                                                                        <i class="fa fa-bar-chart-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> Finance Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> New order received with
                                                                    <span class="label label-sm label-success"> Reference Number: DR23923 </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 30 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> You have 5 pending membership that requires a quick review. </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 24 mins </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-warning">
                                                                    <i class="fa fa-bell-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Web server hardware needs to be upgraded.
                                                                    <span class="label label-sm label-default "> Overdue </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> 2 hours </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <div class="col1">
                                                            <div class="cont">
                                                                <div class="cont-col1">
                                                                    <div class="label label-sm label-info">
                                                                        <i class="fa fa-briefcase"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="cont-col2">
                                                                    <div class="desc"> IPO Report for year 2013 has been released. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col2">
                                                            <div class="date"> 20 mins </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                                        <div class="page-quick-sidebar-settings-list">
                                            <h3 class="list-heading">General Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Enable Notifications
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Allow Tracking
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Log Errors
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Auto Sumbit Issues
                                                    <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Enable SMS Alerts
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <h3 class="list-heading">System Settings</h3>
                                            <ul class="list-items borderless">
                                                <li> Security Level
                                                    <select class="form-control input-inline input-sm input-small">
                                                        <option value="1">Normal</option>
                                                        <option value="2" selected>Medium</option>
                                                        <option value="e">High</option>
                                                    </select>
                                                </li>
                                                <li> Failed Email Attempts
                                                    <input class="form-control input-inline input-sm input-small" value="5" /> </li>
                                                <li> Secondary SMTP Port
                                                    <input class="form-control input-inline input-sm input-small" value="3560" /> </li>
                                                <li> Notify On System Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                                <li> Notify On SMTP Error
                                                    <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF"> </li>
                                            </ul>
                                            <div class="inner-content">
                                                <button class="btn btn-success">
                                                    <i class="icon-settings"></i> Save Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUICK SIDEBAR -->
                    </div>
                    <!-- END CONTAINER -->

                      <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    
                    
                   <script src="<?php echo base_url(); ?>assets/apps/scripts/inbox.min.js" type="text/javascript"></script>