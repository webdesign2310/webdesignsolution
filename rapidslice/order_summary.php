<?php
include_once("config.php");
include_once("library/CartClass.php");
$cart	=	new CartClass;
if(isset($_POST['email']))
{
	update_cart();
	foreach($_POST as $ind=>$val)
	{
	  if($ind=='package_select1')
	  {
		foreach($_POST[$ind] as $indp=>$valp)
		{
		$_SESSION['checkout_sess'][$ind][$indp]=db_out($valp);
		}
	  }
	  else
	  {
	  $_SESSION['checkout_sess'][$ind]=$val;
	  }
	 }
	 header("location:order_summary.php?cartupdated");
	 die();
	 
}
if (!isset($_SESSION['checkout_sess']['package_select1'])) {
	header("location:order.php");
	die();
}
$select_pack_ids	=	 $cart->getSelectPackIds();
$pack_type			=	 $cart->selectPackType();  
if ($pack_type == 1) {
	$title_text	=	'Responsive';
} else {
	$title_text	=	'Non Responsive';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Rapid Slice</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
<script type='text/javascript' src="js/css3-mediaqueries.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.9.custom.css" type="text/css" rel="stylesheet" />
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- google analytics starts -->
<?php include_once "google_analytics.php"; ?>
<style>
.penmydiv{display:block!important;}
</style>

</head>


<body class="pos_rel" data-spy="scroll" data-target=".scrollspy">
<!-- Starts banner top section -->
<!-- Starts Header -->
<?php include("header2.php"); ?>
<!-- Ends Header --> 
<section class="banner_main">
  <div class="banner_order"> <img src="images/order_icon.png" alt="Let’s Make Your New Favourite Website" title="Let’s Make Your New Favourite Website" width="56" height="47">
    <h1>Let’s Make Your New Favourite Website</h1>
  </div>
</section>
<!-- Starts banner top section --> 
<!-- Starts steps -->
<section class="order_steps" id="sticky_container">
  <div class="container">
    <ul>
      <li class="myitem" id="payment_details"><span>1</span> <span class="list_txt">Client Details</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="select_package"><span>2</span> <span class="list_txt">Select Package</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="add_opt"><span>3</span> <span class="list_txt">Additional Options</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem active" id="review_order"><span>4</span> <span class="list_txt">Order Summary</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="pay"><span>5</span> <span class="list_txt">Pay</span></li>
    </ul>
  </div>
</section>
<!-- Ends steps --> 
<!-- Starts Order Middle section -->
<section class="info_sec blog_section order_sec has-js">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="order_form order_131015 has-js" id="payment_details_div">
          <h3><img src="images/summary_icon.png" alt="Payment Details" title="Payment Details" width="29" height="34" class="icon_left"> Order Summary</h3>
          <div class="col-sm-12">
            <button class="btn btn-default package active" type="button" title="Responsive"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <span class="order_res"><?php echo $title_text;?></span> <img src="images/mobile_icon.png" alt="" width="15" height="24"/></button>
          </div>		  
		  <?php if (array_key_exists("1",$select_pack_ids)) {  ?>
          <div class="clearfix"></div>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/html_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive HTML</span> 3 - 4 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$149</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
                <p>The <span>PSD to Responsive HTML Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  
		  <?php if (array_key_exists("2",$select_pack_ids)) {  ?>
		  <div class="clearfix"></div>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/wordpress_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Wordpress</span> 4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$199</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
                <p><span>PSD to Responsive Wordpress Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("3",$select_pack_ids)) {  ?>
		  <div class="clearfix"></div>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/joomla_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Joomla</span> 4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$249</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
                <p><span>PSD to Responsive Joomla Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("4",$select_pack_ids)) {  ?>
		  <div class="clearfix"></div>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/magento_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Magento</span> 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$349</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
                <p><span>PSD to Responsive Magento Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("5",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/envelope_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Email</span> 2 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$99</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
                <p><span>PSD to Responsive Email Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("6",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/opencart_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Opencart</span> 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$399</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Responsive Opencart Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("7",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/raster_vector.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>Raster to Vector Conversion</span> 1 day</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$49</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>Raster to Vector Conversion Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>		  
		  <?php if (array_key_exists("8",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/prestashop_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>PSD to Responsive PrestaShop</span> 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$399</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Responsive PrestaShop Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("51",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/html_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to HTML</span> 1 day</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$65</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to HTML Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("52",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/html5_icon.png" alt="HTML5" title="HTML5" width="38" height="43"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to HTML5 + CSS3</span> 1 day</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$95</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to HTML5 + CSS3 Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("53",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/mobile_icon1.png" alt="Mobile" title="Mobile" width="26" height="43"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Mobile</span> 2 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$79</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Mobile Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("54",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/wordpress_icon.png" alt="Wordpress" title="Wordpress" width="37" height="37"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Wordpress</span> 2 - 3 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$99</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Wordpress Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		   <?php } ?>
		  <?php if (array_key_exists("55",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/joomla_icon.png" alt="Joomla" title="Joomla" width="32" height="31"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Joomla</span> 4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$149</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Joomla Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		   <?php } ?>
		  <?php if (array_key_exists("56",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/magento_icon.png" alt="Magento" title="Magento" width="32" height="38"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Magento</span> 4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$299</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Magento Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		   <?php } ?>
		  <?php if (array_key_exists("57",$select_pack_ids)) {  ?>
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/envelope_icon.png" alt="Email" title="Email" width="34" height="24"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Email</span> 1 day</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$49</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Email Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("58",$select_pack_ids)) {  ?>		  
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/opencart_icon.png" alt="Opencart" title="Opencart" width="41" height="29"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to Opencart</span>4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$299</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to Opencart Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
		  <?php if (array_key_exists("59",$select_pack_ids)) {  ?>		  
		  <div class="col-sm-12 package_sec">            
			<div class="left_sec"><img src="images/prestashop_icon.png" alt="PrestaShop" title="PrestaShop" width="27" height="39"/></div>
            <div class="right_sec">
              <div class="package_box">                
				<div class="col-xs-12 col-sm-7"><span>PSD to PrestaShop</span> 4 - 6 days</div>
                <div class="col-xs-12 col-sm-5"><span class="price_package">$299</span></div>
                <div class="clearfix"></div>
              </div>
              <div class="details">
				<p><span>PSD to PrestaShop Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
              </div>
            </div>
          </div>
		  <?php } ?>
          <div class="col-sm-12 package_sec">
            <div class="left_sec blue_bg"><img src="images/pages_icon.png" alt="HTML" title="HTML" width="39" height="32"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>No. of pages:</span> <span class="sm_txt">Home Page + <?php echo $_SESSION['checkout_sess']['setinner'];?> Inner Pages</span></div>
                <div class="col-xs-12 col-sm-5"><span class="price_pages">$0</span></div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 package_sec">
            <div class="left_sec blue_bg"><img src="images/add_options.png" alt="HTML" title="HTML" width="26" height="26"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-sm-12"><span>Additional Options</span></div>
                <div class="additional_options_sec">
                <h5>HTML Layout Options</h5>
				<?php if (isset($_SESSION['checkout_sess']['layout_width1_select'])) { ?>
					<div class="total_field_top">
					<div class="total_left_txt"><span>Layout Width</span></div>
					</div>
					<div class="total_field">
					<div class="total_left_txt"><?php echo $_SESSION['checkout_sess']['layout_width1_select_arr'][$_SESSION['checkout_sess']['layout_width1_select']]['name'];?></div>
					<div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['layout_width1_select_arr'][$_SESSION['checkout_sess']['layout_width1_select']]['price'];?></div>
					</div>
				<?php } ?>
				
                <?php if (isset($_SESSION['checkout_sess']['layout_horizontal_select'])) { ?>
				<div class="total_field_top">
                <div class="total_left_txt"><span>Layout Horizontal Alignment</span></div>
                </div>
                <div class="total_field">
                <div class="total_left_txt"><?php echo $_SESSION['checkout_sess']['layout_horizontal_select_arr'][$_SESSION['checkout_sess']['layout_horizontal_select']]['name'];?></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['layout_horizontal_select_arr'][$_SESSION['checkout_sess']['layout_horizontal_select']]['price'];?></div>
                </div>
				<?php } ?>
				
				<?php if (isset($_SESSION['checkout_sess']['header_footer'])) { ?>
                <div class="total_field_top">
                <div class="total_left_txt"><span>Header/Footer width Stretch</span></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['header_footer_arr'][$_SESSION['checkout_sess']['header_footer']]['price'];?></div>
                </div>
				<?php } ?>
				
				<?php if (isset($_SESSION['checkout_sess']['vertical_alignment_select'])) { ?>
                <div class="total_field_top">
                <div class="total_left_txt"><span>Vertical Alignment</span></div>
                </div>
                <div class="total_field">
                <div class="total_left_txt"><?php echo $_SESSION['checkout_sess']['vertical_alignment_select_arr'][$_SESSION['checkout_sess']['vertical_alignment_select']]['name'];?></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['vertical_alignment_select_arr'][$_SESSION['checkout_sess']['vertical_alignment_select']]['price'];?></div>
                </div>
				<?php } ?>
				
				<?php if (isset($_SESSION['checkout_sess']['sticky_footer'])) { ?>
                <div class="total_field_top">
                <div class="total_left_txt"><span>Sticky Footer</span></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['sticky_footer_arr'][$_SESSION['checkout_sess']['sticky_footer']]['price']?></div>
                </div>
				<?php } ?>
				<?php /*?>
                <div class="total_field_top">
                <div class="total_left_txt"><span>Sticky Header</span></div>
                <div class="total_right_txt">$9</div>
                </div>
				<?php */?>
                </div>
				
				<?php if (isset($_SESSION['checkout_sess']['layout_width2_select'])) { ?>
                <div class="additional_options_sec">
                <h5>Browser Device Compability Options</h5>
                <div class="total_field_top">
                <div class="total_left_txt"><span>Layout Width</span></div>
                </div>
                <div class="total_field">
                <div class="total_left_txt"><?php echo $_SESSION['checkout_sess']['layout_width2_select_arr'][$_SESSION['checkout_sess']['layout_width2_select']]['name'];?></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['layout_width2_select_arr'][$_SESSION['checkout_sess']['layout_width2_select']]['price'];?></div>
                </div>
                </div>
				<?php } ?>				
				
				<?php if (isset($_SESSION['checkout_sess']['layout_width3_select'])) { ?>
                <div class="additional_options_sec">
                <h5>HTML/ XHTML Advanced Options</h5>                
                <div class="total_field">
                <div class="total_left_txt"><?php echo $_SESSION['checkout_sess']['layout_width3_select_arr'][$_SESSION['checkout_sess']['layout_width3_select']]['name'];?></div>
                <div class="total_right_txt"><?php echo $_SESSION['checkout_sess']['layout_width3_select_arr'][$_SESSION['checkout_sess']['layout_width3_select']]['price'];?></div>
                </div>                
                </div>
				<?php } ?>
                <div class="additional_total">
                <div class="total_left_txt"><span>Additional Options Total</span></div>
                <div class="total_right_txt">$<?php echo $_SESSION['checkout_sess']['add_item_price'];?></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="order_form pay_form">
          <h3><img src="images/significant_icon1.png" alt="Your Total" title="Your Total" width="29" height="33" class="icon_left"> Your Total</h3>
          <div class="col-sm-12">
            <div class="total_box">
              <div class="inner_field">
                <div class="inner_left">Package with Pages</div>
                <div class="inner_right">$<?php echo $_SESSION['checkout_sess']['pack_select_price'];?></div>
              </div>
              <div class="inner_field">
                <div class="inner_left">Additional Options</div>
                <div class="inner_right">$<?php echo $_SESSION['checkout_sess']['add_item_price'];?></div>
              </div>
			  
              <div class="inner_field">
                <div class="inner_left">GST</div>
                <div class="inner_right">$0</div>
              </div>
			  
              <div class="total_field">
                <div class="inner_left"><span>Total Amount</span></div>
                <div class="inner_right"><span class="total">$<?php echo $_SESSION['checkout_sess']['total_price'];?></span></div>
              </div>
              <div class="inner_section terms_sec">
                <label class="label_check1" for="terms_condition">
                  <input name="terms_condition" id="terms_condition" value="terms" type="checkbox" >
                  I accept the Terms and Conditions. </label>
                <label class="label_check1" for="please_show">
                  <input name="please_show" id="please_show" value="showcase" type="checkbox">
                  Please showcase my project. </label>
              </div>
            </div>
            <button class="btn btn-default package proceedToPayment" type="button" title="Responsive"><span>Proceed to Payment</span></button>
            <button onClick="location.href = 'order.php';" class="btn btn-default package" type="button" title="Responsive"><span>Edit Order</span></button>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Ends Order Middle section --> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script src="js/jquery.sticky-sidebar-scroll.min.js"></script> 
<script src="js/jquery-ui-1.8.13.custom.min.js"></script> 
<script src="js/jquery.multi-accordion-1.5.3.js"></script> 
<script src="js/bootstrap-hover-dropdown.js"></script> 
<script src="js/common.js"></script>
<script src="js/userjs.js"></script>


<!-- Starts Footer -->
<?php include("footer.php"); ?>
<!-- Ends Footer -->
<script>
$('.proceedToPayment').click(function(e){
	if(!($('#terms_condition:checked').length > 0))
	{
		alert('Please accept the Term and Conditions');
		return false;
	}
	location.href = 'pay.php';
});

$('.dropdown-toggle').dropdownHover('options');

    function setupLabel() {
		    if ($('.label_check input').length) {
            $('.label_check').each(function(){ 
                $(this).removeClass('c_on');
            });
            $('.label_check input:checked').each(function(){ 
                $(this).parents('label').addClass('c_on');
            });                
        };
        if ($('.label_check1 input').length) {
            $('.label_check1').each(function(){ 
                $(this).removeClass('check_on');
            });
            $('.label_check1 input:checked').each(function(){ 
                $(this).parents('label').addClass('check_on');
            });                
        };
	
        if ($('.label_radio input').length) {
            $('.label_radio').each(function(){ 
                $(this).removeClass('r_on');
            });
            $('.label_radio input:checked').each(function(){ 
                $(this).parents('label').addClass('r_on');
            });
        };
		if ($('.label_radio1 input').length) {
            $('.label_radio1').each(function(){ 
                $(this).removeClass('radio_on');
            });
            $('.label_radio1 input:checked').each(function(){ 
                $(this).parents('label').addClass('radio_on');
            });
        };
    };
    $(document).ready(function(){
        $('.label_check, .label_check1, .label_check2, .label_radio , .label_radio1').click(function(){
            setupLabel();
        });
        setupLabel(); 
    });
	
$(document).ready(function(){		
$( document ).on( "click", ".click_class", function() {
	var id			=	$( this ).attr('data-val');	
	var label_name	=	'package_'+id;	
	var inner_div	= 	'#innerdiv-'+id;
	 $("label[for="+label_name+"]").toggleClass('check_on2');	
	 $(inner_div).slideToggle();
});

});	
</script> 
<script>
    var anchor = document.querySelectorAll('button.lines-button');
    
    [].forEach.call(anchor, function(anchor){
      var open = false;
      anchor.onclick = function(event){
        event.preventDefault();
        if(!open){
          this.classList.add('close');
          open = true;
        }
        else{
          this.classList.remove('close');
          open = false;
        }
      }
    }); 
</script> 
<script>
$('input[type=radio][name=package_select]').change(function() {
	var select_radio  = $(this).val();
	$('.details').slideUp();
	$('#innerdiv-'+select_radio).slideDown();
});	
</script> 
<script>
$(document).ready(function() {
var stickyNavTop = $('.order_steps').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.order_steps').addClass('sticky');
} else {
    $('.order_steps').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});
});
</script> 
<script type="text/javascript">
		$(function(){
			$('#multiAccordion').multiAccordion({
				active: [1, 2],
				click: function(event, ui) {
					//console.log('clicked')
				},
				init: function(event, ui) {
					//console.log('whoooooha')
				},
				tabShown: function(event, ui) {
					//console.log('shown')
				},
				tabHidden: function(event, ui) {
					//console.log('hidden')
				}
				
			});
			
			$('#multiAccordion').multiAccordion("option", "active", [0, 3]);
		});
</script> 
<script>
function setval()
       {
		   
            
            document.getElementById("setinner").selectedIndex = document.getElementById("topselect").value;
       }
$('#order_sum').affix({
  offset: {
	top: $('.order_steps').offset().top,
	bottom: ($('footer').outerHeight(true)) + 
            40
  }
});
$(document).ready(function(){
    $(".myitem").click(function(){
       var menuItem = $(this).attr('id');
       var selectorDiv;
       
       if(menuItem =='client_details')
       {
           selectorDiv = $("#client_details_div");
       }else if(menuItem =='select_package')
       {
           selectorDiv = $("#select_pkg");
       }else if(menuItem =='add_opt')
       {
           selectorDiv = $("#additional_opt");
       }else if(menuItem =='review_order')
       {
           selectorDiv = $("#additional_opt");
       }else if(menuItem =='pay')
       {
           selectorDiv = $("#additional_opt");
       }
       
       if($("#sticky_container").hasClass("sticky"))
       {
          
           var stickerHeight = $("#sticky_container").height();
           var totalHeight = (selectorDiv.offset().top - (stickerHeight+50));
            
            $('html, body').animate({
        scrollTop: totalHeight
    }, 100);
       }else{
           var totalHeight = (selectorDiv.offset().top-200);
           $('html, body').animate({
        scrollTop: totalHeight
    }, 100);
           
       }
    })
});
</script> 
<script>
$( document ).on( "keyup", "#cardnumber", function() {
 var cardnumber = $(this).val();
 var cardnumberLen = cardnumber.length;
 if(cardnumberLen==4 || cardnumberLen==9 || cardnumberLen==14 )
 {
  cardnumber = cardnumber + ' ';
  $(this).val(cardnumber);
 }
 console.log($(this).val());
});
</script>
</script>
</body>
</html>