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
                                    <a href="">About Alarinna</a><br>
                                    <a href="">Help / FAQ</a><br>
                                    <a href="">Contacts</a><br>
                                    <a href="">Careers</a><br>
                                    <a href="">Alarinna Events</a>

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                                    <a href=""> Dating Safety</a><br>
                                    <a href="">Terms of Use</a><br>
                                    <a href="">Privacy Policy</a><br>
                                    <a href="">Fraud protection</a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">

                               
                                    <a href=""> Alarinna Blog</a><br>
                                    <a href="">Success Stories</a><br>
                                    <a href="">Mobile</a><br>
                                    <a href="">Membership</a>

                                </div>
                                
                                <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                                    <h2>Follow Alarinna</h2>
                                    <ul class="social-icons">
                                        
                                        <li>
                                            <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PRE-FOOTER -->
                    <!-- BEGIN INNER FOOTER -->
                    <div class="page-footer">
                        <div class="container"> 2016 &copy; Alarinna. All rights reserved 2017.
                            
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
        <!-- BEGIN QUICK NAV -->
       
       
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->

        
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->

        
         
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <script>

            $(document).ready(function(){

                     var memberID = '<?php echo $this->session->userdata('memberID'); ?>';
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
                                    $("#member_avatar").append('<img alt="" class="img-circle" src="<?php echo base_url(); ?>profile-images/'+ item.avatar +'">'); 
                            });
                        },                     
                        
                        error: function (responseData) {
                            
                            //$(".desires").append('<div class="well"><h3>No Desires</h3> </div>')
                        }
                    });

                   
                     
            });
        </script>

       
       

       

        
        
    </body>

</html>