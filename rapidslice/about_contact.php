<?php
include_once("config.php");
require './PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST) && sizeof($_POST))
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = nl2br($_POST['message']);
	
	$body = "<table width='611' height='93'  cellpadding='5px' cellspacing='1'  align='center' style='BORDER: #C20000 1px solid;'>
  
  <tr style='background:#000;'><td align='left' colspan='2'><img src='http://templates.newsoftdemo.info/rapidslice/dev/images/logo.png'></td></tr>
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>User Contact Details</td></tr>
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
    <td width='154'  align='right' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; font-weight:bold' valign='top'>Comments :</td>
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
	if($_FILES['uploadedfile']['name']!=""){
	   $ext_allowed = array ("gif", "jpg", "jpeg", "png");
	   $img_prefix  = date('Ymdhis');//str_replace(" ", "_", $product_name)."_";
	   $file_name  	= $_FILES['uploadedfile']['name'];
	   $pos   		= strrpos($file_name, ".");
	   $len   		= strlen($file_name);
	   $ext   		= substr($file_name ,$pos+1, $len-1);
	   $ext   		= strtolower($ext);
	   
	  //if (in_array ($ext, $ext_allowed)) {
		  if (is_uploaded_file($_FILES['uploadedfile']['tmp_name'])){
			   $image_real  = str_replace(' ', '_', $img_prefix.$file_name);
			   @copy($_FILES['uploadedfile']['tmp_name'], "uploadedfiles/".$image_real);
			   	$atached_file = "uploadedfiles/".$image_real;
		  }
	//  }
	 }
	$mail = new PHPMailer;
	$mail->From = $email;
	$mail->FromName = $name;
	$mail->addAddress('support@rapidslice.ca');
	$mail->WordWrap = 50; 
	$mail->Subject = "User Contact Details";
	$mail->msgHTML($body);
	if($atached_file != '')
	{
		$mail->addAttachment($atached_file);
	}
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:about_contact.php?sucess_msg=1");
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
  <div class="banner_ab"> <img src="images/comment_icon1.png" alt="How Can We Help You?" title="How Can We Help You?" width="44" height="35">
    <h1>How Can We Help You?</h1>
  </div>
</section>
<!-- Ends banner top section --> 
<!-- Starts About contact form -->
<section class="info_sec">
  <div class="container">
    <h3><span class="project">Project quotes, questions, feedback - we‘ll do our best to get back to you within 24 hours.</span></h3>
    <div class="ab_contact">
		<div style="float;left;margin:10px;">
		<?php 
		if($error_msg != "")
		{
		?>
		<div class="error_msg"><?=$error_msg?></div>
		<?php 
		}
		elseif(trim($_REQUEST['sucess_msg']) !="" && trim($_REQUEST['sucess_msg']) == '1') 
		{				
		?>
		<div style="color: #2769bb;font-family: effraregular;font-size: 12px;line-height: normal;margin: 5px 0 10px;text-transform: uppercase;">Thanks for contacting with us.</div>
		<?php
		}
		?>
	  </div>
	<form name="main_form" method="post" action="" onsubmit='return frmvalidate();' enctype="multipart/form-data">
	<input type="hidden" id="atached_file" name="atached_file" value="">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-6">
            <div class="row">
              <div class="ab_form">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="" class="form-control" id="name" name="name">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="ab_form">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="" class="form-control" id="email" name="email">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="ab_form">
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea class="form-control" id="message" name="message"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="upload">
                <h1><img src="images/upload_icon.png" alt="upload file" title="upload file" width="17" height="21">Upload Files</h1>
                <div class="clearfix"></div>
                <div class="fileUpload btn btn-primary"> <span>Choose File</span>
                  <input type="file" name="uploadedfile" id="uploadedfile" class="upload" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="ab_form">
                <div class="send_1">
                  <button alt="Send" title="Send">Send</button>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
	  </form>
      <div class="col-sm-4">
        <div class="row">
          <div class="ab_right">
            <ul>
              <li> <span><img width="19" height="25" alt="PHONE" title="PHONE" src="images/ab_phone_icon.png"></span>
                <div class="content_right">
                  <h3>PHONE</h3>
                  <a href="tel:18553359546">1.855.335.9546</a></div>
              </li>
              <li> <span><img width="21" height="14" alt="EMAIL" title="EMAIL" src="images/ab_envelope_icon.png"></span>
                <div class="content_right">
                  <h3>EMAIL</h3>
                  <a href="mailto:info@rapidslice.ca">info@rapidslice.ca</a><br>
                  <a href="mailto:support@rapidslice.ca">support@rapidslice.ca</a>
                </div>
              </li>
              <li> <span><img width="7" height="22" alt="sales Inquiry" title="sales Inquiry" src="images/ab_about_icon.png"></span>
                <div class="content_right">
                  <h3>sales Inquiry</h3>
                  <a href="mailto:info@rapidslice.ca">sales@rapidslice.ca</a><br>
                                   
                </div>
              </li>
              <!--<li> <span><img width="14" height="18" alt="location" title="location" src="images/ab_location_icon.png"></span>
                <div class="content_right">
                  <h3>location</h3>
                  <a target="_blank" href="https://www.google.co.in/maps?hl=en&tab=wl">Street Address Here<br>
                  City, Province<br>
                  Postal Code, Country</a> </div>
              </li>-->
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  </div>
</section>
<!-- Ends About contact form --> 
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
	if(trim(document.main_form.name.value)=="" || trim(document.main_form.name.value)==null)
	{
		alert("Please enter your Name");
		document.main_form.name.focus();
		return false;
	}
	
	if(trim(document.main_form.email.value)=="" || trim(document.main_form.email.value)==null)
	{
		alert("Please enter your email");
		document.main_form.email.focus();
		return false;
	}
	
	if(!isAValidEmail(trim(document.main_form.email.value)))
	{
		alert("Please enter correct email");
		document.main_form.email.focus();
		return false;
	}
	if(trim(document.main_form.message.value)=="" || trim(document.main_form.message.value)==null)
	{
		alert("Please enter correct Message");
		document.main_form.message.focus();
		return false;
	}
}
</script>  
</body>
</html>
