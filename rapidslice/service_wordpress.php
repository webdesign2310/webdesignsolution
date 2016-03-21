<?php
include_once("config.php");
require './PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST) && sizeof($_POST) && trim($_POST['formBottom']) == '1')
{
    $name = trim($_POST['name_faq']);
    $email = trim($_POST['email_faq']);
    $phone = trim($_POST['phone_faq']);
	
	$body = "<table width='611' height='93'  cellpadding='5px' cellspacing='1'  align='center' style='BORDER: #C20000 1px solid;'>
  
  <tr style='background:#000;'><td align='left' colspan='2'><img src='http://templates.newsoftdemo.info/rapidslice/dev/images/logo.png'></td></tr>
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>Wordpress FAQ</td></tr>
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
	$mail->Subject = "Wordpress FAQ";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:service_bootstrap.php?sucess_msg=1");
	   exit();	
}


if(isset($_POST) && sizeof($_POST) && trim($_POST['formBottom']) == '0')
{
    $name 		= trim($_POST['first_name']);
    $email 		= trim($_POST['mailid']);
    $phone 		= trim($_POST['phone1']);
	$message 	= nl2br($_POST['brief']);
	
	$body = "<table width='611' height='93'  cellpadding='5px' cellspacing='1'  align='center' style='BORDER: #C20000 1px solid;'>
  
  <tr style='background:#000;'><td align='left' colspan='2'><img src='http://templates.newsoftdemo.info/rapidslice/dev/images/logo.png'></td></tr>
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>Wordpress FAQ</td></tr>
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
    <td width='154'  align='right' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold' valign='top'>Project Brief :</td>
    <td width='432'  align='left' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000;'>".$message."</td>
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
	$mail->Subject = "Wordpress FAQ";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:service_bootstrap.php?sucess_msg_boot=1");
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
<script type="text/javascript" language="JavaScript">
function trim(txt_value) { return (txt_value.replace(/^\s|\s*$/g,"")); }
function check_validphone()
{
	
	if (trim(document.vincontactform.first_name.value) =="")
	{
		alert("Please enter your name.");
		document.vincontactform.first_name.focus();
		return false;
	}
	
	if(document.vincontactform.first_name.value!= "")
	{
		var iChars = "?1234567890";
		for (var i = 0; i < document.vincontactform.first_name.value.length; i++)
		{
			if (iChars.indexOf(document.vincontactform.first_name.value.charAt(i)) != -1)
			{
				alert ("Numeric values doesnot allow in name.");
				document.vincontactform.first_name.focus();
				return false;
			}
		}
	}

if(trim(document.vincontactform.mailid.value) =="")
	{
		alert("Please enter email address.");
		document.vincontactform.mailid.focus();
		return false;
	}
	if(trim(document.vincontactform.mailid.value) != "" )
	{
		if(!isAValidEmail(document.vincontactform.mailid.value))
		{
			alert("Please enter valid e-mail address.")
			document.vincontactform.mailid.focus();
			return(false);
		}
	}

if(trim(document.vincontactform.phone1.value) == "" )
	{
		alert("Please enter your phone number.");
		document.vincontactform.phone1.focus();

		return false;
	}

             	if(trim(document.vincontactform.phone1.value) != "" )
	{
		// function to check the numeric values
		var iChars = "0123456789";
		for (var i = 0; i < document.vincontactform.phone1.value.length; i++)
		{
			if (iChars.indexOf(document.vincontactform.phone1.value.charAt(i)) == -1)
			{
				alert ("Only numeric values are allowed in phone number. .");
				document.vincontactform.phone1.focus();
				return false;
			}
		}
}

if (trim(document.vincontactform.brief.value) =="")
	{
		alert("Please enter the details.");
		document.vincontactform.brief.focus();
		return false;
	}
document.getElementById('vincontactform').submit();
}

</script>
</head>
<body>
<!-- Starts Header -->
<?php include("header2.php"); ?>
<!-- Ends Header --> 
<!-- Starts banner top section -->
<form id="vincontactform" name="vincontactform" action="" method="post">
<input type="hidden" name="formBottom" value="0">
<section class="banner_main">
      <div class="banner_word">
        <div class="banner_overlay"></div>
        <div class="wordpress_pic"><img src="images/service_wpbanner_pic.png" alt="" width="448"/></div>
        <div class="container">
          <div class="col-sm-7 col-md-6 col-lg-6 content_main">
            <h3>.PSD to Wordpress<br>
              Website Development</h3>
            <p>Wordpress‘ state of the art content management interface along with an extensive amount of different themes and plug-ins have made it the most used CMS in the world. RapidSlice is ready to build you a one-of-a-kind online property by converting your .PSD designs into a fully functional Wordpress website. </p>
            <div class="btn_sec">
              <div class="get_btn"><a href="#wp_project" title="MORE INFO">MORE INFO</a></div>
              <div class="take_tour"><a href="order.php" title="ORDER NOW">ORDER NOW </a></div>
            </div>
          </div>
          <div class="col-sm-5 col-md-6 col-lg-6">
            <div class="banner_form">
              <h2><img src="images/faq_bottom.png" alt="free quote" title="free quote" width="30" height="25" class="mr_righ10"><span>Get Your Free Quote And Consultation</span></h2>
			  
			  <div style="float;left;margin:10px;">
				<?php if($error_msg != "") { ?>
					<div class="error_msg"><?=$error_msg?></div>
				<?php } elseif(trim($_REQUEST['sucess_msg_boot']) !="" && trim($_REQUEST['sucess_msg_boot']) == '1') { ?>
					<div style="color: #fff;font-family: effraregular;font-size: 12px;line-height: normal;margin: 5px 0 10px;text-transform: uppercase;">Thanks for contacting with us.</div>
				<?php } ?>
			  </div>
              
              <div class="form-group">
                <input name="first_name" type="text" class="form-control" placeholder="Name:">
              </div>
              <div class="form-group">
                <input name="mailid" type="text" class="form-control" placeholder="Email:">
              </div>
              <div class="form-group">
                <input name="phone1" type="text" class="form-control" placeholder="Phone:">
              </div>
              <div class="form-group">
                <textarea name="brief" class="form-control" placeholder="Project Brief:"></textarea>
              </div>
              <div class="submit"><img src="images/faq_upload.png" alt="Submit" title="Submit" width="34" height="40"> <a title="Submit" href="#" onClick="check_validphone();">Submit</a> </div>
            </div>
          </div>
        </div>
      </div>
</section>
 </form>
<!-- Ends banner top section --> 
<!-- Starts Wordpress Projects section -->
<section id="wp_project" class="faq portfolio_p_0">
  <div class="container">
    <h3><img src="images/recent_word.png" alt="Recent Wordpress Projects" title="Recent Wordpress Projects" class="mr_righ20" width="45" height="50"/><span class="disply">Recent Wordpress Projects</span></h3>
    <ul class="bxslider">
      <li>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="projects/projects1.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects1.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">LAYEREDi Enterprise</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Wordpress Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="projects/projects2.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects2.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">Loraberry.com</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="projects/projects3.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects3.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">Form Funnel</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View website"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Wordpress Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View website"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View website"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/bootstrap_iconwhite.png" alt="" width="55" class="icon_img"/><br>
                <p>View website</p>
                </span></a> </div>
            </figure>
            <div class="content border_purple">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_puple.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- Ends Wordpress Projects section --> 

<!-- Starts What You Get -->
<section class="get_what">
  <div class="container">
    <h3><img src="images/what_get.png" alt="What You Get" title="What You Get" width="41" height="47" class="mr_righ20">What You Get</h3>
    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <ul>
        <li>
          <div class="easyuse">
            <div><img src="images/easytouse_icon.png" alt="EASY TO USE CMS" title="EASY TO USE CMS" width="44" height="57"/></div>
            <h3>EASY TO USE CMS</h3>
            <p>Wordpress‘ content management system is renowned for it‘s easy operation and simple interface. Everyone, from beginner administrator to advanced developer, can quickly and conveniently post content to their website with Wordpress.</p>
          </div>
        </li>
        <li><img src="images/about_icon.png" alt="divider" title="divider" width="13" height="40"/></li>
        <li>
          <div class="easyuse">
            <div> <img src="images/extensive_icon.png" alt="EXTENSIVE FUNCTIONALITY " title="EXTENSIVE FUNCTIONALITY " width="54" height="72"/></div>
            <h3>EXTENSIVE FUNCTIONALITY </h3>
            <p>We will make sure to help you and your website take advantage of all the 
              awesome plug-ins, add-ons, and widgets that are compatible with Wordpress. </p>
          </div>
        </li>
        <li><img src="images/about_icon.png" alt="divider" title="divider" width="13" height="40"/></li>
        <li>
          <div class="easyuse">
            <div><img src="images/seo_icon.png" alt="SEO" title="SEO" width="78" height="65"/> </div>
            <h3>SEO</h3>
            <p> All of RapidSlice‘s websites are engineered to be search-engine friendly and optimized for high Google, Yahoo!, and Bing search list rankings.</p>
          </div>
        </li>
        <li><img src="images/about_icon.png" alt="divider" title="divider" width="13" height="40"/></li>
        <li>
          <div class="easyuse">
            <div><img src="images/speedy_icon.png" alt="SPEEDY DEVELOPMENT" title="SPEEDY DEVELOPMENT" width="76" height="63"/> </div>
            <h3>SPEEDY DEVELOPMENT</h3>
            <p>The Wordpress framework offers unrivaled site construction times and therefore gives RapidSlice the ability to quickly produce a beautiful website for you.</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="clearfix"></div>
  </div>
</section>
<!-- Ends What You Get -->

<!-- Starts Why RapidSlice -->
<section class="mag_dev_sec pd_bottom wp_whyrs">
  <div class="container">
    <h3><img src="images/why_rapidicon.png" alt="Why RapidSlice" title="Why RapidSlice" class="mr_righ20" width="42" height="44"/>Why RapidSlice?</h3>
    <div class="inner_sec">
      <ul>
        <li>
          <div><img src="images/expert_icon.png" alt="EXPERT DEVELOPERS" title="EXPERT DEVELOPERS" width="54" height="70"/></div>
          <h2>EXPERT DEVELOPERS</h2>
          <p>Our HTML/CSS developers are hand picked for their expertise and creativity in crafting awe-inspiring websites. </p>
        </li>
        <li>
          <div><img src="images/satisfaction_icon.png" alt="100% SATISFACTION GUARANTEED" title="100% SATISFACTION GUARANTEED" width="57" height="56"/></div>
          <h2>100% SATISFACTION <br>
            GUARANTEED</h2>
          <p>Call it confidence that we guarantee you‘ll love your 
            website. And if you don‘t, we‘ll work until you do. </p>
        </li>
        <li>
          <div><img src="images/outstanding_icon.png" alt="OUTSTANDING SUPPORT" title="OUTSTANDING SUPPORT" width="68" height="53"/></div>
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

<!-- Starts free quote -->
<form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
<input type="hidden" name="formBottom" value="1">
<section class="faq_bottom rapid_bottom">
  <div class="container"> <img width="45" height="39" title="Get Your Free Quote And Consultation" alt="Get Your Free Quote And Consultation" src="images/rapid_bottom.png">
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
	$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        // Applying the top margin on modal dialog to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
});

$('body').on('hidden.bs.modal', '.modal', function () {
  $(this).removeData('bs.modal');
});

</script>
<script>
//$('.dropdown-toggle').dropdownHover(options);
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
    $(document).ready(function(){
  $('.bxslider').bxSlider({
	   preventDefaultSwipeX: true,
	   preventDetaultSwipeY: false,
	   oneToOneTouch: false,
	   pager: ($(".bxslider li").length > 1) ? true: false
});
});

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
