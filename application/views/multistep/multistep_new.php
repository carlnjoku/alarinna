<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Alarinna | Most popular Africa dating website</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 Africa dating website "
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        
        <link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>assets/multistep.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME LAYOUT STYLES -->
        
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        
        <!-- END THEME LAYOUT STYLES -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->


    <style>
    .slim {
    border-radius: 50%;
}

    </style>

 <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>assets/multistep.css" rel="stylesheet" type="text/css" />
        
    <body class="login page-container-bg-solid">
        <div class="page-wrapper">
        <!-- BEGIN LOGO -->
        <div class="logo" style="padding:-15px">
                <img src="<?php echo base_url(); ?>assets/layouts/layout3/img/logo-default.png" alt="logo" class="logo-default-home"> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" id="form_wizard_1">
            <!-- BEGIN LOGIN FORM -->

<form class="form-horizontal" action="#" id="submit_form" method="POST">
                <div class="form-wizard" >
                    <div class="form-body" >
                        <ul class=" nav-justified steps">
                            <li>
                                <a href="#tab1" data-toggle="tab" class="step">
                                    <span class="number"> 1 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Personal Info </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab" class="step">
                                    <span class="number"> 2 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Your desires </span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab3" data-toggle="tab" class="step active">
                                    <span class="number"> 3 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> A bit about you</span>
                                </a>
                            </li>
                            <li>
                                <a href="#tab4" data-toggle="tab" class="step">
                                    <span class="number"> 4 </span>
                                    <span class="desc">
                                        <i class="fa fa-check"></i> Confirm data </span>
                                </a>
                            </li>
                        </ul>

                 <div class="create-account"> </div>   
                 <p></p>    
                        
                        
                <div class="tab-content">

                            <div class="alert alert-danger display-none">
                                <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                            <div class="alert alert-success display-none">
                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                            <div class="tab-pane active" id="tab1">
                            
                                <div class="row">
                                        <div class="col-md-6">
                                        
                                            <div class="row" id="carl"> 
                                                <div class="col-md-2"></div>

                                                

                                                <div class="col-md-6">
                                                        <div id="my-snippet" class="slim" style="width:200">

                                                                <!-- my first cropper -->
                                                            <input type="file" id="myCropper"/>
                                                        </div>
                                                </div>
                                            </div>
                                            
                                                <input type="hidden" id="profile_photo" name="profile_photo" />
                                                                                                                                    
                                        </div>

                                        <div class="col-md-6">
                                            <input type="hidden" name="memberID"  value="<?php echo $this->uri->segment(3); ?>" />
                                            <h3 class="block">&nbsp;&nbsp;&nbsp;</h3>
                                                
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3">First Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="firstname" />
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3">Last Name
                                                    <span class="required"> * </span>
                                                </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="lastname" />
                                                    
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                    <div class="row">
                                        <div class="col-md-6">


                                            <div class="form-group">
                                                <label class="control-label col-md-4">Height</label>
                                                <div class="col-md-6">
                                                    <select name="height_d" id="height_d" class="form-control height_d">
                                                        
                                                                                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Hair Colour</label>
                                                <div class="col-md-6">
                                                    <select name="hair_d" id="hair_d" class="form-control hair_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Eye Colour</label>
                                                <div class="col-md-6">
                                                    <select name="eyes_d" id="eyes_d" class="form-control eyes_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Religon</label>
                                                <div class="col-md-6">
                                                    <select name="religion_d" id="religion_d" class="form-control religion_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Interest</label>
                                                <div class="col-md-6">
                                                    <select name="looking_for_d" id="looking_for_d" class="form-control looking_for_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Income</label>
                                                <div class="col-md-6">
                                                    <select name="income_d" id="income_d" class="form-control income_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            
                                        </div>

                                        <div class="col-md-6">

                                           

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Profession</label>
                                                <div class="col-md-6">
                                                    <select name="profession_d" id="profession_d" class="form-control profession_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Body Type</label>
                                                <div class="col-md-6">
                                                    <select name="bodytype_d" id="bodytype_d" class="form-control bodytype_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Smoker</label>
                                                <div class="col-md-6">
                                                    <select name="smoke_d" id="smoke_d" class="form-control smoke_d">
                                            
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                            
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Ethnicity</label>
                                                <div class="col-md-6">
                                                    <select name="ethnicity_d" id="ethnicity_d" class="form-control ethnicity_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Marital Status</label>
                                                <div class="col-md-6">
                                                    <select name="marital_status_d" id="marital_status_d" class="form-control marital_status_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-4">Children</label>
                                                <div class="col-md-6">
                                                    <select name="children_d" id="children_d" class="form-control children_d">
                                                        
                                                                                                                                            
                                                    </select>
                                                </div>
                                            </div>

                                            

                                            
                                        </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
                                    <div class="row">
                                        <div class="col-md-6">


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
                                                <label class="control-label col-md-4">Smoker</label>
                                                <div class="col-md-6">
                                                    <select name="smoke" id="smoke" class="form-control smoke">
                                                    <option value=""></option>
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

                                        </div>
                                </div>
                                
                            </div>

                          <div class="tab-pane" id="tab4" style="min-height:250px">
<!---
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<div class="form-group">
                    <label class="control-label col-md-3">First Name:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="firstname"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
                    <label class="control-label col-md-3">Last Name:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="lastname"> </p>
                    </div>
                </div>
			</div>
		
		</div>
	
	</div>
	
    <div class="create-account"> 
        <div class="mt-element-ribbon bg-grey-steel" style="postion:relative; top:-20px">
            <div class="ribbon ribbon-border ribbon-color-info uppercase">My Desires</div>
        </div>
    </div> 

   
	<div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Height:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="height_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Hair Color:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="hair_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Eye Color:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="eyes_d"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>
	<div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Profession:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="profession_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Body Type:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="bodytype_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Religion:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="religion_d"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>

    <div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Smoker:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="smoke_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Ethnicity:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="ethnicity_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Marital Status:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="marital_status_d"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>
	
	<div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Income:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="income_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Interest:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="looking_for_d"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Children:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="children_d"> </p>
                    </div>
                </div>
			</div>
		
		</div>
	
	</div>

    <div class="create-account"> 
        <div class="mt-element-ribbon bg-grey-steel" style="postion:relative; top:-20px">
            <div class="ribbon ribbon-border ribbon-color-info uppercase">About Me</div>
        </div>
    </div>  

    <div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Height:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="height"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Hair Color:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="hair"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Eye Color:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="eyes"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>

    <div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Profession:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="profession"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Body Type:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="bodytype"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Religion:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="religion"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>

    <div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Smoker:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="smoke"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Ethnicity:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="ethnicity"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Marital Status:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="marital_status"> </p>
                    </div>
                </div>
			</div>
            
		
		</div>
	
	</div>
	
	<div class="row" style="position:relative; top:-25px">
		<div class="col-md-12">
			<div class="col-md-4">
				<div class="form-group">
                    <label class="control-label col-md-4">Income:</label>
                    <div class="col-md-4">
                        <p class="form-control-static" style="font-weight:bold" data-display="income"> </p>
                    </div>
                </div>
			</div>
			
			<div class="col-md-4">
				
			</div>
			
			<div class="col-md-4">
				
			</div>
		
		</div>
	
	</div>
	
-->

<div style="color:#FFFFFF; width:500px"><center>Please confirm that you have entered correct information by clicking on the back button otherwise click Submit to complete signup</center></div>
	
     
</div>

                            
                        </div>
                        
                
                        
                    </div>
                    <p></p>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <a href="javascript:;" class="btn default button-previous">
                                    <i class="fa fa-angle-left"></i> Back </a>
                                <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <button type="submit" class="btn green button-submit"> Submit
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </form>
           
            <!-- END LOGIN FORM -->
            
            
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
       
        </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->

        
        <!-- BEGIN CORE PLUGINS -->
         <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

         <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        

        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/pages/scripts/form-wizard.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <script src="<?php echo base_url()?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.jquery.js"></script>                                  
        
        
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

<script>
$(document).ready(function() {

   $('#myCropper').slim({
            ratio: '1:1',
             meta: {
                userId:'1234'
            },
            service: 'http://localhost/alarinna/plugins/slim-image-upload-and-ratio-cropping-plugin/server/async.php',
            download: false,
            size: {width:640, height:640},
            willSave: function(data, ready) {
                //alert('saving!');
                ready(data);
                //console.log(data.file);
            },
            didUpload: function(error, data, response) {
                    console.log(response);
                    //console.log(data);
                    //var data = $.parseJSON(response);//parse JSON
                    $('#profile_photo').val(response.file);
            },
            label: "<i class='fa fa-plus fa-4x' style='color:#cccccc'></i>",
            label: "<h3>Add photo</h3>",
            push: 'true',
            buttonConfirmLabel: 'Apply'
           

           
    });
         
});
</script>

<script>
    var hair = '<?php echo base_url();?>hair.json';
    $.getJSON(hair, function(data){
            $.each(data, function(index,item) {
            $("select.hair").append("<option>" + item.name + "</option>"); 
        });
    });

    var hair = '<?php echo base_url();?>hair.json';
    $.getJSON(hair, function(data){
            $.each(data, function(index,item) {
            $("select.hair_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var height = '<?php echo base_url();?>height.json';
    $.getJSON(height, function(data){
            $.each(data, function(index,item) {
            $("select.height").append("<option>" + item.name + "</option>"); 
        });
    });

    var height = '<?php echo base_url();?>height.json';
    $.getJSON(height, function(data){
            $.each(data, function(index,item) {
            $("select.height_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var eyes = '<?php echo base_url();?>eyes.json';
    $.getJSON(eyes, function(data){
            $.each(data, function(index,item) {
            $("select.eyes").append("<option>" + item.name + "</option>"); 
        });
    });

    var eyes = '<?php echo base_url();?>eyes.json';
    $.getJSON(eyes, function(data){
            $.each(data, function(index,item) {
            $("select.eyes_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var income = '<?php echo base_url();?>income.json';
    $.getJSON(income, function(data){
            $.each(data, function(index,item) {
            $("select.income").append("<option>" + item.name + "</option>"); 
        });
    });
    var income = '<?php echo base_url();?>income.json';
    $.getJSON(income, function(data){
            $.each(data, function(index,item) {
            $("select.income_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var profession = '<?php echo base_url();?>profession.json';
    $.getJSON(profession, function(data){
            $.each(data, function(index,item) {
            $("select.profession").append("<option>" + item.name + "</option>"); 
        });
    });
    var profession = '<?php echo base_url();?>profession.json';
    $.getJSON(profession, function(data){
            $.each(data, function(index,item) {
            $("select.profession_d").append("<option>" + item.name + "</option>"); 
        });
    });


    var religion = '<?php echo base_url();?>religion.json';
    $.getJSON(religion, function(data){
            $.each(data, function(index,item) {
            $("select.religion").append("<option>" + item.name + "</option>"); 
        });
    });
    var religion = '<?php echo base_url();?>religion.json';
    $.getJSON(religion, function(data){
            $.each(data, function(index,item) {
            $("select.religion_d").append("<option>" + item.name + "</option>"); 
        });
    });


    var ethnicity = '<?php echo base_url();?>ethnicity.json';
    $.getJSON(ethnicity, function(data){
            $.each(data, function(index,item) {
            $("select.ethnicity").append("<option>" + item.name + "</option>"); 
        });
    });
    var ethnicity = '<?php echo base_url();?>ethnicity.json';
    $.getJSON(ethnicity, function(data){
            $.each(data, function(index,item) {
            $("select.ethnicity_d").append("<option>" + item.name + "</option>"); 
        });
    });


    var bodytype = '<?php echo base_url();?>bodytype.json';
    $.getJSON(bodytype, function(data){
            $.each(data, function(index,item) {
            $("select.bodytype").append("<option>" + item.name + "</option>"); 
        });
    });
    var bodytype = '<?php echo base_url();?>bodytype.json';
    $.getJSON(bodytype, function(data){
            $.each(data, function(index,item) {
            $("select.bodytype_d").append("<option>" + item.name + "</option>"); 
        });
    });


    var smoke = '<?php echo base_url();?>smoke.json';
    $.getJSON(smoke, function(data){
            $.each(data, function(index,item) {
            $("select.smoke").append("<option>" + item.name + "</option>"); 
        });
    });


    var marital_status = '<?php echo base_url();?>marital_status.json';
    $.getJSON(marital_status, function(data){
            $.each(data, function(index,item) {
            $("select.marital_status").append("<option>" + item.name + "</option>"); 
        });
    });
    var marital_status = '<?php echo base_url();?>marital_status.json';
    $.getJSON(marital_status, function(data){
            $.each(data, function(index,item) {
            $("select.marital_status_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var children = '<?php echo base_url();?>children.json';
    $.getJSON(children, function(data){
            $.each(data, function(index,item) {
            $("select.children").append("<option>" + item.name + "</option>"); 
        });
    });
    var children = '<?php echo base_url();?>children.json';
    $.getJSON(children, function(data){
            $.each(data, function(index,item) {
            $("select.children_d").append("<option>" + item.name + "</option>"); 
        });
    });

    var lookingfor = '<?php echo base_url();?>lookingfor.json';
    $.getJSON(lookingfor, function(data){
            $.each(data, function(index,item) {
            $("select.looking_for_d").append("<option>" + item.name + "</option>"); 
        });
    });
    


</script>







</html>