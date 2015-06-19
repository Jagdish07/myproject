<?php
/*
Template Name: My Custom Page Template
*/

get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css?v=2.1.5" type="text/css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js?v=2.1.5">
</script>

<script>
jQuery(document).ready(function($) {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();
			$('.terms').click(function(){
			 $.fancybox.close();
			 return false;
			})
			});
</script>

  
          
<?php //get_footer(); ?>