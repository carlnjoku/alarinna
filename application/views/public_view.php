
<link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/pages/css/portfolio.min.css" rel="stylesheet" type="text/css" />


<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url(); ?>plugins/rangeslider/rangeslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>src/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->  

<!-- END PAGE LEVEL PLUGINS -->

<link href="fonts/ostrich_sans/stylesheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>plugins/photo_slider/css/content_slider_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/photo_slider/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.content_slider.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.animate-colors.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/additional_content.js" type="text/javascript"></script>

<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var image_array = new Array();

            image_array = <?php echo $photos;?>;
            var array_length = image_array.length;
            
            if(array_length > 1){
				 alert('cool')
                 image_array = <?php echo $photos;?> 
                $('#slider1').content_slider({		// bind plugin to div id="slider1"
                    map : image_array,				// pointer to the image map
                    max_shown_items: 5,				// number of visible circles
                    hv_switch: 0,					// 0 = horizontal slider, 1 = vertical
                    active_item: 0,					// layer that will be shown at start, 0=first, 1=second...
                    wrapper_text_max_height: 450,	// height of widget, displayed in pixels
                    middle_click: 1,				// when main circle is clicked: 1 = slider will go to the previous layer/circle, 2 = to the next
                    under_600_max_height: 1200,		// if resolution is below 600 px, set max height of content
                    border_radius:	-1,				// -1 = circle, 0 and other = radius
                    automatic_height_resize: 1,
                    border_on_off: 0,
                    allow_shadow: 0
                });
			 }else{
				 $('#slider1').append('<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"><center><h2>No photo uploaded yet</h2><a class="btn btn-circle red" id="photo_request"  data-othermemberID="<?php echo $other_memberID;?>" href="javascript:;">Request Photos</a></center></div>')
			 }


            

			
		});
	})(jQuery);
</script>






        

<style>
    .slim {
        border-radius: 0.5rem;
        width:230px;
        height:230px;
    }
    .photo{
        border-radius: 0.5rem;
    }

   .modal-backdrop
    {
        opacity:0.9 !important;
    }


    .modalchat.in  .modal-backdrop{ background-color: #000; }

    #ajax {
        top:0%;
        right:16%;
        outline: none;
    }

    body.modal-open {
    overflow: hidden;
    position: fixed;
}

.indicator{
    position:relative;
    right:65px;
    top: -3px;
}



</style>

<style type="text/css">
    	
.bg-white {
  background-color: #fff;
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

.chat-message {
  padding: 60px 20px 115px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;  
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 50px;
  background-color: #fff;
}

.chat-box {
  position: fixed;
  bottom: 0;
  left: 344px;
  right: 0;
  padding: 10px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
    </style>


<style>



header {
  /*box-shadow: inset 1px 1px 60px 3px rgba(0,0,0,0.5), inset 1px 1px 60px 3px rgba(0,0,0,0.5);*/

    -moz-box-shadow: 0 2px 24px  rgba(0, 0, 0, 0.3);
     -webkit-box-shadow: 0 2px 24px  rgba(0, 0, 0, 0.3); 
    box-shadow: 0 2px 24px  rgba(0, 0, 0, 0.3);

  margin:   0px auto 50px;
  height:   393px;
  position: relative;
  width:    100%;
}

figure.profile-banner {
  background: rgba(0, 0, 0, .9);
  left:     0;
  overflow: hidden;
  position: absolute;
  top:      0;
  z-index:  1;
  
  
}

figure.profile-picture {
  background-position: center center;
  background-size: cover;
  border: 4px #D0D0D0 solid;
  border-radius: 50%;
  bottom: -50px;
  box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2), 1px 1px 4px rgba(0,0,0,0.3);
  height: 200px;
  left: 120px;
  position: absolute;
  width: 200px;
  z-index: 3;
  
}

div.profile-stats {
  bottom: 0;
  left: 0;
  padding: 15px 15px 15px 350px;
  position: absolute;
  right: 0;
  z-index: 2;
}

div.profile-stats ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

div.profile-stats ul li {
  color: #000000;
  display: block;
  float: left;
  font-size: 24px;
  margin-right: 50px;
  
}

div.profile-stats li span {
  display: block;
  font-size: 16px;
  font-weight: normal;
}

div.profile-stats a.follow {
  display: block;
  float: right;color: #ffffff;
  margin-top: 5px;
  text-decoration: none;
  
  /* This is a copy and paste from Bootstrap */
  background-color: #49afcd;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #49afcd;
  background-image: -moz-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#2f96b4));
  background-image: -webkit-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: -o-linear-gradient(top, #5bc0de, #2f96b4);
  background-image: linear-gradient(to bottom, #5bc0de, #2f96b4);
  background-repeat: repeat-x;
  border-color: #2f96b4 #2f96b4 #1f6377;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5bc0de', endColorstr='#ff2f96b4', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
  display: inline-block;
  padding: 4px 12px;
  margin-bottom: 0;
  font-size: 14px;
  line-height: 20px;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
  border-radius: 4px;
}

div.profile-stats a.follow.followed {
  
  /* Once again copied from Boostrap */
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  background-color: #5bb75b;
  background-image: -moz-linear-gradient(top, #62c462, #51a351);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#51a351));
  background-image: -webkit-linear-gradient(top, #62c462, #51a351);
  background-image: -o-linear-gradient(top, #62c462, #51a351);
  background-image: linear-gradient(to bottom, #62c462, #51a351);
  background-repeat: repeat-x;
  border-color: #51a351 #51a351 #387038;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff62c462', endColorstr='#ff51a351', GradientType=0);
  filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
}

header>h1 {
  bottom: -50px;
  color: #354B63;
  font-size: 30px;
  left: 350px;
  position: absolute;
  z-index: 5;
}
</style>




<?php 
  
    foreach($result_member as $key=>$row){
    $other_memberID = $row['memberID'];
    $nickname = $row['nickname'];
    $firstname = $row['firstname'];
    $age =$row['age'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $aboutme = $row['aboutme'];
    $avatar =$row['avatar'];
    $profile_bg =$row['profile_bg'];
    $city =$row['city'];
    $country =$row['country'];
    $profile_meter =$row['profile_meter'];


}


?>




<!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                        <header>
                        <figure class="slim_banner" >
                            
                            <div  id="profile_banner">
                               
                                <img src="<?php echo base_url();?>profile-images/<?php echo $profile_bg; ?>" class="img-responsive" alt="">
                              
                            </div>
                            
                        </figure>

                        
                        <figure class="profile-picture" 
                            style="background-image: url('<?php echo base_url();?>/profile-images/<?php echo $avatar; ?>')">
                        </figure>

                        
                        <div class="profile-stats">
                                   <ul>
                                        <li><?php echo $nickname; ?>    <span><?php echo $age.' - '  .$city .', '. $country; ?></span></li>
                                    
                                  </ul>
                                  
                                   <a  style="position:relative; left:530px; top:13px "href="<?php echo base_url();?>inbox/message" class=" btn btn-circle red"> Send Message</a>
                                  
                        </div>
                        
                        
                        </header>
                            <!-- BEGIN CONTENT BODY -->
                            
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN PROFILE SIDEBAR -->
                                                <div class="profile-sidebar">
                                                    
                                                    <!-- END PORTLET MAIN -->
                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light ">
                                                        <!-- STAT -->
                                                    
                                                         <div class="row">
                                                                <div class="col-md-11 col-sm-11 col-xs-11">
                                                                    <br>
                                                                    <a class = "fancy" href "javascript:;" data-other-memberID="<?php echo $other_memberID; ?>">
                                                                        
                                                                    </a>
                                                                    <a style="text-decoration:none" data-toggle="modal" href="#ajax">  
                                                                        <span class="fa-stack fa-2x font-purple-medium tooltips"  data-placement="bottom" data-original-title="Chat">
                                                                            <i class="fa fa-circle fa-stack-2x tooltips"></i>
                                                                            <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
                                                                        </span>
                                                                    </a>
                                                                    <a class="date_request" style="text-decoration:none" data-othermemberID="<?php echo $other_memberID; ?>" href="javascript:;">  
                                                                        
                                                                    </a>
                                                                    <a class="drinks_request" style="text-decoration:none"  data-othermemberID="<?php echo $other_memberID; ?>" href="javascript:;">  
                                                                    
                                                                    </a>                                                   

                                                                </div>
                                                                
                                                        </div>

                                                        
                                                        <hr>

                                                        <span><i class="fa fa-bug"></i> Report</span>
                                                        <span class="pull-right"><i class="fa fa-ban"></i> <a href="">Block</a></span>


                                                        
                                                    </div>
                                                    <!-- END PORTLET MAIN -->


                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light ">
                                                        <!-- STAT -->
                                                    
                                                         <div class="row">
                                                                <div class="col-md-11 col-sm-11 col-xs-11">
                                                                <h4>You may also like</h4>
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team2.jpg">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team4.jpg">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team3.jpg">
                                                                    <img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team5.jpg">
                                                                    
                                                                </div>
                                                                
                                                        </div>

                                                        
                                                        

                                                        
                                                    </div>
                                                    <!-- END PORTLET MAIN -->



                                                </div>
                                                <!-- END BEGIN PROFILE SIDEBAR -->
                                                <!-- BEGIN PROFILE CONTENT -->
                                                <div class="profile-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="portlet light ">
                                                                <div class="portlet-title tabbable-line">
                                                                    <div class="caption caption-md">
                                                                        <i class="icon-globe theme-font hide"></i>
                                                                        <span class="caption-subject font-blue-hoki bold uppercase">Account Profile</span>
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active">
                                                                            <a href="#tab_1_1" data-toggle="tab">Photos</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_2" data-toggle="tab">Personal Details</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_3" data-toggle="tab">Interests</a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="portlet-body">

                                                                
                                                                    <div class="tab-content">
                                                                        <!-- PERSONAL INFO TAB -->
                                                                        <div class="tab-pane active" id="tab_1_1">
                                                                             <div class="row">
                                                                            <div class="col-md-12">
                                                                              <h3 class="font-blue" id="profile_nickname_photos"></h3>
                                                                              <hr>
                                                                                <div class="content_slider_wrapper" id="slider1" style="max-height:280px">
                                                                                
                                                                                </div>
                                                                                <!--
                                                                                <div id="js-grid-juicy-projects" class="cbp">
                                                                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                                                                        <?php
                                                                                                                                    
                                                                                            //foreach ($result_photos as $key=> $row) {
                                                                                                //$photo = $row['photo']; // keep the last id for the paging
                                                                                                ?>
                                                                                            
                                                                                            <div class="cbp-item graphic">
                                                                                                <div class="cbp-caption">
                                                                                                    <div class="cbp-caption-defaultWrap">
                                                                                                        <img  src="<?php //echo base_url();?>profile-images/<?php echo $photo; ?>"/>    
                                                                                                    </div>
                                                                                                    <div class="cbp-caption-activeWrap">
                                                                                                        <div class="cbp-l-caption-alignCenter">
                                                                                                            <div class="cbp-l-caption-body">
                                                                                                            
                                                                                                                <a href="<?php //echo base_url(); ?>profile-images/<?php echo $photo; ?>" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase">view larger</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            
                                                                                            </div>

                                        
                                                                                                <?php
                                                                                            //}
                                                                                        ?>
                                                                                    </div>
                                                                                </div>
                                                                                -->



                                                                            </div>
                                                                        </div>
                                                                         
                                                                        </div>
                                                                        <!-- END PERSONAL INFO TAB -->
                                                                        <!-- CHANGE AVATAR TAB -->
                                                                        <div class="tab-pane" id="tab_1_2">

                                                                        <div class="row">
                                                                                <div class="col-md-12">
                                                                                <h3 class="font-blue" id="about_title"></h3>
                                                                                <div id="logo3"></div>
                                                                                <h3><?php //echo 'Full Name: '.$firstname.' '.$lastname; ?></h3>
                                                                                    
                                                                                    <hr>
                                                                                    <div class="row list-separated profile-stat aboutme"></div>
                                                                                </div>
                                                                            </div>

                                                                           
 
                                                                        </div>
                                                                        <!-- END CHANGE AVATAR TAB -->
                                                                        <!-- CHANGE MEMBER DETAILS TAB -->
                                                                        <div class="tab-pane" id="tab_1_3">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                <h3 class="font-blue" id="desire_title"></h3>
                                                                                <hr>
                                                                                    <div class="row list-separated profile-stat desires">
                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- END MEMBER DETAILS TAB -->
                                                                       
                                                                        
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- BEGIN PERSONALITY CONTENT -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="portlet light ">
                                                                <div class="portlet-title tabbable-line">
                                                                    <div class="caption caption-md">
                                                                        <i class="icon-globe theme-font hide"></i>
                                                                
                                                                        <h3 id="personality_title" class="font-blue"> </h3>
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                    <span class="pull-right" id="personality_title2" style="position:relative; top:20px"></span>
                                                                </div>
                                                                <div class="portlet-body">
                                                                 
                                                                    <div class="portlet-body form">
                                                                          
                                                                            <div class="row">
                                                                                <div class="col-md-12 persona" style="min-height:200px">
                                                                                    <!-- BEGIN PORTLET-->
                                                                                    <div class="portlet light form-fit">
                                                                                        
                                                                                        <div class="portlet-body form">
                                                                                    
                                                                                            
                                                                                            <div class="row" id="loving"></div>
                                                                                            <div class="row" id="caring"></div>
                                                                                            <div class="row" id="confident"></div>
                                                                                            <div class="row" id="flirty"></div>
                                                                                            <div class="row" id="faithful"></div>
                                                                                            <div class="row" id="adventrous"></div>
                                                                                            <div class="row" id="patient"></div>
                                                                                            <div class="row" id="healthy"></div>
                                                                                            <div class="row" id="extrovert"></div>

                                                                                        
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- END PORTLET-->
                                                                                </div>
                                                                            </div>
                                                                         
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- END PERSONALITY CONTENT -->
                                                   
                                                </div>
                                                <!-- END PROFILE CONTENT -->
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
                        
                    </div>
                    <!-- END CONTAINER -->


                    <!-- CHAT MODAL STARTS -->

                    






                                <div id="ajax" class="modal fade modalchat" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog">
                                                
                                                <div class="container bootstrap snippet">
                                                
    <div class="row">
		<div class="col-md-3 bg-white ">
            <div class="row border-bottom " style="height: 40px; margin:10px width:100%">
            	<input type="text" value="" name="query" />
            </div>
            
            <!-- =============================================================== -->
            <!-- member list -->
            <ul class="friend-list" style="min-height:505px;">
                
                <li>
                	<a href="#" class="clearfix">
                		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team1.jpg">
                		<div class="friend-name">	
                			<strong>&nbsp; Barry</strong> 
                            <i class="fa fa-circle font-green-jungle"></i>
                		</div>
                		<div class="last-message text-muted">&nbsp; Online </div>
                		<small class="time text-muted">Yesterday</small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>  
                <li>
                	<a href="#" class="clearfix">
                		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team2.jpg">
                		<div class="friend-name">	
                			<strong>&nbsp; Judo</strong>
                            <i class="fa fa-circle font-grey-silver"></i>
                		</div>
                		<div class="last-message text-muted">&nbsp; Offline.</div>
                		<small class="time text-muted">Yesterday</small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>     
                <li>
                	<a href="#" class="clearfix">
                		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team5.jpg">
                		<div class="friend-name">	
                			<strong>&nbsp; Ibro</strong>
                            <i class="fa fa-circle font-grey"></i>
                		</div>
                		<div class="last-message text-muted">&nbsp; Offline.</div>
                		<small class="time text-muted">Yesterday</small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>        
                <li>
                	<a href="#" class="clearfix">
                		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team3.jpg">
                		<div class="friend-name">	
                			<strong>&nbsp; Foxy</strong>
                            <i class="fa fa-circle font-green-jungle"></i>
                		</div>
                		<div class="last-message text-muted"> &nbsp; Online</div>
                		<small class="time text-muted">Yesterday</small>
                		<small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                	</a>
                </li>          
                
                              
            </ul>
		</div>
        
        <!--=========================================================-->
        <!-- selected chat -->
    	<div class="col-md-5 bg-white" >
            <div class="chat-message" style="min-height:540px">
                <ul class="chat">
                    <li class="left clearfix">
                    	<span class="chat-img pull-left">
                    		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team5.jpg">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font">John Doe</strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                    		</div>
                    		<p>
                    			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    		</p>
                    	</div>
                    </li>
                    <li class="right clearfix">
                    	<span class="chat-img pull-right">
                    		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team1.jpg">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font">Sarah</strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                    		</div>
                    		<p>
                    			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    		</p>
                    	</div>
                    </li>
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                    		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team5.jpg">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font">John Doe</strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                    		</div>
                    		<p>
                    			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    		</p>
                    	</div>
                    </li>
                    <li class="right clearfix">
                        <span class="chat-img pull-right">
                    		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team1.jpg">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font">Sarah</strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                    		</div>
                    		<p>
                    			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    		</p>
                    	</div>
                    </li>                    
                    <li class="left clearfix">
                        <span class="chat-img pull-left">
                    		<img class="item-pic rounded" width="55" src="<?php echo base_url(); ?>assets/pages/img/avatars/team5.jpg">
                    	</span>
                    	<div class="chat-body clearfix">
                    		<div class="header">
                    			<strong class="primary-font">John Doe</strong>
                    			<small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                    		</div>
                    		<p>
                    			Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    		</p>
                    	</div>
                    </li>
                                       
                </ul>
            </div>
            <div class="chat-box bg-white">
            	<div class="input-group">
            		<input class="form-control border no-shadow no-rounded" placeholder="Type your message here">
            		<span class="input-group-btn">
            			<button class="btn btn-success no-rounded" type="button">Send</button>
            		</span>
            	</div><!-- /input-group -->	
            </div>            
		</div>        
	</div>
</div>
                                            
    </div> 
    </div> 




                    
<script>

            $(document).ready(function(){

                     var other_memberID = '<?php echo $other_memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/getphotos/'+ other_memberID,
                        cache: true,
                        
                        success: function (response) {
                            
                           
                            var responseData = $.parseJSON(response); //parse JSON
                
                            console.log(responseData)
                          
                            $.each(responseData, function(index,item) {
                                    //console.log(item.photo)
                                    $(".photos").append('<div class="cbp-item graphic"><div class="cbp-caption"><div class="cbp-caption-defaultWrap"><img  src="<?php echo base_url();?>profile-images/'+ item.photo +' "/> </div><div class="cbp-caption-activeWrap"><div class="cbp-l-caption-alignCenter"><div class="cbp-l-caption-body"><a href="<?php echo base_url(); ?>profile-images/'+ item.photo +' " class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase">view larger</a></div></div></div></div></div>'); 
                            
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            $("#photos1").append('<div class="well"><h3>No Desires</h3> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie loremat massa. </div>')
                        }
                    });
                    
                  
            });
        </script>
 


<script>

            $(document).ready(function(){

                     var other_memberID = '<?php echo $other_memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_aboutme/'+ other_memberID,
                        
                        
                        success: function (response) {
                        
                            var responseData = $.parseJSON(response); //parse JSON
                            console.log(responseData);

                            $.each(responseData, function(index,item) {
                                   
                                    $(".aboutme").append('<div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Height</h4><div class="font-blue-madison"> '+ item.height +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Hair Color</h4><div class="font-blue-madison">'+item.hair+' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Eyes Color</h4><div class="font-blue-madison"> '+ item.eyes +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Income</h4><div class="font-blue-madison"> '+ item.income +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Religion</h4><div class="font-blue-madison"> '+ item.religion +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Profession</h4><div class="font-blue-madison"> '+ item.profession +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Smokes</h4><div class="font-blue-madison"> '+ item.smoke +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Body Type</h4><div class="font-blue-madison"> '+ item.bodytype +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Ethnicity</h4><div class="font-blue-madison"> '+ item.ethnicity +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Marital Status</h4><div class="font-blue-madison"> '+ item.marital_status +' </div></div>'); 
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            toastr.warning('No data found')
                        }
                    });
                    
                  
            });
        </script>

        <script>

            $(document).ready(function(){

                     var other_memberID = '<?php echo $other_memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_desire/'+ other_memberID,
                        
                        
                        
                        success: function (response) {
                            
                            var responseData = $.parseJSON(response); //parse JSON
                          
                            $.each(responseData, function(index,item) {
                                   
                                    $(".desires").append('<div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Height</h4><div class="font-blue-madison"> '+ item.height +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Height</h4><div class="font-blue-madison">'+item.hair+' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Eyes Color</h4><div class="font-blue-madison"> '+ item.eyes +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Income</h4><div class="font-blue-madison"> '+ item.income +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Religion</h4><div class="font-blue-madison"> '+ item.religion +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Profession</h4><div class="font-blue-madison"> '+ item.profession +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Smokes</h4><div class="font-blue-madison"> '+ item.smoke +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Body Type</h4><div class="font-blue-madison"> '+ item.bodytype +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Ethnicity</h4><div class="font-blue-madison"> '+ item.ethnicity +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Marital Status</h4><div class="font-blue-madison"> '+ item.marital_status +' </div></div>'); 
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            $(".desires").append('<div class="well"><h3>No Desires</h3> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie loremat massa. </div>')
                        }
                    });
                    
                  
            });
        </script>

        <script>
            $(document).ready(function(){

                     var other_memberID = '<?php echo $other_memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/getmember/'+ other_memberID,
                        cache: true,
                        
                        
                        success: function (response) {
                            
                           
                            var responseData = $.parseJSON(response); //parse JSON
                            var firstname = response.lastname;
                            console.log(responseData)
                           //$("#logo").html(height);

                            $.each(responseData, function(index,item) {
                                    
                                    $("#profile_pics").append('<img src="<?php echo base_url();?>profile-images/'+ item.profile_photo +' " class="img-responsive" alt="">'); 
                                    $("#profile_nickname").append(item.nickname);
                                    $("#profile_nickname_photos").append(item.nickname+"'s Photos");
                                    $("#location").append(item.city +', '+item.country);
                                    $("#about_title").append('Who is  '+ item.nickname );
                                    $("#desire_title").append('What '+item.nickname + ' desires' );
                                    $("#personality_title").append(item.nickname + "'s personalities");
                                    
                            
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            $(".desires").append('<div class="well"><h3>No Desires</h3> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie lorem at massa Integer molestie loremat massa. </div>')
                        }
                    });
                    
                  
            });
        </script>


        <script>
            $(document).ready(function(){

                     var other_memberID = '<?php echo $other_memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_personality/'+ other_memberID,
                        
                        beforeSend: function()
                        {
                          
                            $('div.persona').block({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fffff' },
                                message:'<img src="<?php echo base_url(); ?>assets/ring-alt.gif"/> <span style="color:#a8a8a8">',
                                timeout: 15000
                            });
                
                            //setTimeout($.unblockUI, 20000); 

                        },
                        success: function (response) {
                            $('div.persona').unblock(); 
                            var responseData = $.parseJSON(response); //parse JSON
                            console.log(responseData);
                            alert(responseData);
                            console.log(responseData[0]['loving']);
                            if (!responseData[0]['loving'] && !responseData[0]['caring'] && !responseData[0]['confident'] && !responseData[0]['flirty'] && !responseData[0]['faithful'] && !responseData[0]['adventrous'] && !responseData[0]['patient'] &&  !responseData[0]['healthy'] && !responseData[0]['extrovert']) {
                                    alert('no p')
                                    $.each(responseData, function(index,item) {
                                   
                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Loving</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.loving +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.loving+'%"><span class="sr-only"> '+item.loving+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.loving+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Caring</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.caring +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.caring+'%"><span class="sr-only"> '+item.caring+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.caring+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Confident</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.confident +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.confident+'%"><span class="sr-only"> '+item.confident+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.confident+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Flirty</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.flirty +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.flirty+'%"><span class="sr-only"> '+item.flirty+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.flirty+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Faithful</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.faithful +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.faithful+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.faithful+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Adventrous</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.adventrous +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.adventrous+'%"><span class="sr-only"> '+item.adventrous+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.adventrous+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Patient</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.patient +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.patient+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.patient+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Health Lifestyle</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.health +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.healthy+'%"><span class="sr-only"> '+item.healthy+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.healthy+'%</div></div>');

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Extrovert</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.extrovert +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.extrovert+'%"><span class="sr-only"> '+item.extrovert+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.extrovert+'%</div></div>');  
                
                                             $("#personality_title2").append('<a class="btn btn-circle btn-sx btn-outline red" id="personality_request"  data-othermemberID="<?php echo $other_memberID;?>" href="javascript:;">Request Personality</a>');
                                    });
                                        
                            }else{
                                    alert('yes P') 
                                    $.each(responseData, function(index,item) {
                                   
                                            
                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Loving</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.loving +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.loving+'%"><span class="sr-only"> '+item.loving+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.loving+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Caring</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.caring +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.caring+'%"><span class="sr-only"> '+item.caring+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.caring+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Confident</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.confident +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.confident+'%"><span class="sr-only"> '+item.confident+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.confident+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Flirty</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.flirty +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.flirty+'%"><span class="sr-only"> '+item.flirty+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.flirty+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Faithful</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.faithful +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.faithful+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.faithful+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Adventrous</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.adventrous +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.adventrous+'%"><span class="sr-only"> '+item.adventrous+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.adventrous+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Patient</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.patient +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.patient+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.patient+'%</div></div>'); 

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Health Lifestyle</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.health +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.healthy+'%"><span class="sr-only"> '+item.healthy+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.healthy+'%</div></div>');

                                            $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Extrovert</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.extrovert +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.extrovert+'%"><span class="sr-only"> '+item.extrovert+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.extrovert+'%</div></div>');  
                                            
                                           
                                    });
                            }

                            
                        },                     
                        
                        error: function (responseData) {
                            
                                    toastr.warning('Server is not responding, try again.')
                        }
                    });
                    
                  
            });
        </script>


<script>
    // Do Fancy
        $(document).ready(function(){
            $(".toggableIcon").each(function(){
            if($(this).attr("data-heart-value")=="true")
            {
                $(this).addClass("heart-full"); 
            }else{
                $(this).addClass("heart-outline"); 
            }
        });

            $(document).delegate(".toggableIcon", "click",function(e){
            var memberID = '<?php echo $memberID; ?>';
            var other_memberID = $(this).attr('data-othermemberID');
            var fancy_strings = $(this).attr('data-string');
            var obj = {"other_memberID":other_memberID, "memberID":memberID};

            alert(fancy_strings);
            if($(this).attr("data-heart-value")=="true")
            {
                console.log(obj);
                $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/fancy',
                data: obj,
                cache: false,
                    success: function(data){
                        alert('Unfancied')
                    }
                });
                $(this)
                    .attr("data-heart-value", "false")
                    .removeClass("heart-outline")
                    .addClass("heart-full"); 
            }else{
                console.log(obj);
                $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/unfancy',
                data: obj,
                cache: false,
                    success: function(data){
                        alert('Fancied')
                    }
                });
                $(this)
                    .attr("data-heart-value", "true")
                    .removeClass("heart-outline")
                    .addClass("heart-full"); 
            }
            
        });
    })
</script>



<script>
    // Do Date request
        $(document).delegate("#photo_request", "click",function(e){
        var memberID = '<?php echo $memberID; ?>';
        var other_memberID = $(this).attr('data-othermemberID');
        var obj = {"other_memberID":other_memberID, "memberID":memberID};

        
            console.log(obj);
            $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/photo_request',
                data: obj,
                cache: false,
                    success: function(data){
                        //alert('Photo requested')
                        toastr.success('Your photo request was successfully sent')
                    }
            
            
                });
        })
</script>


<script>
    // Do date request
        
        $(document).delegate(".date_request", "click",function(e){
        var memberID = '<?php echo $memberID; ?>';
        var other_memberID = $(this).attr('data-othermemberID');
        var obj = {"other_memberID":other_memberID, "memberID":memberID};

        
            console.log(obj);
            $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/date_request',
                data: obj,
                cache: false,
                    success: function(data){
                        //alert('Photo requested')
                        toastr.success('Your date request was successfully sent')
                    }
            
            
                });
        })
</script>

<script>
    // Do drinks request
        
        $(document).delegate(".drinks_request", "click",function(e){
        var memberID = '<?php echo $memberID; ?>';
        var other_memberID = $(this).attr('data-othermemberID');
        var obj = {"other_memberID":other_memberID, "memberID":memberID};

        
            console.log(obj);
            $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/drink_request',
                data: obj,
                cache: false,
                    success: function(data){
                        //alert('Photo requested')
                        toastr.success('Your drinks request was successfully sent')
                    }
            
            
                });
        })
</script>

<script>
    // Do Personality request
        
            $(document).delegate("#personality_request", "click",function(e){
            var memberID = '<?php echo $memberID; ?>';
            var other_memberID = $(this).attr('data-othermemberID');
            var obj = {"other_memberID":other_memberID, "memberID":memberID};

            
                console.log(obj);
                $.ajax({
                type: "POST",
                url: 'http://localhost/neo4j-alarinna/web/personality_request',
                data: obj,
                cache: false,
                    success: function(data){
                        //alert('Photo requested')

                        toastr.success('Your personality request was successfully sent');
                        $("#personality_title2").replaceWith('<a class="btn btn-circle btn-sx btn-outline grey" disabled id="personality_request"  data-othermemberID="<?php echo $other_memberID;?>" href="javascript:;">Request Personality Sent</a>');
                    }
               
            
        });
    })
</script>

<script>
        // Get fancy
        $(document).ready(function(){
                     
                    
                     var memberID = '<?php echo $memberID; ?>';
                     var pageUrl = "<?php echo base_url(); ?>page/fancy_btn"
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_fancy/'+ memberID,
                        
                        success: function (response) {

                                
                                //$('div.result').unblock(); 
                                var responseData = $.parseJSON(response); //parse JSON
                                alert(responseData);
                                if (!responseData[0]) {
                                    $(".fancy").append('<span class="fa-stack fa-2x font-red tooltips" data-fancy-value="false" data-placement="bottom" data-original-title="Already Fancied"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-heart fa-stack-1x fa-inverse"></i></span>');
                                    
                                }else{                         
                                    $(".fancy").append('<span class="fa-stack fa-2x font-grey-salt tooltips" data-fancy-value="true"  data-placement="bottom" data-original-title="Fancy"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-heart fa-stack-1x fa-inverse"></i></span>');
                                 
                                }
                            },
                                
                        
                        error: function (responseData) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
        });    
           
        </script>

        <script>
        // Get fancy
            $(document).ready(function(){
               
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_date/'+ memberID,
                        
                        
                        beforeSend: function()
                        {
                          
                            $('div.result').block({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fffff' },
                                message:'<img src="../assets/alarinna_loading.gif"/> <span style="color:#a8a8a8">',
                                timeout: 15000
                            });
                
                            //setTimeout($.unblockUI, 20000); 

                        },
                        success: function (response) {
                            
                                //$('div.result').unblock(); 
                                var responseData = $.parseJSON(response); //parse JSON
                                if (!responseData[0]) {
                                    
                                    $(".date_request").append('<span class="fa-stack fa-2x font-blue tooltips"  data-placement="bottom" data-original-title="Request a Date"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x fa-inverse"></i></span>');
                                }else{                         
                                    $(".date_request").append('<span class="fa-stack fa-2x font-grey-salt tooltips"  data-placement="bottom" data-original-title="Date Requested"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x fa-inverse"></i></span>');
                                    
                                }
                            },
     

                        error: function (responseData) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
                
            });
        </script>

        <script>
        // Get fancy
            $(document).ready(function(){
               
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_drinks/'+ memberID,
                        
                        
                        beforeSend: function()
                        {
                          
                            $('div.result').block({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fffff' },
                                message:'<img src="../assets/alarinna_loading.gif"/> <span style="color:#a8a8a8">',
                                timeout: 15000
                            });
                
                            //setTimeout($.unblockUI, 20000); 

                        },
                        success: function (response) {
                            
                                //$('div.result').unblock(); 
                                var responseData = $.parseJSON(response); //parse JSON
                                if (!responseData[0]) {
                                    alert(responseData[0]);
                                    $(".drink_request").append('<span class="fa-stack fa-2x font-grey-salt tooltips"  data-placement="bottom" data-original-title="Drinks Requested A Drink"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-glass fa-stack-1x fa-inverse"></i></span>');
                                }else{                         
                                    alert('jhbjb'+responseData[0]['memberID'])
                                    $(".drinks_request").append('<span class="fa-stack fa-2x font-green tooltips"  data-placement="bottom" data-original-title="Request A Drink"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-glass fa-stack-1x fa-inverse"></i></span>');
                                }
                            },
                                
                        
                        error: function (responseData) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
                
            });
        </script>


        <script>
        // Get fancy
            $(document).ready(function(){
               
                     var memberID = '<?php echo $memberID; ?>';
                     var other_memberID = '<?php echo $other_memberID; ?>';
                     var obj = {"other_memberID":other_memberID, "memberID":memberID};
                     $.ajax({
                        dataType: 'html',
                        type: 'post',
                        url: 'http://localhost/neo4j-alarinna/web/visitor',
                        data: obj,
                        
                        
                        beforeSend: function()
                        {
                          
                            $('div.result').block({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fffff' },
                                message:'<img src="../assets/alarinna_loading.gif"/> <span style="color:#a8a8a8">',
                                timeout: 15000
                            });
                
                            //setTimeout($.unblockUI, 20000); 

                        },
                        success: function (response) {
                            
                                //$('div.result').unblock(); 
                                var responseData = $.parseJSON(response); //parse JSON
                                if (!responseData[0]) {
                                    
                                    $(".date_request").append('<span class="fa-stack fa-2x font-blue tooltips"  data-placement="bottom" data-original-title="Request a Date"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x fa-inverse"></i></span>');
                                }else{                         
                                    $(".date_request").append('<span class="fa-stack fa-2x font-grey-salt tooltips"  data-placement="bottom" data-original-title="Date Requested"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-smile-o fa-stack-1x fa-inverse"></i></span>');
                                    
                                }
                            },
     

                        error: function (responseData) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
                
            });
        </script>




<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
                    
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->






<script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
        

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
