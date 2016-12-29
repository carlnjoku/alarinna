
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
			/*image_array = [
				{image: '../profile-images/5863c7afb5bcb_black-woman-thinking.-pf.jpg', link_url: 'content/our_team/1big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/2.jpg', link_url: 'content/our_team/2big.jpg', link_rel: 'prettyPhoto'},
                {image: 'content/our_team/3.jpg', link_url: 'content/our_team/3big.jpg', link_rel: 'prettyPhoto'},
                {image: 'content/our_team/4.jpg', link_url: 'content/our_team/4big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/5.jpg', link_url: 'content/our_team/5big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/6.jpg', link_url: 'content/our_team/6big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/7.jpg', link_url: 'content/our_team/7big.jpg', link_rel: 'prettyPhoto'}
			];
            */
           
            
            image_array = <?php echo $photos; ?>; 
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
</style>


<?php 
/* foreach($result_member as $key=>$row){
    $nickname = $row['nickname'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $aboutme = $row['aboutme'];
    $profile_photo =$row['profile_photo'];
    $city =$row['city'];
    $country =$row['country'];
    $profile_meter =$row['profile_meter'];
}
*/
?>




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
                                        <h1><?php echo $page_title; ?> 
                                            
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
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- BEGIN PROFILE SIDEBAR -->
                                                <div class="profile-sidebar">
                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light profile-sidebar-portlet ">
                                                        <!-- SIDEBAR USERPIC -->
                                                        <div class="profile-userpic" id="profile_pics">
                                                        </div>
                                                        <!-- END SIDEBAR USERPIC -->
                                                        <!-- SIDEBAR USER TITLE -->
                                                        <div class="profile-usertitle">
                                                            <div class="profile-usertitle-name" id="nickname"> </div>
                                                            <div class="profile-usertitle-job" id="location"> </div>
                                                        </div>
                                                        <!-- END SIDEBAR USER TITLE -->
                                                        <!-- SIDEBAR BUTTONS -->
                                                        <div class="profile-userbuttons">
                                                            <a href="<?php echo base_url();?>profile/edit_profile" type="button" class="btn btn-circle blue btn-sm">Back to Edit Profile</a>
                                                            
                                                        </div>
                                                        <!-- END SIDEBAR BUTTONS -->
                                                        <br>
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
                                                                        
                                                                    </div>
                                                                    <ul class="nav nav-tabs">
                                                                        <li class="active">
                                                                            <a href="#tab_1_1" data-toggle="tab">Photos</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_2" data-toggle="tab">Personal Details</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#tab_1_3" data-toggle="tab">My Interests</a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <div class="portlet-body">

                                                                
                                                                    <div class="tab-content">
                                                                        <!-- PERSONAL INFO TAB -->
                                                                        <div class="tab-pane active" id="tab_1_1">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                 <h3 class="font-blue">My Photos</h3>
                                                                        
                                                                                    <hr>
                                                                                <div class="content_slider_wrapper" id="slider1" style="max-height:280px; padding-top:20px; padding-right:20px">
                                                                                
                                                                                </div>
                                                                            
                                                                              
                                                                            </div>
                                                                        </div>



                                                                            
                                                                        </div>
                                                                        <!-- END PERSONAL INFO TAB -->
                                                                        <!-- CHANGE AVATAR TAB -->
                                                                        <div class="tab-pane" id="tab_1_2">

                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                <h3 class="font-blue">About Me</h3>
                                                                        
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
                                                                        <!-- CHANGE PASSWORD TAB -->
                                                                        <div class="tab-pane" id="tab_1_4">
                                                                            <form action="#" id="form-change-password">
                                                                            <input type="hidden" name="memberID" value="<?php echo $memberID; ?>" />
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Current Password</label>
                                                                                    <input type="password" name="password" class="form-control" /> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">New Password</label>
                                                                                    <input type="password" name="password_r" class="form-control" /> </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label">Re-type New Password</label>
                                                                                    <input type="password" name="password_r" class="form-control" /> </div>
                                                                                <div class="margin-top-10">
                                                                                <button class="btn blue" type="submit" >Change Password</button>
                                                                                    
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <!-- END CHANGE PASSWORD TAB -->
                                                                        <!-- PRIVACY SETTINGS TAB -->
                                                                        <div class="tab-pane" id="tab_1_5">

                                                                      
                                                                        
                                                                            <form action="#" id="edit_privacy">
                                                                                <table class="table table-light table-hover">
                                                                                    <tr>
                                                                                        <td> Hide my profile from the public .. </td>
                                                                                        <td>
                                                                                            <div class="mt-radio-inline" id="public">
                                                                                                <input type="checkbox" checked class="make-switch" id="public_view" name="public_view" data-size="mini">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> Hide my profile from search engines. </td>
                                                                                        <td>
                                                                                            
                                                                                                <div class="mt-radio-inline" id="search">
                                                                                                <input type="checkbox" checked class="make-switch" id="searchable" name="searchable" data-size="mini">
                                                                                            </div>
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                    
                                                                                    
                                                                                    
                                                                                </table>
                                                                               
                                                                            </form>
                                                                        </div>
                                                                        <!-- END PRIVACY SETTINGS TAB -->
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
                                                                
                                                                        <h3 id="personality_title" class="font-blue"></h3>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="portlet-body">
                                                                    <div class="portlet-body form">
                                                                          
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <!-- BEGIN PORTLET-->
                                                                                    <div class="portlet light form-fit ">
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
<style> 
    .slider { margin: 80px; }
</style>



                     <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
                    
                    
                    <!-- END PAGE LEVEL PLUGINS -->
                    
                    
                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <!-- <script src="<?php echo base_url(); ?>assets/pages/scripts/components-nouisliders.js" type="text/javascript"></script> -->
                    <!-- END PAGE LEVEL SCRIPTS -->

                    <script src="<?php echo base_url(); ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>

                    <!-- <script src="<?php echo base_url(); ?>plugins/rangeslider/rangeslider.min.js" type="text/javascript"></script> -->
               
                     <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-blockui.min.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL SCRIPTS -->

                    <!-- BEGIN PAGE LEVEL PLUGINS -->
                    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN PAGE LEVEL SCRIPTS -->
                    <script src="<?php echo base_url(); ?>assets/pages/scripts/components-knob-dials.js" type="text/javascript"></script>
                    <!-- END PAGE LEVEL SCRIPTS -->

                    
                   







<script>
            $(document).ready(function(){
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_aboutme/'+ memberID,
                        
                        
                        success: function (response) {
                        
                            var responseData = $.parseJSON(response); //parse JSON
                            console.log(responseData);
                            $.each(responseData, function(index,item) {
                                   
                                    $(".aboutme").append('<div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Height</h4><div class="font-blue-madison"> '+ item.aboutme_height +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Height</h4><div class="font-blue-madison">'+item.hair+' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Eyes Color</h4><div class="font-blue-madison"> '+ item.eyes +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Income</h4><div class="font-blue-madison"> '+ item.income +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Religion</h4><div class="font-blue-madison"> '+ item.religion +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Profession</h4><div class="font-blue-madison"> '+ item.profession +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Smokes</h4><div class="font-blue-madison"> '+ item.smoke +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Body Type</h4><div class="font-blue-madison"> '+ item.bodytype +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Ethnicity</h4><div class="font-blue-madison"> '+ item.ethnicity +' </div></div><div class="col-md-3 col-sm-3 col-xs-5"><h4 class="block">Marital Status</h4><div class="font-blue-madison"> '+ item.marital_status +' </div></div>'); 
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
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_desire/'+ memberID,
                        
                        
                        
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
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/getmember/'+ memberID,
                        cache: true,
                        
                        
                        success: function (response) {
                            
                           
                            var responseData = $.parseJSON(response); //parse JSON
                            var firstname = response.lastname;
                            console.log(responseData)
                           //$("#logo").html(height);
                            $.each(responseData, function(index,item) {
                                    
                                    $("#profile_pics").append('<img src="<?php echo base_url();?>profile-images/'+ item.avatar +' " class="img-responsive" alt="">'); 
                                    $("#nickname").append(item.nickname);
                                    $("#profile_bg").append(item.profile_bg);
                                    $("#location").append(item.city +', '+item.country);
                                    $("#about_title").append('About Me');
                                    $("#desire_title").append('My Desires' );
                                    $("#personality_title").append('My Personality');
                                    $("#photo_title").append('My Photos');
                                    
                            
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
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/get_personality/'+ memberID,
                        
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
                        },                     
                        
                        error: function (responseData) {
                            
                            toastr.warning('No data found')
                        }
                    });
                    
                  
            });
</script>


<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

                                                       
                           

<script src="<?php echo base_url()?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.jquery.js"></script>   
<script src="<?php echo base_url()?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.kickstart.js"></script> 


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url()?>assets/pages/scripts/form-validation.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->          



<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url()?>assets/pages/scripts/ui-toastr.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
            




<!-- BEGIN CORE PLUGINS -->

<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->