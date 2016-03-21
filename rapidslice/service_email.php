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
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>PSD to Email FAQ</td></tr>
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
	$mail->Subject = "PSD to Email FAQ";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:service_email.php?sucess_msg=1");
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
<!-- Starts Top Banner -->
<section class="banner_main service_banner">
      <div class="banner_psd banner_email">
        <div class="banner_overlay"></div>
        <div class="container">
          <div class="col-sm-7 col-md-6 col-lg-6 content_main">
            <h3>.PSD to Email Template</h3>
            <p>To us, a great email contains valuable information and presents it in an amazingly clear way. RapidSlice can convert your PSDs to
              tasteful HTML email templates that make every pixel count. Together we can  show that unsubscribe button the true meaning of loneliness. </p>
            <div class="btn_sec">
              <div class="get_btn"><a href="#What_You_Get" title="MORE INFO">MORE INFO</a></div>
              <div class="take_tour"><a href="order.php" title="ORDER NOW">ORDER NOW </a></div>
            </div>
          </div>
          <div class="col-sm-5 col-md-6 col-lg-6 banner_pic"><img src="images/email_banner.png" alt="" width="447"  class="pic_2" /></div>
        </div>
      </div>
</section>
<!-- Ends Top Banner --> 
<!-- Starts What You Get -->
<section id="What_You_Get" class="what_get">
  <div class="container" >
    <h3><img src="images/what_get_sky.png" alt="What You Get" title="What You Get" class="mr_righ20" width="43" height="49"/><span class="disply">What You Get</span></h3>
    <div class="main_theme">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 br_right">
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/mail_sky.png" alt="" width="50" height=""/> </div>
          <div class="theme_right">
            <h2>UNIVERSAL EMAIL CLIENT READABILITY </h2>
            <p>Gmail, Outlook, Hotmail, AOL Mail,  Apple Mail, Yahoo! Mail, Windows Live Mail, and many more, RapidSlice‘s email templates are compatible with all major email clients. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/multiple_icon.png" alt="" width="48" height=""/> </div>
          <div class="theme_right">
            <h2>MULTIPLE TEMPLATES</h2>
            <p>Our PSD to HTML Email Template service can provide you with an array of branded templates for sending a variety of different messages. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/mailchip.png" alt="" width="48" height=""/> </div>
          <div class="theme_right">
            <h2>MAILCHIMP COMPATIBLE</h2>
            <p>Our finished templates can easily be copy and pasted into MailChimp and other email campaign management services. </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/speedy_load.png" alt="" width="52" height=""/> </div>
          <div class="theme_right">
            <h2>SPEEDY LOAD TIMES</h2>
            <p>Our webmail templates are optimized to load quickly across all browsers and devices, ensuring hassle free delivery. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/pixel_perfect.png" alt="" width="54" height=""/> </div>
          <div class="theme_right">
            <h2>PIXEL-PERFECT</h2>
            <p>We make every pixel of your emails count with brilliantly 
              designed, and precisely coded templates. </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="theme_inner">
          <div class="theme_bg"> <img src="images/mobile_compatible.png" alt="" width="41" height=""/> </div>
          <div class="theme_right">
            <h2>MOBILE COMPATIBLE</h2>
            <p>Stylishly reach your recipients on the go with our mobile friendly options. </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Ends What You Get -->

<section class="mag_dev_sec pd_bottom_30">
  <div class="container">
    <h3><img width="42" height="44" class="mr_righ20" title="Why RapidSlice" alt="Why RapidSlice" src="images/why_rapidicon_sky.png">Why RapidSlice?</h3>
    <div class="inner_sec">
      <ul>
        <li>
          <div><img width="54" height="70" title="EXPERT DEVELOPERS" alt="EXPERT DEVELOPERS" src="images/expert_developer.png"></div>
          <h2>EXPERT DEVELOPERS</h2>
          <p>Our HTML/CSS developers are hand picked for their expertise and creativity in crafting awe-inspiring websites. </p>
        </li>
        <li>
          <div><img width="57" height="56" title="100% SATISFACTION GUARANTEED" alt="100% SATISFACTION GUARANTEED" src="images/satisfaction_icon_sky.png"></div>
          <h2>100% SATISFACTION <br>
            GUARANTEED</h2>
          <p>Call it confidence that we guarantee you‘ll love your 
            website. And if you don‘t, we‘ll work until you do. </p>
        </li>
        <li>
          <div><img width="68" height="53" title="OUTSTANDING SUPPORT" alt="OUTSTANDING SUPPORT" src="images/outstanding_icon_sky.png"></div>
          <h2>OUTSTANDING SUPPORT</h2>
          <p>Given the current web tech landscape, we understand, and expect, that no project will ever truly be 
            finished. With this in mind, we offer best-in-class 
            customer support to assure your online assets are always fresh, and exciting. </p>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- Starts Free Quote -->
<form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
<section class="faq_bottom email_bottom">
  <div class="container"> <img width="45" height="39" src="images/rapid_bottom_white.png" alt="Get Your Free Quote And Consultation" title="Get Your Free Quote And Consultation">
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
            <input type="text" class="form-control" id="name_faq" name="name_faq">
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-3 pad_lr">
        <div class="form-group">
          <div class="form_field_sec">
            <label for="email_faq">Email:</label>
            <input type="text" class="form-control" id="email_faq" name="email_faq">
          </div>
        </div>
      </div>
      <div class="col-sm-4 col-md-3 pad_lr">
        <div class="form-group">
          <div class="form_field_sec">
            <label for="phone_faq">Phone:</label>
            <input type="text" class="form-control" id="phone_faq" name="phone_faq">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-3 pad_lr">
        <div class="form-group submit_btn">
          <button alt="SUBMIT" title="SUBMIT"><img width="20" height="23" src="images/faq_upload.png" alt="Submit" title="Submit">SUBMIT</button>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
</form>
<!-- Ends free quote --> 

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
