<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url(); ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url(); ?>assets/global/plugins/nouislider/nouislider.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>assets/global/plugins/nouislider/nouislider.pips.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>plugins/rangeslider/rangeslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="<?php echo base_url()?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>src/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->  

<!-- END PAGE LEVEL PLUGINS -->


    

<style>

.photo{
    border-radius: 0.5rem;
}

.fa-heart-o:hover{
    color:blue;
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
  float:right
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

<style>
.portfolio-image {
	position: relative;
	display: inline-block;
}

.portfolio-image img {
	vertical-align: top;
}

.overlay {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
	/* background-color: #151515; */ /* for dark overlay on top of the image */
	background: transparent;
	opacity: 0;
	transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
}

.portfolio-image:hover .overlay {
	opacity: 0.8;
}

.magnifying-glass-icon {
	color: #fff;
	text-align: center;
	position: absolute;
	top: 85%;
	left: 85%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	border-radius: 50%;
	padding: 7px;
	line-height: 1;
    border: 2px #FFF solid;
}

.magnifying-glass-icon:hover {
	background: rgba(0,0,0,0.9);
	color: #fff;
}

.user-glass-icon{
    color: #fff;
	text-align: center;
	position: absolute;
	top: 70%;
	left: 85%;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	-o-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	border-radius: 50%;
	padding: 7px;
	line-height: 1px;
    border: 2px #FFF solid;
    
}

.user-glass-icon:hover{
    background: rgba(0,0,0,0.9);
	color: #fff;
}

@media only screen and (max-width: 400px) {
	.portfolio-image {
		display: block;
	}
}


</style>



<script>
// This just toggles the follow/following of the button
$('a.follow').click(function () {
  $(this).toggleClass('followed');
  
  if($(this).hasClass('followed')) {
    $(this).text('Followed');
    $('ul li:last-child').html('325<span>Followers</span>');
  }
  else {
    $(this).text('Follow Nick');
    $('ul li:last-child').html('324<span>Followers</span>');
  }
});
    
</script>


<?php foreach($result_member as $key=>$row){
$nickname = $row['nickname'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$age = $row['age'];
$email = $row['email'];
$mobile = $row['mobile'];
$aboutme = $row['aboutme'];
$avatar =$row['avatar'];
$profile_bg =$row['profile_bg'];
$city =$row['city'];
$country =$row['country'];
$profile_meter =$row['profile_meter'];

$aboutme_height = $row['aboutme_height'];
$aboutme_hair = $row['aboutme_hair'];
$aboutme_eyes = $row['aboutme_eyes'];
$aboutme_religion = $row['aboutme_religion'];
$aboutme_income = $row['aboutme_income'];
$aboutme_profession = $row['aboutme_profession'];
$aboutme_ethnicity = $row['aboutme_ethnicity'];
$aboutme_smoke = $row['aboutme_smoke'];
$aboutme_marital_status = $row['aboutme_marital_status'];
$aboutme_bodytype = $row['aboutme_bodytype'];

$desire_height = $row['desire_height'];
$desire_hair = $row['desire_hair'];
$desire_eyes = $row['desire_eyes'];
$desire_religion = $row['desire_religion'];
$desire_income = $row['desire_income'];
$desire_profession = $row['desire_profession'];
$desire_ethnicity = $row['desire_ethnicity'];
$desire_smoke = $row['desire_smoke'];
$desire_marital_status = $row['desire_marital_status'];
$desire_bodytype = $row['desire_bodytype'];
$desire_children = $row['desire_children'];
$desire_lookingfor = $row['desire_looking_for'];
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
                                 <input type="file" />
                            </div>
                            
                        </figure>
                        <figure class="profile-picture" style="background-image: url('<?php echo base_url();?>profile-images/<?php echo $avatar; ?>')">
                        
                            
                        </figure>

                        
                        <div class="profile-stats" style="padding-right:57px;">
                            <ul>
                                        <li><?php echo $nickname; ?>    <span><?php echo $age.' - '  .$city .', '. $country; ?></span></li>
                                    
                                  </ul>

                          
                            <a  style="position:relative; left:530px; top:13px "href="<?php echo base_url();?>profile/p_preview" class=" btn btn-circle red">Preview Profile</a>
                        </div>
                        
                        
                        </header>
                        <!-- BEGIN CONTENT BODY -->
                        <!-- BEGIN PAGE HEAD-->
                        
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
                                                
                                                <!-- PORTLET MAIN -->
                                                <div class="portlet light ">
                                                    <!-- STAT -->
                                                        <div class="row">
                                                        
                                                            <div class="col-md-12" style="text-align:center">
                                                                <h4 style="text-align:center; weight:bold">Your Profile Meter</h4>
                                                                <input class="knob" data-angleoffset=-125 data-anglearc=250 data-fgcolor="#FF69B4"  readonly value="<?php echo $profile_meter; ?>"> 
                                                            </div> 
                                                        </div>
                                                        
  
                                                </div>
                                                <!-- END PORTLET MAIN -->

                                                 <!-- PORTLET MAIN -->
                                                <div class="portlet light ">
                                                    <!-- STAT -->
                                                        <div class="row">
                                                        
                                                            <div class="col-md-12">
                                                                <h4 style="text-align:center; weight:bold; text-align:center">Privacy Setting</h4>
                                                                <form action="#" id="edit_privacy">
                                                                            <table class="table table-light table-hover">
                                                                                <tr>
                                                                                    <td> Hide from members </td>
                                                                                    <td>
                                                                                        <div class="mt-radio-inline" id="public">
                                                                                            <input type="checkbox" checked class="make-switch" id="public_view" name="public_view" data-size="mini">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td> Hide from search engine </td>
                                                                                    <td>
                                                                                        
                                                                                            <div class="mt-radio-inline" id="search">
                                                                                            <input type="checkbox" checked class="make-switch" id="searchable" name="searchable" data-size="mini">
                                                                                        </div>
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                                
                                                                                
                                                                                
                                                                            </table>
                                                                            
                                                                        </form>
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
                                                                    <span class="caption-subject font-blue-madison bold uppercase">Account Profile</span>
                                                                </div>
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active">
                                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#tab_1_2" data-toggle="tab">Add Photos</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#tab_1_3" data-toggle="tab">My Desires</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#tab_1_4" data-toggle="tab">Change Password</a>
                                                                    </li>
                                                                    
                                                                </ul>
                                                            </div>
                                                            <div class="portlet-body">

                                                            
                                                                <div class="tab-content">
                                                                    <!-- PERSONAL INFO TAB -->
                                                                    <div class="tab-pane active" id="tab_1_1">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                
                                                                                <h4>Bio Data</h4>
                                                                                <form action="#" id="form_update_member_details" class="form-horizontal">
                                                                                    <div class="form-body">
                                                                                        <input type="hidden" name="memberID" id="memberID" value="<?php echo $memberID; ?>" />
                                                                                        <div class="alert alert-danger display-hide">
                                                                                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                                                        <div class="alert alert-success display-hide">
                                                                                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">First Name
                                                                                                <span class="required"> * </span>
                                                                                            </label>
                                                                                            <div class="col-md-4">
                                                                                                <input type="text" name="firstname" data-required="1" value="<?php echo $firstname; ?>" class="form-control" /> </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">Last Name
                                                                                                <span class="required"> * </span>
                                                                                            </label>
                                                                                            <div class="col-md-4">
                                                                                                <input type="text" name="lastname" data-required="1" value="<?php echo $lastname; ?>" class="form-control" /> </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">Email Address
                                                                                                <span class="required"> * </span>
                                                                                            </label>
                                                                                            <div class="col-md-4">
                                                                                                <input name="email" type="text" value="<?php echo $email; ?>"  class="form-control" /> </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">Mobile Phone
                                                                                                <span class="required"> * </span>
                                                                                            </label>
                                                                                            <div class="col-md-4">
                                                                                                <input name="number" id="number" type="text" value="<?php echo $mobile; ?>" class="form-control" /> </div>
                                                                                        </div>
                                                                            
                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">About Me&nbsp;&nbsp;</label>
                                                                                            <div class="col-md-8">
                                                                                                <textarea class="form-control" rows="3" name="aboutme" id="aboutme" placeholder="in a few words describe yourself"> <?php echo $aboutme; ?></textarea>
                                                                                                
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-3">Input Group
                                                                                                <span class="required"> * </span>
                                                                                            </label>
                                                                                            <div class="col-md-4">
                                                                                                <div class="input-group">
                                                                                                    <span class="input-group-addon">
                                                                                                        <i class="fa fa-envelope"></i>
                                                                                                    </span>
                                                                                                    <input type="text" class="form-control" name="input_group" value="<?php echo $email; ?>" placeholder="Email Address"> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-actions">
                                                                                        <div class="row">
                                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                                <button type="submit" class="btn blue">Submit</button>
                                                                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>

                                                                                <hr>

                                                                                <h4>About Me</h4>

                                                                                
                                                                
                                                                                    <div class="row">
                                                                                    
                                                                                    <form action="#" id="form_edit_aboutme" class="form-horizontal">
                                                                                    <div class="col-md-6">
                                                                                        <input type="hidden" name="memberID" id="memberID" value="<?php echo $memberID ;?>" />
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Height</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="height" id="height" class="form-control height">
                                                                                                <option><?php echo $aboutme_height; ?></option>
                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Hair Colour</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="hair" id="hair" class="form-control hair">
                                                                                                <option><?php echo $aboutme_hair; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Eye Colour</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="eyes" id="eyes" class="form-control eyes">
                                                                                                <option><?php echo $aboutme_eyes; ?></option>  
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Religon</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="religion" id="religion" class="form-control religion">
                                                                                                    <option><?php echo $aboutme_religion; ?></option>  
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Income</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="income" id="income" class="form-control income">
                                                                                                    <option><?php echo $aboutme_income; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                        
                                                                                    </div>

                                                                                    <div class="col-md-6">

                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Profession</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="profession" id="profession" class="form-control profession">
                                                                                                    <option><?php echo $aboutme_profession; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Body Type</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="bodytype" id="bodytype" class="form-control bodytype">
                                                                                                    <option><?php echo $aboutme_bodytype; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Smoker</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="smoke" id="smoke" class="form-control smoke">
                                                                                                <option><?php echo $aboutme_smoke; ?></option> 
                                                                                                <option value="yes">Yes</option>
                                                                                                <option value="no">No</option>
                                                                                        
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Ethnicity</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="ethnicity" id="ethnicity" class="form-control ethnicity">
                                                                                                    <option><?php echo $aboutme_ethnicity; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Marital Status</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="marital_status" id="marital_status" class="form-control marital_status">
                                                                                                    <option><?php echo $aboutme_marital_status; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-actions">
                                                                                        <div class="row">
                                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                                <button type="submit" class="btn blue">Submit</button>
                                                                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                        
                                                                                    </div>
                                                                                
                                                                                </form>
                                                                            </div>

                                                                            

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END PERSONAL INFO TAB -->
                                                                    <!-- CHANGE AVATAR TAB -->
                                                                    <div class="tab-pane" id="tab_1_2">

                                                                    
                                                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Hooray!"></a>

                                                                        <div class="note note-info">
                                                                            <h3>Photo Upload Tip</h3>
                                                                            <p>You can upload as many as twelve pictures.</p>
                                                                            
                                                                        </div>

                                                                            <div class="row">
                                                                                <div class="col-md-12 mt-element-overlay">
                                                                                
                                                                                <div id="photo_gallery">
                                                                                
                                                                                    <div class="col-md-4 jade" style="margin-bottom:20px">
                                                                                        <div class="" 
                                                                                                <!-- my first cropper -->
                                                                                                <input type="file" id="photo1"/>
                                                                                                
                                                                                            </div>
                                                                                        
                                                                                    </div>
                                                                                
                                                                                <?php
                                                                                    
                                                                                    foreach ($result_photos as $key=> $row) {
                                                                                        $photo = $row['photo']; // keep the last id for the paging
                                                                                        ?>
                                                                                        
                                                                                    <div class="col-md-4" style="margin-bottom:20px">    
                                                                                        <div class="portfolio-image">
                                                                                            <a href="http://example.com/full-image.jpg" class="foobox"><img class="photo" style="width:230px; height:230px" src="<?php echo base_url();?>profile-images/<?php echo $photo; ?>"/></a>

                                                                                            <div class="overlay">
                                                                                                <a href="javascript:;" onclick="delete_photo('<?php echo $photo; ?>')" class="magnifying-glass-icon foobox">
                                                                                                    <i class="fa fa-trash"></i>
                                                                                                </a>

                                                                                                <a href="javascript:;" onclick="make_profile_photo('<?php echo $photo; ?>')" data-toggle="tooltip" data-placement="left" title="Make Profile Picture"  class="user-glass-icon foobox">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                              

                                                                                        
                                                                                        <?php
                                                                                    }
                                                                                ?>
                                                                                
                                                                                </div>



                                                                                <!--
                                                                                <div class="col-md-4" style="margin-bottom:20px">
                                                                                        <div class="slim" 
                                                                                                
                                                                                            <input type="file" id="photo2"/>
                                                                                        </div>
                                                                                </div>

                                                                                -->

                                                                                                
                                                                                    </div>
                                                                                </div>
                                                                            
                                                                        
                                                                    </div>
                                                                    <!-- END CHANGE AVATAR TAB -->
                                                                    <!-- CHANGE MEMBER DETAILS TAB -->
                                                                    <div class="tab-pane" id="tab_1_3">
                                                                        <div class="row">
                                                                        <div class="col-md-12">
                                                                        <h3>My Desires </h3>
                                                                            <form action="#" id="form_edit_desire" class="form-horizontal">
                                                                                    <div class="col-md-6">
                                                                                    <input type="hidden" name="memberID" id="memberID" value="<?php echo $memberID; ?>" />
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Height</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="height" id="height" class="form-control height">
                                                                                                  <option><?php echo $desire_height; ?></option>  
                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Hair Colour</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="hair" id="hair" class="form-control hair">
                                                                                                  <option><?php echo $desire_hair; ?></option>  
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Eye Colour</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="eyes" id="eyes" class="form-control eyes">
                                                                                                   <option><?php echo $desire_eyes; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Religon</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="religion" id="religion" class="form-control religion">
                                                                                                    <option><?php echo $desire_religion; ?></option>
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Interest</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="lookingfor" id="lookingfor" class="form-control lookingfor">
                                                                                                    <option><?php echo $desire_lookingfor; ?></option>
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Income</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="income" id="income" class="form-control income">
                                                                                                    <option><?php echo $desire_income; ?></option>
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                        
                                                                                    </div>

                                                                                    <div class="col-md-6">

                                                                                        
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Profession</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="profession" id="profession" class="form-control profession">
                                                                                                    <option><?php echo $desire_profession; ?></option>
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Body Type</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="bodytype" id="bodytype" class="form-control bodytype">
                                                                                                    <option><?php echo $desire_bodytype; ?></option>
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Smoker</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="smoke" id="smoke" class="form-control smoke">
                                                                                        
                                                                                                <option value="yes">Yes</option>
                                                                                                <option value="no">No</option>
                                                                                        
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Ethnicity</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="ethnicity" id="ethnicity" class="form-control ethnicity">
                                                                                                   <option><?php echo $desire_ethnicity; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Marital Status</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="marital_status" id="marital_status" class="form-control marital_status">
                                                                                                   <option><?php echo $desire_marital_status; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="form-group">
                                                                                            <label class="control-label col-md-4">Children</label>
                                                                                            <div class="col-md-6">
                                                                                                <select name="children" id="children" class="form-control children">
                                                                                                   <option><?php echo $desire_children; ?></option> 
                                                                                                                                                                                        
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>

                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="form-actions">
                                                                                        <div class="row">
                                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                                <button type="submit" class="btn blue">Submit</button>
                                                                                                <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                
                                                                                </form>
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
                                                                    <span class="caption-subject font-blue-madison bold uppercase">Edit Personality</span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="portlet-body">
                                                                <div class="portlet-body form">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <!-- BEGIN PORTLET-->
                                                                                <div class="portlet light form-fit ">
                                                                                    
                                                                                    <div class="portlet-body form">
                                                                                
                                                                                        <form role="form" id="form_edit_personality" class="form-horizontal form-bordered">
                                                                                        <input type="hidden" name="memberID" value="<?php echo $memberID; ?>" name="memberID">
                                                                                        
                                                                                        <div class="row lovings"></div>
                                                                                        
                                                                                        <div class="row loving">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Loving</div>
                                                                                                <div class="col-md-7"> <div id="slider-2"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="loving" value="20" id="loving" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Caring</div>
                                                                                                <div class="col-md-7"> <div id="slider-3"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="caring" value="50" id="caring" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Confident</div>
                                                                                                <div class="col-md-7"> <div id="slider-4"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="confident" value="0" id="confident" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Flirty</div>
                                                                                                <div class="col-md-7"> <div id="slider-5"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="flirty" value="0" id="flirty" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Faithful</div>
                                                                                                <div class="col-md-7"> <div id="slider-6"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="faithful" value="0" id="faithful" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Adventrous</div>
                                                                                                <div class="col-md-7"> <div id="slider-7"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="adventrous" value="0" id="adventrous" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Patient</div>
                                                                                                <div class="col-md-7"> <div id="slider-8"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="patient" value="0" id="patient" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Healthy Life</div>
                                                                                                <div class="col-md-7"> <div id="slider-9"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="healthy" value="0" id="healthy" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-12">
                                                                                                <div class="col-md-2" style="margin-bottom:10px">Extrovert</div>
                                                                                                <div class="col-md-7"> <div id="slider-10"></div> </div>
                                                                                                <div class="col-md-2"><input type="text" name="extrovert" value="0" id="extrovert" readonly style="border:0; width:26px">%</div>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                            
                                                                                            <div class="form-actions">
                                                                                                <div class="row">
                                                                                                    <div class="col-md-offset-3 col-md-9">
                                                                                                        <button type="submit" class="btn blue">Submit</button>
                                                                                                        <button type="button" class="btn default">Cancel</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>

                                                                                    
                                                                                        
                                                                                        

                                                                                        
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
    $(document).ready(function() {
    function data ( element, key ) {
	return element.getAttribute('data-' + key);  
   
    }
    function createSlider ( slider ) {
        
            noUiSlider.create(slider, {
                start: 10,
                connect: [true, false],
                step: Number(data(slider, 'step')) || 10,
                range: {
                    'min': 10,
                    'max': 100
                },
                
                connect: true,
                format: {
                    to: function (value) {
                        return value + '';
                    },
                    from: function (value) {
                        return value.replace('', '');
                    }
                }
            });
    }

    Array.prototype.forEach.call(document.querySelectorAll('.slider'), createSlider);

    });

</script>                    

 
<script>
$(document).ready(function() {
    $('#photo1').slim({
            ratio: '1:1',
            saveInitialImage:true,
            service: 'http://localhost/alarinna/plugins/slim-image-upload-and-ratio-cropping-plugin/server/async.php',
            download: false,
            instantEdit: true,
           // minSize:0.04,
            forceSize:true,
            size: {width:640, height:640},
            willSave: function(data, ready) {
                //alert('saving!');
                ready(data);
               
            },
            didUpload: function(error, data, response) {
                    console.log(response);
                    var memberID = '<?php echo $memberID; ?>';
                    var filename = response.file;
                    var datastring = {"memberID":memberID,"filename":filename} ;
                    
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/neo4j-alarinna/web/photo_upload",
                        data: datastring,
                        success: function (response) {
                           
                            $("#photo_gallery").load('http://localhost/alarinna/profile/ajax_photos');
                            //load("now_playing.php");
                             
                        }
                    });   
                    
                   
            },
            label: "<i class='fa fa-plus fa-4x' style='color:#cccccc'></i>",
            push: false,
            buttonConfirmLabel: 'Apply'
 
           
    });

    $('#profile_banner').slim({
            ratio: '4:1',
            saveInitialImage:true,
            service: 'http://localhost/alarinna/plugins/slim-image-upload-and-ratio-cropping-plugin/server/async.php',
            download: false,
            instantEdit: true,
            size: {width:1300, height:378},
            willRequest: function(data, ready) {
                //alert('saving!');
                ready(data);
               
            },
            didUpload: function(error, data, response) {
                    console.log(response);
                    var memberID = '<?php echo $memberID; ?>';
                    var filename = response.file;
                    var datastring = {"memberID":memberID,"filename":filename} ;
                    
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/neo4j-alarinna/web/profile_bg_photo_upload",
                        data: datastring,
                        success: function (response) {
                           
                            //$("#photo_gallery").load('http://localhost/alarinna/profile/ajax_photos');
                            //load("now_playing.php");
                             
                        }
                    });   
                    
                   
            },
            label: "<i class='fa fa-plus fa-4x' style='color:#cccccc'></i>",
            push: false,
            buttonConfirmLabel: 'Confirm'
 
           
    });

    
    
    // Submit forms without validation
    $("#form_edit_aboutme").submit(function(e) {
        var frmData1 = $('#form_edit_aboutme').serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
                                        
                    var data1 = JSON.stringify(frmData1);
                    
                     $.ajax({
                        dataType: 'html',
                        type: 'post',
                        url: 'http://localhost/neo4j-alarinna/web/edit_aboutme',
                        data: data1,
                       
                        beforeSend: function()
                        {
                            alert(data1);
                            $.blockUI({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fff' },
                                message:'<img src="../assets/loading-spinner-pink.gif"/>',
                            });
                            setTimeout($.unblockUI, 2000); 
  
                        },
                        success: function (responseData) {
                            
                            var responseData = $.parseJSON(responseData); //parse JSON
                            var member_id = responseData.memberID;
                            var msg = responseData.msg;
                            //var status = responseData.status;
                            
                            alert(member_id);
                            toastr.success(msg)
    
                        },
                        error: function (responseData) {
                            
                            toastr.warning('Personal detail update failed')
                        }
                    });
                    
                 
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    
    });


    // Submit forms edit desire
    $("#form_edit_desire").submit(function(e) {
        var frmData1 = $('#form_edit_desire').serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
                                        
                    var data1 = JSON.stringify(frmData1);

                     $.ajax({
                        dataType: 'html',
                        type: 'post',
                        url: 'http://localhost/neo4j-alarinna/web/edit_desire',
                        data: data1,
                        
                        beforeSend: function()
                        {
                            alert(data1);
                            $.blockUI({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fff' },
                                message:'<img src="../assets/loading-spinner-pink.gif"/>',
                            });
                            setTimeout($.unblockUI, 2000); 

                            
                            
                        
                        },
                        success: function (responseData) {
                            
                            var responseData = $.parseJSON(responseData); //parse JSON
                            var member_id = responseData.memberID;
                            var msg = responseData.msg;
                            //var status = responseData.status;
                            
                            alert(member_id);
                            toastr.success(msg)
    
                        },
                        error: function (responseData) {
                            
                            toastr.warning('Personal detail update failed')
                        }
                    });
                    
                 
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    
    });

    // Submit forms without validation
    $("#form_edit_personality").submit(function(e) {
        var frmData1 = $('#form_edit_personality').serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
                                        
                    var data1 = JSON.stringify(frmData1);

                     $.ajax({
                        dataType: 'html',
                        type: 'post',
                        url: 'http://localhost/neo4j-alarinna/web/personality',
                        data: data1,
                        
                        beforeSend: function()
                        {
                            alert(data1);
                            $.blockUI({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#fff' },
                                message:'<img src="../assets/loading-spinner-pink.gif"/>',
                            });
                            setTimeout($.unblockUI, 2000); 

                            
                            
                        
                        },
                        success: function (responseData) {
                            
                            var responseData = $.parseJSON(responseData); //parse JSON
                            var member_id = responseData.memberID;
                            var msg = responseData.msg;
                            //var status = responseData.status;
                            
                            alert(member_id);
                            toastr.success(msg)
    
                        },
                        error: function (responseData) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
                 
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                    
    });


         
});
</script>   


<script>    

$('input[name="public_view"]').on('switchChange.bootstrapSwitch', function(event, state) {
  //console.log(this); // DOM element
  //console.log(event); // jQuery event
  console.log(state); // true | false
  // ajax call
  if(state == true){
      
      var stat = 1;
      var memberID =  '<?php echo $memberID; ?>';
      var obj = {"stat":stat, "memberID":memberID};
      $.ajax({
                dataType: 'html',
                type: 'post',
                url: 'http://localhost/neo4j-alarinna/web/edit_privacy_public_view',
                data: obj,
                
                success: function (responseData) {
                    
                    var responseData = $.parseJSON(responseData); //parse JSON
                    var member_id = responseData.memberID;
                    var msg = responseData.msg;
                    //var status = responseData.status;
                    
                    //alert(member_id);
                    toastr.success('our privacy successfully switched on')

                },
                error: function (responseData) {
                    
                    toastr.warning('Personal detail update failed')
                }
            });

  }else if(state==false){
      var stat = 0;
      var memberID =  '<?php echo $memberID; ?>';
      var obj = {"stat":stat, "memberID":memberID};
      $.ajax({
                dataType: 'html',
                type: 'post',
                url: 'http://localhost/neo4j-alarinna/web/edit_privacy_public_view',
                data: obj,
                
                success: function (responseData) {
                    
                    var responseData = $.parseJSON(responseData); //parse JSON
                    var member_id = responseData.memberID;
                    var msg = responseData.msg;
                    //var status = responseData.status;
                    
                    //alert(member_id);
                    toastr.success('Your privacy successfully switched off')

                },
                error: function (responseData) {
                    
                    toastr.warning('Personal detail update failed')
                }
            });
    }else{
        alert('Allow views');
    }
});

$('input[name="searchable"]').on('switchChange.bootstrapSwitch', function(event, state) {
  //console.log(this); // DOM element
  //console.log(event); // jQuery event
  console.log(state); // true | false

  // ajax call
  if(state == true){
      
      var stat = 1;
      var memberID =  '<?php echo $memberID; ?>';
      var obj = {"stat":stat, "memberID":memberID};
      $.ajax({
                dataType: 'html',
                type: 'post',
                url: 'http://localhost/neo4j-alarinna/web/edit_privacy_searchable',
                data: obj,
                
                success: function (responseData) {
                    
                    var responseData = $.parseJSON(responseData); //parse JSON
                    var member_id = responseData.memberID;
                    var msg = responseData.msg;
                    //var status = responseData.status;
                    
                    //alert(member_id);
                    toastr.success('our privacy successfully switched on')

                },
                error: function (responseData) {
                    
                    toastr.warning('Personal detail update failed')
                }
            });

  }else if(state==false){
      var stat = 0;
      var memberID =  '<?php echo $memberID; ?>';
      var obj = {"stat":stat, "memberID":memberID};
      $.ajax({
                dataType: 'html',
                type: 'post',
                url: 'http://localhost/neo4j-alarinna/web/edit_privacy_searchable',
                data: obj,
                
                success: function (responseData) {
                    
                    var responseData = $.parseJSON(responseData); //parse JSON
                    var member_id = responseData.memberID;
                    var msg = responseData.msg;
                    //var status = responseData.status;
                    
                    //alert(member_id);
                    toastr.success('Your privacy successfully switched off')

                },
                error: function (responseData) {
                    
                    toastr.warning('Personal detail update failed')
                }
            });
    }else{
        // Call any function
    }
});

</script>


<script>
function delete_photo(id)
    {
        //var status = confirm("Are you sure you want to delete ?");  
        var photo_id = id;
       alert(photo_id)
            $.ajax({
                type:"POST",
                url:'<?php echo base_url();?>page/delete_photo',
                data:{photo_id:photo_id},
                success(html){
                $("#photo_gallery").load('http://localhost/alarinna/profile/ajax_photos');
                alert('Deleted');
            }
            });
      
    };
</script>

<script>
function make_profile_photo(id)
    {
        //var status = confirm("Are you sure you want to delete ?");  
        var photoID = id;
        var memberID = '<?php echo $memberID;?>';
        var obj = {"photoID":photoID, "memberID":memberID};
        var urls = '<?php echo base_url();?>profile/edit_profile';
       alert(photoID)
            $.ajax({
                type:"POST",
                url:'http://localhost/neo4j-alarinna/web/make_profile_photo',
                data:obj,
                success(response){
                    var responseData = $.parseJSON(response); //parse JSON
                    
                    console.log(responseData);
                    //$("#logo").html(height);
                
                    $('#member_avatar').replaceWith('<img alt="" width="40" class="img-circle" src="<?php echo base_url(); ?>profile-images/'+ responseData.avatar +'">');
                    $(".profile-picture").replaceWith("<figure class='profile-picture' style='background-image: url('<?php echo base_url();?>profile-images/woman_avatar.jpg)></figure>'"); 
                    /*
                    $.each(responseData, function(index,item) {
                            alert(item.avatar)
                            //$(".profile-picture").load(document.urls, '.profile-picture'); 
                            $('#member_avatar').append('<img alt="" class="img-circle" src="<?php echo base_url(); ?>profile-images/'+ responseData.avatar +'">');

                            //$('#your_div_id').html(data);
                
                    });
                    */
                }
            });
      
    };
</script>







<script>
    // Get preloaded data from database
    var hair = '<?php echo base_url();?>hair.json';
    $.getJSON(hair, function(data){
            $.each(data, function(index,item) {
                var hairs ='yello blue';
            $("select.hair").append("<option>" + item.name + "</option>"); 
        });
    });

    var height = '<?php echo base_url();?>height.json';
    $.getJSON(height, function(data){
            $.each(data, function(index,item) {
            $("select.height").append("<option>" + item.name + "</option>"); 
        });
    });

    var eyes = '<?php echo base_url();?>eyes.json';
    $.getJSON(eyes, function(data){
            $.each(data, function(index,item) {
            $("select.eyes").append("<option>" + item.name + "</option>"); 
        });
    });

    var income = '<?php echo base_url();?>income.json';
    $.getJSON(income, function(data){
            $.each(data, function(index,item) {
            $("select.income").append("<option>" + item.name + "</option>"); 
        });
    });

    var profession = '<?php echo base_url();?>profession.json';
    $.getJSON(profession, function(data){
            $.each(data, function(index,item) {
            $("select.profession").append("<option>" + item.name + "</option>"); 
        });
    });


    var religion = '<?php echo base_url();?>religion.json';
    $.getJSON(religion, function(data){
            $.each(data, function(index,item) {
            $("select.religion").append("<option>" + item.name + "</option>"); 
        });
    });


    var ethnicity = '<?php echo base_url();?>ethnicity.json';
    $.getJSON(ethnicity, function(data){
            $.each(data, function(index,item) {
            $("select.ethnicity").append("<option>" + item.name + "</option>"); 
        });
    });


    var bodytype = '<?php echo base_url();?>bodytype.json';
    $.getJSON(bodytype, function(data){
            $.each(data, function(index,item) {
            $("select.bodytype").append("<option>" + item.name + "</option>"); 
        });
    });


    var marital_status = '<?php echo base_url();?>marital_status.json';
    $.getJSON(marital_status, function(data){
            $.each(data, function(index,item) {
            $("select.marital_status").append("<option>" + item.name + "</option>"); 
        });
    });

    var children = '<?php echo base_url();?>children.json';
    $.getJSON(children, function(data){
            $.each(data, function(index,item) {
            $("select.children").append("<option>" + item.name + "</option>"); 
        });
    });

    var lookingfor = '<?php echo base_url();?>lookingfor.json';
    $.getJSON(lookingfor, function(data){
            $.each(data, function(index,item) {
            $("select.lookingfor").append("<option>" + item.name + "</option>"); 
        });
    });


   

</script>

 <script>
    $(function() {
        $( "#slider-2" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#loving" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-3" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#caring" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-4" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#confident" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-5" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#flirty" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-6" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#faithful" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-7" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#adventrous" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-8" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#patient" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });

    $(function() {
        $( "#slider-9" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#healthy" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });


    $(function() {
        $( "#slider-10" ).slider({
            
            value: 5,
            animate:"slow",
                slide: function( event, ui ) {
                $( "#extrovert" ).val( ui.value );
            },	
            orientation: "horizontal"
        });
        
    });
</script>

<script>
        // Get value of personality
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
                                   
                            $(".lovings").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Loving</div><div class="col-md-7"> <div id="slider-2"></div> </div><div class="col-md-2"><input type="text" name="loving" value="'+item.loving+'" id="loving" readonly style="border:0; width:26px">%</div></div>');
                                    
                                    
                                      /*
                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Caring</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.caring +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.caring+'%"><span class="sr-only"> '+item.caring+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.caring+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Confident</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.confident +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.confident+'%"><span class="sr-only"> '+item.confident+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.confident+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Flirty</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.flirty +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.flirty+'%"><span class="sr-only"> '+item.flirty+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.flirty+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Faithful</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.faithful +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.faithful+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.faithful+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Adventrous</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.adventrous +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.adventrous+'%"><span class="sr-only"> '+item.adventrous+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.adventrous+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Patient</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.patient +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.faithful+'%"><span class="sr-only"> '+item.patient+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.patient+'%</div></div>'); 

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Health Lifestyle</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.health +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.healthy+'%"><span class="sr-only"> '+item.healthy+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.healthy+'%</div></div>');

                                    $("#loving").append('<div class="col-md-12"><div class="col-md-2" style="margin-bottom:10px">Extrovert</div><div class="col-md-7"> <div class="progress"><div class="progress-bar progress-bar-blue" role="progressbar" aria-valuenow="'+item.extrovert +'" aria-valuemin="0" aria-valuemax="100" style="width: '+item.extrovert+'%"><span class="sr-only"> '+item.extrovert+'% Complete (success) </span></div></div> </div><div class="col-md-2">'+item.extrovert+'%</div></div>');  
                                    */
                            
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            toastr.warning('No data found')
                        }
                    });
                    
                  
            });
</script>

<script>
$(function() {
// OPACITY OF BUTTON SET TO 0%
$(".roll").css("opacity","0");
 
// ON MOUSE OVER
$(".roll").hover(function () {
 
// SET OPACITY TO 70%
$(this).stop().animate({
opacity: .6
}, "fast");
},
              
 
// ON MOUSE OUT
function () {
 
// SET OPACITY BACK TO 50%
$(this).stop().animate({
opacity: 0
}, "slow");
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

