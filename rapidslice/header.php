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
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- google analytics starts -->
<?php include_once "google_analytics.php"; ?>
<!-- google analytics ends -->
<link type="text/css" rel="stylesheet" href="css/jquery-ui-1.8.9.custom.css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.sticky-sidebar-scroll.min.js"></script> 
<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script> 
<script type="text/javascript" src="js/jquery.multi-accordion-1.5.3.js"></script> 
<script src="js/bootstrap-hover-dropdown.js"></script> 
<script language="JavaScript" src="js/userjs.js"></script>
<script language="JavaScript" src="js/common.js"></script>
</head>
<div id="myModal" class="modal fade" tabindex="-1">
<div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
            </div>
        </div>
    </div>


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
                  <!--<ul>
                    <li><a href="#" title="Js Custom Forms">
                      <figure><img src="images/custom_icon.png" alt="Js Custom Forms" width="18" height="15"/></figure>
                      Js Custom Forms</a></li>
                  </ul>-->
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