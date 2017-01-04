<!DOCTYPE HTML>
<html>
<head>
<title>Content Slider</title>

<link href="fonts/ostrich_sans/stylesheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700,800' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url(); ?>plugins/photo_slider/css/content_slider_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>plugins/photo_slider/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.content_slider.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/jquery.animate-colors.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>plugins/photo_slider/js/additional_content.js" type="text/javascript"></script>

<script type="text/javascript">
	(function($){
		$(document).ready(function() {
			var image_array = new Array();
			image_array = [
				{image: '../profile-images/5863c7afb5bcb_black-woman-thinking.-pf.jpg', link_url: 'content/our_team/1big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/2.jpg', link_url: 'content/our_team/2big.jpg', link_rel: 'prettyPhoto'},
                {image: 'content/our_team/3.jpg', link_url: 'content/our_team/3big.jpg', link_rel: 'prettyPhoto'},
                {image: 'content/our_team/4.jpg', link_url: 'content/our_team/4big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/5.jpg', link_url: 'content/our_team/5big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/6.jpg', link_url: 'content/our_team/6big.jpg', link_rel: 'prettyPhoto'},
				{image: 'content/our_team/7.jpg', link_url: 'content/our_team/7big.jpg', link_rel: 'prettyPhoto'}
			];
            
			var array_length = image_array.length;
			 //alert(image_array.length); 

			 if(array_length > 1){
				 alert('cool')
			 }else{
				 alert('not cool')
			 }
           
            
            image_array = <?php echo $photos; ?>; 
			$('#slider1').content_slider({		// bind plugin to div id="slider1"
				map : image_array,				// pointer to the image map
				max_shown_items: 7,				// number of visible circles
				hv_switch: 0,					// 0 = horizontal slider, 1 = vertical
				active_item: 0,					// layer that will be shown at start, 0=first, 1=second...
				wrapper_text_max_height: 450,	// height of widget, displayed in pixels
				middle_click: 1,				// when main circle is clicked: 1 = slider will go to the previous layer/circle, 2 = to the next
				under_600_max_height: 1200,		// if resolution is below 600 px, set max height of content
				border_radius:	-1,				// -1 = circle, 0 and other = radius
				automatic_height_resize: 1,
				border_on_off: 0,
				allow_shadow: 0
			});
		});
	})(jQuery);
</script>
<link href="<?php echo base_url(); ?>plugins/photo_slider/css/doc_style.css" rel="stylesheet" type="text/css" />




</head>
<body>


<a  style="position:relative; left:530px; top:13px "href="<?php echo base_url();?>profile/p_preview" class=" btn btn-circle red"> Send Message</a>


<div class="content_slider_wrapper" id="slider1">

	

</div>


</body>
</html>


