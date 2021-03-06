<?php
include_once("config.php");
include_once("library/CartClass.php");
$cart	=	new CartClass;
$select_pack_ids	=	 $cart->getSelectPackIds(); 
$pack_type			=	 $cart->selectPackType(); 
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
.fileUpload.btn{ color:#2a2a2a; background:#e9e9e9!important; font-weight:bold; padding:5px!important}
.fileUpload.btn:focus, .fileUpload.btn:hover, .fileUpload.btn.focus{ background:none; border:none; box-shadow:none; color:#2a2a2a; background:#e9e9e9!important;}
.pl0{ padding-left:0px;}
</style>
</head>


<body class="pos_rel" data-spy="scroll" data-target=".scrollspy">
<?php include("header2.php"); ?>

<!-- Starts banner top section -->
<section class="banner_main">
  <div class="banner_order banner_order_top"> <img src="images/order_icon.png" alt="Let’s Make Your New Favourite Website" title="Let’s Make Your New Favourite Website" width="56" height="47">
    <h1>Let’s Make Your New Favourite Website</h1>
  </div>
</section>
<!-- Starts banner top section --> 
<!-- Starts steps -->
<section class="order_steps" id="sticky_container">
  <div class="container">
    <ul>
      <li class="myitem active" id="client_details"><span>1</span> <span class="list_txt">Project Details</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="select_package"><span>2</span> <span class="list_txt">Select Package</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="add_opt"><span>3</span> <span class="list_txt">Additional Options</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="review_order"><span>4</span> <span class="list_txt">Review Order</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="pay"><span>5</span> <span class="list_txt">Pay</span></li>
    </ul>
  </div>
</section>
<!-- Ends steps --> 
<!-- Starts Order Middle section -->
<form id="contactform" name="contactform" method="post" action="order_summary.php">
  <input type="hidden" name="pack_select_count" id="pack_select_count" value="">
  <input type="hidden" name="pack_select_price" id="pack_select_price" value="">
  <input type="hidden" name="add_item_count" id="add_item_count" value="">
  <input type="hidden" name="add_item_price" id="add_item_price" value="">
  <input type="hidden" name="total_price" id="total_price" value="">
  <input type="hidden" name="pack_type" id="pack_type" value="<?php echo $pack_type;?>">
  <input type="hidden" name="atached_file" id="atached_file" value="<?php echo $atached_file;?>">
  
  <section class="info_sec blog_section order_sec has-js">
    <div class="container">
      <div class="col-md-8">
        <div class="row">
          <div class="order_form btn_active">
            <div class="col-xs-12 col-sm-7 col-md-offset-3 col-sm-offset-3">
              <button onClick="location.href = 'client_area.php';" class="btn btn-default package active login_081015" type="button" title="Already have an Account?  Log in."><img src="images/login_081015.png" alt=""  height="24"/> <span class="btn_new">Already have an Account?  Log in.</span></button>
            </div>
            <div class="clearfix"></div>
            <div class="order_form create signup_081015">
              <div class="col-sm-6 form-group form_field">
                <label class="order_account" for="client_name">Name:</label>
                <input name="client_name" type="text" class="form-control" id="client_name" value="<?php echo $_SESSION['checkout_sess']['client_name']?>">
              </div>
              <div class="col-sm-6 form-group form_field">
                <label class="order_account" for="Phone">Phone:</label>
                <input name="phone" type="text" class="form-control" id="Phone" maxlength="10" value="<?php echo $_SESSION['checkout_sess']['phone']?>">
              </div>
              <div class="col-sm-6 form-group form_field">
                <label class="order_account" for="email">Email:</label>
                <input name="email" type="text" class="form-control" id="email" value="<?php echo $_SESSION['checkout_sess']['email']?>">
              </div>
              <div class="col-sm-6 form-group form_field">
                <label class="order_account" for="confirm_email">Confirm your Email:</label>
                <input name="confirm_email" type="text" class="form-control" id="confirm_email" value="<?php echo $_SESSION['checkout_sess']['confirm_email']?>">
              </div>
              <div class="clearfix"></div>
              <div class="col-md-12 txt_081015"> We will email you your password to confirm your account </div>
              <div class="col-xs-12 col-sm-4 col-md-offset-4 col-sm-offset-4 form-group">
                <button  onclick="return submitmyfrm('validateaccount');" class="btn btn-default package active login_081015" type="button" title="Create Account"><span class="mar-left0">Create Account</span></button>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="order_form" id="client_details_div">
            <h3><span>1</span> Project Details</h3>
            <div class="col-sm-6 form-group form_field">
              <label for="client_project">Name your project:</label>
              <input type="text" class="form-control" name="client_project" id="client_project" value="<?php echo $_SESSION['checkout_sess']['client_project']?>">
            </div>
            <div class="col-sm-6 form-group form_field">
              <label for="client_name">Select the no. of pages</label>
              <div class="pages"><span>Home Page</span><span class="plus">+</span>
                <select id="topselect" name="topselect" onChange="setval()" class="lh24">
                  <?php
			  for($i=0;$i<=10;$i++)
			  {
			  ?>
                  <option value="<?php echo $i;?>" <?php echo ($_SESSION['checkout_sess']['setinner']==$i?"selected":"")?>><?php echo $i;?></option>
                  <?php
			  }
			  ?>
                </select>
                <span>Inner Pages</span></div>
            </div>
            
            <div class="col-sm-2 pl0 pull-right form-group form_field">
            <div class="fileUpload btn btn-primary"><span>Choose File &nbsp; &nbsp; <img width="17" height="21" src="images/upload_icon1.png" alt="upload file" title="upload file"></span>
                  <input type="file" class="upload" id="uploadedfile" name="uploadedfile">
                </div>
                
                
            </div>
            
            <div class="col-sm-12 form-group form_field">
              <label for="client_comments">Add Comments</label>
              <textarea class="form-control" id="client_comments" name="client_comments"><?php echo $_SESSION['checkout_sess']['client_comments']?></textarea>
            </div>
            <!--<div class="col-xs-12 col-sm-4 col-md-offset-4 col-sm-offset-4 upload_081015">
              <button class="form-group btn btn-default package active login_081015" type="button" title="Upload Files"><span class="btn_new mar-left0">Upload Files</span> <img src="images/upload_icon3.png" alt="" width="17" height="21"/></button>
            </div>-->
            <div class="clearfix"></div>
          </div>
          <div class="order_form" id="select_pkg">
            <h3><span>2</span> Select Package</h3>
            <ul class="select_pkg_tab">
              <li class="active"><a data-toggle="tab" href="#responsive_tab"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <img src="images/mobile_icon.png" alt="" width="15" height="24"/> <span>Responsive</span></a></li>
              <li><a data-toggle="tab" href="#nonresponsive_tab"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <span>Non-Responsive</span></a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="tab-content">
              <div id="responsive_tab" class="tab-pane fade in active">
			    <?php 
				  $selected	=	"";
				  if (array_key_exists("1",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/html_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
                  <div class="right_sec">				 
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive HTML</span> 3 - 4 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$149" type="button" value="149" class="click_class" data-val="1" >$149</button>
                      </div>
                      <div id="checkval1" class="col-xs-5 col-sm-2">
                        <label class="label_check2 " for="package_1" data-price='149'>
                          <input name="package_select1[]" id="package_1" value="1" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-1" style="display:none">
                      <p><span>The PSD to Responsive HTML Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>3 - 4 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>
			  <?php 
				$selected	=	"";	
				  if (array_key_exists("2",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/wordpress_icon.png" alt="Wordpress" title="Wordpress" width="37" height="37"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Wordpress</span> 4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$199" type="button" value="199" class="click_class" data-val="2">$199</button>
                      </div>
                      <div  id="checkval2" class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_2" data-price='199'>
                          <input name="package_select1[]" id="package_2" value="2" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-2" style="display:none">
                      <p><span>PSD to Responsive Wordpress Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("3",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/joomla_icon.png" alt="Joomla" title="Joomla" width="32" height="31"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Joomla</span> 4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$249" type="button" value="249" class="click_class" data-val="3">$249</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_3" data-price='249'>
                          <input name="package_select1[]" id="package_3" value="3" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-3" style="display:none">
                      <p><span>PSD to Responsive Joomla Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("4",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/magento_icon.png" alt="Magento" title="Magento" width="32" height="38"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Magento</span> 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$349" type="button" value="349" class="click_class" data-val="4">$349</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_4" data-price='349'>
                          <input name="package_select1[]" id="package_4" value="4" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-4" style="display:none">
                      <p><span>PSD to Responsive Magento Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("5",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/envelope_icon.png" alt="Email" title="Email" width="34" height="24"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Email</span> 2 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$99" type="button" value="99" class="click_class" data-val="5">$99</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_5" data-price='99'>
                          <input name="package_select1[]" id="package_5" value="5" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-5" style="display:none">
                      <p><span>PSD to Responsive Email Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>2 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("6",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/opencart_icon.png" alt="Opencart" title="Opencart" width="41" height="29"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Opencart</span> 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$399" type="button" value="399" class="click_class" data-val="6">$399</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_6" data-price='399'>
                          <input name="package_select1[]" id="package_6" value="6" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-6" style="display:none">
                      <p><span>PSD to Responsive Opencart Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>  
				<?php 
				$selected	=	"";
				  if (array_key_exists("8",$select_pack_ids) && $pack_type == 1) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/prestashop_icon.png" alt="PrestaShop" title="PrestaShop" width="27" height="39"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Responsive PrestaShop</span> 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$399" type="button" value="399" class="click_class" data-val="8">$399</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_8" data-price='399'>
                          <input name="package_select1[]" id="package_8" value="8" type="checkbox" class="click_class" data-type="1" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-8" style="display:none">
                      <p><span>PSD to Responsive PrestaShop Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                    </div>
                  </div>
                </div>				
              </div>
              <div id="nonresponsive_tab" class="tab-pane fade">
			  <?php 
			  $selected	=	"";
				  if (array_key_exists("51",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/html_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to HTML</span> 1 day</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$65" alt="$65" type="button" class="click_class" data-val="9">$65</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_51" data-price='65'>
                          <input name="package_select1[]" id="package_51" value="51" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-51" style="display:none">
                      <p><span>PSD to HTML Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>1 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to HTML package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("52",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/html5_icon.png" alt="HTML5" title="HTML5" width="38" height="43"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to HTML5 + CSS3</span> 1 day</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$95" alt="$95" type="button" class="click_class" data-val="10">$95</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_52" data-price='95'>
                          <input name="package_select1[]" id="package_52" value="52" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-52" style="display:none">
                      <p><span>PSD to HTML5 + CSS3 Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>1 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to HTML5 + CSS3 package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("53",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/mobile_icon1.png" alt="Mobile" title="Mobile" width="26" height="43"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Mobile</span> 2 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$79" alt="$79" type="button" class="click_class" data-val="11">$79</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_53" data-price='79'>
                          <input name="package_select1[]" id="package_53" value="53" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-53" style="display:none">
                      <p><span>PSD to Mobile Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>2 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Mobile package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("54",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/wordpress_icon.png" alt="Wordpress" title="Wordpress" width="37" height="37"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Wordpress</span> 2 - 3 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$99" alt="$99" type="button" class="click_class" data-val="12">$99</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_54" data-price='99'>
                          <input name="package_select1[]" id="package_54" value="54" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-54" style="display:none">
                      <p><span>PSD to Wordpress Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>2 - 3 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Wordpress package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("55",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/joomla_icon.png" alt="Joomla" title="Joomla" width="32" height="31"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Joomla</span> 4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$149" alt="$149" type="button" class="click_class" data-val="13">$149</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_55" data-price='149'>
                          <input name="package_select1[]" id="package_55" value="55" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-55" style="display:none">
                      <p><span>PSD to Joomla Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Joomla package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("56",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/magento_icon.png" alt="Magento" title="Magento" width="32" height="38"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Magento</span> 4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$299" alt="$299" type="button" class="click_class" data-val="14">$299</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_56" data-price='299'>
                          <input name="package_select1[]" id="package_56" value="56" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-56" style="display:none">
                      <p><span>PSD to Magento Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Magento package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("57",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/envelope_icon.png" alt="Email" title="Email" width="34" height="24"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Email</span> 1 day</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$49" alt="$49" type="button" class="click_class" data-val="15">$49</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_57" data-price='49'>
                          <input name="package_select1[]" id="package_57" value="57" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-57" style="display:none">
                      <p><span>PSD to Email Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>1 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Email package is +$79.</span></p>
                    </div>
                  </div>
                </div>
				<?php 
				$selected	=	"";
				  if (array_key_exists("58",$select_pack_ids) && $pack_type == 0) {
					$selected	=	"checked";
				  }
				?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/opencart_icon.png" alt="Opencart" title="Opencart" width="41" height="29"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to Opencart</span>4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$299" alt="$299" type="button" class="click_class" data-val="16">$299</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_58" data-price='299'>
                          <input name="package_select1[]" id="package_58" value="58" type="checkbox" class="click_class"  data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-58" style="display:none">
                      <p><span>PSD to Opencart Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to Opencart package is +$79.</span></p>
                    </div>
                  </div>
                </div>
                <?php /*?>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/raster_vector.png" alt="Vector" title="Vector" width="49" height="49"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>Raster to Vector Conversion</span> 1 day</div>
                <div class="col-xs-7 col-sm-3">
                  <button title="$49" alt="$49" type="button" class="click_class" data-val="17">$49</button>
                </div>
                <div class="col-xs-5 col-sm-2">
                  <label class="label_check2" for="package_17" data-price='49'>
                    <input name="package_select1[]" id="package_17" value="17" type="checkbox" class="click_class" data-val="17">
                  </label>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="details" id="innerdiv-17" style="display:none">
                <p><span>Raster to Vector Conversion Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                <h6>1 day turnaround time*</h6>
                <p><span>*Estimate varies based on the complexity of the project <br>
                  The cost for per additional (Inner) page for Raster to Vector package is +$79.</span></p>
              </div>
            </div>
          </div>
		  <?php */?>
                <div class="col-sm-12 package_sec">
                  <div class="left_sec"><img src="images/prestashop_icon.png" alt="PrestaShop" title="PrestaShop" width="27" height="39"/></div>
                  <div class="right_sec">
                    <div class="package_box">
                      <div class="col-xs-12 col-sm-7"><span>PSD to PrestaShop</span> 4 - 6 days</div>
                      <div class="col-xs-7 col-sm-3">
                        <button title="$299" alt="$299" type="button" class="click_class" data-val="18">$299</button>
                      </div>
                      <div class="col-xs-5 col-sm-2">
                        <label class="label_check2" for="package_59" data-price='299'>
                          <input name="package_select1[]" id="package_59" value="59" type="checkbox" class="click_class" data-type="0" <?php echo $selected;?>>
                        </label>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="details" id="innerdiv-59" style="display:none">
                      <p><span>PSD to PrestaShop Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                      <h6>4 - 6 day turnaround time*</h6>
                      <p><span>*Estimate varies based on the complexity of the project <br>
                        The cost for per additional (Inner) page for PSD to PrestaShop package is +$79.</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="order_form" id="additional_opt">
            <h3><span>3</span> Additional Options</h3>
            <div id="multiAccordion" class="multi_choose">
              <h3> <a href="#" title="HTML Layout Options">HTML Layout Options</a></h3>
              <div class="panel-body options_body">
                <div class="options_table">
                  <h3>Webpage Width <a href="#" onMouseOver="tooltip.show('This is how wide your webpage will appear depending on browser dimensions. <br>Fixed: Page width is locked at a specific design specification.<br> Fluid: Page width adapts to fit different client browser dimensions.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_width1_select_arr[1][name]" value="Fixed"/>
                    <input type="hidden" name="layout_width1_select_arr[1][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_width1_select']=='1'?"radio_on":"")?>" for="layout_width_1_1" data-price-radio="0">
                          <input name="layout_width1_select" id="layout_width_1_1" value="1" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_width1_select']=='1'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_width1_select_arr[2][name]" value="Liquid"/>
                    <input type="hidden" name="layout_width1_select_arr[2][price]" value="29"/>
                    <div class="col-xs-7 col-sm-9">Fluid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_width1_select']=='2'?"radio_on":"")?>" for="layout_width_1_2" data-price-radio="29">
                          <input name="layout_width1_select" id="layout_width_1_2" value="2" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_width1_select']=='2'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <h3>Horizontal Alignment <a href="#" onMouseOver="tooltip.show(' Choose the horizontal arrangement of your design that works best for you.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Layout Horizontal Alignment" title="Layout Horizontal Alignment" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_horizontal_select_arr[1][name]" value="Left"/>
                    <input type="hidden" name="layout_horizontal_select_arr[1][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Left</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='1'?"radio_on":"")?>" for="layout_horizontal_1" data-price-radio="0">
                          <input name="layout_horizontal_select" id="layout_horizontal_1" value="1" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='1'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_horizontal_select_arr[2][name]" value="Center"/>
                    <input type="hidden" name="layout_horizontal_select_arr[2][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Center</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='2'?"radio_on":"")?>" for="layout_horizontal_2" data-price-radio="0">
                          <input name="layout_horizontal_select" id="layout_horizontal_2" value="2" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='2'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_horizontal_select_arr[3][name]" value="Right"/>
                    <input type="hidden" name="layout_horizontal_select_arr[3][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Right</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='3'?"radio_on":"")?>" for="layout_horizontal_3" data-price-radio="0">
                          <input name="layout_horizontal_select" id="layout_horizontal_3" value="3" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_horizontal_select']=='3'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <div class="inner_options_border">
                    <input type="hidden" name="header_footer_arr[1][name]" value="Header/Footer width Stretch"/>
                    <input type="hidden" name="header_footer_arr[1][price]" value="9"/>
                    <div class="row">
                      <div class="col-xs-7 col-sm-9">
                        <h3 class="no_bord">Adaptable Header/Footer <a href="#" onMouseOver="tooltip.show(' Check the box if you want your header footer to resize automatically depending on your clients browser dimensions.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Header/Footer width Stretch" title="Header/Footer width Stretch" width="20" height="17"/></a></h3>
                      </div>
                      <div class="col-xs-3 col-sm-2">$9</div>
                      <div class="col-xs-2 col-sm-1">
                        <div class="row">
                          <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['header_footer']=='1'?"radio_on":"")?>" for="layout_header_footer"  data-price-radio="9">
                            <input name="header_footer" id="layout_header_footer" value="1" type="radio" <?php echo ($_SESSION['checkout_sess']['header_footer']=='1'?"checked":"")?>>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <h3>Vertical Alignment <a href="#" onMouseOver="tooltip.show(' Choose the vertical arrangement of your design that works best for you.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Vertical Alignment" title="Vertical Alignment" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <input type="hidden" name="vertical_alignment_select_arr[4][name]" value="Top"/>
                    <input type="hidden" name="vertical_alignment_select_arr[4][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Top</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='4'?"radio_on":"")?>" for="vertical_alignment_1" data-price-radio="0">
                          <input name="vertical_alignment_select" id="vertical_alignment_1" value="4" type="radio" <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='4'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="vertical_alignment_select_arr[2][name]" value="Middle"/>
                    <input type="hidden" name="vertical_alignment_select_arr[2][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Middle</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='2'?"radio_on":"")?>" for="vertical_alignment_2" data-price-radio="0">
                          <input name="vertical_alignment_select" id="vertical_alignment_2" value="2" type="radio" <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='2'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="vertical_alignment_select_arr[3][name]" value="Bottom"/>
                    <input type="hidden" name="vertical_alignment_select_arr[3][price]" value="0"/>
                    <div class="col-xs-7 col-sm-9">Bottom</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='3'?"radio_on":"")?>" for="vertical_alignment_3" data-price-radio="0">
                          <input name="vertical_alignment_select" id="vertical_alignment_3" value="3" type="radio" <?php echo ($_SESSION['checkout_sess']['vertical_alignment_select']=='3'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <div class="inner_options_border">
                    <div class="row">
                      <input type="hidden" name="sticky_footer_arr[4][name]" value="Sticky Footer"/>
                      <input type="hidden" name="sticky_footer_arr[4][price]" value="9"/>
                      <div class="col-xs-7 col-sm-9">
                        <h3 class="no_bord">Sticky Footer <a href="#" onMouseOver="tooltip.show('Check the box if you want your footer to be stuck or fixed to the bottom of the page.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Sticky Footer" title="Sticky Footer" width="20" height="17"/></a></h3>
                      </div>
                      <div class="col-xs-3 col-sm-2">$9</div>
                      <div class="col-xs-2 col-sm-1">
                        <div class="row">
                          <label class="label_radio1  <?php echo ($_SESSION['checkout_sess']['sticky_footer']=='4'?"radio_on":"")?>" for="vertical_alignment_4" data-price-radio="9">
                            <input name="sticky_footer" id="vertical_alignment_4" value="4" type="radio" <?php echo ($_SESSION['checkout_sess']['sticky_footer']=='4'?"checked":"")?>>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3> <a href="#" title="Browser Device Comopability Options">Browser Device Comopability Options</a></h3>
              <div class="panel-body options_body <?php echo ($_SESSION['checkout_sess']['layout_width2_select']==1 || $_SESSION['checkout_sess']['layout_width2_select']==2?'penmydiv"':'')?>">
                <div class="options_table">
                  <input type="hidden" name="layout_width2_select_arr[1][name]" value="Fixed"/>
                  <input type="hidden" name="layout_width2_select_arr[1][price]" value="0"/>
                  <!--<h3>Layout Width <a href="#"><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>-->
                  <h3>Webpage Width <a href="#" onMouseOver="tooltip.show('This is how wide your webpage will appear depending on browser dimensions. <br>Fixed: Page width is locked at a specific design specification.<br> Fluid: Page width adapts to fit different client browser dimensions.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_width2_select']=='1'?"radio_on":"")?>" for="layout_width_2_1" data-price-radio="0">
                          <input name="layout_width2_select" id="layout_width_2_1" value="1" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_width2_select']=='1'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_width2_select_arr[2][name]" value="Liquid"/>
                    <input type="hidden" name="layout_width2_select_arr[2][price]" value="29"/>
                    <div class="col-xs-7 col-sm-9">Liquid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_width2_select']=='2'?"checked":"")?>" for="layout_width_2_2" data-price-radio="29">
                          <input name="layout_width2_select" id="layout_width_2_2" value="2" type="radio" <?php echo ($_SESSION['checkout_sess']['layout_width2_select']=='2'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3> <a href="#" title="Browser Device Comopability Options">HTML/ XHTML Advanced Options</a></h3>
              <div class="panel-body options_body <?php echo ($_SESSION['checkout_sess']['layout_width3_select']==1 || $_SESSION['checkout_sess']['layout_width3_select']==2?'penmydiv"':'')?>">
                <div class="options_table">
                  <input type="hidden" name="layout_width3_select_arr[1][name]" value="Fixed"/>
                  <input type="hidden" name="layout_width3_select_arr[1][price]" value="0"/>
                  <!--<h3>Layout Width <a href="#"><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>-->
                  <h3>Webpage Width <a href="#" onMouseOver="tooltip.show('This is how wide your webpage will appear depending on browser dimensions. <br>Fixed: Page width is locked at a specific design specification.<br> Fluid: Page width adapts to fit different client browser dimensions.');" onMouseOut="tooltip.hide();" ><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1 <?php echo ($_SESSION['checkout_sess']['layout_width3_select']=='1'?"radio_on":"")?>" for="layout_width_3_1" data-price-radio="0">
                          <input name="layout_width3_select" id="layout_width_3_1" value="1" type="radio"  <?php echo ($_SESSION['checkout_sess']['layout_width3_select']=='1'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <input type="hidden" name="layout_width3_select_arr[2][name]" value="Liquid"/>
                    <input type="hidden" name="layout_width3_select_arr[2][price]" value="29"/>
                    <div class="col-xs-7 col-sm-9">Liquid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1  <?php echo ($_SESSION['checkout_sess']['layout_width3_select']=='2'?"radio_on":"")?>" for="layout_width_3_2" data-price-radio="29">
                          <input name="layout_width3_select" id="layout_width_3_2" value="2" type="radio"  <?php echo ($_SESSION['checkout_sess']['layout_width3_select']=='2'?"checked":"")?>>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="col-md-4 scrollspy">
        <div class="order_summmary has-js" id="order_sum" data-spy="affix">
          <div class="inner_top">
            <h3><img src="images/order_summary.png" alt="Order Summary" title="Order Summary" width="33" height="37"/><br>
              Order Summary</h3>
            <div class="inner_section">
              <div class="left_logos pull-left"><img src="images/selected_icon.png" alt="Selected package" title="Selected package" width="26" height="24"/></div>
              <div class="right_details"><span>Selected package:</span>
                <div class="row">
                  <div class="col-xs-8" id="selected-package">No package selected!</div>
                  <div class="col-xs-4 right_txt" id="selected-package-value">$0</div>
                </div>
              </div>
            </div>
            <div class="inner_section">
              <div class="left_logos pull-left"><img src="images/pages_icon.png" alt="No. of pages" title="No. of pages" width="29" height="24"/></div>
              <div class="right_details"><span>No. of pages:</span>
                <div class="row">
                  <div class="col-xs-8">total
                    <select id="setinner" name="setinner">
                      <?php
				   for($ip=0;$ip<=11;$ip++)
				   {
				    ?>
                      <option value="<?php echo $ip;?>" <?php echo ($_SESSION['checkout_sess']['setinner']==$ip?"selected":"")?>><?php echo $ip;?></option>
                      <?php
				   }
				  ?>
                    </select>
                  </div>
                  <div class="col-xs-4 right_txt">$0</div>
                </div>
              </div>
            </div>
            <div class="inner_section add_options">
              <div class="left_logos pull-left"><img src="images/add_options.png" alt="Additional options" title="Additional options" width="20" height="20"/></div>
              <div class="right_details"><span>Additional options:</span>
                <div class="row">
                  <div id="selected_additem" class="col-xs-8">1</div>
                  <div id="selected_additem_radio" class="col-xs-4 right_txt">$0</div>
                </div>
              </div>
            </div>
            <input type="hidden" id="additionr_value" value="" >
            <input type="hidden" id="checkr_value" value="" >
            <div class="inner_section">
              <div class="left_logos pull-left"><img src="images/total_icon.png" alt="Total" title="Total" width="22" height="26" class="total"/></div>
              <div class="right_details total_txt">
                <div class="row">
                  <div class="col-xs-7">Total:</div>
                  <div id="item_total" class="col-xs-5 right_txt">$0</div>
                </div>
              </div>
            </div>
            <div class="inner_section terms_sec">
              <label class="label_check1" for="terms_condition">
                <input name="terms_condition" id="terms_condition" value="terms" type="checkbox">
                I accept the Terms and Conditions. </label>
              <label class="label_check1" for="please_show">
                <input name="please_show" id="please_show" value="showcase" type="checkbox">
                Please showcase my project. </label>
            </div>
          </div>
          <div class="review_order"><a href="javascript:void(0)" onClick="return submitmyfrm('submittheaccount')" title="Review + Place Order"><img src="images/arrow_left.png" alt="Review + Place Order" title="Review + Place Order" width="24" height="23"/>Review + Place Order<img src="images/arrow_left.png" alt="Review + Place Order" title="Review + Place Order" width="24" height="23"/></a></div>
        </div>
      </div>
    </div>
  </section>
</form>
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
$('.dropdown-toggle').dropdownHover('options');

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
	
function setupLabel() {	
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
		 var sumnew= 0;
 var testnew = 0;
			 $( ".radio_on" ).each( function() {
			testnew	= $(this).attr("data-price-radio"); 
			sumnew  = +sumnew + +testnew;
			// var total = +a + +b;
		// sum += parseInt($(this).attr("value"));
		 
	});
		 $("#selected_additem_radio").html("$"+sumnew);
			$( "#additionr_value" ).value = sumnew;
			document.getElementById("additionr_value").value = sumnew ;
			var numb1 = document.getElementById("checkr_value").value ;
			var numb2 = document.getElementById("additionr_value").value ;
			numb3  = +numb1 + +numb2;
			$("#item_total").html("$"+numb3);
			$("#total_price").val(numb3);
			 var  addition_count = $('.radio_on').length;	   
			// alert(addition_count);
			$("#selected_additem").html(addition_count);
			
			$("#add_item_count").val(addition_count);
			$("#add_item_price").val(sumnew);
	};
};
	
$(document).ready(function(){
	$('.label_check1, .label_check2, .label_radio , .label_radio1').click(function(){
		setupLabel();
	});
	setupLabel(); 
	
	$( ".click_class" ).each(function( index ) {
		var id			=	$( this ).val();			
		var label_name	=	'package_'+id;	
		var inner_div	= 	'#innerdiv-'+id;
			if (this.checked)
			{
				$("label[for="+label_name+"]").removeClass('check_on2');
				updateCart(id,this);
				$(inner_div).slideDown();
			}
		
	});
	var pack_type	=	$('#pack_type').val();
	if(pack_type == 1)
	{
		$('#select_pkg a[href="#responsive_tab"]').tab('show');
	} else {
		$('#select_pkg a[href="#nonresponsive_tab"]').tab('show');
	}
	
	
});

function resetCart(type)
{
	$( ".click_class" ).each(function( index ) {		
		if (this.checked && $(this).attr('data-type') == type) {
			$( this ).attr('checked',false);	
			$( this ).trigger( "click" );				
		}
	});
}
	
function updateCart(id,that) {
	var label_name	=	'package_'+id;	
	var inner_div	= 	'#innerdiv-'+id;	
	var sum= 0;
	var test = 0;	
	var pack_type		=	$(that).attr('data-type');
	var selected_pack_type	=	$('#pack_type').val();	

	if (pack_type != selected_pack_type) {
		resetCart(selected_pack_type);			
		$('#pack_type').val(pack_type);		
	}

	 $("label[for="+label_name+"]").toggleClass('check_on2');
	 var package_count = $('.check_on2').length;	   
	if( $("label[for="+label_name+"]").hasClass('check_on2')){
		 $("#"+label_name).attr('checked', true);
	 }else{
		$("#"+label_name).attr('checked', false);
		console.log(label_name);
	 }

	 $( ".check_on2" ).each( function() {
		
		test	= $(this).attr("data-price"); 
		sum  = +sum + +test;
	});	

	$("#selected-package").html(package_count);
	$("#checkr_value").val(sum);	
	var numb1 = $("#checkr_value").val();	
	var numb2 = $("#additionr_value").val();	
	numb3  = +numb1 + +numb2;
	$("#item_total").html("$"+numb3);
	$("#total_price").val(numb3);
	$("#selected-package-value").html("$"+sum);
	$("#pack_select_count").val(package_count);
	$("#pack_select_price").val(sum);
	$(inner_div).slideToggle();
}	
	
$( document ).on( "click", ".click_class", function() {
	var id			=	$( this ).val();
	if (this.checked) {
		updateCart(id,this);
	}
});
		
$('input[type=radio][name=package_select]').change(function() {
	var select_radio  = $(this).val();
	$('.details').slideUp();
	$('#innerdiv-'+select_radio).slideDown();
});	

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


$( "#uploadedfile" ).change(function() {	
	var atached_file	=	$('#atached_file').val();
	if(atached_file != '') {
		alert('File already uploaded');
		return;
	}
	var uploadedfile= $("#uploadedfile").prop("files")[0];
	var formData = new FormData();
	formData.append("uploadedfile", uploadedfile);
	$.ajax({
	  type: "POST",
	   url: "order_upload_files.php",
	   async: false,
	   contentType: false,
	   processData: false,
	   cache: false,
	   data: formData,
	    dataType: "json"
	}).done(function( data ) {
		if (data.status) {
			$('#atached_file').val(data.atached_file);
			alert(data.msg);
		} else {
			alert('Uncaught Error!');
		}
	});
});

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
    $(".myitem").mouseover(function(){
       var menuItem = $(this).attr('id');
       var selectorDiv;
       
      if(menuItem =='client_details')
       {
           selectorDiv = $("#client_details_div");
		  $(".myitem").removeClass('active');
		  $(this).addClass('active');
       }else if(menuItem =='select_package')
       {
           selectorDiv = $("#select_pkg");
		   $(".myitem").removeClass('active');
		  $(this).addClass('active');
       }else if(menuItem =='add_opt')
       {
           selectorDiv = $("#additional_opt");
		   $(".myitem").removeClass('active');
		  $(this).addClass('active');
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

function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}

function submitmyfrm(condtype)
{
 if(condtype=='validateaccount')
 {
   if (trim(document.contactform.client_name.value) =="")
	{
		alert("Please enter your name.");
		document.contactform.client_name.focus();
		return false;
	}
	
	if(document.contactform.client_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.contactform.client_name.value.length; i++)
		{
			if (iChars.indexOf(document.contactform.client_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in name.");
				document.contactform.client_name.focus();
				return false;
			}
		}
	}


if(trim(document.contactform.phone.value) == "" )
	{
		alert("Please enter your phone number.");
		document.contactform.phone.focus();

		return false;
	}

    if(trim(document.contactform.phone.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.contactform.phone.value.length; i++)
		{
			if (iChars.indexOf(document.contactform.phone.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in phone number. .");
				document.contactform.phone.focus();
				return false;
			}
		}
}


if(trim(document.contactform.email.value) =="")
	{
		alert("Please enter email address.");
		document.contactform.email.focus();
		return false;
	}
	if(trim(document.contactform.email.value) != "" )
	{
		if(!isAValidEmail(document.contactform.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.contactform.email.focus();
			return(false);
		}
	}


if(trim(document.contactform.confirm_email.value) =="")
	{
		alert("Please enter your confirm email address.");
		document.contactform.confirm_email.focus();
		return false;
	}
	if(trim(document.contactform.confirm_email.value) != "" )
	{
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = document.contactform.confirm_email.value;
		
		if(reg.test(address) == false)
		{
			alert("Please enter your valid e-mail Address");
			document.contactform.confirm_email.focus();
			return false;
		}
	}
 
   if(trim(document.contactform.email.value)!= trim(document.contactform.confirm_email.value))
   {
    
    alert("Email and confirm email should be same.");
    document.contactform.cnfuserpassword.focus();
    return false;
   }
document.contactform.action="order.php";   
document.contactform.submit();
 }
 else if(condtype=='submittheaccount')
 {
  if (trim(document.contactform.client_name.value) =="")
	{
		alert("Please enter your name.");
		document.contactform.client_name.focus();
		return false;
	}
	
	if(document.contactform.client_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.contactform.client_name.value.length; i++)
		{
			if (iChars.indexOf(document.contactform.client_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in name.");
				document.contactform.client_name.focus();
				return false;
			}
		}
	}


if(trim(document.contactform.phone.value) == "" )
	{
		alert("Please enter your phone number.");
		document.contactform.phone.focus();

		return false;
	}

             	if(trim(document.contactform.phone.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.contactform.phone.value.length; i++)
		{
			if (iChars.indexOf(document.contactform.phone.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in phone number. .");
				document.contactform.phone.focus();
				return false;
			}
		}
}


if(trim(document.contactform.email.value) =="")
	{
		alert("Please enter email address.");
		document.contactform.email.focus();
		return false;
	}
	if(trim(document.contactform.email.value) != "" )
	{
		if(!isAValidEmail(document.contactform.email.value))
		{
			alert("Please enter valid e-mail address.")
			document.contactform.email.focus();
			return(false);
		}
	}


if(trim(document.contactform.confirm_email.value) =="")
	{
		alert("Please enter your confirm email address.");
		document.contactform.confirm_email.focus();
		return false;
	}
	if(trim(document.contactform.confirm_email.value) != "" )
	{
		if(!isAValidEmail(document.contactform.confirm_email.value))
		{
			alert("Please enter valid e-mail address.")
			document.contactform.confirm_email.focus();
			return(false);
		}
	}
 
   if(trim(document.contactform.email.value)!= trim(document.contactform.confirm_email.value))
   {
    
    alert("Email and confirm email should be same.");
    document.contactform.cnfuserpassword.focus();
    return false;
   }
   if(!($('#terms_condition:checked').length > 0))
	{
		alert('Please accept the Term and Conditions');
		return false;
	}
	document.contactform.action="order_summary.php";
	document.contactform.submit();
 }
}
function showdataforedit()
{
  //==============package selection
  <?php
  if($_SESSION['checkout_sess']['package_select1'])
  {
    foreach($_SESSION['checkout_sess']['package_select1'] as $pind=>$pval)
	{
	$val_arr=explode("_",$pval);
	echo "displayselectedpackage('".$pval."','".$val_arr[1]."');\n";
	}
  }
  ?>
  
}
function displayselectedpackage(packagetoshow,numcnt)
{
 $("label[for="+packagetoshow+"]").addClass('check_on2');
  $("#"+packagetoshow).attr('checked', true);
 $("#innerdiv-"+numcnt).css('display','block');
}
showdataforedit();
</script>
<script>
var tooltip=function(){var id='tt';var top=3;var left=3;var maxw=400;var speed=10;var timer=20;var endalpha=95;var alpha=0;var tt,t,c,b,h;var ie=document.all?true:false;return{show:function(v,w){if(tt==null){tt=document.createElement('div');tt.setAttribute('id',id);t=document.createElement('div');t.setAttribute('id',id+'top');c=document.createElement('div');c.setAttribute('id',id+'cont');b=document.createElement('div');b.setAttribute('id',id+'bot');tt.appendChild(t);tt.appendChild(c);tt.appendChild(b);document.body.appendChild(tt);tt.style.opacity=0;tt.style.zIndex="100";tt.style.filter='alpha(opacity=0)';document.onmousemove=this.pos;}
tt.style.display='block';c.innerHTML=v;tt.style.width=w?w+'px':'auto';if(!w&&ie){t.style.display='none';b.style.display='none';tt.style.width=tt.offsetWidth;t.style.display='block';b.style.display='block';}
if(tt.offsetWidth>maxw){tt.style.width=maxw+'px'}
h=parseInt(tt.offsetHeight)+top;clearInterval(tt.timer);tt.timer=setInterval(function(){tooltip.fade(1)},timer);},pos:function(e){var u=ie?event.clientY+document.documentElement.scrollTop:e.pageY;var l=ie?event.clientX+document.documentElement.scrollLeft:e.pageX;tt.style.top=(u-h)+'px';tt.style.left=(l+left)+'px';},fade:function(d){var a=alpha;if((a!=endalpha&&d==1)||(a!=0&&d==-1)){var i=speed;if(endalpha-a<speed&&d==1){i=endalpha-a;}else if(alpha<speed&&d==-1){i=a;}
alpha=a+(i*d);tt.style.opacity=alpha*.01;tt.style.filter='alpha(opacity='+alpha+')';}else{clearInterval(tt.timer);if(d==-1){tt.style.display='none'}}},hide:function(){clearInterval(tt.timer);tt.timer=setInterval(function(){tooltip.fade(-1)},timer);}};}();
</script>
</body>

</html>