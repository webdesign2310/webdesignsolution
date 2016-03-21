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
<!-- Starts banner top section -->
<section class="banner_main">
  <div class="banner_pinsight">
    <div class="container"> <img src="images/pinsights_txt.png" alt="Pinsights" title="Pinsights" width="117" height="33">
      <h1>Create Useful Tips For All Your Admins</h1>
      <h6>WordPress Plugin by <span>RapidSlice.</span></h6>
      <p><a href="#" title="Live Demo" class="live">Live Demo</a> OR <a href="#" title="Download" class="live">Download</a></p>
    </div>
  </div>
</section>
<!-- Ends banner top section --> 
<!-- Start Pinsights Features-->
<section class="talent border_grey_bot">
  <div class="container">
    <div class="row">
      <h3><img src="images/pinsights_feature.png" alt="Pinsights Features" title="Pinsights Features" class="mr_righ20" width="41" height="47"/><span>Pinsights Features</span></h3>
      <div class="pin_feature_inner">
        <ul>
          <li><span><img src="images/pinsights_simple.png" alt="SIMPLE " title="SIMPLE" width="50" height="50"/></span>
            <h3>SIMPLE</h3>
            <p>to install and easy to use</p>
          </li>
          <li class="seperator"><img src="images/about_icon.png" alt="" width="13" height="40"/></li>
          <li><span><img src="images/pinsights_intuitive.png" alt="Intuitive " title="Intuitive" width="68" height="68"/></span>
            <h3>Intuitive</h3>
            <p>drag and drop interface</p>
          </li>
          <li class="seperator"><img src="images/about_icon.png" alt="" width="13" height="40"/></li>
          <li><span><img src="images/pinsights_unlimited.png" alt="Unlimited " title="Unlimited" width="53" height="66"/></span>
            <h3>Unlimited</h3>
            <p>page hints</p>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</section>
<!-- Ends Pinsights Features --> 
<!-- Start What Pinsights -->
<section class="info_sec border_white_bot">
  <h3><img src="images/pinsights_what.png" alt="What is Pinsights?" title="What is Pinsights?" class="mr_righ20" width="43" height="49"/><span class="disply">What is Pinsights?</span></h3>
  <div class="container">
    <div class="pin_what">
      <p><span>Pinsights is an intuitive Wordpress plugin that allows developers to communicate with site admins by dragging and dropping message pins directly onto any page.</span></p>
      <p>To create a tip, a user simply has to drag and drop a pin onto a specific page location and write a brief message. Anyone logged in as a Wordpress admin will be able to see the pins, and receive the message. </p>
      <p><span>Every page can have an unlimited number of hints, making website updates simpler than ever.</span></p>
      <div class="tabbable">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#video" data-toggle="tab" title="Video">Video<span class="caret"></span></a></li>
          <li><a href="#screenshot" data-toggle="tab" title="Screenshot">Screenshot<span class="caret"></span></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="video">
            <div class="slider_sec">
              <div class="content_box">
                <div class="videoWrapper">
                  <iframe src="https://player.vimeo.com/video/102850454" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="screenshot">
            <div class="slider_sec">
              <div class="content_box">
                <ul class="bxslider">
                  <li>
                    <div class="content_slide"><img src="images/screen_shot.jpg" alt="" width="558" height="336"/></div>
                  </li>
                  <li>
                    <div class="content_slide"><img src="images/screen_shot2.jpg" alt="" width="558" height="336"/></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <a href="#" class="download_btn" title="Download">Download</a> </div>
      </div>
    </div>
  </div>
</section>
<!-- Ends What Pinsights --> 
<!-- Starts Questions Section -->
<section class="info_sec ques_ans_sec">
  <h3><img src="images/question_icon_blue.png" alt="You’ve Got Questions - We’ve Got Answers" title="You’ve Got Questions - We’ve Got Answers" class="mr_righ20" width="41" height="47"/><span class="disply">You’ve Got Questions - We’ve Got Answers</span></h3>
  <div class="container">
    <div class="our_Team our_question ">
      <div class="panel-group">
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box front face">
                <h1>Q<span>1</span></h1>
                <p>CAN I PLACE PINS ON SEVERAL PAGES?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>Of course, you can use Pinsights to place mulitple pins on multiple pages.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box green_grid front face">
                <h1>Q<span>2</span></h1>
                <p>HOW DO I INSTALL PINSIGHTS ON WORDPRESS?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>Simply search for Pinsights within the &lt;Plugins&gt; tab on the left side panel. Click &lt;Install&gt;, followed by &lt;Activate Plugin&gt;, and you‘re good to go!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box front face">
                <h1>Q<span>3</span></h1>
                <p>What is the minimum WordPress version required to run PINSIGHTS?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>Version 3.0.1 is the oldest Wordpress version you can use Pinsights with. Any of the newer versions will work as well.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box front face">
                <h1>Q<span>4</span></h1>
                <p>WHO CAN SEE THE PINS?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>Only users who are logged in to your Wordpress site as administrators can see the pins you place.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box green_grid front face">
                <h1>Q<span>5</span></h1>
                <p>can i use this plugin for my personal website?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>Yes, you are allowed to use this plugin for both personal and commercial websites.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ques_ans_box">
          <div class="flip-container">
            <div class="flipper">
              <div class="question_box front face">
                <h1>Q<span>6</span></h1>
                <p>how many pins can i place?</p>
              </div>
              <div class="team_box back face">
                <div class="content_main show_main">
                  <p>As many as you‘d like! You have a virtually unlimited amount of pins you can place.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Ends Questions Section --> 
<!-- Starts banner bottom section -->
<section class="banner_main">
  <div class="banner_bottom_pinsight">
    <div class="container">
      <p><a href="#" title="Live Demo" class="live">Live Demo</a> OR <a href="#" title="Download" class="live">Download</a></p>
    </div>
  </div>
</section>
<!-- Ends banner bottom section --> 

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
</script> 
<script>
$(document).ready(function () {
    $('.bxslider').bxSlider();
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
</body>
</html>
