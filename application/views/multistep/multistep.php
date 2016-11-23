<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | The Ultimate Multi-purpose Bootstrap Admin Dashboard Theme | Theme #3 | Bootstrap Form Wizard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="#1 selling multi-purpose bootstrap admin theme sold in themeforest marketplace packed with angularjs, material design, rtl support with over thausands of templates and ui elements and plugins to power any type of web applications including saas and admin dashboards. Preview page of Theme #3 for bootstrap form wizard demos using Twitter Bootstrap Wizard Plugin"
            name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout3/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" /> </head>
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
                                        <img src="<?php echo base_url(); ?>assets/layouts/layout3/img/logo-default.png" alt="logo" class="logo-default">
                                    </a>
                                </div>
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                               
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                     
                    </div>
                    <!-- END HEADER -->
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                       
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                   
                                    <div id="geo" class="geolocation_data"></div>
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                              
                                                    <div class="portlet light " id="form_wizard_1">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                <i class=" icon-layers font-red"></i>
                                                                <span class="caption-subject font-red bold uppercase"> Basic Profile -
                                                                    <span class="step-title"> Step 1 of 4 </span>
                                                                </span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="portlet-body form">
                                                            <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                                                <div class="form-wizard">
                                                                    <div class="form-body">
                                                                        <ul class="nav nav-pills nav-justified steps">
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
                                                                                        <i class="fa fa-check"></i> What do you desire </span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                                                    <span class="number"> 3 </span>
                                                                                    <span class="desc">
                                                                                        <i class="fa fa-check"></i> Tell us a bit about you</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#tab4" data-toggle="tab" class="step">
                                                                                    <span class="number"> 4 </span>
                                                                                    <span class="desc">
                                                                                        <i class="fa fa-check"></i> Confirm and submit your data </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>

                                                                        

                                                                            <br>
                                                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                                                            <div class="progress-bar progress-bar-success"> </div>
                                                                        </div>

                                                                        
                                                                       
                                                                        
                                                                <div class="tab-content">
 
                                                                            <div class="alert alert-danger display-none">
                                                                                <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                                            <div class="alert alert-success display-none">
                                                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                                            <div class="tab-pane active" id="tab1">
                                                                            
                                                                                <div class="row">
                                                                                        <div class="col-md-6">
                                                                                      
                                                                                            <h3 class="block"><b>Add your personal info</b></h3>
                                                                                            
                                                                                           <div class="row" id="carl"> 
                                                                                                <div class="col-md-2">

                                                                                            
                                                                                                </div>

                                                                                                

                                                                                                <div class="col-md-6">
                                                                                                        <div id="my-snippet" class="slim" style="width:300">

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

                                                                                            <h3 class="block"><b>What do you desire</b></h3>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Height</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="height_d" id="" class="form-control">
                                                                                                        <?php foreach($result_height as $key=>$height){
                                                                                                            echo '<option value="'.$height['name'].'">'.$height['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                           
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Hair Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="hair_d" id="" class="form-control">
                                                                                                        <?php foreach($result_hair as $key=>$hair){
                                                                                                            echo '<option value="'.$hair['name'].'">'.$hair['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Eye Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="eyes_d" id="" class="form-control">
                                                                                                        <?php foreach($result_hair as $key=>$eye){
                                                                                                            echo '<option value="'.$eye['name'].'">'.$eye['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Religon</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="religion_d" id="" class="form-control">
                                                                                                        <?php foreach($result_religion as $key=>$religion){
                                                                                                            echo '<option value="'.$religion['name'].'">'.$religion['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Interested in</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="looking_for_d" id="" class="form-control">
                                                                                                        <?php foreach($result_looking_for as $key=>$lookingfor){
                                                                                                            echo '<option value="'.$lookingfor['name'].'">'.$lookingfor['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Children</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="children_d" id="" class="form-control">
                                                                                                        <?php foreach($result_children as $key=>$children){
                                                                                                            echo '<option value="'.$children['name'].'">'.$children['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                         
                                                                                        </div>

                                                                                        <div class="col-md-6">

                                                                                            <h3 class="block">&nbsp;&nbsp;&nbsp;</h3>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Profession</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="profession_d" id="" class="form-control">
                                                                                                        <?php foreach($result_profession as $key=>$profession){
                                                                                                            echo '<option value="'.$profession['name'].'">'.$profession['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Body Type</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="bodytype_d" id="" class="form-control">
                                                                                                        <?php foreach($result_bodytype as $key=>$bodytype){
                                                                                                            echo '<option value="'.$bodytype['name'].'">'.$bodytype['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Smoking</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="smoke_d" id="" class="form-control">
                                                                                                    <option value="">Smoker ? </option>
                                                                                                    <option value="yes">Yes</option>
                                                                                                    <option value="no">No</option>
                                                                                            
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Ethnicity</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="ethnicity_d" id="" class="form-control">
                                                                                                        <?php foreach($result_ethnicity as $key=>$ethnicity){
                                                                                                            echo '<option value="'.$ethnicity['name'].'">'.$ethnicity['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Marital Status</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="marital_status_d" id="" class="form-control">
                                                                                                        <?php foreach($result_marital_status as $key=>$marital_status){
                                                                                                            echo '<option value="'.$marital_status['name'].'">'.$marital_status['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Income</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="income_d" id="" class="form-control">
                                                                                                        <?php foreach($result_income as $key=>$income){
                                                                                                            echo '<option value="'.$income['name'].'">'.$income['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            
                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tab-pane" id="tab3">
                                                                                 <div class="row">
                                                                                        <div class="col-md-6">

                                                                                            <h3 class="block"><b>About me</b></h3>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Height</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="height" id="" class="form-control">
                                                                                                        <?php foreach($result_height as $key=>$height){
                                                                                                            echo '<option value="'.$height['name'].'">'.$height['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                           
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Hair Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="hair" id="" class="form-control">
                                                                                                        <?php foreach($result_hair as $key=>$hair){
                                                                                                            echo '<option value="'.$hair['name'].'">'.$hair['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Eye Colour</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="eyes" id="" class="form-control">
                                                                                                        <?php foreach($result_hair as $key=>$eye){
                                                                                                            echo '<option value="'.$eye['name'].'">'.$eye['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Religon</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="religion" id="" class="form-control">
                                                                                                        <?php foreach($result_religion as $key=>$religion){
                                                                                                            echo '<option value="'.$religion['name'].'">'.$religion['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Income</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="income" id="" class="form-control">
                                                                                                        <?php foreach($result_income as $key=>$income){
                                                                                                            echo '<option value="'.$income['name'].'">'.$income['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                           


                                                                                           
                                                                                            
                                                                                        </div>

                                                                                        <div class="col-md-6">

                                                                                            <h3 class="block">&nbsp;&nbsp;&nbsp;</h3>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Profession</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="profession" id="" class="form-control">
                                                                                                        <?php foreach($result_profession as $key=>$profession){
                                                                                                            echo '<option value="'.$profession['name'].'">'.$profession['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Body Type</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="bodytype" id="" class="form-control">
                                                                                                        <?php foreach($result_bodytype as $key=>$bodytype){
                                                                                                            echo '<option value="'.$bodytype['name'].'">'.$bodytype['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Smoking</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="smoke" id="" class="form-control">
                                                                                                    <option value=""></option>
                                                                                                    <option value="yes">Yes</option>
                                                                                                    <option value="no">No</option>
                                                                                            
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Ethnicity</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="ethnicity" id="" class="form-control">
                                                                                                        <?php foreach($result_ethnicity as $key=>$ethnicity){
                                                                                                            echo '<option value="'.$ethnicity['name'].'">'.$ethnicity['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Marital Status</label>
                                                                                                <div class="col-md-6">
                                                                                                    <select name="marital_status" id="" class="form-control">
                                                                                                        <?php foreach($result_marital_status as $key=>$marital_status){
                                                                                                            echo '<option value="'.$marital_status['name'].'">'.$marital_status['name'].'</option>';
                                                                                                        } 
                                                                                                        ?>
                                                                                                                                                                                          
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>

                                                                                            
                                                                                        </div>
                                                                                </div>
                                                                                
                                                                            </div>

                                                                           <div class="tab-pane" id="tab4">
                                                                                 <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <h3 class="block">Confirm your account</h3>
                                                                                            <h4 class="form-section">Account</h4>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">First Name:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="firstname"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Last Name:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="slim[]"> </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="col-md-6">
                                                                                            

                                                                                        </div>
                                                                                </div>
                                                                                <div class="row"><div class="col-md-12"><h4 class="form-section">My Desires</h4></div></div>
                                                                                <div class="row">
                                                                                        
                                                                                        <div class="col-md-6">
                                                                            
                                                                                           
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Height:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="height"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Hair Colour:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="hair"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Eyes Colour:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="eyes"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Religion:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="religion"> </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        
                                                                                        <div class="col-md-6">

                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Profession:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="profession"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Body type:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="bodytype"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Smoker:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="smoke"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Ethnicity:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="ethnicity"> </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                </div>
                                                                                <div class="row"><div class="col-md-12"><h4 class="form-section">About Me</h4></div></div>
                                                                                <div class="row">
                                                                               
                                                                                        <div class="col-md-6">
                                                                            
                                                                                           
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Height:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="height"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Hair Colour:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="hair"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Eyes Colour:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="eyes"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Religion:</label>
                                                                                                <div class="col-md-5">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="religion"> </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        
                                                                                        <div class="col-md-6">

                                                                                            
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Profession:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="profession"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Body type:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="bodytype"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label class="control-label col-md-3">Smoker:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="smoke"> </p>
                                                                                                </div>
                                                                                            </div>
                                                                                             <div class="form-group">
                                                                                                <label class="control-label col-md-3">Ethnicity:</label>
                                                                                                <div class="col-md-4">
                                                                                                    <p class="form-control-static" style="font-weight:bold" data-display="ethnicity"> </p>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                </div>
                                                                            </div>

                                                                         
                                                                        </div>
                                                                        
                                                             
                                                                     
                                                                    </div>
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
                       
                    </div>
                    <!-- END CONTAINER -->
                </div>
            </div>
            <div class="page-wrapper-row">
                <div class="page-wrapper-bottom">
                    <!-- BEGIN FOOTER -->
                    <!-- BEGIN PRE-FOOTER -->
                    <div class="page-prefooter">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>About Alarinna</h2>
                                    <p> Alarinna is africa's' leading online dating service dedicated to helping young africans at home and diaspora find meaningful and lasting relationships online. </p>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <h2>Subscribe Email</h2>
                                    <div class="subscribe-form">
                                        <form action="javascript:;">
                                            <div class="input-group">
                                                <input type="text" placeholder="mail@email.com" class="form-control">
                                                <span class="input-group-btn">
                                                    <button class="btn" type="submit">Submit</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Us On</h2>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="javascript:;" data-original-title="rss" class="rss"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Contacts</h2>
                                    <address class="margin-bottom-40"> Phone: 234 803 316 4340
                                        <br> Email:
                                        <a href="mailto:info@metronic.com">info@alarinna.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Alarinna
                            <a target="_blank" href="http://alarinna.com">Alarinna</a> &nbsp;|&nbsp; All Rights Reserved
                           
                        </div>
                    </div>
                    <div class="scroll-to-top">
                        <i class="icon-arrow-up"></i>
                    </div>
                    <!-- END INNER FOOTER -->
                    <!-- END FOOTER -->
                </div>
            </div>
        </div>
        
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
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

</html>