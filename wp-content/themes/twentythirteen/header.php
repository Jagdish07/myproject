<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	<script >

jQuery(document).ready(function () {

var menu = jQuery('.banner-logo');
var origOffsetY = menu.offset().top;

function scroll() {
if (jQuery(window).scrollTop() >= origOffsetY) {
jQuery('.banner-logo').addClass('sticky');
jQuery('.content').addClass('menu-padding');
} else {
jQuery('.banner-logo').removeClass('sticky');
jQuery('.content').removeClass('menu-padding');
}


}

document.onscroll = scroll;

});
</script>
<style>
.sticky {
position:fixed;
top:0;
left:auto;
background-color:#000;
height:65px;
width:100% !important;
}

</style>

<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>

</head>




<body <?php body_class(); ?>>
	 <div class="container main-content">
        <div class="banner centered-banner navbar"  style="background-color:#000000">
            <div class="fixed-width cf"> 
               <!-- <h1 class="banner-logo"><a href="#" title="Bass " rel="home"><img src="<?php //echo //get_template_directory_uri(); ?>/images/bannerblack2.jpg" alt="Bass " /></a></h1>-->
			   <div style="width:100%; min-height:33px; background-color:#000;">
			   <h3 style=" color: #fff; font-size: 11px;letter-spacing: 1px; padding-top: 10px;text-align: center;text-transform: uppercase; font-family: gothic;">Stay Rewarded</h3>
			   </div>
			   </div>
        </div>

		<div id="content_area" class="">
		<?PHP if (is_home() ) { ?>
		<div class="row one-column cf ui-sortable" id="le_body_row_1">
		<?php }
				else {
			?>	
			 <style>
 #le_body_row_1
 {
 background-image: url("<?php echo get_template_directory_uri(); ?>/images/term_condition.jpg") !important;
 }
 </style>
			<div class="row one-column cf ui-sortable" id="le_body_row_1">
				<?php }
						?>
						
				<?php if (is_home() ) { ?>		
                <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_1_col_1">
					
                        <div class="element-container cf transparent" data-style="eyJhZHZhbmNlZENsYXNzIjoidHJhbnNwYXJlbnQifQ==" id="le_body_row_1_col_1_el_1">
						
		
				
                            <div class="element">
                                <div class="feature-box feature-box-15 feature-box-align-center" style='width: 940px;margin-top: 0px;margin-bottom: 0px;'>
                                    <div class="feature-box-content cf" style='padding-top: 0px;padding-bottom: 0px;padding-left: 20px; padding-right: 0px;'>
                                        <div class="row element-container cf ">
                                            <div class="op-text-block" style="margin-top:0px;margin-bottom:0px;width:100%;text-align: left;padding-top:0px;padding-bottom:0px;padding-left:0px;padding-right:0px;">
                                                <p class="p1" style='font-size:28px; font-size: 28px;font-style:normal;font-weight:300;color:#ffffff;'></p>
                                            </div>
                                        </div>
                                        <div class="row element-container cf ">
                                            <h2 style='font-size:40px; font-weight:bold;color:#000;letter-spacing:-1px;text-align:center; font-family: gothic; '>Stay Rewarded<br />
From Bass Shutters and Blinds
</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_2">
                            <div class="element">
                                <div style="height:40px"></div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_3">
                            <div class="element">
                                <div style="text-align:center">
                                    </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_4">
                            <div class="element">
                                <div style="height:20px"></div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_5">
                            <div class="element">
                                <h2 style='font-size:44px; font-size: 3.65vw; font-family:"Open Sans", sans-serif;font-weight:bold;color:#ffffff;text-shadow:1px 1px 0px #000;text-shadow:1px 1px 0px rgba(0,0,0,0.5);text-align:center;'><p class="p1"></p></h2> </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_6">
                            <div class="element">
                                <div style="height:40px"></div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } 
				 else {  ?>
				 <div class="fixed-width">
                    <div class="one-column column cols" id="le_body_row_1_col_1">
							<div class="element">
                                <div >
                                    
									<a href="/stayRewarded/" style="  background: #000 none repeat scroll 0 0;
    border-color: #000000;
    border-radius: 6px;
    border-width: 0;
    font-weight: bold;
    height: 11px;
    padding: 7px 20px;
    text-align: left;
    width: 40px;"> <span class="text" style="font-family: gothic; color:#fff; font-size:15px; margin-left:-144px">Back</span></a>
							</div>
                            </div>
								<h2 style='font-size:33px; font-weight:bold;color:#000;letter-spacing:-1px;text-align:center; font-family: gothic;'>
											Tearms and Condition Apply

</h2>
                        <div class="element-container cf transparent" data-style="eyJhZHZhbmNlZENsYXNzIjoidHJhbnNwYXJlbnQifQ==" id="le_body_row_1_col_1_el_1">
						
		
	
                            <div class="element">
                                <div class="feature-box feature-box-15 feature-box-align-center" style='width: 940px;margin-top: 0px;margin-bottom: 0px;'>
                                    <div class="feature-box-content cf" style='padding-top: 0px;padding-bottom: 0px;padding-left: 20px; padding-right: 0px;'>
                                        <div class="row element-container cf ">
											
                                            <div class="op-text-block" style="margin-top:0px;margin-bottom:0px;width:100%;text-align: left;padding-top:0px;padding-bottom:0px;padding-left:0px;padding-right:0px;">
                                                <p class="p1" style='font-size:28px; font-size: 28px;font-style:normal;font-weight:300;color:#ffffff;'></p>
											
                                            </div>
                                        </div>
                                        <div class="row element-container cf ">
                                            <h2 style='font-size:33px; font-weight:bold;color:#fff;letter-spacing:-1px;text-align:center; font-family: gothic;text-shadow: 0px 0px 10px #000; '>
											Client must be an existing customer with Bass
The Minimum spend of the total sale must be of the value of $2,000 or above. (GST inclusive)
Once Bass has received confirmation, inclusive of a 50% deposit, Bass Shutters and Blinds will endeavor to reward you with your gift of choice
Please Note, gift cards are not redeemable for cash or cheque or any further discounts
Rewards will be subject to terms and conditions of suppliers
Exchange of vouchers, will is not permitted.
 
</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_2">
                            <div class="element">
                                <div style="height:40px"></div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_3">
                            <div class="element">
                                <div style="text-align:center">
                                    </div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_4">
                            <div class="element">
                                <div style="height:20px"></div>
                            </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_5">
                            <div class="element">
                                <h2 style='font-size:44px; font-size: 3.65vw; font-family:"Open Sans", sans-serif;font-weight:bold;color:#ffffff;text-shadow:1px 1px 0px #000;text-shadow:1px 1px 0px rgba(0,0,0,0.5);text-align:center;'><p class="p1"></p></h2> </div>
                        </div>
                        <div class="element-container cf" data-style="" id="le_body_row_1_col_1_el_6">
                            <div class="element">
                                <div style="height:40px"></div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
				
            </div>
			<div class="banner centered-banner" style="background-color:#000000">
            <div class="fixed-width cf banner-logo">
                <h1><a href="#" title="Bass " rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/bannerblackgetbass4a1.png" alt="Bass " /></a></h1> </div>
        </div>

	
	