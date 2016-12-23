<link href="<?php echo base_url(); ?>assets/pages/css/search.min.css" rel="stylesheet" type="text/css" />
<style>
#menu {
    list-style:none;
    margin:35px auto 0px;
}
.menu {
    height:40px;
    list-style:none;
    padding:0px 10px 0px 10px;
}
.menu li {
    float:left;
    display:block;
    text-align:center;
    position:relative;
    margin:3px 0px 0;
    border:none;
}
.menu li a {
    color: #000;
    display:block;
    outline:0;
    text-decoration:none;
    border-bottom:1px solid #dedede;
    padding:2px 10px;
}
.menu li:hover a {
    color:#161616;
}
.menu li > div a {
    padding: 0 0 0 14px;
    border-bottom:none;
}
.dropdown-1column,
.dropdown-2columns,
.dropdown-3columns,
.dropdown-4columns,
.dropdown-5columns {
    margin:-1px auto  0 -50px;
    float:left;
    position:absolute;
    text-align:left;
    padding:10px 5px 10px 5px;
    border:1px solid #dedede;
    background:#ccc;
    z-index:999;
    display:none;
}
.dropdown-1column {width: 130px; margin:-1px auto 0;}
.dropdown-2columns {width: 400px;}
.dropdown-3columns {width: 480px;}
.dropdown-4columns {width: 640px;}
.dropdown-5columns {width: 810px;}
.col-1,
.col-2,
.col-3,
.col-4,
.col-5 {
    display:inline;
    float: left;
    position: relative;
    margin-left: 5px;
    margin-right: 5px;
}
.col-1 {width:150px;}
.col-2 {width:280px;}
.col-3 {width:470px;}
.col-4 {width:560px;}
.col-5 {width:800px;}
.menu li:hover .dropdown-1column,
.menu li:hover .dropdown-2columns,
.menu li:hover .dropdown-3columns,
.menu li:hover .dropdown-4columns,
.menu li:hover .dropdown-5columns {

}
.menu p, .menu h2, .menu h3, .menu ul li {
    line-height:21px;
    font-size:12px;
    text-align:left;
}
.menu h2 {
    font-size:21px;
    font-weight:400;
    letter-spacing:-1px;
    margin:7px 0 14px 0;
    padding-bottom:14px;
    border-bottom:1px solid #666666;
    color:#555;
}
.menu h3 {
    font-size:15px;
    margin:7px 0;
    padding-bottom:2px;
    border-bottom:1px solid #888888;
    color:#555;
}
.menu p {
    line-height:18px;
    margin:0 0 10px 0;
}
.menu li:hover div a {
    font-size:12px;
    color:#000;
}
.menu li:hover div a:hover {
    color:#000;
}
.strong {
    font-weight:bold;
}
.italic {
    font-style:italic;
}
.menu li .blackbox {
    background-color:#333333;
    color: #fff;
    padding:4px 6px 4px 6px;
}
.menu li ul {
    list-style:none;
    padding:0;
    margin:0 0 12px 0;
}
.menu li ul li {
    font-size:12px;
    line-height:24px;
    position:relative;
    text-shadow: 1px 1px 1px #ffffff;
    padding:0;
    margin:0;
    float:none;
    text-align:left;
    width:130px;
}
.menu li ul li:hover {
    background:none;
    border:none;
    padding:0;
    margin:0;
}
.menu li .grisbox li {
    border:1px solid #000;
    margin:0px 0px 4px 0px;
    padding:4px 6px 4px 6px;
    width:116px;
}
.menu li .grisbox li:hover {
    background:#ffffff;
    border:1px solid #877956;
    padding:4px 6px 4px 6px;
    margin:0px 0px 4px 0px;
}
.imgclass{
    float:left;
    margin-right:5px;
}
.text{
    width:230px;
}

</style>
<style>
hr.ruler {
	border-top: 1px dashed #50C5E5;
    position:relative;
    top:-20px;
}</style>

<?php foreach($result_member as $key=>$row){

$age = $row['age'];
$interest_gender =$row['interest_gender'];
$city =$row['city'];
$country =$row['country'];

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
                                        <h1><?php echo $page_title; ?></h1>
                                    </div>
                                    <!-- END PAGE TITLE -->
                                   
                                </div>
                            </div>
                            <!-- END PAGE HEAD-->
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                <style>
                                   

                                        .well{
                                            background-color: #4299d4;
                                            color:#F2F2F2;
                                        }

                                        .well a{
                                            color:#F2F2F2;
                                        }

                                        

                                </style>
                                

                                    
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="search-page search-content-3" >

                                    
 
                                        
                                        
                                        <!--START SEARCH BOX -->
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <div class="well well-lg" > 
                                                
                                                

                                                    <a href="#demo" class="pull-right" data-toggle="collapse">Advance Search</a>
                                                    <div id="geo" class="geolocation_data" style="display:none"></div>
                                                    <form id="formsearch" action="#" class="form-inline">

                                                        <input type="hidden" value="<?php echo $memberID; ?>" name="memberID" />
                                                         <label class="sr" for="exampleInputEmail2" style="font-size:14px; font-weight:bold">Find :</label> 
                                                        
                                                        <select class="form-control input-sm" name="gender" style="width:120px">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            
                                                            <option value="<?php echo $interest_gender;?>">Woman</option>
                                                            <option value="female">Women</option>
                                                            <option value="male">Men</option>
                                                           
                                                        </select>
                                                        &nbsp;&nbsp;
                                                        <label class="sr" for="exampleInputEmail2" style="font-size:14px; font-weight:bold">Ages:</label> 
                                                        <select class="form-control input-sm" name="age_from" style="width:80px">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            <option value="18">18</option>
                                                            <?php
                                                                for($i = 18; $i <= 85; $i++) {
                                                                $formattedNumber = sprintf('%1d', $i);
                                                                echo '<option value="'.$formattedNumber.'">'.$formattedNumber.'</option>';
                                                                }
                                                            ?>
                                                        </select>

                                                        
                                                        <label class="sr" for="exampleInputEmail2" style="font-size:14px; font-weight:bold">-</label> 
                                                        
                                                        <select class="form-control input-sm" name="age_to" style="width:80px">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            <option value="<?php echo $age ; ?>"><?php echo $age ; ?></option>
                                                            <?php
                                                                for($i = 18; $i <= 85; $i++) {
                                                                $formattedNumber_to = sprintf('%1d', $i);
                                                                echo '<option value="'.$formattedNumber_to.'">'.$formattedNumber_to.'</option>';
                                                                }
                                                            ?>
                                                        </select>

                                                        <input type="hidden" value="<?php echo $city; ?>" name="city" id="city" />
                                                        
                                                        <label class="sr" for="exampleInputEmail2" style="font-size:14px; font-weight:bold">&nbsp;&nbsp; Located in:</label> 
                                                            <div class="form-group" id="menu">
                                                                
                                                                    <ul class="menu" style="position:relative; top:-8px"><!-- List starts here -->
                                                                
                                                            <li class="has-dropdown city"><a href="#"></a><!-- 3 columns starts here -->
                                                                <div class="dropdown dropdown-3columns align_right"><!-- Container 3 columns starts here -->
                                                                    <div class="col-3">
                                                                        <h2>Blocks of links and text block</h2>
                                                                    </div>
                                                                    <div class="col-1">
                                                                         <select name="meal" id="meal" onChange="changecat(this.value);">
                                                                            <option value="" disabled selected>Select</option>
                                                                            <option value="A">A</option>
                                                                            <option value="B">B</option>
                                                                            <option value="C">C</option>
                                                                        </select>
                                                                        <select name="category" id="category">
                                                                            <option value="" disabled selected>Select</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <p class="italic">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                                    </div>
                                                                    <div class="col-1">
                                                                        <ul class="grisbox">
                                                                            <li><a href="#">Link 1</a></li>
                                                                            <li><a href="#">Link 2</a></li>
                                                                            <li><a href="#">Link 3</a></li>
                                                                            <li><a href="#">Link 4</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- 3 columns ends here -->
                                                            </li><!-- Container 3 columns ends here -->
                                                            
                                                            
                                                            </li><!-- Container 1 columnn ends here -->
                                                        </ul><!-- List ends here -->
                                                                
                                                                
                                                            </div>
                                                        
                                                        <!--
                                                        <div class="form-group">
                                                         
                                                            <select class="form-control input-sm" name="city" style="width:180px">
                                                                <option>Lagos</option>
                                                                <option>Abuja</option>
                                                                <option>Ikeja</option>
                                                                <option>Ibadan</option>
                                                                <option>Port Harcourt</option>
                                                                
                                                            </select>
                                                            <i class="fa fa-angle-down fa-2x"></i>
                                                        </div>
                                                        -->
                                                        

                                                       

                                                       
                                                        
                                                       

                                                 <hr class="ruler">
                                                      
                                                     
                                                <div id="demo" class="collapse">    
                                                    <!-- START ADVANCE SEARCH -->    
                                                    
                                                   
                                                    <div class="portlet-body">
                                                     <div class="well well-lg">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="portlet_tab1" style="position:relative; top:-50px">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm height" name="height" style="width:180px">
                                                                                    <option value="">Choose Height</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Hair Colour</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm hair" name="hair" style="width:180px">
                                                                                    <option value="">Select Hair Color</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Eyes Color</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm eyes" name="eyes" style="width:180px">
                                                                                    <option value="">Choose Eyes Color</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                     <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Body Type</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm bodytype" name="bodytype" style="width:180px">
                                                                                    <option value="">Choose Body Type</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    

                                                                </div>

                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Smoker</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm" name="smoke" style="width:180px">
                                                                                    <option value="No">No</option>
                                                                                    <option value="Yes">Yes</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Interest</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm lookingfor" name="lookingfor" style="width:180px">
                                                                                <option value="">Choose Interest</option>
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Profession</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm profession" name="profession" style="width:180px">
                                                                                    <option value="">Choose Profession</option>
                                                                                
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Income</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm income" name="income" style="width:180px">
                                                                                    <option value="">Choose Income</option>
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Religion</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm religion" name="religion" style="width:180px">
                                                                                    <option value="">Choose Religion</option>
                                                                                
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Ethnicity</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm ethnicity" name="ethnicity" style="width:180px">
                                                                                    <option value="">Choose Ethnicity</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Marital Status</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm marital_status" name="marital_status" style="width:180px">
                                                                                    <option value="">Choose Marital Status</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Children</label>
                                                                            <div class="mt-checkbox-list">

                                                                            <div class="form-group">
                                                                                <select class="form-control input-sm children" name="children" style="width:180px">
                                                                                    <option value="">Choose Children</option>
                                                                                    
                                                                                </select>
                                                                            </div>
               
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       <span style="color:#CFF3FD; width:400px" >                                      
                     sdjnasnoioas iqwuiqw oioijdoiqjow dqwdn  q asjhuasbc iuasuichbasc
                      asuicgasc ash    th aiia inhadiahud iiuadasha iiudhna  asiuhs  </span>  
                                                            
                                                        </div>
                                                     </div>
                                                    </div>
                                            </div>
                                                <!-- END ADVANCE SEARCH --> 
                                              
                                                <div class="row" style="position:relative; top:-20px">

                                                    <div class="col-xs-12" style="padding-right:83px">
                                                        <div class="col-xs-2 pull-right">
                                                            <button class="btn grey bold uppercase btn-block">Clear Search</button>
                                                            
                                                        </div>
                                                        <div class="col-xs-2 pull-right">
                                                            <button class="btn blue-chambray bold uppercase btn-block">Search </button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                        
                                                </form>
                                            </div>

                                           
                                        </div>
                                        <!-- BEGIN SEARCH BOX -->
                                    </div>

                                              <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <!-- BEGIN : USER CARDS -->
                                        <div class="row">
                                            <div class="col-md-12">

                                
                                    
                               

                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class=" icon-layers font-green"></i>
                                                            <span class="caption-subject font-green bold uppercase">Search Result</span>
                                                        </div>
                                                        if result is less than 50 members show "TOO MANY FILTER"" warning  <a href="">click to move to search box</a>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="mt-element-card mt-element-overlay">
                                                            <div class="row result" style="min-height:200px">
                                                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- END : USER CARDS -->
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
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
            <script src="<?php echo base_url(); ?>plugins/geolocation/geo.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url(); ?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="<?php echo base_url(); ?>assets/pages/scripts/search.min.js" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            
            <script type="text/javascript" src="<?php echo base_url(); ?>sticky/jquery.sticky.js"></script>
        
        <script>

            $(document).ready(function(){

                     var mycity =  document.getElementById('city').innerHTML;
                     var memberID = '<?php echo $memberID; ?>';
                     $.ajax({
                        dataType: 'html',
                        type: 'get',
                        url: 'http://localhost/neo4j-alarinna/web/matches/'+ memberID,
                        
                        
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
                            
                            //alert(mycity);
                            console.log(memberID);

                            $('div.result').unblock(); 
                            var responseData = $.parseJSON(response); //parse JSON
                            var memberID = '<?php echo $memberID; ?>';
                            $.each(responseData, function(index,item) {
                                    
                                    var  string = item.myfancies;
                                    var main = string.includes(memberID);
                                    
                                    $(".result").append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="mt-card-item"><div class="mt-card-avatar mt-overlay-1 mt-scroll-up"><img src="../profile-images/' + item.profile_photo + ' " /><div class="mt-overlay"><ul class="mt-info"><li><a class="btn default btn-outline" href="<?php echo base_url();?>profile/p_view/'+ item.memberID + '"><i class="icon-eye"></i></a></li></ul></div></div><div class="mt-card-content"><h3 class="mt-card-name">' + item.nickname + ' </h3><p class="mt-card-desc font-grey-mint">'+ item.age +',  '+ item.city +', '+ item.country +' </p><div class="mt-card-social"><ul><li><a id="fancy" data-memberId = '+item.memberID+ 'href="javascript:;">' + (main == true ? '<i class="fa fa-heart fa-lg font-red"></i>' : '<i class="fa fa-heart-o font-red"></i>') +' </a></li><li><a class="commenting-o" href="javascript:;"><i class="fa fa-commenting-o fa-lg font-grey-salt"></i></a></li><li><a href="javascript:;"><i class="fa fa-smile-o fa-lg font-grey-salt tooltips" data-placement="bottom" data-original-title="Fancy"></i></a></li></ul></div></div></div></div>'); 
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            toastr.warning('Network failure, check your connection and refresh the page')
                        }
                    });
                    
                  
         

                $("#formsearch").submit(function(e) {
                    var frmData1 = $('#formsearch').serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
                                        
                    var data1 = JSON.stringify(frmData1);

                     $.ajax({
                        dataType: 'html',
                        type: 'post',
                        url: 'http://localhost/neo4j-alarinna/web/search',
                        data: data1,
                        
                        beforeSend: function()
                        {
                            alert(data1);
                            
                            $('div.result').block({ 
                                css: { 
                                    background: 'none',
                                    border:'none'
                                },
                                overlayCSS: { backgroundColor: '#ffffff' },
                                message:'<img src="../assets/alarinna_loading.gif"/> <span style="color:#a8a8a8">',
                                timeout: 15000
                            });

                        },
                        success: function (response) {
                            
                            $('div.result').unblock(); 
                            var responseData = $.parseJSON(response); //parse JSON
                            if (!responseData[0]) {
                                
                                $(".result").html('<div class="col-sm-12 col-xs-12"><center><h1>No match found</h1></center></div>'); 

                            }else{
                                 $.each(responseData, function(index,item) {
                                    $(".result").html('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="mt-card-item"><div class="mt-card-avatar mt-overlay-1 mt-scroll-up"><img src="../profile-images/' + item.profile_photo + ' " /><div class="mt-overlay"><ul class="mt-info"><li><a class="btn default btn-outline" href="javascript:;"><i class="icon-eye"></i></a></li></ul></div></div><div class="mt-card-content"><h3 class="mt-card-name">' + item.nickname + ' </h3><p class="mt-card-desc font-grey-mint">'+ item.city +' </p><div class="mt-card-social"><ul><li><a href="javascript:;"><i class="icon-heart"></i></a></li><li><a href="javascript:;"><i class="icon-bubble"></i></a></li><li><a href="javascript:;"><i class="icon-envelope"></i></a></li></ul></div></div></div></div>'); 
                                });
                            }
                            
                                   

                            //alert(item.nicname);
    
                        },
                        error: function (response) {
                            
                            toastr.warning('Personality update failed')
                        }
                    });
                    
                 
                    e.preventDefault(); // avoid to execute the actual submit of the form.
                });  
            });

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
var mealsByCategory = {
    A: ["Soup", "Juice", "Tea", "Others"],
    B: ["Soup", "Juice", "Water", "Others"],
    C: ["Soup", "Juice", "Coffee", "Tea", "Others"]
}

    function changecat(value) {
        if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
        else {
            var catOptions = "";
            for (categoryId in mealsByCategory[value]) {
                catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
            }
            document.getElementById("category").innerHTML = catOptions;
        }
    }
</script>


<script>
jQuery("div#menu ul.menu li.has-dropdown").hover(
    function () {
        $(this).find("div.dropdown").slideToggle();
    },
    function () {
        $(this).find("div.dropdown").slideToggle();
    }
);
</script>