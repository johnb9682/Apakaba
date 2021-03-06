<!doctype html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7" lang="en"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8"> 
  
  <title>Nova is a professional and flexible HTML5 theme by WebMonarchy.com</title>
  <meta name="description" content="This is nova theme clean and responsive HTML5 theme by WebMonarchy.com. Build a superb looking websites that looks great on desktops, iPads and iPhones! Nova impresses with its beauty and simplicity. Coded in HTML5 & CSS3 - future technology for today and tomorrow. Unique & clean pre made theme skins and easy re-skinning capabilities. ">
  
  <!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
  <!-- <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script> -->

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/superfish.css" media="screen"  />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
  <link rel="stylesheet" href="css/skin.css" media="screen"  />
  <link rel="stylesheet" href="css/custom-rebuild.css" media="screen"  />
  
 <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <script type="text/javascript">	

   function setCookie(c_name,value,exdays)
		{
		var exdate=new Date();
		exdate.setDate(exdate.getDate() + exdays);
		var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
		document.cookie=c_name + "=" + c_value;
		}
		
	function set_skin(set_skin){
		setCookie("skinme",set_skin,1);
	}
	</script>
    
  <link rel="stylesheet" href="css/skins/sweet-pink.css" media="screen">
    

  <!-- for google map -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript">
    function initialize() {
      var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
      var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
  
      var map = new google.maps.Map(document.getElementById("google_map"), myOptions);
  
      var contentString = '<div id="content">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<h3 id="firstHeading" class="firstHeading">Charismatic Media</h3>'+
          '<div id="bodyContent">'+
          '<p>Innovation Park Limerick<br />Suite 44, Mill Road<br />Limerick, Ireland ' +
          '</div>'+
          '</div>';
          
      var infowindow = new google.maps.InfoWindow({
          content: contentString
      });
  
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'Uluru (Ayers Rock)'
      });
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
      });
    }
  
  </script>

  </head>

<body onLoad="initialize()">
<div id="container">
    <header>
    	<section class="header_fix">
            <a class="logo" href="index.php"></a><!-- /.logo --> 
            <section class="contact_detail">Contact Line: 01 234 421</section><!-- /.contact_detail -->
            <section class="social_links">
            	<a href="" class="linkedin"></a>
            	<a href="" class="rss"></a>
            	<a href="" class="google"></a>
            	<a href="" class="twitter"></a>
            	<a href="" class="facebook"></a>
            </section><!-- /.social_links -->
        </section><!-- /.header_fix --> 
    </header><!-- /header -->
    
    <nav>
    	<section class="nav_fix">
            <section class="nav_fix_in">
            <a href="http://themeforest.net/item/nova-professional-flexible-html5-template/2448755?ref=vesthar" class="buynow" target="_blank">BUY NOW</a>
            
            <ul class="main-menu">
                <li><a href="index.php">Home</a>
                  <ul>
                      <li><a href="index.php">Home - Flexslider</a></li>
                      <li><a href="index-slides-nocaption.php">Home - Slides No Caption</a></li>
                      <li><a href="index-slides.php">Home - Slides with Caption</a></li>
                      <li><a href="index-elastic.php">Home - Elastic Slider</a></li>
                      <li><a href="index-static-image.php">Home - Static Image</a></li>
                      <li><a href="index-nobanner.php">Home - No Banner</a></li>
                  </ul>
                </li>
                <li><a href="#">Pre-Made Skins</a>
                  <ul  id="skins">
                      <li><a href="index.php" onClick="set_skin('original'); ">Original</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('original-wide'); ">Original Wide</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('dark'); ">Dark</a></li>
                      <li><a href="index-slides.php" onClick="set_skin('dark-wide'); ">Dark Wide</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('minimal'); ">Minimal</a></li>
                      <li><a href="index.php" onClick="set_skin('minimal-wide'); ">Minimal Wide</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('elegant'); ">Elegant</a></li>
                      <li><a href="index-slides.php" onClick="set_skin('funy-yellow'); ">Funy Yellow</a></li>
                      <li><a href="index.php" onClick="set_skin('paper'); ">Paper</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('eco-wide'); ">Eco Wide</a></li>
                      <li><a href="index-slides-nocaption.php" onClick="set_skin('balance-wide'); ">Balance Wide</a></li>
                      <li><a href="index-elastic.php" onClick="set_skin('sky-wide'); ">Sky Wide</a></li>
                      <li><a href="index.php" onClick="set_skin('sweet-pink'); ">Sweet Pink</a></li>
                   </ul>
                </li>
                <li><a href="typography.php">Typography</a>
                  <ul>
                      <li><a href="buttons-messages.php">Buttons &amp; Messages</a></li>
                      <li><a href="accordion-tabs-tables.php">Accordion, Tabs &amp; Tables</a></li>
                      <li><a href="columns.php">Columns</a></li>
                  </ul>
                </li>
                <li><a href="pricing-tables.php">Pricing</a></li>
                <li><a href="page-sidebar_left.php">Page Styles</a>
                  <ul>
                      <li><a href="page-sidebar_left.php">Sidebar Left</a></li>
                      <li><a href="page-sidebar_right.php">Sidebar Right</a></li>
                      <li><a href="page-no-sidebar.php">No Sidebar - Feature Image</a></li>
                      <li><a href="page-about.php">About Page</a></li>
                      <li><a href="team.php">Team / Staff</a></li>
                      <li><a href="jobs.php">Jobs </a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="404.php">404 Page</a></li>
                      <li><a href="landing-page.php">Landing Page</a></li>
                  </ul>
                </li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="portfolio-4columns-filter.php">Portfolio / Gallery</a>
                  <ul>
                  	  <li><a href="#">Portfolio / Gallery with Filter</a>
                      	<ul>
                      		<li><a href="portfolio-1columns-filter.php">1 Column With Filter</a></li>
                      		<li><a href="portfolio-2columns-filter.php">2 Columns With Filter</a></li>
                      		<li><a href="portfolio-3columns-filter.php">3 Columns With Filter</a></li>
                      		<li><a href="portfolio-4columns-filter.php">4 Columns With Filter</a></li>
                         </ul>
                      </li>
                  	  <li><a href="#">Portfolio / Gallery with Pagination</a>
                      	<ul>
                      		<li><a href="portfolio-1columns-pagination.php">1 Column With Pagination</a></li>
                      		<li><a href="portfolio-2columns-pagination.php">2 Columns With Pagination</a></li>
                      		<li><a href="portfolio-3columns-pagination.php">3 Columns With Pagination</a></li>
                      		<li><a href="portfolio-4columns-pagination.php">4 Columns With Pagination</a></li>
                         </ul>
                      </li>
                      <li><a href="portfolio-single-image-full.php">Single Project - Full Image</a></li>
                      <li><a href="portfolio-single-slider-full.php">Single Project - Full Slider</a></li>
                      <li><a href="portfolio-single-video-full.php">Single Project - Full Video</a></li>
                      <li><a href="portfolio-single-images-2columns.php">Single Project - Image 2 Columns</a></li>
                      <li><a href="portfolio-single-slider-2columns.php">Single Project - Slider 2 Columns</a></li>
                      <li><a href="portfolio-single-video-2columns.php">Single Project - Video 2 Columns</a></li>
                  </ul>
                 </li>
                <li><a href="blog-list.php">Blog</a>
                  <ul>
                      <li><a href="blog-gallery.php">Slider - Single Blog</a></li>
                      <li><a href="blog-image.php">Image - Single Blog</a></li>
                      <li><a href="blog-video.php">Video - Single Blog</a></li>
                  </ul>
                </li>
                <li class="current_page_item"><a href="contact.php">Contact</a></li>
            </ul>
        	</section><!-- /.nav_fix_in -->
        </section><!-- /.nav_fix -->
    </nav><!-- /nav --> 
        
    <section class="page_title_container">
    <section class="page_title">
        <h1>Contact Us</h1>
        <h2>We'd love to hear from you</h2>
    </section><!-- /.page_title -->
    </section><!-- /.page_title_container -->
    
	<section id="content-container">
    	<section class="content_container_fix">
        
          <section class="full_width no_margin">  
        	
            <div id="google_map"></div>
            
            <section class="divider_line"></section>
            
            <section class="three_fourth content-left" id="contact">
            
				            
                <h2>Please fill the form below or just call us now</h2>
                
                <p>Nam accumsan nisl vitae urna porttitor a rutrum. Curabitur pharetra magna faucibus magna laoreet sit amet suscipit tellus vulputate. Mauris magna turpis, ullamcorper nec dictum vel, fringilla sed justo. Nulla non massa at lectus posuere consequat sed quis orci. Praesent aliquam posuere lacus mattis convallis. Phasellus vitae massa massa, vel accumsan nibh. Integer quis nibh velit, condimentum elementum.</p>
				
				<div id="contact-form">
									
					<form id="contact-us" action="contact.php" method="post">
						<div class="formblock">
							<label class="screen-reader-text">Your Name (required)</label>
							<input type="text" name="contactName" id="contactName" value="" class="txt requiredField" placeholder="Name:" />
													</div>
                        
						<div class="formblock">
							<label class="screen-reader-text">Your Email (required)</label>
							<input type="text" name="email" id="email" value="" class="txt requiredField email" placeholder="Email:" />
													</div>
                        
						<div class="formblock">
							<label class="screen-reader-text">Message  (required)</label>
							 <textarea name="comments" id="commentsText" class="txtarea requiredField" placeholder="Message:"></textarea>
													</div>
                        
							<input name="submit" type="submit" id="contact-submit" value="Send Email" />
							<input type="hidden" name="submitted" id="submitted" value="true" />
					</form>			
				</div>
				
				             
             </section><!-- /.three_fourth content-->
                
                
             <section class="one_fourth last">
                
                <section class="widget">
                    <h3>Contact Details</h3>
                    <p>
                    <strong><em>Company Location</em></strong><br />
                      Charismatic Media<br />
                      Innovation Park Limerick<br />
                      Suite 44, Mill Road<br />
                      Limerick, Ireland
                     </p>
                     
                      <p>
                      <strong><em>How To Contact Us</em></strong><br />
                      Email: info@yourdomain.com<br />
                      Phone: 00353 123 1353
                      </p>
                      <p>
                      <strong><em> Office Hours</em></strong><br />
                      Mondays-Friday: 09:00 - 18:00<br />
                      Saturday: 10:00 - 15:00
                      </p>
                </section><!-- /.widget -->	
                
                <section class="widget">
                    <h3>Brochure Widget</h3>
                    <a href="" class="pdf_brochure">Dowload Our Company Brochure in PDF Format</a>
                </section><!-- /.widget -->
             
             
            </section><!-- /.one_fourth -->
                
         </section><!-- /.full_width -->
         
         <section class="clear_full"></section><!-- /.clear_full --> 
            
        </section><!-- /.content_container_fix --> 
    </section><!-- /#content-container -->    

    <footer>
    	<section class="footer_fix">
            <section class="footer_widgets">
            
            	<section class="footer_widget_12">
                	<h3>Footer text Widget</h3>
                    <article>
                    <img src="images/icons/retina-icons/globe_64.png" class="float-left" alt="globe" />
                    <p>This is nova theme clean and professional HTML5 theme by WebMonarchy.com. Build a superb looking websites that looks great everywhere!
					</p>
                    <p>Nova impresses with its beauty and simplicity.  Coded in HTML5 &amp; CSS3 - future technology for today and tomorrow. Unique &amp; clean
pre made theme skins and easy re-skinning capabilities. <a href="">Get Nova Now &rarr;</a>
					</p>
                    </article>
                </section><!-- /.footer_widget_12 -->
                
                <section class="footer_widget_14">
                	<h3>Featured Pages</h3>
                    <article>
                    <ul>
                    	<li><a href="index.php">+  Main Home Page </a></li>
						<li><a href="index-slides.php">+  Slides Home Page </a></li>
                        <li><a href="index-elastic.php">+  Elastic Home Page </a></li>
                        <li><a href="portfolio-4columns-filter.php">+  Portfolio Page </a></li>
                        <li><a href="pricing-tables.php">+  Our Prices Page </a></li>
					</ul>
                    </article>
                </section><!-- /.footer_widget_14 -->
                
                <section class="footer_widget_14">
                	<h3>Contact Information</h3>
                    <article>
                          <p>Charismatic Media<br>
                          Innovation Park Limerick<br>
                          Suite 44, Mill Road<br>
                          Limerick, Ireland
						 </p>
                         
                          <p>
                          <strong><em>How To Contact Us</em></strong><br>
                          Email: info@yourdomain.com<br>
                          Phone: 00353 123 1353
                          </p>
                    </article>
                </section><!-- /.footer_widget_14 -->
            
            </section><!-- /.footer_widgets --> 
            
            <section class="footer_meta">
            	<span class="copyright">All rights reserved. &copy; 2012 NOVA Theme</span>
                <ul class="footer_menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="typography.php">Typography</a></li>
                    <li><a href="pricing-tables.php">Pricing</a></li>
                    <li><a href="page-sidebar_left.php">Page Styles</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="portfolio-4columns-filter.php">Portfolio / Gallery</a></li>
                    <li><a href="blog-list.php">Blog</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="buynow"><a href="http://themeforest.net/item/nova-professional-flexible-html5-template/2448755?ref=vesthar" target="_blank">BUY NOW</a></li>
                </ul><!-- /.footer_menu --> 
            </section><!-- /.footer_meta --> 
            
        </section><!-- /.footer_fix --> 
    </footer><!-- /footer -->
</div> <!-- /#container -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
  
  <script type="text/javascript">
   
/*-------------------------------
* jQuery Plugin: Super Fish Menu
-------------------------------*/

    jQuery(document).ready(function($){ 
        $("ul.main-menu").supersubs({ 
            minWidth:    12,   // minimum width of sub-menus in em units 
            maxWidth:    150,   // maximum width of sub-menus in em units 
            extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
                               // due to slight rounding differences and font-family 
        }).superfish({ 
            delay:       300,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'normal',                          // faster animation speed 
            autoArrows:  false,                           // disable generation of arrow mark-up 
            dropShadows: true                            // disable drop shadows 
        });  // call supersubs first, then superfish, so that subs are 
                         // not display:none when measuring. Call before initialising 
                         // containing tabs for same reason. 
    }); 
  </script>
	<script type="text/javascript">
	<!--//--><![CDATA[//><!--
	$(document).ready(function() {
		$('form#contact-us').submit(function() {
			$('form#contact-us .error').remove();
			var hasError = false;
			$('.requiredField').each(function() {
				if($.trim($(this).val()) == '') {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">Your forgot to enter your '+labelText+'.</span>');
					$(this).addClass('inputError');
					hasError = true;
				} else if($(this).hasClass('email')) {
					var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
					if(!emailReg.test($.trim($(this).val()))) {
						var labelText = $(this).prev('label').text();
						$(this).parent().append('<span class="error">Sorry! You\'ve entered an invalid '+labelText+'.</span>');
						$(this).addClass('inputError');
						hasError = true;
					}
				}
			});
			if(!hasError) {
				var formInput = $(this).serialize();
				$.post($(this).attr('action'),formInput, function(data){
					$('form#contact-us').slideUp("fast", function() {				   
						$(this).before('<div class="message-box green"><p>Thank you! Your email has been delivered. We will contact with you shortly.</p></div>');
					});
				});
			}
			
			return false;	
		});
	});
	//-->!]]>
</script>
  
  <script src="js/libs/ui/jquery.ui.core.js"></script>
  <script src="js/libs/ui/jquery.ui.widget.js"></script>
  <script src="js/libs/ui/jquery.ui.accordion.js"></script>
  <script src="js/libs/ui/jquery.ui.tabs.js"></script>
  <script src="js/libs/superfish/hoverIntent.js"></script> 
  <script src="js/libs/superfish/superfish.js"></script> 
  <script src="js/libs/superfish/supersubs.js"></script>
  <script src="js/libs/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="js/libs/jquery.easing.1.3.js"></script>
  <script src="js/libs/slides.min.jquery.js"></script>
  <script src="js/libs/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
    
  <script src="js/scripts.js"></script>
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/helper.js"></script>
  <!-- end scripts-->


</body>
</html>