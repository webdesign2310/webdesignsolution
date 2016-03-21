<?php
include_once("config.php");
require './PHPMailer-master/PHPMailerAutoload.php';
if(isset($_POST) && sizeof($_POST))
{
    $name = trim($_POST['name_social']);
    $email = trim($_POST['email_social']);
	
	$body = "<table width='611' height='93'  cellpadding='5px' cellspacing='1'  align='center' style='BORDER: #C20000 1px solid;'>
  
  <tr style='background:#000;'><td align='left' colspan='2'><img src='http://templates.newsoftdemo.info/rapidslice/dev/images/logo.png'></td></tr>
  <tr><td align='center' colspan='2' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:bold; font-size:14px; color: #820000'>Blog</td></tr>
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
	$mail->Subject = "Blog";
	$mail->msgHTML($body);
	
	//send the message, check for errors
	if(!$mail->Send())
	   {
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
	   }
	   header("Location:blog.php?sucess_msg=1");
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
<!-- Starts white Bar -->
<div class="top_white_bar">
  <div class="container pos_rel">
    <div class="row">
      <h2 class="title_top">Our Newsroom</h2>
      <div class="search_sec">
        <div class="form-group m_0">
          <input type="" class="form-control" id="search" name="search" placeholder="SEARCH">
          <a href="#" class="search_btn fa fa-search" title="Search"></a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Ends white Bar --> 
<!-- Starts banner top section -->
<section class="banner_main">
  <div class="banner_blog"> <img src="images/blog_icon.png" alt="Stay In The Loop" title="Stay In The Loop" width="52" height="43">
    <h1>Stay In The Loop</h1>
  </div>
</section>
<!-- Ends banner top section --> 
<!-- Starts Middle Blog section -->
<section class="info_sec blog_section">
  <div class="container">
    <ul class="bxslider">
      <li>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic3.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic4.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic3.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="blog_box">
            <figure class="view view-third"><img src="images/blog_pic4.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View"><img src="images/hover_overlay.png" alt="" class="overlay"/></a> </div>
            </figure>
            <div class="content">
              <div class="col-sm-3 date_txt">MAY<br>
                <span class="red">/</span><span>28</span> <span class="arrow_down"><a href="#" class="fa fa-angle-down"></a></span> </div>
              <div class="col-sm-9 blog_content">
                <div class="row">
                  <div class="content_txt">
                    <h5>Let’s Create Together! The Secret to a Happy Portfolio</h5>
                    <p>The new season of Game of Thrones is just around the corner, and like all good geeks, we’re desperate to know what’s coming up in the world of Westeros...... </p>
                  </div>
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
<!-- Ends Middle Blog section --> 
<!-- Starts Socialize -->
<section class="socialize_section">
  <div class="container">
    <div class="inner_main">
      <h3><img src="images/socialize_icon.png" alt="Let’s Socialize" title="Let’s Socialize" width="43" height="50"/> Let’s Socialize</h3>
      <div class="social_media"> <span class="facebook"><a href="#" class="fa fa-facebook" title="Facebook"></a></span><img src="images/seperator.png" alt="" width="12" height="31"/><span class="twitter"><a href="#" class="fa fa-twitter" title="Twitter"></a></span><img src="images/seperator.png" alt="" width="12" height="31"/><span class="linkedin"><a href="#" class="fa fa-linkedin" title="LinkedIn"></a></span><img src="images/seperator.png" alt="" width="12" height="31"/><span class="behance"><a href="#" class="fa fa-behance" title="Behance"></a></span><img src="images/seperator.png" alt="" width="12" height="31"/><span class="google_plus"><a href="#" class="fa fa-google-plus" title="Google+"></a></span> </div>
	  <form name="main_form" method="post" action="" onsubmit='return frmvalidate();'>
      <div class="form_sec">
		<div style="float;left;margin:10px;">
			<?php if($error_msg != "") { ?>
				<div class="error_msg"><?=$error_msg?></div>
			<?php } elseif(trim($_REQUEST['sucess_msg']) !="" && trim($_REQUEST['sucess_msg']) == '1') { ?>
				<div style="color: #fff;font-family: effraregular;font-size: 12px;line-height: normal;margin: 5px 0 10px;text-transform: uppercase;">Thanks for contacting with us.</div>
			<?php } ?>
		</div>
        <div class="col-sm-8">
          <div class="form-group form_field">
            <div class="form_field_sec">
              <label for="name_social">Name:</label>
              <input type="text" class="form-control" id="name_social" name="name_social">
            </div>
            <div class="form_field_sec">
              <label for="email_social">Email:</label>
              <input type="text" class="form-control" id="email_social" name="email_social">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group form_field">
            <div class="subscribe_sec"><img src="images/subscribe_icon.png" alt="" width="34" height="38"/></div>
            <div class="subscribe_sec">
              <input type="submit" value="SUBSCRIBE" alt="SUBSCRIBE" title="SUBSCRIBE">
            </div>
          </div>
        </div>
      </div>
	 </form> 
    </div>
  </div>
</section>
<!-- Ends Socialize --> 
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
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
	   preventDefaultSwipeX: true,
	   preventDetaultSwipeY: false,
	   oneToOneTouch: false,
	   pager: ($(".bxslider li").length > 1) ? true: false
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
	if(trim(document.main_form.name_social.value)=="" || trim(document.main_form.name_social.value)==null)
	{
		alert("Please enter your Name");
		document.main_form.name_social.focus();
		return false;
	}
	
	if(trim(document.main_form.email_social.value)=="" || trim(document.main_form.email_social.value)==null)
	{
		alert("Please enter your email");
		document.main_form.email_social.focus();
		return false;
	}
	
	if(!isAValidEmail(trim(document.main_form.email_social.value)))
	{
		alert("Please enter correct email");
		document.main_form.email_social.focus();
		return false;
	}
}
</script>

</body>
</html>
