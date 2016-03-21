<?php
include_once("config.php");
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
  <div class="banner_abdes">
    <div class="container"> <img src="images/about_white_icon.png" alt="We Love What We Do" title="We Love What We Do" width="16" height="49">
      <h1>We Love What We Do</h1>
      <p>We also love people who love what they do. That‘s why the RapidSlice dream team tactically consists of the best and brightest individuals around. We are dedicated to providing a diverse, and continuosly growing, list of services across the web development spectrum. Agencies, businesses, freelancers, and everyone in between, can benefit from any one of our offerings. </p>
    </div>
  </div>
</section>
<!-- Ends banner top section --> 
<!-- Starts Talents section -->
<section class="talent">
  <div class="container">
    <h3><img src="images/talent.png" alt="Our Talents" title="Our Talents" class="mr_righ20" width="43" height="49"/><span>Our Talents</span></h3>
    <div class="work">
      <ul>
        <li>
          <div class="talent_icon"><a href="service_page.php" title="PSD to HTML"><img src="images/psd_html_icontalent.png" alt="PSD to HTML" width="64" height="57"/></a></div>
          <span><a href="service_page.php" title="PSD to HTML">PSD to HTML</a></span></li>
        <li>
          <div class="talent_icon"><a href="service_wordpress.php" title="Wordpress"><img src="images/wordpress_icontale.png" alt="Wordpress" width="59" height="60"/></a></div>
          <span><a href="service_psd_to_html.php" title="Wordpress">Wordpress</a></span></li>
        <li>
          <div class="talent_icon"><a href="service_joomla.php" title="Joomla"><img src="images/joomla_talent.png" alt="Joomla" width="56" height="53" class="mr_env"/></a></div>
          <span><a href="service_joomla.php" title="Joomla">Joomla</a></span></li>
        <li>
          <div class="talent_icon"><a href="service_magento.php" title="Magento"><img src="images/magento_talent.png" alt="Magento" width="55" height="65"/></a></div>
          <span><a href="service_magento.php" title="Magento">Magento</a></span></li>
        <li>
          <div class="talent_icon"><a href="service_email.php" title="PSD to Emails"><img src="images/ab_envelope_icon.png" alt="PSD to Emails" width="52" height="35" class="mr_env"/></a></div>
          <span><a href="service_email.php" title="PSD to Emails">PSD to Emails</a></span></li>
      </ul>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Ends Talents section --> 
<!-- Starts Team section -->
<section id="our_team_sec" class="info_sec team_sec">
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
<!-- Ends Team section --> 
<!-- Starts DNA section -->
<section class="talent">
  <div class="container">
    <h3><img src="images/our_dna.png" alt="Our DNA" title="Our DNA" class="mr_righ20" width="42" height="45"/><span>Our DNA</span></h3>
    <div class="dna">
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 dna_inner">
        <div class="accuracy">
          <figure><img src="images/accuracy.png" alt="ACCURACY" title="ACCURACY" width="64" height="64"></figure>
          <h2>ACCURACY</h2>
          <p>It‘s tremendously important to us that your website will do exactly what it‘s supposed to do while looking exactly as it should. Humans may not be perfect, but websites can be. </p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 dna_inner">
        <div class="accuracy">
          <figure> <img src="images/ambition.png" alt="AMBITION" title="AMBITION" width="64" height="64"></figure>
          <h2>AMBITION</h2>
          <p>At it‘s core, RapidSlice is fueled by the desire to keep making things better by making better things. We are all lifelong learners who crave knowledge and reward imagination. </p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 dna_inner">
        <div class="accuracy">
          <figure><img src="images/reliabilty.png" alt="RELIABILITY" title="RELIABILITY" width="63" height="53"></figure>
          <h2>RELIABILITY</h2>
          <p>We recognize the confidence that our clients place in us to deliver a finished product on time, and done right. Our response is full transparency, accessible customer support, and a complimentary 30 days of assistance. </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<!-- Ends DNA section --> 


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
</body>
</html>
