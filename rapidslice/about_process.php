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
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>Process Details</td></tr>
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
	$mail->Subject = "Process Details";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:about_process.php?sucess_msg=1");
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

<!-- Starts Process top section -->
<section class="banner_main">
  <div class="ab_process">
    <div class="container"> <img src="images/ab_process_icon.png" alt="Our Recipe For Success" title="Our Recipe For Success" width="48" height="40">
      <h1>Our Recipe For Success</h1>
      <p>30+ years of web development experience backs the formula we use to create outstanding online properties for our clients. There‘s a method to our madness, and it has 4 steps. </p>
    </div>
  </div>
</section>
<!-- Ends Process top section --> 
<!-- Starts Process Section -->
<section class="ab_pros pos_rel">
  <div class="tag_open"><img src="images/tag_open.png" alt="" width="88" height="35"/></div>
  <div class="container">
    <section id="cd-timeline">
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture"> </div>
        <!-- cd-timeline-img -->
        <div class="cd-timeline-heading">
          <h1><span class="left"><img src="images/strategy_icon.png" alt="Strategy" title="Strategy" width="51" height="49"></span> <span class="title_txt"><img src="images/about_icon.png" alt="strategy" title="strategy" width="14" height="42">Strategy</span></h1>
        </div>
        <div class="cd-timeline-content">
          <div class="inner_main">
            <p>Behind every great web developer is an even greater notepad. Before we even touch the keyboard, we discuss project specifications, goals, and the website‘s end-users, among lots of other things. </p>
            <p>We compile these insights to create a clear strategy that encompasses site architecture, development phase timelines, and metrics of success. </p>
          </div>
        </div>
        <!-- cd-timeline-content --> 
      </div>
      <!-- cd-timeline-block -->
      
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-movie"> </div>
        <!-- cd-timeline-img -->
        <div class="cd-timeline-heading">
          <h1><span class="right"><img src="images/construction_icon.png" alt="Construction" title="Construction" width="54" height="54"></span> <span class="title_txt"><img src="images/about_icon.png" alt="Construction" title="Construction" width="14" height="42">Construction</span></h1>
        </div>
        <div class="cd-timeline-content">
          <div class="inner_main">
            <p>Ready. Aim. Code. </p>
            <p>RapidSlice developers dismantle your provided designs and translate them into seamless web elements. Highly fluent in HTML5, CSS3, Javascript, PHP, Python, and Ruby just to name a few languages, this agile team will work in scrum sprints to quickly complete a full website markup. </p>
            <p>Project accuracy is fundamental to our RapidSlice‘s offering, so we always have multiple developers with eyes on your project. Teamwork makes the dream work.</p>
          </div>
        </div>
        <!-- cd-timeline-content --> 
      </div>
      <!-- cd-timeline-block -->
      
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-picture"> </div>
        <!-- cd-timeline-img -->
        <div class="cd-timeline-heading">
          <h1><span class="left"><img src="images/testing_icon.png" alt="Testing" title="Testing" width="47" height="39"></span> <span class="title_txt"><img src="images/about_icon.png" alt="Testing" title="Testing" width="14" height="42">Testing</span></h1>
        </div>
        <div class="cd-timeline-content">
          <div class="inner_main">
            <p>This is the phase throughout which our Quality Assurance team will work to systematically examine every aspect of your website and ensure it is not just functional, but aligned with your original designs and considerate of the initial strategy. </p>
            <p>With stressful cross-platform testing we‘ll essentially be trying to break your site. If we do, we‘ll fix it. If we don‘t, then we‘re satisfied. </p>
          </div>
        </div>
        <!-- cd-timeline-content --> 
      </div>
      <!-- cd-timeline-block -->
      
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location"> </div>
        <!-- cd-timeline-img -->
        <div class="cd-timeline-heading">
          <h1><span class="right"><img src="images/integration_icon.png" alt="Integration" title="Integration" width="43" height="42"></span> <span class="title_txt"><img src="images/about_icon.png" alt="Integration" title="Integration" width="14" height="42">Integration</span></h1>
        </div>
        <div class="cd-timeline-content">
          <div class="inner_main">
            <p>Once you‘ve been shown your final markup and can confirm that everything is looking, and working, perfectly, we‘ll handle the site upload to your servers. </p>
            <p>A complimentary 30 days of technical support is offered just in case minor changes to the website may need to be made. </p>
          </div>
        </div>
        <!-- cd-timeline-content --> 
      </div>
      <!-- cd-timeline-block -->
      <div class="cd-timeline-block">
        <div class="cd-timeline-img cd-location"> </div>
        <!-- cd-timeline-img --> 
        
      </div>
      <!-- cd-timeline-block --> 
      
    </section>
  </div>
  <div class="tag_close"><img src="images/tag_close.png" alt="" width="108" height="53"/></div>
</section>
<!-- Ends Process Section --> 
<!-- Starts Question Answer Section -->
<form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
<section class="faq_bottom process_bottom">
  <div class="container"> <img src="images/faq_bottom.png" alt="You’ve Got Questions, We’ve Got Answers"  title="You’ve Got Questions, We’ve Got Answers" width="45" height="39">
    <h1>You’ve Got Questions, We’ve Got Answers</h1>
		<div style="float;left;margin:10px;">
		<?php if($error_msg != "") { ?>
			<div class="error_msg"><?=$error_msg?></div>
		<?php } elseif(trim($_REQUEST['sucess_msg']) !="" && trim($_REQUEST['sucess_msg']) == '1') { ?>
			<div style="color: #fff;font-family: effraregular;font-size: 12px;line-height: normal;margin: 5px 0 10px;text-transform: uppercase;">Thanks for questioning with us.</div>
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

name_faq
email_faq
phone_faq

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
