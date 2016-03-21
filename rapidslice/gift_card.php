<?php
include_once('submit_order.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>METROPOLITAN GRILL</title>
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/jquery.bxslider.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button" id="toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.php" title="METROPOLITAN GRILL" class="navbar-brand"><img src="images/logo.png" alt="METROPOLITAN GRILL" width="356"/></a> </div>
    <div class="navbar-collapse collapse mob_tab" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php#menu_discover">MENU</a></li>
        <li><a href="comments.html" title="COMMENTS">COMMENTS</a></li>
        <li><a href="gift_card.html" title="GIFT CARDS">GIFT CARDS</a></li>
        <li><a href="#contact" title="CONTACT">CONTACT</a></li>
        <li><a href="EA_reservations.html" title="EA RESERVATIONS" class="reservation">EA RESERVATIONS</a></li>
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </nav>
  <div class="target fixed_subnav" style="display:none">
    <div class="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php#menu_discover">MENU</a></li>
        <li><a href="comments.html" title="COMMENTS">COMMENTS</a></li>
        <li><a href="gift_card.html" title="GIFT CARDS">GIFT CARDS</a></li>
        <li><a href="#contact" title="CONTACT">CONTACT</a></li>
        <li><a href="EA_reservations.html" title="EA RESERVATIONS" class="reservation">EA RESERVATIONS</a></li>
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</header>
<!-- Starts Gift Card Banner -->
<div class="bg-holder pic_giftcard" data-width="1024" data-height="768">
  <div class="texture_1"></div>
  <div class="gift_card">
    <div class="inner_block">
      <div class="inner_block_main">
        <div class="inner_block_content"> <img src="images/gift_card_icon.png" alt=""/>
          <h2>Gift Card<span class="last_word">s</span></h2>
          <p>Ordering online <span>is eas<span class="last_word">y</span></span></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Ends Gift Card Banner -->
<section class="mid order_sec"> <img src="images/pepper.png" alt="" class="order_img1"/> <img src="images/chilli.png" alt="" class="order_img2"/>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1">
        <div class="row">
          <h1>order form</h1>
          <div class="wrap_flex">
            <form id="order_form" method="post">
              <?php if(isset($_SESSION['payment']['success']) && !empty($_SESSION['payment']['success'])): ?>
			  <div class="col-sm-12">
                <div class="form_inner">
					<div class="success">
						<span><?php echo $_SESSION['payment']['success']; ?></span>
					</div>
				</div>
			  </div>
			  <?php endif; ?>
              <?php if(isset($_SESSION['payment']['error']) && !empty($_SESSION['payment']['error'])): ?>
			  <div class="col-sm-12">
                <div class="form_inner">
					<div class="error">
						<span><?php echo $_SESSION['payment']['error']; ?></span>
					</div>
				</div>
			  </div>
			  <?php endif; ?>
			  <?php $_SESSION['payment'] = ''; unset($_SESSION['payment']); ?>
              <div class="col-sm-6">
                <div class="form_inner">
                  <h3>Billing and shipping information</h3>
                  <div class="form_field">
                    <label for="bill_email">Email*</label>
                    <input type="text" id="bill_email" class="form-control" name="email" value="<?php echo (isset($_POST['email']))?$_POST['email']:''; ?>"/>
                  </div>
                  <div class="form_field">
                    <label for="c_name">Company Name</label>
                    <input type="text" id="c_name" class="form-control" name="compnay_name" value="<?php echo (isset($_POST['compnay_name']))?$_POST['compnay_name']:''; ?>">
                  </div>
                  <div class="form_field">
                    <label for="bill_first_name">Name*</label>
                    <input type="text" id="bill_first_name" placeholder="First" class="form-control" name="firstname" value="<?php echo (isset($_POST['firstname']))?$_POST['firstname']:''; ?>">
                  </div>
                  <div class="form_field">
                    <label>&nbsp;</label>
                    <input type="text" id="bill_last_name" placeholder="Last" class="form-control" name="lastname" value="<?php echo (isset($_POST['lastname']))?$_POST['lastname']:''; ?>">
                  </div>
                  <div class="form_field full_width">
                    <label for="ship_add">Shipping Address*</label>
                    <input type="text" id="ship_add" placeholder="Street address" class="form-control" name="address" value="<?php echo (isset($_POST['address']))?$_POST['address']:''; ?>">
                  </div>
                  <div class="form_field">
                    <input type="text" id="ship_city" placeholder="City" class="form-control" name="city" value="<?php echo (isset($_POST['city']))?$_POST['city']:''; ?>">
                  </div>
                  <div class="form_field">
                    <input type="text" id="ship_state" placeholder="State / Province / Region" class="form-control" name="state" value="<?php echo (isset($_POST['state']))?$_POST['state']:''; ?>">
                  </div>
                  <div class="form_field">
                    <input type="text" id="ship_zip" placeholder="Zip / Postal Code" class="form-control" name="postal" value="<?php echo (isset($_POST['postal']))?$_POST['postal']:''; ?>">
                  </div>
                  <div class="form_field">
                    <select class="form-control" name="country">
                      <option value="">-Select-</option>
                      <option value="Canada" <?php echo (isset($_POST['country']) && $_POST['country']=='Canada')?'selected':''; ?>>Canada</option>
                    </select>
                  </div>
                  <div class="form_field">
                    <label for="ship_phone">Phone*</label>
                    <input type="text" id="ship_phone" class="form-control" name="phone" value="<?php echo (isset($_POST['phone']))?$_POST['phone']:''; ?>">
                  </div>
                  <div class="form_field">
                    <label for="ship_fax">Fax</label>
                    <input type="text" id="ship_fax" class="form-control" name="fax" value="<?php echo (isset($_POST['fax']))?$_POST['fax']:''; ?>">
                  </div>
                </div>
                <div class="form_inner">
                  <h3 class="m_top">Billing Address</h3>
                  <div class="form_field full_width">
                    <label for="bill_add">
                      <input type="checkbox" id="bill_add" class="checkbox_bill" name="bill_add" <?php echo (isset($_POST['bill_add']))?'checked':''; ?>>
                      Please bill to a different address</label>
                  </div>
				  <div class="billing_field" style="display:<?php echo (isset($_POST['bill_add']))?'block':'none'; ?>;">
					  <div class="form_field full_width">
						<input type="text" id="bill_add" placeholder="Street address" class="form-control" name="bill_address" value="<?php echo (isset($_POST['bill_address']))?$_POST['bill_address']:''; ?>">
					  </div>
					  <div class="form_field">
						<input type="text" id="bill_city" placeholder="City" class="form-control" name="bill_city" value="<?php echo (isset($_POST['bill_city']))?$_POST['bill_city']:''; ?>">
					  </div>
					  <div class="form_field">
						<input type="text" id="bill_state" placeholder="State / Province / Region" class="form-control" name="bill_state" value="<?php echo (isset($_POST['bill_state']))?$_POST['bill_state']:''; ?>">
					  </div>
					  <div class="form_field">
						<input type="text" id="bill_zip" placeholder="Zip / Postal Code" class="form-control" name="bill_postal" value="<?php echo (isset($_POST['bill_postal']))?$_POST['bill_postal']:''; ?>">
					  </div>
					  <div class="form_field">
						<select class="form-control" name="bill_country">
						  <option value="">-Select-</option>
						  <option value="Canada" <?php echo (isset($_POST['bill_country']) && $_POST['bill_country']=='Canada')?'selected':''; ?>>Canada</option>
						</select>
					  </div>
                  </div>
                </div>
                 <div class="form_inner">
                  <h3 class="m_top">Payment information</h3>
                  <div class="form_field">
                    <label for="pay_card_type">Credit Card Type*</label>
                    <select id="pay_card_type" class="form-control" name="card_type">
                      <option value="">-Select-</option>
                      <option value="visa">VISA</option>
                      <option value="mastercard">MASTERCARD</option>
                    </select>
                  </div>
                  <div class="form_field">
                    <label for="pay_card_no">Credit Card Number*</label>
                    <input type="text" id="pay_card_no" class="form-control" name="card_number" maxlength="16">
                  </div>
                  <div class="form_field expiry_date">
                    <label for="pay_exp_date">Expiration date*:</label>
                    <div class="expire_sec">
                      <div class="form_field expire_date">
                        <select id="pay_exp_date" class="form-control" name="card_month">
                          <option value="">- - / - - -</option>
                          <option value="1">01 / JAN</option>
                          <option value="2">02 / FEB</option>
                          <option value="3">03 / MAR</option>
                          <option value="4">04 / APR</option>
                          <option value="5">05 / MAY</option>
                          <option value="6">06 / JUN</option>
                          <option value="7">07 / JUL</option>
                          <option value="8">08 / AUG</option>
                          <option value="9">09 / SEP</option>
                          <option value="10">10 / OCT</option>
                          <option value="11">11 / NOV</option>
                          <option value="12">12 / DEC</option>
                        </select>
                      </div>
                      <div class="form_field expire_date">
                        <select id="pay_exp_date" class="form-control" name="card_year">
                          <option value="">- - - -</option>
						  <?php
							for($count =0; $count<15; $count++)
								echo '<option value="'.(intval(date('Y'))+$count).'">'.(intval(date('Y'))+$count).'</option>';
						  ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form_field">
                    <label for="pay_card_value">Card Verification Value*</label>
                    <input type="text" id="pay_card_value" class="form-control" name="card_cvv">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form_inner">
                  <h3>10% bonus</h3>
                  <div class="form_field full_width">
                    <p>For every $ 100 purchased, we will include a 10% bonus in gift cards back to you! The Metropolitan Grill gift cards must be a minimum of $ 10 and never expire.</p>
                  </div>
                </div>
                <div class="form_inner">
                  <h3 class="m_top">Chose denomination</h3>
                  <div class="form_field">
                    <label for="card_qty">Card Quantity*</label>
                    <input type="text" id="card_qty" class="form-control" name="quantity" value="<?php echo (isset($_POST['quantity']))?$_POST['quantity']:'1'; ?>">
                  </div>
                  <div class="form_field">
                    <label for="card_value">Card Value*</label>
                    <input type="text" id="card_value" class="form-control" name="card_value" value="<?php echo (isset($_POST['card_value']))?$_POST['card_value']:'10'; ?>">
                  </div>
                </div>
                <div class="form_inner">
                  <h3 class="m_top">Select shipping model</h3>
                  <div class="form_field">
                    <label for="shipping_model">Shipping*</label>
                    <select id="shipping_model" class="form-control" name="shipping_mode">
                      <option value="" >-Select-</option>
					  <option value="1" <?php echo (isset($_POST['shipping_mode']) && $_POST['shipping_mode']=='1')?'selected':''; ?>>Shipping Mode 1</option>
					  <option value="2" <?php echo (isset($_POST['shipping_mode']) && $_POST['shipping_mode']=='2')?'selected':''; ?>>Shipping Mode 2</option>
                    </select>
                  </div>
                  <div class="form_field">
                    <label for="shipping_tatal">Total</label>
                    <div class="total_txt">$ 10.00 CAD</div>
                  </div>
                  <div class="form_field full_width">
                    <p>Metropolitan Grill does not guarantee the safe or timely arrival of gift cards delivered by Regular Mail and shall have no liability whatsoever to customers who select Regular Mail delivery (including, without limitation, as a result of damage to or loss of gift cards).</p>
                  </div>
                </div>
                <div class="form_inner">
                  <h3 class="m_top">Are you purchasing as a gift?</h3>
                  <div class="form_field">
                    <select id="purchase_gift" class="form-control" name="gift">
                      <option value="no">NO</option>
                      <option value="yes">Yes</option>
                    </select>
                  </div>
                </div>
                <div class="form_inner">
                  <button class="subscribe">SUBMIT</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="contact">
  <section class="footer_main">
    <div class="bottom_top"><a onclick="scrollToTop();return false" href="#" class="fa fa-angle-double-up"></a></div>
    <div class="inner_sec">
      <div class="container">
        <div class="footer_wrap">
          <div class="row">
            <div class="col-xs-8 footer_logo"><img src="images/logo.png" alt="METROPOLITAN GRILL" title="METROPOLITAN GRILL" width="427"/></div>
            <div class="col-xs-4 social_logos">
              <ul>
                <li><span><a href="" class="fa fa-facebook" title="Facebook"></a></span></li>
                <li><span><a href="" class="fa fa-twitter" title="Twitter"></a></span></li>
              </ul>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-12 pos_rel_in">
              <div class="flex">
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="ADDRESS"><img src="images/map_icon.png" alt="ADDRESS" title="ADDRESS"/><br>
                    ADDRESS</a></div>
                  <div class="right_txt">
                    <p><a href="#" class="call_add">317 7 Ave SW, AB T2P, Calgary</a></p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="EVENTS"><img src="images/mail_icon.png" alt="EVENTS" title="EVENTS"/><br>
                    EVENTS</a></div>
                  <div class="right_txt">
                    <p>Large Party Events (30+ people): <a href="mailto:events@themet.ca">events@themet.ca</a></p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="HOURS"><img src="images/clock_icon.png" alt="HOURS" title="HOURS"/><br>
                    HOURS</a></div>
                  <div class="right_txt">
                    <p>Monday-Sunday 11am-late</p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="EVENTS"><img src="images/mail_icon.png" alt="EVENTS" title="EVENTS"/><br>
                    EVENTS</a></div>
                  <div class="right_txt">
                    <p>Small Party Events (8-30 people): <a href="mailto:reso@themet.ca">reso@themet.ca</a></p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="CALL"><img src="images/phone_icon.png" alt="CALL" title="CALL"/><br>
                    CALL</a></div>
                  <div class="right_txt">
                    <p><a href="#" class="call_add">(403) 263-5432</a></p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="left_txt"><a href="#" title="RESUMES"><img src="images/people_icon.png" alt="RESUMES" title="RESUMES"/><br>
                    RESUMES</a></div>
                  <div class="right_txt">
                    <p>Resumes: <a href="mailto:info@themet.ca">info@themet.ca</a></p>
                  </div>
                </aside>
                <aside class="contact_info">
                  <div class="show_map">
                    <div class="close_map_btn"><a href="javascript:void(0)" id="hide"><img src="images/close_map.png" alt=""/></a></div>
                    <div id="map_1"></div>
                  </div>
                  <div class="left_txt"><a href="#" title="MAP"><img src="images/map_icon.png" alt="MAP" title="MAP"/><br>
                    MAP</a></div>
                  <div class="right_txt map_bg"><a href="javascript:void(0)" title="MAP" id="show"><span>Map</span></a></div>
                </aside>
                <aside class="contact_info">
                  <div class="show_map1">
                    <div class="close_map_btn"><a href="javascript:void(0)" id="hide1"><img src="images/close_map.png" alt=""/></a></div>
                    <div id="map_2"></div>
                  </div>
                  <div class="left_txt"><a href="#" title="PARKING"><img src="images/map_icon.png" alt="PARKING" title="PARKING"/><br>
                    PARKING</a></div>
                  <div class="right_txt parking_bg"><a href="javascript:void(0)" title="PARKING" id="show1"><span>Parking</span></a></div>
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="footer_bar"><img src="images/maverick_logo.png" alt="MAVERICK" title="MAVERICK" width="150"/></section>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.parallax-scroll.min.js"></script> 
<script src="js/demo.min.js"></script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script>
    $("#hide").click(function(){
        $(".show_map").hide();
    });
    $("#show").click(function(){
        $(".show_map").show();
    });
</script> 
<script>
    $("#hide1").click(function(){
        $(".show_map1").hide();
    });
    $("#show1").click(function(){
        $(".show_map1").show();
    });
</script> 
<script>
		$(document).ready(function(){
				
function initialize()
{
  var mapProp2 = {
    center: new google.maps.LatLng(51.0460102, -114.0687827),
    zoom:18,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	 styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
  };
  var mapProp3 = {
    center: new google.maps.LatLng(51.0460102, -114.0687827),
    zoom:17,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
	 styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
  };
  var map2 = new google.maps.Map(document.getElementById("map_1"),mapProp2);
  var map3 = new google.maps.Map(document.getElementById("map_2"),mapProp3);
  
  var image = new google.maps.MarkerImage("images/parking_icon.png", null, null, null, new google.maps.Size(25,25)); // Create a variable for our marker image.
  
  var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.0460102, -114.0687827),
                    map: map2,
                    title: 'Metropolitan Grill!'
                });
  var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.0460102, -114.0687827),
                    map: map3,
                    title: 'Metropolitan Grill!'
                });
  var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.046268, -114.071509),
					icon:image, //use our image as the marker
                    map: map3,
                    title: 'Parking'
                });
  var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(51.045772, -114.072421),
					icon:image, //use our image as the marker
                    map: map3,
                    title: 'Parking'
                });
}
google.maps.event.addDomListener(document.getElementById('show'), 'click', initialize);
google.maps.event.addDomListener(document.getElementById('show1'), 'click', initialize);
 });
</script> 
<script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = $(target);

	   $('html, body').stop().animate({
	        'scrollTop': $target.offset().top -80
	    }, 1000);
		return false;
	});
});
</script> 
<script type="text/javascript">
var timeOut;
function scrollToTop() {
  if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
    window.scrollBy(0,-80);
    timeOut=setTimeout('scrollToTop()',10);
  }
  else clearTimeout(timeOut);
}
</script> 
<script>
$("#toggle").click(function(){
    var $target = $('.target'),
        $toggle = $(this);

    $target.slideToggle( 500, function () {
        $toggle.text();
    });
});
</script>
<script>
	function total_value(){
		var card_quantity = 0;
		var card_value = 0;
		var numberregex=/^[0-9]*$/;
		if(!$.isNumeric($('input[name=quantity]').val()))
		{
			$('input[name=quantity]').focus();
			alert('Please enter card quantity in number.');
			return false;
		}
		if(!$('input[name=quantity]').val().match(numberregex))
		{
			$('input[name=quantity]').focus();
			alert('Please enter card quantity in number only.');
			return false;
		}
		if(!$.isNumeric($('input[name=card_value]').val()))
		{
			$('input[name=card_value]').focus();
			alert('Please enter card value in number.');
			return false;
		}
		if($('input[name=card_value]').val() <  10)
		{
			$('input[name=card_value]').focus();
			alert('Cards must be a minimum of $10');
			return false;
		}
		card_quantity = parseFloat($('input[name=quantity]').val());
		card_value = parseFloat($('input[name=card_value]').val());
		var total_value = parseFloat(card_quantity*card_value).toFixed(2);
		$('.total_txt').text('$ '+total_value+ ' CAD');
	}
	$('input[name=quantity]').change(function(){
		total_value()
	});
	$('input[name=card_value]').change(function(){
		total_value()
	});
	$('select[name=shipping_mode]').change(function(){
		total_value()
	});
	$('#bill_add').click(function(){
		if($('#bill_add:checked').is(':checked')){
			$('.billing_field').stop().slideDown();
		}else{
			$('.billing_field').stop().slideUp();
		}
	});
	function myTrim(x) {
		return x.replace(/^\s+|\s+$/gm,'');
	}
	$('#order_form').submit(function(){
		var currentTime = new Date();
		var currentYear =  currentTime.getFullYear();
		var currentmonth = currentTime.getMonth() + 1;
		var emailregex=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var phoneregex=/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
		var numberregex=/^[0-9]*$/;
		if(myTrim($('input[name=email]').val()) == ''){
			$('input[name=email]').focus();
			alert('Please enter your email.');
			return false;
		}
		if(!$('input[name=email]').val().match(emailregex)){
			$('input[name=email]').focus();
			alert('Please enter valid email address.');
			return false;
		}
		if(myTrim($('input[name=firstname]').val()) == ''){
			$('input[name=firstname]').focus();
			alert('Please enter firstname.');
			return false;
		}
		if(myTrim($('input[name=address]').val()) == ''){
			$('input[name=address]').focus();
			alert('Please enter shipping address.');
			return false;
		}
		if(myTrim($('input[name=city]').val()) == ''){
			$('input[name=city]').focus();
			alert('Please enter shipping city.');
			return false;
		}
		if(myTrim($('input[name=state]').val()) == ''){
			$('input[name=state]').focus();
			alert('Please enter shipping state.');
			return false;
		}
		if(myTrim($('input[name=postal]').val()) == ''){
			$('input[name=postal]').focus();
			alert('Please enter shipping zip/postal code.');
			return false;
		}
		if(myTrim($('select[name=country]').val()) == ''){
			$('select[name=country]').focus();
			alert('Please select shipping country.');
			return false;
		}
		if(myTrim($('input[name=phone]').val()) == ''){
			$('input[name=phone]').focus();
			alert('Please enter your phone number.');
			return false;
		}
		if(!$('input[name=phone]').val().match(phoneregex)){
			$('input[name=phone]').focus();
			alert('Please enter valid phone number.');
			return false;
		}
		if($('#bill_add:checked').is(':checked')){
			if(myTrim($('input[name=bill_address]').val()) == ''){
				$('input[name=bill_address]').focus();
				alert('Please enter billing address.');
				return false;
			}
			if(myTrim($('input[name=bill_city]').val()) == ''){
				$('input[name=bill_city]').focus();
				alert('Please enter billing city.');
				return false;
			}
			if(myTrim($('input[name=bill_state]').val()) == ''){
				$('input[name=bill_state]').focus();
				alert('Please enter billing state.');
				return false;
			}
			if(myTrim($('input[name=bill_postal]').val()) == ''){
				$('input[name=bill_postal]').focus();
				alert('Please enter billing zip/postal code.');
				return false;
			}
			if(myTrim($('select[name=bill_country]').val()) == ''){
				$('select[name=bill_country]').focus();
				alert('Please select billing country.');
				return false;
			}
		}
		if(myTrim($('select[name=card_type]').val()) == ''){
			$('select[name=card_type]').focus();
			alert('Please select card type.');
			return false;
		}
		if(myTrim($('input[name=card_number]').val()) == '' || $('input[name=card_number]').val().length != 16 || !$.isNumeric($('input[name=card_number]').val()))
		{
			$('input[name=card_number]').focus();
			alert('Please enter valid card number');
			return false;
		}
		if(myTrim($('select[name=card_month]').val()) == ''){
			$('select[name=card_month]').focus();
			alert('Please select card expiration month.');
			return false;
		}
		if(!$.isNumeric($('select[name=card_month]').val()) || $('select[name=card_month]').val() > 12 || $('select[name=card_month]').val() < 1)
		{
			$('select[name=card_month]').focus();
			alert('Please select expiration month');
			return false;
		}
		if(myTrim($('select[name=card_year]').val()) == ''){
			$('select[name=card_year]').focus();
			alert('Please select card expiration year.');
			return false;
		}
		if(!$.isNumeric($('select[name=card_year]').val()) || $('select[name=card_year]').val() < currentYear)
		{
			$('select[name=card_year]').focus();
			alert('Please select expiration year');
			return false;
		}
		if(currentYear == $('select[name=card_year]').val() && currentmonth > $('select[name=card_month]').val())
		{
			$('select[name=card_month]').focus();
			alert('Please select valid expiration date');
			return false;
		}
		if(myTrim($('input[name=card_cvv]').val()) == '')
		{
			$('input[name=card_cvv]').focus();
			alert('Please enter card cvv no');
			return false;
		}
		if(!$.isNumeric($('input[name=card_cvv]').val()) || $('input[name=card_cvv]').val().length > 4 || $('input[name=card_cvv]').val().length < 3)
		{
			$('input[name=card_cvv]').focus();
			alert('Please enter valid CVV');
			return false;
		}
		if(myTrim($('input[name=quantity]').val()) == '' || $('input[name=quantity]').val() == 0)
		{
			$('input[name=quantity]').focus();
			alert('Please enter card quantity');
			return false;
		}
		if(!$.isNumeric($('input[name=quantity]').val()))
		{
			$('input[name=quantity]').focus();
			alert('Please enter card quantity in number.');
			return false;
		}
		if(!$('input[name=quantity]').val().match(numberregex))
		{
			$('input[name=quantity]').focus();
			alert('Please enter card quantity in number only.');
			return false;
		}
		if(myTrim($('input[name=card_value]').val()) == '')
		{
			$('input[name=card_value]').focus();
			alert('Please enter card value');
			return false;
		}
		if(!$.isNumeric($('input[name=card_value]').val()))
		{
			$('input[name=card_value]').focus();
			alert('Please enter card value in number.');
			return false;
		}
		if($('input[name=card_value]').val() <  10)
		{
			$('input[name=card_value]').focus();
			alert('Cards must be a minimum of $10');
			return false;
		}
	});
</script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>