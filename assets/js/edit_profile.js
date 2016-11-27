// edit javascripts compiled

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


    // Submit forms without validation
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
});