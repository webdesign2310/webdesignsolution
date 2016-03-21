<?php
include_once("config.php");
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
<!-- Starts client area -->
<section class="client_sec">
  <div class="container">
    <div class="form_main has-js">
      <h3><img src="images/logo_black.png" alt="" width="172" height="36"/></h3>
      <div class="form-group form_field">
        <div class="form_field_sec">
          <label for="email_add">Email Address:</label>
          <input type="text" class="form-control" id="email_add" name="email_add">
        </div>
        <div class="form_field_sec">
          <label for="pass_w">Password:</label>
          <a href="#" title="Forgot Password?">Forgot Password?</a>
          <input type="text" class="form-control" id="pass_w" name="pass_w">
        </div>
        <div class="remember_me">
          <label class="label_check" for="remember">
            <input name="remember" id="remember" value="1" type="checkbox" checked="">
            Remember me</label>
        </div>
        <div class="submit_btn">
          <input type="submit" value="Log In" alt="Log In" title="Log In">
        </div>
        <div class="terms_privacy"><a href="#" title="Terms of Use">Terms of Use</a><a href="#" title="Private Policy">Private Policy</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Ends client area --> 
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
  $('.bxslider').bxSlider();
});
</script> 
<SCRIPT>
    function setupLabel() {
        if ($('.label_check input').length) {
            $('.label_check').each(function(){ 
                $(this).removeClass('c_on');
            });
            $('.label_check input:checked').each(function(){ 
                $(this).parent('label').addClass('c_on');
            });                
        };
    };
    $(document).ready(function(){
        $('.label_check').click(function(){
            setupLabel();
        });
        setupLabel(); 
    });
</SCRIPT>
</body>
</html>
