 <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo base_url()?>assets/pages/css/portfolio.min.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->



<div class="col-md-4 jade" style="margin-bottom:20px">
    <div class="" 
            <!-- my first cropper -->
            <input type="file" id="photo1"/>
            
        </div>
    
</div>


<?php
        $last_id = 0;
        foreach ($result_photos as $key=> $rphotos) {
            $photo = $rphotos['photo']; // keep the last id for the paging
            ?>
           
             <div class="col-md-4" style="margin-bottom:20px">
                <a href="">
                    <img class="photo" style="width:230px; height:230px" src="<?php echo base_url();?>profile-images/<?php echo $photo; ?>"/>
                </a>
            </div>



            
            <?php
        }
?>




<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
    


<style>
.slim {
    border-radius: 0.5rem;
}

</style>










<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {

   $('#photo1').slim({
            ratio: '1:1',
            
            service: 'http://localhost/alarinna/plugins/slim-image-upload-and-ratio-cropping-plugin/server/async.php',
            download: false,
            size: {width:640, height:640},
            willSave: function(data, ready) {
                //alert('saving!');
                ready(data);
                console.log(data);
            },
            didUpload: function(error, data, response) {
                    console.log(response);
                    var memberID = '<?php echo $memberID;?>';
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
            push: 'true',
            buttonConfirmLabel: 'Apply'
           

           
    });
         
});
</script>


<script src="<?php echo base_url()?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.jquery.js"></script>     

 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url(); ?>assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/pages/scripts/portfolio-1.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->