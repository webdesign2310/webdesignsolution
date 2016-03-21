<?php 
error_reporting(0);
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

<body class="pos_rel" data-spy="scroll" data-target=".scrollspy">

<?php include("header2.php"); ?>

<!-- Starts banner top section -->
<section class="banner_main">
  <div class="banner_order"> <img src="images/order_icon.png" alt="Let’s Make Your New Favourite Website" title="Let’s Make Your New Favourite Website" width="56" height="47">
    <h1>Let’s Make Your New Favourite Website</h1>
  </div>
</section>
<!-- Starts banner top section --> 
<!-- Starts steps -->
<section class="order_steps" id="sticky_container">
  <div class="container">
    <ul>
      <li class="myitem" id="payment_details"><span>1</span> <span class="list_txt">Client Details</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="select_package"><span>2</span> <span class="list_txt">Select Package</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="add_opt"><span>3</span> <span class="list_txt">Additional Options</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem" id="review_order"><span>4</span> <span class="list_txt">Order Summary</span></li>
      <li class="seperator"><img src="images/about_icon_grey.png" alt=""/></li>
      <li class="myitem active" id="pay"><span>5</span> <span class="list_txt">Pay</span></li>
    </ul>
  </div>
</section>
<!-- Ends steps --> 
<!-- Starts Order Middle section -->
<section class="info_sec blog_section order_sec has-js">

  <div class="container">
  <form name="frmCompleteOrder" action="payment_process.php"  method="post" id="payment-form">
  
	<input type="hidden" name="isFormSubmitted" id="isFormSubmitted" value="isFormSubmitted">
    <div class="col-md-8">
      <div class="row">
        <div class="order_form order_131015 has-js" id="payment_details_div">
          <h3><img src="images/pay_details_icon.png" alt="Payment Details" title="Payment Details" width="29" height="34" class="icon_left"> Payment Details</h3>
		  <h4 class="form_error"><?php if($_SESSION['msg']!=""){echo $_SESSION['msg']; unset($_SESSION['msg']); }?></h4>
          <div class="col-sm-6 form-group form_field card_no_131015">
            <label for="client_project">Card Number</label>
            <!-- <input type="text" class="form-control" placeholder=".... .... .... ...." id="cardnumber" maxlength="19" name="cardNumber"> -->
            <input type="text" class="form-control" id="cardnumber" maxlength="16" name="cardNumber" value="" data-stripe="number">
          </div>
          <div class="col-sm-6 form-group form_field">
            <ul class="card_131015">
              <li> <a href="javascript:void(0)" title="Visa" class="img_base" id="card1"> <img src="images/visa_131015.png" alt=""> <img style="display: block;" src="images/hover_131015.png" alt="" class="hover_131015" id="card1_hide"> </a> </li>
              <li> <a href="javascript:void(0)" title="Master Card" class="img_base" id="card2"> <img src="images/masterCard_101315.png" alt="" > <img style="display: block;" src="images/hover_131015.png" alt="" class="hover_131015" id="card2_hide"> </a> </li>
              <li> <a href="javascript:void(0)" title="paypal" class="img_base" id="card3"> <img src="images/paypal_101315.png" alt=""> <img style="display: block;" src="images/hover_131015.png" alt="" class="hover_131015" id="card3_hide"> </a> </li>
              <li> <a href="javascript:void(0)" title="Ameriacan Expess" class="img_base" id="card4"> <img src="images/ameriacanExpess_101315.png" alt=""> <img style="display: block;" src="images/hover_131015.png" alt="" class="hover_131015" id="card4_hide"> </a> </li>
            </ul>
             
          </div>
          <div class="col-sm-6 form-group form_field">
            <label for="cardHolderName">Cardholder Name</label>
            <input type="text" class="form-control" id="cardHolderName" name="cardHolderName" value="<?php if($_SESSION["cardHolderName"]!=""){ echo $_SESSION["cardHolderName"]; unset($_SESSION["cardHolderName"]); }?>" data-stripe="data-name">
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-7 form-group form_field">
                <label for="date">Expiration Date</label>
                <input type="text" class="form-control" style="display: inline-block;width: 74px;margin: 0 10px 0 0;" id="expiry_month"  name="exp_month" placeholder="mm" maxlength="2" value="<?php if($_SESSION["exp_month"]!=""){ echo $_SESSION["exp_month"]; unset($_SESSION["exp_month"]); }?>" data-stripe="exp-month">
				<input type="text" class="form-control" style="width: 95px;display: inline-block;" id="exp_year"  name="exp_year" placeholder="yyyy" maxlength="4" value="<?php if($_SESSION["exp_year"]!=""){ echo $_SESSION["exp_year"]; unset($_SESSION["exp_year"]); }?>" data-stripe="exp-year" >
              </div>
              <div class="col-sm-5 form-group form_field cvv_131015">
                <label for="ccv">CVV<span>*</span></label>
                <input type="text" class="form-control" id="card_cvv_no" name="card_cvv_no" maxlength="4" value="<?php if($_SESSION["card_cvv_no"]!=""){ echo $_SESSION["card_cvv_no"]; unset($_SESSION["card_cvv_no"]); }?>" data-stripe="cvc">
              </div>
            </div>
          </div>
          <div class="col-sm-12 form-group form_field billing_sec_131015">
            <h6>Billing Information</h6>
          </div>
          <div class="col-sm-6 form-group form_field">
            <label for="address1">Address 1</label>
            <input type="text" class="form-control" id="address1" name="address1" value="<?php if($_SESSION["address1"]!=""){ echo $_SESSION["address1"]; unset($_SESSION["address1"]); }?>">
          </div>
          <div class="col-sm-6 form-group form_field">
            <label for="address2">Address 2</label>
            <input type="text" class="form-control" id="address2" name="address2" value="<?php if($_SESSION["address2"]!=""){ echo $_SESSION["address2"]; unset($_SESSION["address2"]); }?>">
          </div>
          <div class="col-sm-6 form-group form_field">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" value="<?php if($_SESSION["city"]!=""){ echo $_SESSION["city"]; unset($_SESSION["city"]); }?>">
          </div>
          <div class="col-sm-6 form-group form_field">
            <label for="postal">ZIP/ Postal Code</label>
            <input type="text" class="form-control" id="postal" name="postal" value="<?php if($_SESSION["postal"]!=""){ echo $_SESSION["postal"]; unset($_SESSION["postal"]); }?>">
          </div>
          <div class="col-sm-6 form-group form_field">
            <label>Country</label>
            <select id="country" name="country" onChange="setCountry()" class="form-control order_select_131015 order_select_131015_1">
              <!-- <option value="can" <?php if($_SESSION["country"]=="can"){ echo "selected";  unset($_SESSION["country"]); }?>>Canada</option>
              <option value="usa" <?php if($_SESSION["country"]=="usa"){ echo "selected"; unset($_SESSION["country"]); }?>>USA</option>
              <option value="uk" <?php if($_SESSION["country"]=="uk"){ echo "selected"; unset($_SESSION["country"]); }?>>UK</option> -->
			  <option value="can">Canada</option>
              <option value="usa">USA</option>
              <option value="uk">UK</option>
            </select>
          </div>
		  <div class="col-sm-6 form-group form_field">
            <label>Province and State</label>
            <select id="state" name="state" class="form-control order_select_131015 order_select_131015_1">
				<option value="">Select Province</option>
			</select>
          </div>
          <!--div class="col-sm-12 form-group savePass_131015">
            <label class="label_check pay_txt" for="savePass">
              <input name="savePass" id="savePass" value="1" type="checkbox" checked="">
              Save my payment details for future purchase</label>
          </div-->
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="order_form pay_form">
          <h3><img src="images/significant_icon1.png" alt="Your Total" title="Your Total" width="29" height="33" class="icon_left"> Your Total</h3>
          <div class="col-sm-12">
            <div class="total_box">
              <div class="inner_field">
                <div class="inner_left">Package with Pages</div>
                <div class="inner_right">$<?php echo $_SESSION['checkout_sess']['pack_select_price'];?></div>
              </div>
              <div class="inner_field">
                <div class="inner_left">Additional Options</div>
                <div class="inner_right">$<?php echo $_SESSION['checkout_sess']['add_item_price'];?></div>
              </div>
              <div class="inner_field">
                <div class="inner_left">GST</div>
                <div class="inner_right">$0</div>
              </div>
              <div class="total_field">
                <div class="inner_left"><span>Total Amount</span></div>
                <div class="inner_right"><span class="total">$<?php echo $_SESSION['checkout_sess']['total_price'];?></span></div>
              </div>
              <div class="inner_section terms_sec">
                <label class="label_check1" for="terms_condition">
                  <input name="terms_condition" id="terms_condition" value="terms" type="checkbox" >
                  I accept the Terms and Conditions. </label>
                <label class="label_check1" for="please_show">
                  <input name="please_show" id="please_show" value="showcase" type="checkbox">
                  Please showcase my project. </label>
              </div>
            </div>
            <!-- <button type="button" title="Responsive"><span>Pay Now</span></button> -->
			<input class="btn btn-default package submit_btn" type="submit" value="Pay Now" >
            <!--button class="btn btn-default package" type="button" title="Responsive"><span>Save to Cart</span></button--> 
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
	  </form>
  </div>
</section>
<!-- Ends Order Middle section --> 
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
<script src="//js.stripe.com/v2/"></script>
<script>
jQuery(function($) {
	function myTrim(x) {
		return x.replace(/^\s+|\s+$/gm,'');
	}
	$('#payment-form').submit(function(e){
		var currentTime = new Date();
		var currentYear =  currentTime.getFullYear();
		var currentmonth = currentTime.getMonth() + 1;
		if(myTrim($(this).find('#cardnumber').val()) == '' || $(this).find('#cardnumber').val().length != 16 || !$.isNumeric($(this).find('#cardnumber').val()))
		{
			$(this).find('#cardnumber').focus();
			alert('Please enter valid card number');
			return false;
		}
		if(!$(this).find('.hover_131015').is(":hidden"))
		{
			alert('Please select card type');
			return false;
		}
		if(myTrim($(this).find('#cardHolderName').val()) == '')
		{
			$(this).find('#cardHolderName').focus();
			alert('Please enter name on card');
			return false;
		}
		if(myTrim($(this).find('#expiry_month').val()) == '')
		{
			$(this).find('#expiry_month').focus();
			alert('Please enter card expiration month');
			return false;
		}
		if(!$.isNumeric($(this).find('#expiry_month').val()) || $(this).find('#expiry_month').val() > 12 || $(this).find('#expiry_month').val() < 1)
		{
			$(this).find('#expiry_month').focus();
			alert('Please enter valid expiration month');
			return false;
		}
		if(myTrim($(this).find('#exp_year').val()) == '')
		{
			$(this).find('#exp_year').focus();
			alert('Please enter card expiration year');
			return false;
		}
		if(!$.isNumeric($(this).find('#exp_year').val()) || $(this).find('#exp_year').val() < currentYear)
		{
			$(this).find('#exp_year').focus();
			alert('Please enter valid expiration year');
			return false;
		}
		if(currentYear == $(this).find('#exp_year').val() && currentmonth > $(this).find('#expiry_month').val())
		{
			$(this).find('#expiry_month').focus();
			alert('Please enter valid expiration date');
			return false;
		}
		if(myTrim($(this).find('#card_cvv_no').val()) == '')
		{
			$(this).find('#card_cvv_no').focus();
			alert('Please enter card cvv no');
			return false;
		}
		if(!$.isNumeric($(this).find('#card_cvv_no').val()) || $(this).find('#card_cvv_no').val().length > 4)
		{
			$(this).find('#card_cvv_no').focus();
			alert('Please enter valid CVV');
			return false;
		}
		if(myTrim($(this).find('#address1').val()) == '')
		{
			$(this).find('#address1').focus();
			alert('Please enter billing address');
			return false;
		}
		if(myTrim($(this).find('#city').val()) == '')
		{
			$(this).find('#city').focus();
			alert('Please enter city of billing address');
			return false;
		}
		if(myTrim($(this).find('#postal').val()) == '')
		{
			$(this).find('#postal').focus();
			alert('Please enter zip/postal code of billing address');
			return false;
		}
		if(myTrim($(this).find('#country').val()) == '')
		{
			$(this).find('#country').focus();
			alert('Please select country of billing address');
			return false;
		}
		if(myTrim($(this).find('#state').val()) == '')
		{
			$(this).find('#state').focus();
			alert('Please select Province of billing address');
			return false;
		}
		if(!($(this).find('#terms_condition:checked').length > 0))
		{
			alert('Please accept the Term and Conditions');
			return false;
		}
		return true;
	});
});

</script>

<script>

populateCountries("country", "state");   
  
$(document).ready(function(){
  $("#card1").click(function(){
	  $("#card1_hide").hide();
	  $("#card2_hide").show();
	  $("#card3_hide").show();
	  $("#card4_hide").show();
	});
	$("#card2").click(function(){
	  $("#card1_hide").show();
	  $("#card2_hide").hide();
	  $("#card3_hide").show();
	  $("#card4_hide").show();
	});
	$("#card3").click(function(){
	  $("#card1_hide").show();
	  $("#card2_hide").show();
	  $("#card3_hide").hide();
	  $("#card4_hide").show();
	});
	$("#card4").click(function(){
	  $("#card1_hide").show();
	  $("#card2_hide").show();
	  $("#card3_hide").show();
	  $("#card4_hide").hide();
	});
});

$('.dropdown-toggle').dropdownHover('options');

function setupLabel() {
	if ($('.label_check input').length) {
		$('.label_check').each(function(){ 
			$(this).removeClass('c_on');
		});
		$('.label_check input:checked').each(function(){ 
			$(this).parents('label').addClass('c_on');
		});                
	};
	if ($('.label_check1 input').length) {
		$('.label_check1').each(function(){ 
			$(this).removeClass('check_on');
		});
		$('.label_check1 input:checked').each(function(){ 
			$(this).parents('label').addClass('check_on');
		});                
	};

	if ($('.label_radio input').length) {
		$('.label_radio').each(function(){ 
			$(this).removeClass('r_on');
		});
		$('.label_radio input:checked').each(function(){ 
			$(this).parents('label').addClass('r_on');
		});
	};
	if ($('.label_radio1 input').length) {
		$('.label_radio1').each(function(){ 
			$(this).removeClass('radio_on');
		});
		$('.label_radio1 input:checked').each(function(){ 
			$(this).parents('label').addClass('radio_on');
		});
	};
};

$(document).ready(function(){
	$('.label_check, .label_check1, .label_check2, .label_radio , .label_radio1').click(function(){
		setupLabel();
	});
	setupLabel(); 
});
	
$(document).ready(function(){		
	$( document ).on( "click", ".click_class", function() {
		var id			=	$( this ).attr('data-val');	
		var label_name	=	'package_'+id;	
		var inner_div	= 	'#innerdiv-'+id;
		 $("label[for="+label_name+"]").toggleClass('check_on2');	
		 $(inner_div).slideToggle();
	});
});	

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

$('input[type=radio][name=package_select]').change(function() {
	var select_radio  = $(this).val();
	$('.details').slideUp();
	$('#innerdiv-'+select_radio).slideDown();
});

$(document).ready(function() {
var stickyNavTop = $('.order_steps').offset().top;
 
var stickyNav = function(){
var scrollTop = $(window).scrollTop();
      
if (scrollTop > stickyNavTop) { 
    $('.order_steps').addClass('sticky');
} else {
    $('.order_steps').removeClass('sticky'); 
}
};
 
stickyNav();
 
$(window).scroll(function() {
    stickyNav();
});
});

$(function(){
	$('#multiAccordion').multiAccordion({
		active: [1, 2],
		click: function(event, ui) {
			//console.log('clicked')
		},
		init: function(event, ui) {
			//console.log('whoooooha')
		},
		tabShown: function(event, ui) {
			//console.log('shown')
		},
		tabHidden: function(event, ui) {
			//console.log('hidden')
		}
		
	});
	
	$('#multiAccordion').multiAccordion("option", "active", [0, 3]);
});

function setval()
{
	document.getElementById("setinner").selectedIndex = document.getElementById("topselect").value;
}

$('#order_sum').affix({
  offset: {
	top: $('.order_steps').offset().top,
	bottom: ($('footer').outerHeight(true)) + 
            40
  }
});

$(document).ready(function(){
    $(".myitem").click(function(){
       var menuItem = $(this).attr('id');
       var selectorDiv;
       
       if(menuItem =='client_details')
       {
           selectorDiv = $("#client_details_div");
       }else if(menuItem =='select_package')
       {
           selectorDiv = $("#select_pkg");
       }else if(menuItem =='add_opt')
       {
           selectorDiv = $("#additional_opt");
       }else if(menuItem =='review_order')
       {
           selectorDiv = $("#additional_opt");
       }else if(menuItem =='pay')
       {
           selectorDiv = $("#additional_opt");
       }
       
       if($("#sticky_container").hasClass("sticky"))
       {
          
           var stickerHeight = $("#sticky_container").height();
           var totalHeight = (selectorDiv.offset().top - (stickerHeight+50));
            
            $('html, body').animate({
        scrollTop: totalHeight
    }, 100);
       }else{
           var totalHeight = (selectorDiv.offset().top-200);
           $('html, body').animate({
        scrollTop: totalHeight
    }, 100);
           
       }
    })
});

/* $( document ).on( "keyup", "#cardnumber", function() {
 var cardnumber = $(this).val();
 var cardnumberLen = cardnumber.length;
 if(cardnumberLen==4 || cardnumberLen==9 || cardnumberLen==14 )
 {
  cardnumber = cardnumber + ' ';
  $(this).val(cardnumber);
 }
 console.log($(this).val());
}); */
</script>

</body>

</html>