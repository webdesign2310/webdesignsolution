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
	   header("Location:dedicated_team.php?sucess_msg=1");
	   exit();	
}

include_once("Mobile_Detect.php");
$detect		= new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'mobile') : 'desktop');

if(isset($_GET['device']) && $_GET['device']!='')
{	
	$deviceType	= $_GET['device'];
}

if($deviceType=='tablet')
{
	$li_no_record  = 3;
}
else if($deviceType=='mobile')
{
	$li_no_record  = 1;
}else{
//for desktop
	$li_no_record  = 10;
}
$test_array = array();
$team_array	= array();
$array1		=	 array();
$test_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
			

//copy the test array for testing. it will come from database			
$test_array = array_merge($array1, $test_array);
//remove the below code and create a $team_array variable to use in html
/*$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);
$team_array = array_merge($team_array, $test_array);*/

$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic2.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic3.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic4.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic2.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic3.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic4.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic2.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic3.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic4.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic2.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic3.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic4.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';
$team_array[] = '<div class="panel panel-default"> <img src="images/team_pic1.jpg" alt="Diego Peralta" title="Diego Peralta"/>
              <div class="team_box">
                <h2>Diego Peralta <span>Co-Founder &amp; CTO</span></h2>
                <div class="content_main show_main" id="slidingDiv_3" style="display:none;">
                  <p>Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod.</p>
                  <div class="blue_border"></div>
                </div>
                <a href="#" class="show_hide show_inner" rel="#slidingDiv_3"><span class="arrow_show glyphicon glyphicon-chevron-down"></span></a> </div>
            </div>';


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
  <div class="banner_service">
    <div class="container">
      <div class="inner_banner"> <img src="images/dedicated_team_icon_white.png" alt="Meet (Y)our Team" title="Meet (Y)our Team" width="46" height="59">
        <h1>Meet (Y)our Team</h1>
        <p>Every one of our team members loves what they do, and is exceptionally great at doing it.</p>
        <a href="#btm_form" class="get_quote" title="Get a quote">Get a quote</a> </div>
    </div>
  </div>
</section>
<!-- Ends banner top section --> 
<!-- Start Perks -->
<section class="talent">
  <div class="container">
    <div class="row">
      <h3><img src="images/perks_icon.png" alt="Perks" title="Perks" class="mr_righ20" width="42" height="44"/><span>Perks</span></h3>
      <div class="perks_inner">
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="perks_content">
            <figure><img src="images/dedication_icon.png" alt="DEDICATION" title="DEDICATION" width="69" height="81"></figure>
            <h2>DEDICATION
              <div class="blue_icon"><img src="images/about_icon.png" alt="DEDICATION" title="DEDICATION" width="11" height="33"></div>
            </h2>
            <p>A dedicated RapidSlice project team means that at any given moment there‘s multiple web developer eyes on your site. This generates quick turnaround times, and unsurpassed attention to detail.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="perks_content">
            <figure> <img src="images/cost_effective_icon.png" alt="COST EFFECTIVE" title="COST EFFECTIVE" width="100" height="65"></figure>
            <h2>COST EFFECTIVE
              <div class="blue_icon"><img src="images/about_icon.png" alt="COST EFFECTIVE" title="COST EFFECTIVE" width="11" height="33"></div>
            </h2>
            <p>Outsourcing your web development and maintenance can save in upwards of hundreds of thousands of dollars annually. By replacing the need for an in-house web team with RapidSlice, you can benefit from the efficiency, professionalism, and expertise of a web design department for a small fraction of the cost.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
          <div class="perks_content">
            <figure><img src="images/accessibility_icon.png" alt="ACCESSIBILTY" title="ACCESSIBILTY" width="82" height="69"></figure>
            <h2>ACCESSIBILTY
              <div class="blue_icon"><img src="images/about_icon.png" alt="ACCESSIBILTY" title="ACCESSIBILTY" width="11" height="33"></div>
            </h2>
            <p>Stuff changes, we get that. Your website should too. Requesting updates is as simple as a phone call or email, and can these updates be implemented quickly.  We‘re here when you need us, and gone when you don‘t.</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<!-- Ends Perks --> 
<!-- Starts Team Section -->
<section class="info_sec team_sec">
  <h3><img src="images/our_team.png" alt="Our Team" title="Our Team" class="mr_righ20" width="42" height="47"/><span class="disply">Our Team</span></h3>
  <div class="container">
    <div class="our_Team">
      <ul class="bxslider">
      <?php 
		$total_record = count($team_array);		
		if($total_record > 0) { 
		$counter  =	0;
		$total_li = $total_record/$li_no_record;		
		for($i=0; $i < $total_li; $i++)
		{
			$sub_array = array_slice($team_array, $counter, $li_no_record); 			
			echo '<li>';
			foreach ($sub_array as $key=>$record) {
				echo $record;
			}
			echo '</li>';
			$counter += $li_no_record;
		}
	
	  } ?>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Ends Team Section --> 
<!-- Starts Skills Section -->
<section class="talent">
  <div class="container">
    <div class="row">
      <h3><img src="images/skills_icon.png" alt="Our Skills" title="Our Skills" class="mr_righ20" width="43" height="45"/><span>Our Skills</span></h3>
      <div class="skills_list">
        <ul>
          <li><a href="javascript:void(0)" class="noLink" title="MySQL"><img src="images/sql_skill.png" alt="MySQL"/> <span>MySQL</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="service_joomla.php" title="Joomla!"><img src="images/joomla_skill.png" alt="Joomla!"/> <span>Joomla!</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="Responsive"><img src="images/responsive_skill.png" alt="Responsive"/> <span>Responsive</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="service_magento.php" title="Magento"><img src="images/magento_skill.png" alt="Magento"/> <span>Magento</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="Shopify"><img src="images/shopify_skill.png" alt="Shopify"/> <span>Shopify</span> </a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0)" class="noLink" title="Symfony"><img src="images/symfony_skill.png" alt="Symfony"/> <span class="slant">Symfony</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="HTML5"><img src="images/html5_skill.png" alt="HTML5"/> <span class="slant">HTML5</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="service_wordpress.php" title="Wordpress"><img src="images/wordpress_skill.png" alt="Wordpress"/> <span class="slant">Wordpress</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="Drupal"><img src="images/drupal_skill.png" alt="Drupal"/> <span class="slant">Drupal</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="service_email.php" title="Email Template"><img src="images/email_temp_skill.png" alt="Email Template"/> <span class="slant email_temp">Email<br>
            Template</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="PostgreSQL"><img src="images/postgreSQL_skill.png" alt="PostgreSQL"/> <span class="slant">PostgreSQL</span> </a></li>
        </ul>
        <ul>
          <li><a href="javascript:void(0)" class="noLink" title="Zend"><img src="images/zend_skill.png" alt="Zend"/> <span>Zend</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="service_bootstrap.php" title="Bootstrap"><img src="images/bootstrap_skill.png" alt="Bootstrap"/> <span>Bootstrap</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="MongoDB"><img src="images/mongoDB_skill.png" alt="MongoDB"/> <span>MongoDB</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="JavaScript"><img src="images/js_skill.png" alt="JavaScript"/> <span>JavaScript</span> </a></li>
          <li class="sperator"><img src="images/about_icon.png" alt="Our Skills" title="Our Skills" width="10" height="32"/></li>
          <li><a href="javascript:void(0)" class="noLink" title="Yii"><img src="images/yii_skill.png" alt="Yii"/> <span>Yii</span> </a></li>
        </ul>
        <div class="skills_pic"><img src="images/our_skills.png" alt="Our Skills" title="Our Skills"/></div>
        <p><a href="mailto:support@rapidslice.ca" title="Inquire">Inquire</a> about additional skills.<br>
          <a href="#" class="fa fa-angle-down down"></a></p>
      </div>
    </div>
  </div>
</section>
<!-- Ends Skills Section --> 
<!-- Starts Question Answer Section -->
<form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
<section class="faq_bottom dedicated_bottom" id="btm_form">
  <div class="container"> <img src="images/faq_bottom.png" alt="You’ve Got Questions, We’ve Got Answers"  title="You’ve Got Questions, We’ve Got Answers" width="45" height="39">
    <h1>You’ve Got Questions, We’ve Got Answers</h1>
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
          <button alt="SUBMIT" title="SUBMIT"><img src="images/faq_upload.png" alt="Submit" title="Submit" width="20" height="23">SUBMIT</button>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
</form>


<!-- Ends Question Answer Section --> 

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

 
<!-- bxSlider Javascript file --> 


<script src="js/showHide.js"></script> 
<script>
$('.dropdown-toggle').dropdownHover(options);
</script> 
<script type="text/javascript">

 $(window).load(function() {
	$('.show_hide').showHide({			 
		speed: 500,  // speed you want the toggle to happen	
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open
					 
	});

});
$(document).ready(function(){
	$('.bxslider').bxSlider({
	   preventDefaultSwipeX: true,
	   preventDetaultSwipeY: false,
	   oneToOneTouch: false,
	   pager: ($(".bxslider li").length > 1) ? true: false
});
	
	$('.our_Team .team_box').click(function(){
		$(this).find('.show_inner').trigger( "click" );
	});
  
});

$(window).load(function(){
	
    $('.show_main').each(function(i, obj) {
	  $(this).attr("id", "slider_"+i);
	});
	 $('.show_inner').each(function(i, obj) {
	  $(this).attr("rel", "#slider_"+i);
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
$(document).ready(function(e) {
    $(".get_quote").click(function() {
    $('html, body').animate({
        scrollTop: $("#btm_form").offset().top
    }, 2000);
});
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
