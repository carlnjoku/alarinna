<script>
    var hair = '<?php echo base_url();?>hair.json';
    $.getJSON(hair, function(data){
            $.each(data, function(index,item) {
            $("select.hair").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        })
    });

    var height = '<?php echo base_url();?>height.json';
    $.getJSON(height, function(data){
            $.each(data, function(index,item) {
            $("select.height").append("<option value=" + item.name + ">" + item.name + "</option>"); 
        })
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


    var smoke = '<?php echo base_url();?>smoke.json';
    $.getJSON(smoke, function(data){
            $.each(data, function(index,item) {
            $("select.smoke").append("<option value=" + item.name + ">" + item.name + "</option>"); 
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