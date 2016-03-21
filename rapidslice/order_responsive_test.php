<?php
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Rapid Slice</title>
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Javascript -->
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script>
<script type='text/javascript' src="js/css3-mediaqueries.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/fonts.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.9.custom.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- google analytics starts -->
<?php include_once "google_analytics.php"; ?>
<!-- google analytics ends -->

</head>
<body class="pos_rel" data-spy="scroll" data-target=".scrollspy">
<header class="pos_rel">
  <div class="container">
    <div class="navbar-header">
      <button aria-controls="navbar" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed lines-button x" type="button"> <span class="lines"></span> </button>
      <div class="logo"><a href="index.php" title="Rapid Slice"><img src="images/logo.png" alt="Rapid Slice" width="146" height="31"/></a></div>
      <address class="contacts top_head">
      <a href="mailto:support@rapidslice.ca" class="fa fa-envelope" title="Contact"></a> <a id="hf-chat-mob"  style="cursor:pointer;" class="fa fa-comment" title="Live chat"></a> <a href="tel:+18553359546"><i class="fa phone fa-phone"></i> <span class="span">+1.855.335.9546</span></a>
      </address>
      <div class="language">
        <ul>
          <li><a href="#" class="active"><span class="caret"></span><img src="images/canada_flag.png" alt="" width="22" height="12"/></a></li>
          <li><a href="#"><span class="caret"></span><img src="images/america_flag.png" alt="" width="22" height="12"/></a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <address class="contacts">
      <a href="mailto:support@rapidslice.ca" class="fa fa-envelope" title="Contact"></a> <a id="hf-chat-top" style="cursor:pointer;"  class="fa fa-comment" title="Live chat"></a> <a href="tel:+18553359546"><i class="fa phone fa-phone"></i> <span class="span">+1.855.335.9546</span></a>
      </address>
      <ul class="nav navbar-nav">
        <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" data-hover="dropdown" data-delay="10" data-close-others="false" class="dropdown-toggle" href="#" title="WORK">WORK <span class="fa fa-caret-down arrow_down"></span></a>
          <ul class="dropdown-menu">
            <div class="sub_menu_outer work_outer">
              <div class="container">
                <div class="row">
                  <ul>
                    <li><a href="portfolio.php" title="Portfolio">
                      <figure><img src="images/portfolio_icon.png" alt="Portfolio" width="24" height="22"/></figure>
                      Portfolio</a></li>
                  </ul>
                  <!--<ul>
                    <li><a href="portfolio_pinsights.php" title="Pinsights Plugin">
                      <figure><img src="images/pinsights_icon.png" alt="Pinsights Plugin" width="17" height="22"/></figure>
                      Pinsights Plugin</a></li>
                  </ul>-->
                  <ul>
                    <li><a href="#" title="Js Custom Forms">
                      <figure><img src="images/custom_icon.png" alt="Js Custom Forms" width="18" height="15"/></figure>
                      Js Custom Forms</a></li>
                  </ul>
                  <ul>
                    <li><a href="about_contact.php" title="Contact Us">
                      <figure><img src="images/contact_icon.png" alt="Contact Us" width="24" height="20"/></figure>
                      Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </ul>
        </li>
        <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" data-hover="dropdown" data-delay="10" data-close-others="false" class="dropdown-toggle" href="about.php" title="ABOUT">ABOUT <span class="fa fa-caret-down arrow_down"></span></a>
          <ul class="dropdown-menu">
            <div class="sub_menu_outer about_outer">
              <div class="container">
                <div class="row">
                  <ul>
                    <li><a href="about.php" title="About Us">
                      <figure><img src="images/about_icon.png" alt="About Us" width="8" height="23"/></figure>
                      About Us</a></li>
                  </ul>
                  <ul>
                    <li><a href="about_process.php" title="Our Process">
                      <figure><img src="images/process_icon.png" alt="Our Process" width="26" height="22"/></figure>
                      Our Process</a></li>
                  </ul>
                  <ul>
                    <li><a href="about_faq.php" title="Contact Us">
                      <figure><img src="images/faq_icon.png" alt="Contact Us" width="17" height="17"/></figure>
                      FAQ</a></li>
                  </ul>
                  <ul>
                    <li><a href="about_contact.php" title="Contact Us">
                      <figure><img src="images/contact_icon.png" alt="Contact Us" width="24" height="20"/></figure>
                      Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </ul>
        </li>
        <li><a href="blog.php" title="BLOG">BLOG</a></li>
        <li class="dropdown"> <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" data-hover="dropdown" data-delay="10" data-close-others="false" class="dropdown-toggle" href="service_page.php" title="SERVICES">SERVICES <span class="fa fa-caret-down arrow_down"></span></a>
          <ul class="dropdown-menu">
            <div class="sub_menu_outer service_outer">
              <div class="container">
                <div class="row">
                  <ul>
                    <li><a href="service_page.php" title="PSD to HTML">
                      <figure><img src="images/psd_html_icon.png" alt="PSD to HTML" width="23" height="20"/></figure>
                      PSD to HTML</a></li>
                    <li><a href="service_wordpress.php" title="Wordpress">
                      <figure><img src="images/wordpress_icon.png" alt="Wordpress" width="28" height="28"/></figure>
                      Wordpress</a></li>
                    <li><a href="service_bootstrap.php" title="PSD to Bootstrap">
                      <figure><img src="images/psd_bootstrap_icon.png" alt="PSD to  Bootstrap" width="21" height="21"/></figure>
                      PSD to  Bootstrap</a></li>
                  </ul>
                  <ul>
                    <li><a href="service_magento.php" title="Magento">
                      <figure><img src="images/magento_icon.png" alt="Magento" width="19" height="23"/></figure>
                      Magento</a></li>
                    <li><a href="service_joomla.php" title="Joomla">
                      <figure><img src="images/joomla_icon.png" alt="Joomla" width="22" height="21"/></figure>
                      Joomla</a></li>
                    <li><a href="service_email.php" title="PSD to Emails">
                      <figure><img src="images/envelope_icon.png" alt="PSD to Emails" width="21" height="14"/></figure>
                      PSD to Emails</a></li>
                  </ul>
                  <ul>
                    <li><a href="dedicated_team.php" title="Dedicated Team">
                      <figure><img src="images/dedicated_team_icon.png" alt="Dedicated Team" width="20" height="26"/></figure>
                      Dedicated Team</a></li>
                    <li><a>&nbsp;</a></li>
                    <li><a>&nbsp;</a></li>
                  </ul>
                  <ul>
                    <li><span>We serve</span><a href="service_agencies.php" title="Agencies">
                      <figure><img src="images/agencies_icon.png" alt="Agencies" width="19" height="23"/></figure>
                      Agencies</a></li>
                    <li><span>&nbsp;</span><a href="service_business.php" title="Businesses">
                      <figure><img src="images/businesses_icon.png" alt="Businesses" width="21" height="19"/></figure>
                      Businesses</a></li>
                    <li><span>&nbsp;</span><a href="service_freelancers.php" title="Freelancers">
                      <figure><img src="images/freelancer_icon.png" alt="Freelancers" width="18" height="25"/></figure>
                      Freelancers</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </ul>
        </li>
        <li><a href="order.php" title="ORDER NOW" class="order_now">ORDER NOW</a></li>
        <li><a href="client_area.php" title="CLIENT AREA">CLIENT AREA</a></li>
      </ul>
      <div class="language right_lang">
        <ul>
          <li><a href="#" class="active"><span class="caret"></span><img src="images/canada_flag.png" alt="" width="22" height="12"/></a></li>
          <li><a href="#"><span class="caret"></span><img src="images/america_flag.png" alt="" width="22" height="12"/></a></li>
        </ul>
      </div>
    </div>
    <!--/.nav-collapse --> 
  </div>
</header>

<!-- Starts white Bar -->
<div class="top_white_bar">
  <div class="container pos_rel">
    <div class="row">
      <h2 class="title_top1">START YOUR ORDER WITH  RAPIDSLICE</h2>
    </div>
  </div>
</div>
<!-- Ends white Bar --> 
<!-- Starts banner top section -->
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
      <li class="myitem" id="client_details"><span>1</span> <span class="list_txt">Project Details</span></li>
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
  <section class="info_sec blog_section order_sec has-js">
    <div class="container">
      <div class="col-md-8">
        <div class="row">
          <div class="order_form" id="client_details_div">
            <h3><span>1</span> Project Details</h3>
            <div class="col-sm-6 form-group form_field">
              <label for="client_name">Name:</label>
              <input type="text" class="form-control" id="client_name">
            </div>
            <div class="col-sm-6 form-group form_field">
              <label for="client_email">Email:</label>
              <input type="text" class="form-control" id="client_email">
            </div>
            <div class="col-sm-6 form-group form_field">
              <label for="client_project">Name your project:</label>
              <input type="text" class="form-control" id="client_project">
            </div>
            <div class="col-sm-6 form-group form_field">
              <label for="client_name">Select the no. of pages</label>
              <div class="pages"><span>Home Page</span><span class="plus">+</span>
                <select id="topselect" onChange="setval()">
                  <option value="0">1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                </select>
                <span>Inner Pages</span></div>
            </div>
            <div class="col-sm-12 form-group form_field">
              <div class="upload_files"><a href="#">Upload Files <img src="images/upload_icon1.png" alt="" width="17" height="21"/></a></div>
              <label for="client_comments">Add Comments</label>
              <textarea class="form-control" id="client_comments"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="order_form" id="select_pkg">
            <h3><span>2</span> Select Package</h3>
            <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <img src="images/mobile_icon.png" alt="" width="15" height="24"/> Responsive</a></li>
    <li><a data-toggle="tab" href="#menu1"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> Non-Responsive</a></li>
  </ul>
            <div class="col-xs-6">
              <button class="btn btn-default package active" type="button" title="Responsive"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <img src="images/mobile_icon.png" alt="" width="15" height="24"/> <span>Responsive</span></button>
            </div>
            <div class="col-xs-6">
              <button onClick="location.href = 'order_non_responsive.php';" class="btn btn-default package" type="button" title="Non-Responsive"><img src="images/desktop_icon.png" alt="" width="29" height="23"/> <span>Non-Responsive</span></button>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/html_icon.png" alt="HTML" title="HTML" width="44" height="27"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive HTML</span> 3 - 4 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$149" alt="$149" type="button" class="click_class" data-val="1">$149</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_1" data-price='149'>
                      <input name="package_select1[]" id="package_1" value="1" type="checkbox" checked="" class="click_class" data-val="1">
                    </label>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="details" id="innerdiv-1" style="display:none;">
                  <p><span>The PSD to Responsive HTML Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                  <h6>3 - 4 day turnaround time*</h6>
                  <p><span>*Estimate varies based on the complexity of the project <br>
                    The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
                </div>
              </div>
            </div>
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/wordpress_icon.png" alt="Wordpress" title="Wordpress" width="37" height="37"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Wordpress</span> 4 - 6 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$199" alt="$199" type="button" class="click_class" data-val="2">$199</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_2" data-price='199'>
                      <input name="package_select1[]" id="package_2" value="2" type="checkbox" class="click_class" data-val="2">
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
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/joomla_icon.png" alt="Joomla" title="Joomla" width="32" height="31"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Joomla</span> 4 - 6 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$249" alt="$249" type="button" class="click_class" data-val="3">$249</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_3" data-price='249'>
                      <input name="package_select1[]" id="package_3" value="3" type="checkbox" class="click_class" data-val="3">
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
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/magento_icon.png" alt="Magento" title="Magento" width="32" height="38"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Magento</span> 6 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$349" alt="$349" type="button" class="click_class" data-val="4">$349</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_4" data-price='349'>
                      <input name="package_select1[]" id="package_4" value="4" type="checkbox" class="click_class" data-val="4">
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
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/envelope_icon.png" alt="Email" title="Email" width="34" height="24"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Email</span> 2 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$99" alt="$99" type="button" class="click_class" data-val="5">$99</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_5" data-price='99'>
                      <input name="package_select1[]" id="package_5" value="5" type="checkbox" class="click_class" data-val="5">
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
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/opencart_icon.png" alt="Opencart" title="Opencart" width="41" height="29"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive Opencart</span> 6 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$399" alt="$399" type="button" class="click_class" data-val="6">$399</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_6" data-price='399'>
                      <input name="package_select1[]" id="package_6" value="6" type="checkbox" class="click_class" data-val="6">
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
            <?php /*?>
          <div class="col-sm-12 package_sec">
            <div class="left_sec"><img src="images/raster_vector.png" alt="Vector" title="Vector" width="49" height="49"/></div>
            <div class="right_sec">
              <div class="package_box">
                <div class="col-xs-12 col-sm-7"><span>Raster to Vector Conversion</span> 1 day</div>
                <div class="col-xs-7 col-sm-3">
                  <button title="$49" alt="$49" type="button" class="click_class" data-val="7">$49</button>
                </div>
                <div class="col-xs-5 col-sm-2">
                  <label class="label_check2" for="package_7" data-price='49'>
                    <input name="package_select1[]" id="package_7" value="7" type="checkbox" class="click_class" data-val="7">
                  </label>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="details" id="innerdiv-7" style="display:none">
                <p><span>Raster to Vector Conversion Package</span> includes the conversion of a .PSD file into a high quality, responsive website. This option allows your website to respond to user‘s screen sizes and resolutions, delivering pixel-perfect displays on every device - iPhone, iPad, Windows Phone, Android, and Desktop. In addition, your website is guaranteed to be compatible with the most popular internet browsers - Internet Explorer, Chrome, Firefox, Safari.</p>
                <h6>1 day turnaround time*</h6>
                <p><span>*Estimate varies based on the complexity of the project <br>
                  The cost for per additional (Inner) page for PSD to Responsive package is +$79.</span></p>
              </div>
            </div>
          </div>
		  <?php */?>
            <div class="col-sm-12 package_sec">
              <div class="left_sec"><img src="images/prestashop_icon.png" alt="PrestaShop" title="PrestaShop" width="27" height="39"/></div>
              <div class="right_sec">
                <div class="package_box">
                  <div class="col-xs-12 col-sm-7"><span>PSD to Responsive PrestaShop</span> 6 days</div>
                  <div class="col-xs-7 col-sm-3">
                    <button title="$399" alt="$399" type="button" class="click_class" data-val="8">$399</button>
                  </div>
                  <div class="col-xs-5 col-sm-2">
                    <label class="label_check2" for="package_8" data-price='399'>
                      <input name="package_select1[]" id="package_8" value="8" type="checkbox" class="click_class" data-val="8">
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
            <div class="clearfix"></div>
          </div>
          <div class="order_form" id="additional_opt">
            <h3><span>3</span> Additional Options</h3>
            <div id="multiAccordion" class="multi_choose">
              <h3> <a href="#" title="HTML Layout Options">HTML Layout Options</a></h3>
              <div class="panel-body options_body">
                <div class="options_table">
                  <h3>Layout Width <a href="#"><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_1_1" data-price-radio="0">
                          <INPUT name="layout_width1_select" id="layout_width_1_1" value="1" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Liquid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_1_2" data-price-radio="29">
                          <INPUT name="layout_width1_select" id="layout_width_1_2" value="2" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <h3>Layout Horizontal Alignment <a href="#"><img src="images/questions_icon.png" alt="Layout Horizontal Alignment" title="Layout Horizontal Alignment" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Left</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_horizontal_1" data-price-radio="0">
                          <INPUT name="layout_horizontal_select" id="layout_horizontal_1" value="1" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Center</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_horizontal_2" data-price-radio="0">
                          <INPUT name="layout_horizontal_select" id="layout_horizontal_2" value="2" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Right</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_horizontal_3" data-price-radio="0">
                          <INPUT name="layout_horizontal_select" id="layout_horizontal_3" value="3" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <div class="inner_options_border">
                    <div class="row">
                      <div class="col-xs-7 col-sm-9">
                        <h3 class="no_bord">Header/Footer width Stretch <a href="#"><img src="images/questions_icon.png" alt="Header/Footer width Stretch" title="Header/Footer width Stretch" width="20" height="17"/></a></h3>
                      </div>
                      <div class="col-xs-3 col-sm-2">$9</div>
                      <div class="col-xs-2 col-sm-1">
                        <div class="row">
                          <label class="label_radio1" for="layout_header_footer" data-price-radio="9">
                            <INPUT name="header_footer" id="layout_header_footer" value="1" type="radio">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <h3>Vertical Alignment <a href="#"><img src="images/questions_icon.png" alt="Vertical Alignment" title="Vertical Alignment" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Top</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="vertical_alignment_1" data-price-radio="0">
                          <INPUT name="vertical_alignment_select" id="vertical_alignment_1" value="4" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Middle</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="vertical_alignment_2" data-price-radio="0">
                          <INPUT name="vertical_alignment_select" id="vertical_alignment_2" value="2" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Bottom</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="vertical_alignment_3" data-price-radio="0">
                          <INPUT name="vertical_alignment_select" id="vertical_alignment_3" value="3" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="options_table">
                  <div class="inner_options_border">
                    <div class="row">
                      <div class="col-xs-7 col-sm-9">
                        <h3 class="no_bord">Sticky Footer <a href="#"><img src="images/questions_icon.png" alt="Sticky Footer" title="Sticky Footer" width="20" height="17"/></a></h3>
                      </div>
                      <div class="col-xs-3 col-sm-2">$9</div>
                      <div class="col-xs-2 col-sm-1">
                        <div class="row">
                          <label class="label_radio1" for="vertical_alignment_4" data-price-radio="9">
                            <INPUT name="sticky_footer" id="vertical_alignment_4" value="4" type="radio">
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3> <a href="#" title="Browser Device Comopability Options">Browser Device Comopability Options</a></h3>
              <div class="panel-body options_body">
                <div class="options_table">
                  <h3>Layout Width <a href="#"><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_2_1" data-price-radio="0">
                          <INPUT name="layout_width2_select" id="layout_width_2_1" value="1" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Liquid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_2_2" data-price-radio="29">
                          <INPUT name="layout_width2_select" id="layout_width_2_2" value="2" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3> <a href="#" title="Browser Device Comopability Options">HTML/ XHTML Advanced Options</a></h3>
              <div class="panel-body options_body">
                <div class="options_table">
                  <h3>Layout Width <a href="#"><img src="images/questions_icon.png" alt="Layout Width" title="Layout Width" width="20" height="17"/></a></h3>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Fixed</div>
                    <div class="col-xs-3 col-sm-2">$0</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_3_1" data-price-radio="0">
                          <INPUT name="layout_width3_select" id="layout_width_3_1" value="1" type="radio">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row inner_options">
                    <div class="col-xs-7 col-sm-9">Liquid</div>
                    <div class="col-xs-3 col-sm-2">$29</div>
                    <div class="col-xs-2 col-sm-1">
                      <div class="row">
                        <label class="label_radio1" for="layout_width_3_2" data-price-radio="29">
                          <INPUT name="layout_width3_select" id="layout_width_3_2" value="2" type="radio">
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
                  <div id="selected-package" class="col-xs-8">No package selected!</div>
                  <div id="selected-package-value" class="col-xs-4 right_txt">$0</div>
                </div>
              </div>
            </div>
            <div class="inner_section">
              <div class="left_logos pull-left"><img src="images/pages_icon.png" alt="No. of pages" title="No. of pages" width="29" height="24"/></div>
              <div class="right_details"><span>No. of pages:</span>
                <div class="row">
                  <div class="col-xs-8">total
                    <select id="setinner">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
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
                <input name="terms_condition" id="terms_condition" value="terms" type="checkbox" checked="">
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
<!-- Starts Footer -->
<?php include("footer.php"); ?>
<!-- Ends Footer -->
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.9.custom.css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.sticky-sidebar-scroll.min.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script> 
<script type="text/javascript" src="js/jquery.multi-accordion-1.5.3.js"></script> 
<script src="js/bootstrap-hover-dropdown.js"></script> 
<script>
$('.dropdown-toggle').dropdownHover('options');
</script> 
<script>
    var anchor = document.querySelectorAll('button.lines-button');
    
    [].forEach.call(anchor, function(anchor){
      var open = false;
      console.log("visnonTest");
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
function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}
	function submitmyfrm(condtype)
	{
		if(condtype=='submittheaccount')
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


		if(trim(document.contactform.client_email.value) =="")
		{
			alert("Please enter email address.");
			document.contactform.client_email.focus();
			return false;
		}
		if(trim(document.contactform.client_email.value) != "" )
		{
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			var address = document.contactform.client_email.value;
			
			if(reg.test(address) == false)
			{
				alert("Please enter your valid e-mail Address");
				document.contactform.client_email.focus();
				return false;
			}
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
		});
			 $("#selected_additem_radio").html("$"+sumnew);
                         $( "#additionr_value" ).value = sumnew;
                      document.getElementById("additionr_value").value = sumnew ;
                               var numb1 = document.getElementById("checkr_value").value ;
                        var numb2 = document.getElementById("additionr_value").value ;
                       numb3  = +numb1 + +numb2;
                        $("#item_total").html("$"+numb3);
				                     var  addition_count = $('.radio_on').length;	   

							      $("#selected_additem").html(addition_count);
        };
    };
    $(document).ready(function(){
        $('.label_check1, .label_check2, .label_radio , .label_radio1').click(function(){
            setupLabel();
        });
        setupLabel(); 
    });
	
$(document).ready(function(){		
$( document ).on( "click", ".click_class", function() {
	var id			=	$( this ).attr('data-val');	
	var label_name	=	'package_'+id;	
	var inner_div	= 	'#innerdiv-'+id;
	 var sum= 0;
	 var test = 0;
         $("label[for="+label_name+"]").toggleClass('check_on2');
	                     var package_count = $('.check_on2').length;	   
           $( ".check_on2" ).each( function() {
				test	= $(this).attr("data-price"); 
				sum  = +sum + +test;

		});
	
 $("#selected-package").html(package_count);
document.getElementById("checkr_value").value = sum ;
 var numb1 = document.getElementById("checkr_value").value ;
 var numb2 = document.getElementById("additionr_value").value ;
 numb3  = +numb1 + +numb2;
 $("#item_total").html("$"+numb3);
 $("#selected-package-value").html("$"+sum);

	 $(inner_div).slideToggle();
});

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

/*
$('.ui-accordion-header > a').click(function(){
     $(window).scroll();
});
*/
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
</script>
</body>
</html>
