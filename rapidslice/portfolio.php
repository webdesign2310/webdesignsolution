<?php include_once("config.php"); ?>
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
  <div class="banner_blog banner_portfolio"> <img src="images/star_white.png" alt="Our Pride And Joy" title="Our Pride And Joy" width="40" height="38">
    <h1>Our Pride And Joy</h1>
    <a href="#recentwork" title="View Portfolio">View Portfolio</a> 
    <!--<a href="#" class="arrow_down" title="View Portfolio"><img src="images/banner_arrow_trans.png" alt="View Portfolio" width="50" height="31"></a>--> </div>
</section>
<!-- Ends banner top section --> 
<!-- Starts Recent Work section -->
<section class="faq boots_faq recent_work" id="recentwork">
  <div class="container">
    <h3><img src="images/recent_work_icon.png" alt="Recent Work" title="Recent Work" class="mr_righ20" width="45" height="50"/><span class="disply">Recent Work</span></h3>
    <ul class="bxslider">
      <li>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
            
              <div class="mask"> 
              <a href="projects/projects1.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a> 
               <p>
               <a title="View HTML" href="#">View HTML</a> / <a title="View CSS" href="#">View CSS</a></p>
               </div>
               
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects1.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">LAYEREDi Enterprise</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="projects/projects2.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects2.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">Loraberry.com</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="projects/projects3.php" data-keyboard="true" data-toggle="modal" data-target="#myModal"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5><a href="projects/projects3.php" data-keyboard="true" data-toggle="modal" data-target="#myModal">Form Funnel</a></h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        
        
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
              </span></a>
              <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
               </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </li>
      <li>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a> 
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
               </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a> 
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
               </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box boots_ro">
            <figure class="view view-third"><img src="images/recent_port.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>LAYEREDi Enterprise</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3,  Font-face<br>
                    Responsive Layout</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port1.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Loraberry.com</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts, Accordion,
                    WordPress Responsive Layout, <br>
                    JS Custom Forms, Lightbox</p>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="portfolio_box">
            <figure class="view view-third"><img src="images/recent_port2.jpg" alt=""/>
              <div class="mask"> <a href="#" title="View HTML / View CSS"><img src="images/port_hover_overlayboot.png" alt="" class="overlay"/> <span><img src="images/about_icon_white.png" alt="" width="31" class="portfolio_icon_img"/><br>
               </span></a>
               <p><a class="view_ank" href="#">View HTML</a> / <a href="#">View CSS</a></p>
                </div>
            </figure>
            <div class="content border_green">
              <div class="col-sm-12">
                <div class="content_txt"> <img src="images/plus_green.png" alt="plus" class="plus_top" width="41" height="41">
                  <h5>Form Funnel</h5>
                  <img src="images/dot_icon.png" alt="divider" title="divider" width="31" height="3">
                  <p>HTML5/CSS3, Google Fonts,<br>
                    Mobile friendly, JS Lightbox</p>
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
<!-- Ends Recent Work section --> 
<!-- Starts Socialize -->
<section class="socialize_section banner_bot_portfolio">
  <div class="container">
    <div class="inner_main">
      <h3><img src="images/get_started_icon.png" alt="Get Started On Your Next Project" title="Get Started On Your Next Project" width="43" height="50"/> Get Started On Your Next Project</h3>
      <div class="contact_us"> <span><a href="mailto:support@rapidslice.ca" title="Email"><img src="images/email_icon.png" alt="Email" width="44" height="43"/><br>
        Email</a></span><img src="images/seperator.png" alt="" width="12" height="31" class="seperator"/><span><a href="tel:+18553359546" title="Phone"><img src="images/phone_icon1.png" alt="Phone" width="44" height="43"/><br>
        Phone</a></span><span class="contact_btn"><img src="images/contact_btn_style.png" alt="" width="25" height="25" class="top"/><img src="images/contact_btn_style1.png" alt="" width="25" height="25" class="bot"/><a href="about_contact.php" title="CONTACT US">CONTACT US</a></span><span><a style="cursor:pointer;" id="hf-chat-foot_big" title="Live Chat"><img src="images/chat_icon.png" alt="Live Chat" width="44" height="43"/><br>
        Live Chat</a></span><img src="images/seperator.png" alt="" width="12" height="31" class="seperator"/><span><a href="client_area.php" title="Client Area"><img src="images/client_area.png" alt="Client Area" width="44" height="43"/><br>
        Client Area</a></span></div>
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
	$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        // Applying the top margin on modal dialog to align it vertically center
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
});
$('body').on('hidden.bs.modal', '.modal', function () {
  $(this).removeData('bs.modal');
});
</script>


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
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	</script>

</body>
</html>
