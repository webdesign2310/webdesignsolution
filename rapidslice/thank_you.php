<?php
include_once("config.php");
if($_SESSION['payment_done'] != 'yes'){
	$_SESSION['payment_done'] = 'no';
	unset($_SESSION['payment_done']);
	header('Location: pay.php');
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
<!-- Starts client area -->
<section class="thank_you_section">
  <div class="inner_section">
    <div class="container">
      <div class="thankyou_main"><img src="images/thank_you_icon.png" alt="Thank You!" title="Thank You!" width="56" height="47" class="icon_top"/>
        <h1>Thank You!</h1>
        <p>Thank you for choosing RapidSlice. Your order has been received and an invoice will be sent to your email shortly.</p>
        <div class="button_wrap"> <a href="order.php" title="Place a New Order">Place a New Order</a><a href="index.php" title="Check  Out Our Work">Check  Out Our Work</a> </div>
      </div>
    </div>
  </div>
</section>
</body>
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
	
$(document).ready(function(){
  $('.bxslider').bxSlider();
});

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
</script>
</html>