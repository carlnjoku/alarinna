 <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.css">
    


<style>
.slim {
    border-radius: 0.5rem;
}

</style>





<div class="col-md-4 jade" style="margin-bottom:20px">
    <div class="" 
            <!-- my first cropper -->
            <input type="file" id="photo1"/>
            
        </div>
    
</div>





<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

<script>
$(document).ready(function() {

   $('#photo1').slim({
            ratio: '1:1',
             meta: {
                userId:'30'
            },
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
                    var memberID = '24';
                    var filename = response.file;
                    //var datastring = ;
                    
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/neo4j-alarinna/web/photo_upload",
                        data: memberID,
                        success: function (response) {
                            $("#response").append(response); // or .html(response)
                        }
                    });   
                    
                    $('#photo').val(response.file);
            },
            label: 'Drop your image here.',
            push: 'true',
            buttonConfirmLabel: 'Apply'
           

           
    });
         
});
</script>
  

 
  <script src="<?php echo base_url()?>plugins/slim-image-upload-and-ratio-cropping-plugin/slim/slim.jquery.js"></script>                                   