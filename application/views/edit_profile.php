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
    .slim {
        border-radius: 0.5rem;
        width:230px;
        height:230px;
    }
    .photo{
        border-radius: 0.5rem;
    }

</style>


<?php foreach($result_member as $key=>$row){
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
                                        <h1><?php echo $page_title; ?> | Account 
                                            <small>user account page</small>
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
                                                        <div class="profile-userpic">
                                                            <img src="<?php echo base_url();?>/profile-images/<?php echo $profile_photo; ?>" class="img-responsive" alt=""> </div>
                                                        <!-- END SIDEBAR USERPIC -->
                                                        <!-- SIDEBAR USER TITLE -->
                                                        <div class="profile-usertitle">
                                                            <div class="profile-usertitle-name"> <?php echo $nickname; ?> </div>
                                                            <div class="profile-usertitle-job"> <?php echo $city .', '. $country; ?> </div>
                                                        </div>
                                                        <!-- END SIDEBAR USER TITLE -->
                                                        <!-- SIDEBAR BUTTONS -->
                                                        <div class="profile-userbuttons">
                                                            <a href="<?php echo base_url();?>profile/p_preview" type="button" class="btn btn-circle blue btn-sm">Preview Profile</a>
                                                            <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                                        </div>
                                                        <!-- END SIDEBAR BUTTONS -->
                                                        <!-- SIDEBAR MENU -->
                                                        <div class="profile-usermenu">
                                                            <ul class="nav">
                                                                <li>
                                                                    <a href="page_user_profile_1.html">
                                                                        <i class="icon-home"></i> Overview </a>
                                                                </li>
                                                                <li class="active">
                                                                    <a href="page_user_profile_1_account.html">
                                                                        <i class="icon-settings"></i> Account Settings </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- END MENU -->
                                                    </div>
                                                    <!-- END PORTLET MAIN -->
                                                    <!-- PORTLET MAIN -->
                                                    <div class="portlet light ">
                                                        <!-- STAT -->



                                                         <div class="row">
                                                            
                                                            <div class="col-md-12" style="text-align:center">
                                                                <h4 style="text-align:center; weight:bold">Your Profile Meter</h4>
                                                                <input class="knob" data-angleoffset=-125 data-anglearc=250 data-fgcolor="#4C87B9"  readonly value="<?php echo $profile_meter; ?>"> </div>
                                                            
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
                                                                        <li>
                                                                            <a href="#tab_1_5" data-toggle="tab">Privacy Settings</a>
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

                                                                                   
                                                                                    <?php foreach($result_aboutme as $key=>$row){
                                                                                        $height = $row['height'];
                                                                                        $hair = $row['hair'];
                                                                                        $eyes = $row['eyes'];
                                                                                        $religion = $row['religion'];
                                                                                        $income = $row['income'];
                                                                                        $profession = $row['profession'];
                                                                                        $ethnicity = $row['ethnicity'];
                                                                                        $smoke = $row['smoke'];
                                                                                        $marital_status = $row['marital_status'];
                                                                                        $bodytype = $row['bodytype'];

                                                                                    }

                                                                                    ?>
                                                                                      <div class="row">
                                                                                      
                                                                                      <form action="#" id="form_edit_aboutme" class="form-horizontal">
                                                                                        <div class="col-md-6">
                                                                                            <input type="hidden" name="memberID" id="memberID" value="<?php echo $memberID ;?>" />
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Height</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="height" id="height" class="form-control height">
                                                                                                    <option><?php echo $height; ?></option>
                                                                                                                                                           
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Hair Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="hair" id="hair" class="form-control hair">
                                                                                                    <option><?php echo $hair; ?></option> 
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Eye Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="eyes" id="eyes" class="form-control eyes">
                                                                                                    <option><?php echo $eyes; ?></option>  
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Religon</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="religion" id="religion" class="form-control religion">
                                                                                                       <option><?php echo $religion; ?></option>  
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Income</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="income" id="income" class="form-control income">
                                                                                                        <option><?php echo $income; ?></option> 
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                        </div>

                                                                                        <div class="col-md-6">

                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Profession</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="profession" id="profession" class="form-control profession">
                                                                                                        <option><?php echo $profession; ?></option> 
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Body Type</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="bodytype" id="bodytype" class="form-control bodytype">
                                                                                                        <option><?php echo $bodytype; ?></option> 
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Smoking</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="smoke" id="smoke" class="form-control smoke">
                                                                                                    <option><?php echo $smoke; ?></option> 
                                                                                                    <option value="yes">Yes</option>
                                                                                                    <option value="no">No</option>
                                                                                            
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Ethnicity</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="ethnicity" id="ethnicity" class="form-control ethnicity">
                                                                                                        <option><?php echo $ethnicity; ?></option> 
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Marital Status</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="marital_status" id="marital_status" class="form-control marital_status">
                                                                                                        <option><?php echo $marital_status; ?></option> 
                                                                                                                                                                                          
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

                                                                        
                                                                            

                                                                            <div class="note note-info">
                                                                                <h3>Photo Upload Tip</h3>
                                                                                <p>A picture they say is worth a thousand words. Studies have shown that people take about 1/10th of a second to form an impression of someone in a photograph. If they have a bad impression of you from the start, they will not click on your profile. </p>
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
                                                                                                <a href="">
                                                                                                    <img class="photo" style="width:230px; height:230px" src="<?php echo base_url();?>profile-images/<?php echo $photo; ?>"/>
                                                                                                </a>
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
                                                                            <h3>My Desires</h3>
                                                                                <form action="#" id="form_edit_desire" class="form-horizontal">
                                                                                        <div class="col-md-6">
                                                                                        <input type="hidden" name="memberID" id="memberID" value="<?php echo $memberID; ?>" />
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Height</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="height" id="height" class="form-control height">
                                                                                                       
                                                                                                                                                           
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Hair Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="hair" id="hair" class="form-control hair">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Eye Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="eyes" id="eyes" class="form-control eyes">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Religon</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="religion" id="religion" class="form-control religion">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Interest</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="lookingfor" id="lookingfor" class="form-control lookingfor">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Income</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="income" id="income" class="form-control income">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                            
                                                                                        </div>

                                                                                        <div class="col-md-6">

                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Profession</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="profession" id="profession" class="form-control profession">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Body Type</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="bodytype" id="bodytype" class="form-control bodytype">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Smoking</label>
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
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Marital Status</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="marital_status" id="marital_status" class="form-control marital_status">
                                                                                                        
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-4">Children</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="children" id="children" class="form-control children">
                                                                                                        
                                                                                                                                                                                          
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
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-2" style="margin-bottom:10px">Loving</div>
                                                                <div class="col-md-7"> <div id="slider-2"></div> </div>
                                                                <div class="col-md-2"><input type="text" name="loving" value="0" id="loving" readonly style="border:0; width:26px">%</div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-2" style="margin-bottom:10px">Caring</div>
                                                                <div class="col-md-7"> <div id="slider-3"></div> </div>
                                                                <div class="col-md-2"><input type="text" name="caring" value="0" id="caring" readonly style="border:0; width:26px">%</div>
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
            push: true,
            buttonConfirmLabel: 'Apply'
 
           
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
    var hair = '<?php echo base_url();?>hair.json';
    $.getJSON(hair, function(data){
            $.each(data, function(index,item) {
            $("select.hair").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var height = '<?php echo base_url();?>height.json';
    $.getJSON(height, function(data){
            $.each(data, function(index,item) {
            $("select.height").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var eyes = '<?php echo base_url();?>eyes.json';
    $.getJSON(eyes, function(data){
            $.each(data, function(index,item) {
            $("select.eyes").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var income = '<?php echo base_url();?>income.json';
    $.getJSON(income, function(data){
            $.each(data, function(index,item) {
            $("select.income").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var profession = '<?php echo base_url();?>profession.json';
    $.getJSON(profession, function(data){
            $.each(data, function(index,item) {
            $("select.profession").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });


    var religion = '<?php echo base_url();?>religion.json';
    $.getJSON(religion, function(data){
            $.each(data, function(index,item) {
            $("select.religion").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });


    var ethnicity = '<?php echo base_url();?>ethnicity.json';
    $.getJSON(ethnicity, function(data){
            $.each(data, function(index,item) {
            $("select.ethnicity").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });


    var bodytype = '<?php echo base_url();?>bodytype.json';
    $.getJSON(bodytype, function(data){
            $.each(data, function(index,item) {
            $("select.bodytype").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });


    var marital_status = '<?php echo base_url();?>marital_status.json';
    $.getJSON(marital_status, function(data){
            $.each(data, function(index,item) {
            $("select.marital_status").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var children = '<?php echo base_url();?>children.json';
    $.getJSON(children, function(data){
            $.each(data, function(index,item) {
            $("select.children").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        });
    });

    var lookingfor = '<?php echo base_url();?>lookingfor.json';
    $.getJSON(lookingfor, function(data){
            $.each(data, function(index,item) {
            $("select.lookingfor").append("<option value=" + item.name + ">" + item.name + "</option>"); 
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

