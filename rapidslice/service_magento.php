<?php
include_once("config.php");
require './PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST) && sizeof($_POST))
{
    $name = trim($_POST['name_faq']);
    $email = trim($_POST['email_faq']);
    $phone = trim($_POST['phone_faq']);
	
	$body = "<table width='611' height='93'  cellpadding='5px' cellspacing='1'  align='center' style='BORDER: #C20000 1px solid;'>
  
  <tr style='background:#000;'><td align='left' colspan='2'><img src='http://templates.newsoftdemo.info/rapidslice/dev/images/logo.png'></td></tr>
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>Magento FAQ</td></tr>
  <tr>
    <td colspan='3' align='left'  bgcolor=#FFFFFF class='dpDayHighlight12'><span style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:normal; color: #000000; font-size:14px'>Hello admin, </span> <br></td>
  </tr>
  <tr>
    <td align='left' colspan='2' style='FONT-WEIGHT: normal; FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Verdana, helvetica, arial, sans-serif'>Here are the details of the user, which may have some queries or desiring to know about the site.  <br>
    
   </td>
  </tr>
  <tr>
    <td width='154'  align='right' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold'>Name :</td>
    <td width='432'  align='left' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$name."</td>
  </tr>
  <tr>
    <td width='154'  align='right' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold'>Email Address :</td>
    <td width='432'  align='left' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$email."</td>
  </tr>
  <tr>
    <td width='154'  align='right' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold' valign='top'>Phone :</td>
    <td width='432'  align='left' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$phone."</td>
  </tr>
     
<tr>
<td colspan='2'>
<tr>
    <td colspan='2' align='left' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;font-weight: bolder;'><br><br>
      <strong>Thanks,</strong><br>
      <span style='FONT-WEIGHT: normal; FONT-SIZE: 13px; COLOR: #000000; FONT-FAMILY: Verdana, helvetica, arial, sans-serif'>".$name."</span></td></tr></table>";
	//echo $body; exit;
	$atached_file	=	'';
	
	$mail = new PHPMailer;
	$mail->From = $email;
	$mail->FromName = $name;
	$mail->addAddress('support@rapidslice.ca');
	$mail->WordWrap = 50; 
	$mail->Subject = "Magento FAQ";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:service_magento.php?sucess_msg=1");
	   exit();	
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

</head>

<body>
<!-- Starts Header -->
<?php include("header2.php"); ?>
<!-- Ends Header --> 
<!-- Starts banner top section -->
<section class="banner_main">
  <div class="banner_Magento">
    <div class="banner_overlay"></div>
    <div class="container">
      <div class="col-sm-7 col-md-6 col-lg-7 content_main">
        <h3>Magento Website Development</h3>
        <p>Magento‘s world-class eCommerce platform, meet RapidSlice‘s world-class team of web developers.  Your businesses growth online is just one awesome result of this match made in heaven.<br>
          <strong>Starting at $195</strong></p>
        <div class="btn_sec">
          <div class="get_btn"><a href="#what_get" title="MORE INFO">MORE INFO</a></div>
          <div class="take_tour"><a href="order.php" title="ORDER NOW">ORDER NOW </a></div>
        </div>
      </div>
      <div class="col-sm-5 col-md-6 col-lg-5 banner_pic"><img src="images/banner_magento_pic.png" alt="Magento" title="Magento" width="447"  class="pic_2" /></div>
    </div>
  </div>
</section>
<!-- Ends banner top section -->
<section id="what_get" class="what_get">
  <div class="container">
    <h3><img src="images/what_getorange.png" alt="What You Get" title="What You Get" class="mr_righ20" width="45" height="50"/><span class="disply">What You Get</span></h3>
    <div class="main_theme">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 br_right">
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/theme_icon.png" alt="THEME DESIGN" title="THEME DESIGN" width="63" height="51"/> </div>
          <div class="theme_right">
            <h2>THEME DESIGN</h2>
            <p>We‘ll design a stunning and customizable theme for your Magento site that you‘ll fall in love with. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/extension_icon.png" alt="EXTENSION INTEGRATION" title="EXTENSION INTEGRATION" width="48" height="62"/> </div>
          <div class="theme_right">
            <h2>EXTENSION INTEGRATION</h2>
            <p>We can really take your Magento site to another level by implementing one, or many of the different extensions available for the Magento platform. </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/performance_icon.png" alt="PERFORMANCE SCALABILITY" title="PERFORMANCE SCALABILITY" width="67" height="49"/> </div>
          <div class="theme_right">
            <h2>PERFORMANCE SCALABILITY</h2>
            <p>We keep your customer‘s carts full. Our developers are experts at optimizing your website so it can easily handle all levels of user traffic. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/maintainence_icon.png" alt="MAINTENANCE AND SUPPORT" title="MAINTENANCE AND SUPPORT" width="63" height="52"/> </div>
          <div class="theme_right">
            <h2>MAINTENANCE AND SUPPORT</h2>
            <p>With ongoing customer service and support, RapidSlice can give you the peace of mind knowing that your online store is live and protected 24/7/365. </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Starts Magento Features -->
<section class="mage_fture">
  <section class="mage_fture_inner">
    <div class="container">
      <h3><img src="images/magento_logoicon.png" alt="Magento Features" title="Magento Features" width="45" height="50" class="mr_righ20">Magento Features</h3>
      <p>Choosing Magento‘s eCommerce platform for your website gives <br>
        you a wide variety of wonderful components to choose from. Take a<br>
        look below to see the list of pages included in our basic package. You <br>
        can select these options for your project on our <a href="order.php" title="order page">order page</a>. </p>
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="pages_avail">
          <h3>PAGES AVAILABLE IN BASIC PACKAGE</h3>
          <ul>
            <li><i class="fa fa-circle"></i>Home page <span>(with menu)</span></li>
            <li><i class="fa fa-circle"></i>Product page <span>(with options and descriptions)</span></li>
            <li><i class="fa fa-circle"></i>Checkout page</li>
            <div class="clearfix"></div>
            <li><i class="fa fa-circle"></i>Static page</li>
            <li><i class="fa fa-circle"></i>MY Cart page</li>
            <li><i class="fa fa-circle"></i>Search page</li>
            <div class="clearfix"></div>
            <li><i class="fa fa-circle"></i>Category Page</li>
            <li><i class="fa fa-circle"></i>Customer Account page<span>(customer feedback function included)</span></li>
            <li class="last"><i class="fa fa-circle"></i>404 page<span>(displayed when page isn‘t found)</span></li>
            <div class="clearfix"></div>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </section>
</section>
<!-- Ends Magento Features --> 
<!-- Starts Magento Development Quotes  -->
<section class="mag_dev">
  <div class="container">
    <h3><img src="images/magento_logoicon.png" alt="Magento Development Quotes" title="Magento Development Quotes" width="42" height="49" class="mr_righ20 mr_rightleft20"><span class="big_txt">Magento Development Quotes</span></h3>
    <p>Check your project budget below to see how soon we can give you a<br>
      quote for your Magento website. </p>
    <div class="inner_dev">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="row">
          <h4>small-sized project</h4>
          <div class="project_inner">
            <h2><span class="up_to">UP TO</span> <span>$3,000</span> in budget</h2>
            <h2> <span class="up_to">&nbsp;</span> <span>1</span> business day</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="row">
          <h4>mid-size projects </h4>
          <div class="project_inner">
            <h2><span class="up_to">UP TO</span> <span>$20,000</span> in budget</h2>
            <h2><span class="up_to">&nbsp;</span> <span>2-3</span> business days</h2>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="bottom_dev">
      <h4 class="what">What‘s included</h4>
      <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
        <div class="qa"><img src="images/free_30.png" alt="Free 30 days of support" title="Free 30 days of support" width="54" height="49"/></div>
        <h4>Free 30 days of <br>
          support</h4>
      </div>
      <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
        <div class="qa"><img src="images/qa_testing.png" alt="comprehensive QA testing" title="comprehensive QA testing" width="56" height="30"/></div>
        <h4>comprehensive qa<br>
          testing</h4>
      </div>
      <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
        <div class="qa"> <img src="images/update_icon.png" alt="complimentary minor site updates" title="complimentary minor site updates" width="35" height="35"/></div>
        <h4>complimentary minor<br>
          site updates</h4>
      </div>
      <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
        <div class="qa"><img src="images/project_manager_icon.png" alt="Dedicated Project Manager" title="Dedicated Project Manager" width="31" height="38"/></div>
        <h4>Dedicated <br>
          Project Manager</h4>
      </div>
    </div>
  </div>
</section>

<!-- Starts Why RapidSlice -->
<section class="mag_dev_sec">
  <div class="container">
    <h3><img src="images/why_rapidicon_orange.png" alt="Why RapidSlice" title="Why RapidSlice" class="mr_righ20" width="42" height="44"/>Why RapidSlice?</h3>
    <div class="inner_sec">
      <ul>
        <li>
          <div><img src="images/magento_developer.png" alt="EXPERT MAGENTO DEVELOPERS" title="EXPERT MAGENTO DEVELOPERS" width="54" height="70"/></div>
          <h2>EXPERT MAGENTO DEVELOPERS</h2>
          <p>Our Magento developers are hand picked for their 
            expertise and knowledge in engineering immaculate Magento sites. </p>
        </li>
        <li>
          <div><img src="images/satisfaction_icon_orange.png" alt="100% SATISFACTION GUARANTEED" title="100% SATISFACTION GUARANTEED" width="57" height="56"/></div>
          <h2>100% SATISFACTION <br>
            GUARANTEED</h2>
          <p>Call it confidence that we guarantee you‘ll love your 
            website. And if you don‘t, we‘ll work until you do. </p>
        </li>
        <li>
          <div><img src="images/outstanding_icon_orange.png" alt="OUTSTANDING SUPPORT" title="OUTSTANDING SUPPORT" width="68" height="53"/></div>
          <h2>OUTSTANDING SUPPORT</h2>
          <p>Given the current web tech landscape, we understand, and expect, that no project will ever truly be 
            finished. With this in mind, we offer best-in-class 
            customer support to assure your online assets are always fresh, and exciting. </p>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- Ends Why RapidSlice -->
<!-- Ends Magento Development Quotes  -->
<form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
<section class="faq_bottom rapid_orange_bottom">
  <div class="container"> <img width="45" height="39" title="Get Your Free Quote And Consultation" alt="Get Your Free Quote And Consultation" src="images/rapid_bottom_white.png">
    <h1>Get Your Free Quote And Consultation</h1>
		<div style="float;left;margin:10px;">
		<?php if($error_msg != "") { ?>
			<div class="error_msg"><?=$error_msg?></div>
		<?php } elseif(trim($_REQUEST['sucess_msg']) !="" && trim($_REQUEST['sucess_msg']) == '1') { ?>
			<div style="color: #fff;font-family: effraregular;font-size: 12px;line-height: normal;margin: 5px 0 10px;text-transform: uppercase;">Thanks for contacting with us.</div>
		<?php } ?>
		</div>
    <div class="faq_form">
      <div class="col-sm-4 col-md-3 pad_lr">
        <div class="form-group">
          <div class="form_field_sec">
            <label for="name_faq">Name:</label>
            <input type="text" name="name_faq" id="name_faq" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-3 pad_lr">
        <div class="form-group">
          <div class="form_field_sec">
            <label for="email_faq">Email:</label>
            <input type="text" name="email_faq" id="email_faq" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-3 pad_lr">
        <div class="form-group">
          <div class="form_field_sec">
            <label for="phone_faq">Phone:</label>
            <input type="text" name="phone_faq" id="phone_faq" class="form-control">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 pad_lr">
        <div class="form-group submit_btn">
          <button title="SUBMIT" alt="SUBMIT"><img width="20" height="23" title="Submit" alt="Submit" src="images/faq_upload.png">SUBMIT</button>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
</form>

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
$('.dropdown-toggle').dropdownHover(options);
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
function isAValidEmail( emailField )
{
	var emailregex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	var match=emailField.match( emailregex );
	if ( !match )
		return false;
	else
		return true;
}
function trim(str)
{
	return str.replace(/^\s+|\s+$/g,'');
}

function frmvalidate()
{
	if(trim(document.main_form.name_faq.value)=="" || trim(document.main_form.name_faq.value)==null)
	{
		alert("Please enter your Name");
		document.main_form.name_faq.focus();
		return false;
	}
	
	if(trim(document.main_form.email_faq.value)=="" || trim(document.main_form.email_faq.value)==null)
	{
		alert("Please enter your email");
		document.main_form.email_faq.focus();
		return false;
	}
	
	if(!isAValidEmail(trim(document.main_form.email_faq.value)))
	{
		alert("Please enter correct email");
		document.main_form.email_faq.focus();
		return false;
	}
	
	if(trim(document.main_form.phone_faq.value)=="" || trim(document.main_form.phone_faq.value)==null)
	{
		alert("Please enter phone");
		document.main_form.phone_faq.focus();
		return false;
	}
}
</script>
</body>
</html>
