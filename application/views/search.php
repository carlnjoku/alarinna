<link href="<?php echo base_url(); ?>assets/pages/css/search.min.css" rel="stylesheet" type="text/css" />
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
                                   .selectdiv {
                                        position: relative;
                                        /*Don't really need this just for demo styling*/
                                        
                                  
                                        min-width: 200px;
                                       
                                        }

                                        .selectdiv:after {
                                            content: '\f078';
                                            font: normal normal normal 17px/1 FontAwesome;
                                            color: #0ebeff;
                                            right: 11px;
                                            top: 6px;
                                            height: 34px;
                                            padding: 15px 0px 0px 8px;
                                            border-left: 1px solid #0ebeff;
                                            position: absolute;
                                            pointer-events: none;
                                        }

                                        /* IE11 hide native button (thanks Matt!) */
                                        select::-ms-expand {
                                        display: none;
                                        }

                                        .selectdiv select {
                                        -webkit-appearance: none;
                                        -moz-appearance: none;
                                        appearance: none;
                                        /* Add some styling */
                                        
                                        outline:none;
                                        border:none;
                                        display: block;
                                        width: 100%;
                                        max-width: 320px;
                                        height: 35px;
                                        float: right;
                                        margin: 5px 0px;
                                        padding: 0px 24px;
                                        font-size: 16px;
                                        line-height: 1.75;
                                        color: #333;
                                        background-color: #ffffff;
                                        background-image: none;
                                        border: 1px solid #0ebeff;
                                        -ms-word-break: normal;
                                        word-break: normal;
                                        }

                                        .well{
                                            background-color: #4299d4;
                                            color:#F2F2F2;
                                        }

                                        .well a{
                                            color:#F2F2F2;
                                        }

                                        

/* -------------------- Select Box Styles: stackoverflow.com Method */
/* -------------------- Source: http://stackoverflow.com/a/5809186 */
select#soflow, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #d92a92;
   color: #555;
   font-size: inherit;
   margin: 10px;
   overflow: hidden;
   padding: 8px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 200px;
}

select#soflow-color {
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FF69B4, #FF69B4 40%, #FF69B4);
   background-color: #FF69B4;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
                                </style>
                                    
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                        <div class="search-page search-content-3">
                                        <!--START SEARCH BOX -->
                                         <div class="row">
                                            <div class="col-lg-12">
                                                <div class="well well-lg"> 
                                                
                                                

                                                    <a href="#demo" class="pull-right" data-toggle="collapse">Advance Search</a>
                                                    
                                                    <form id="formsearch" action="#" class="form-inline">
                                                         <label class="sr" for="exampleInputEmail2" style="font-size:18px; font-weight:bold">Find</label> 
                                                        <select id="soflow-color" name="gender">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            <option>Woman &nbsp;&nbsp;</option>
                                                            <option>Man &nbsp;&nbsp;</option>  
                                                        </select>
                                                        
                                                        <label class="sr" for="exampleInputEmail2" style="font-size:18px; font-weight:bold">Ages between:</label> 
                                                        <select id="soflow-color" name="age">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                        </select>

                                                        <label class="sr" for="exampleInputEmail2" style="font-size:18px; font-weight:bold">Located in:</label> 
                                                        <select id="soflow-color" name="location">
                                                        <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                                                            <option>Lagos</option>
                                                            <option>Abuja</option>
                                                            <option>Ibadan</option>
                                                            <option>Port Harcourt</option>
                                                        </select>

                                                    <p></p>        
                                                     
                                                <div id="demo" class="collapse">    
                                                    <!-- START ADVANCE SEARCH -->    
                                                    <div class="portlet-title tabbable-line">
                                                    
                                                        <ul class="nav nav-tabs" style="color:#F2F2F2">
                                                            <li class="active">
                                                                <a href="#portlet_tab3" data-toggle="tab"> Physical Appearance </a>
                                                            </li>
                                                            <li>
                                                                <a href="#portlet_tab2" data-toggle="tab"> Lifestyle </a>
                                                            </li>
                                                            <li>
                                                                <a href="#portlet_tab1" data-toggle="tab"> Religion & Ethnicity</a>
                                                            </li>
                                                            <li>
                                                                <a href="#portlet_tab1" data-toggle="tab"> Other</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                   
                                                    <div class="portlet-body">
                                                     <div class="well well-lg">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="portlet_tab1">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Petite
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Less Than Average
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Average Height
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Tall
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Pretty-Tall
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Sky-high
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> No Preference
                                                                                    <input type="checkbox" value="" name="Height" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label><b>Hair Color</b></label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Eye Type</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Blue
                                                                                    <input type="checkbox" style="background:#ccc" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Body Type</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Petit
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Slender
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Medium
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="tab-pane" id="portlet_tab2">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label><b>Hair Color</b></label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" style="background:#ccc" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Hair Color</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    
                                                                
                                                            </div>
                                                            <div class="tab-pane" id="portlet_tab3">
                                                              <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label><b>Hair Color</b></label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Height</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" style="background:#ccc" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Hair Color</label>
                                                                            <div class="mt-checkbox-list">
                                                                                <label class="mt-checkbox mt-checkbox-outline has-warnibg"> Checkbox 1
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 2
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                                <label class="mt-checkbox mt-checkbox-outline"> Checkbox 3
                                                                                    <input type="checkbox" value="1" name="test" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                    </div>
                                            </div>
                                                <!-- END ADVANCE SEARCH --> 
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="col-xs-2 pull-right">
                                                            <button class="btn grey bold uppercase btn-block">Clear Search</button>
                                                            
                                                        </div>
                                                        <div class="col-xs-2 pull-right">
                                                            <button class="btn green bold uppercase btn-block">Search </button>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                        
                                                </form>
                                            </div>

                                           
                                        </div>
                                        <!-- BEGIN SEARCH BOX -->
                                    </div>

                                            
                                        
                                            <div class="row">
                                            
                                                <div class="col-lg-12">
                                                    <div class="portlet-body">
                                                        <div class="mt-element-card mt-element-overlay">
                                                            <div class="row result">

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1">
                                                                            <img src="../assets/pages/img/avatars/team1.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Mark Anthony</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Managing Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                                            <img src="../assets/pages/img/avatars/team2.jpg" />
                                                                            <div class="mt-overlay mt-top">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Denzel Wash</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Finance Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-up">
                                                                            <img src="../assets/pages/img/avatars/team3.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">David Goodman</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Creative Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                                            <img src="../assets/pages/img/avatars/team4.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Lucy Ling</h3>
                                                                            <p class="mt-card-desc font-grey-mint">HR Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="mt-element-card mt-element-overlay">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1">
                                                                            <img src="../assets/pages/img/avatars/team1.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Mark Anthony</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Managing Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-down">
                                                                            <img src="../assets/pages/img/avatars/team2.jpg" />
                                                                            <div class="mt-overlay mt-top">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Denzel Wash</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Finance Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-up">
                                                                            <img src="../assets/pages/img/avatars/team3.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">David Goodman</h3>
                                                                            <p class="mt-card-desc font-grey-mint">Creative Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                                    <div class="mt-card-item">
                                                                        <div class="mt-card-avatar mt-overlay-1 mt-scroll-left">
                                                                            <img src="../assets/pages/img/avatars/team4.jpg" />
                                                                            <div class="mt-overlay">
                                                                                <ul class="mt-info">
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-magnifier"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a class="btn default btn-outline" href="javascript:;">
                                                                                            <i class="icon-link"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mt-card-content">
                                                                            <h3 class="mt-card-name">Lucy Ling</h3>
                                                                            <p class="mt-card-desc font-grey-mint">HR Director</p>
                                                                            <div class="mt-card-social">
                                                                                <ul>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-facebook"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-twitter"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="javascript:;">
                                                                                            <i class="icon-social-dribbble"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                overlayCSS: { backgroundColor: '#eaeaea' },
                                message:'<img src="../assets/alarinna_loading.gif"/> <span style="color:#a8a8a8">loading your matches...',
                                timeout: 15000
                            });

                        },
                        success: function (response) {
                             
                            $('div.result').unblock(); 
                            var responseData = $.parseJSON(response); //parse JSON
                            alert(item.nicname);
                            $.each(responseData, function(index,item) {
                                    $(".result").append('<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="mt-card-item"><div class="mt-card-avatar mt-overlay-1 mt-scroll-up"><img src="../profile-images/' + item.profile_photo + ' " /><div class="mt-overlay"><ul class="mt-info"><li><a class="btn default btn-outline" href="javascript:;"><i class="icon-eye"></i></a></li></ul></div></div><div class="mt-card-content"><h3 class="mt-card-name">' + item.nickname + ' </h3><p class="mt-card-desc font-grey-mint">'+ item.city +' </p><div class="mt-card-social"><ul><li><a href="javascript:;"><i class="icon-heart"></i></a></li><li><a href="javascript:;"><i class="icon-bubble"></i></a></li><li><a href="javascript:;"><i class="icon-envelope"></i></a></li></ul></div></div></div></div>'); 
                            });

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



        
