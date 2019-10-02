<?php 
	include('includes/header.php');
	include('includes/dbconnect.php');

	if($_SERVER['REQUEST_METHOD'] == 'GET') {
		$q = $_GET['q'];
		$sql = "SELECT * FROM tbl_purohit INNER JOIN tbl_location ON tbl_purohit.location_id = tbl_location.id AND tbl_location.name LIKE '".$q."'";
		$result = mysqli_query($con,$sql);
		$num_rows = mysqli_num_rows($result);

	}
?>


<body class="home page page-id-203 page-template page-template-page-home-php">
	<div id="motopress-main" class="main-holder">
		<!--Begin #motopress-main-->
		<header class="motopress-wrapper header">
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php"data-motopress-wrapper-type="header" data-motopress-id="5d6958137e636">
						
						<div class="row logo-wrap">
							<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-logo.php">
								<!-- BEGIN LOGO -->
								<div class="logo pull-left">
									<a href="https://livedemo00.template-help.com/wordpress_48550/" class="logo_h logo_h__img"><img src="images/ePurohit_logo_small.png" alt="Hindu Temple" title=""></a>
								</div>
								<!-- END LOGO -->	
							</div>
							<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
								<!-- BEGIN MAIN NAVIGATION -->
								<nav class="nav nav__primary clearfix">
									<!-- <div class="search-form__h">
										<form method="post" action="index.php" accept-charset="utf-8">
											<input type="text" name="search" id="search_bar" placeholder="Search" autocomplete="off">
											<div id="suggestion"></div>
										</form>
									</div> -->



									<div class="search-form__h">
										<a href="#"><i class="icon-search"></i></a>
										<form id="search-header" class="navbar-form pull-right" method="post" action="index.php" accept-charset="utf-8">
											<input type="text" name="search" autocomplete="off" placeholder="search" class="search-form_it" id="search_bar">
											<input type="submit" value="Go" id="search-form_is" class="search-form_is btn btn-primary">
											<div id="suggestion"></div>
										</form>
									</div>
									
								</nav>
								<!-- END MAIN NAVIGATION -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="motopress-wrapper content-holder clearfix">
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
						<div class="row">
							<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
								<div class="slider_off">
									<!--slider off-->
								</div>
							</div>
						</div>
						<div class="row">
							<div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
								<div id="post-203" class="post-203 page type-page status-publish hentry page">

									<div class="row">
										<div class="span12">
											<div class="title-box clearfix ">
												<?php if($num_rows){?>
												<h2 class="title-box_primary">Search Results</h2>
												<h3 class="title-box_secondary"><?php echo $q; ?></h3>
												<?php }else{?>
												<h2 class="title-box_primary">No Result Found</h2>
												<?php }?>
											</div>
											<!-- //.title-box -->
										</div>

										<?php 
											while($row = mysqli_fetch_array($result)){
										?>

										<div class="span3">
											<div class="service-box services-home-two">
												<figure class="icon">
													<img src="images/chanakya.png" alt="" />
												</figure>
												<div class="service-box_body">
													<h2 class="title"><?php echo $row[1]; ?></h2>
													<div class="service-box_txt">
														Contact : <?php echo $row[5]; ?><br>
														<!-- Address : <?php echo $row[3]; ?><br> -->
														<!-- PIN : <?php echo $row[4]; ?><br> -->
														Age : <?php echo $row[2]; ?>
														Grade : <?php echo $row[7]; ?>
														
														<div>
															<a href="<?php echo 'booking.php?id='.$row[0]; ?>">
															<input class="btn-primary" type="submit" value="Book">
															</a>
														</div>
													</div>

												</div>
											</div>
											<!-- /Service Box -->
										</div>


										<?php
											}
										?>


									</div>






									<!-- .row (end) -->
									<div class="darker-box pad-2">
										<div class="row">
											<div class="span6">
												<p><iframe src="//player.vimeo.com/video/27551252?title=0&amp;byline=0&amp;portrait=0" height="313" width="560" allowfullscreen="" frameborder="0"></iframe></p>
											</div>
											<div class="span6">
												<div class="service-box services-home-three">
													<div class="service-box_body">
														<h2 class="title">The Hindu Temple </h2>
														<h5 class="sub-title">is a greatest achievement and an asset of Hindu community in the area. Your contribution helps the organization to serve our community better. Please take the step today. </h5>
														<div class="service-box_txt">Quisque nulla. Vestibulum libero nislalesu. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean eros. Vestibunte ipsum primis in faucibus orci luctus et ultrices posuere a Curae; Suspendisse sollicitudin veed leo. Ut pharetra augue nec augue. Nam elit magna. </div>
														<div class="btn-align"><a href="https://livedemo00.template-help.com/wordpress_48550/news-media/" title="view all videos" class="btn btn-inverse btn-normal btn-primary " target="_self">view all videos</a></div>
													</div>
												</div>
												<!-- /Service Box -->
											</div>
										</div>
										<!-- .row (end) -->
									</div>
									<div class="clear"></div>
									<!--.pagination-->
								</div>
								<!--#post-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&language=en"></script>
		<footer class="motopress-wrapper footer">
			<div class="container">
				<div class="row">
					<div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="5d695813f006f">
						<div class="row footer-widgets">
							<div class="span7 border-padding">
								<div data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
									<div id="text-5" class="">
										<h4>Quisque nulla libero porta</h4>
										<div class="textwidget">Vestibulum iaculis lacinia est. Proin dictum elemtum velit. Fequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congueentum nisl. Mauris accumsnulla vel diam. Sed in lacus ut enim adipiscing aliquet. In pede mi, aliquet sit amet, smod in, auctor ut, ligula. 
											Aliquam dapibus tincidunt metus. 
										</div>
									</div>
								</div>
								<div class="social-nets-wrapper bottom" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
									<ul class="social">
										<li class="twitter"><a href="#" title="twitter"><i class="icon-twitter"></i></a></li>
										<li class="google-plus"><a href="#" title="google-plus"><i class="icon-google-plus"></i></a></li>
										<li class="facebook"><a href="#" title="facebook"><i class="icon-facebook"></i></a></li>
										<li class="pinterest"><a href="#" title="pinterest"><i class="icon-pinterest"></i></a></li>
										<li class="linkedin"><a href="#" title="linkedin"><i class="icon-linkedin"></i></a></li>
										<li class="rss"><a href="#" title="rss"><i class="icon-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="span5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
								<div id="newsletterwidget-2" class="visible-all-devices ">
									<h4>Newsletter signup</h4>
									Latest information only. Day by day
									<script type="text/javascript">
										//<![CDATA[
										if (typeof newsletter_check !== "function") {
										window.newsletter_check = function (f) {
										    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
										    if (!re.test(f.elements["ne"].value)) {
										        alert("The email is not correct");
										        return false;
										    }
										    if (f.elements["ny"] && !f.elements["ny"].checked) {
										        alert("You must accept the privacy statement");
										        return false;
										    }
										    return true;
										}
										}
										//]]>
									</script>
									<div class="newsletter newsletter-widget">
										<script type="text/javascript">
											//<![CDATA[
											if (typeof newsletter_check !== "function") {
											window.newsletter_check = function (f) {
											    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
											    if (!re.test(f.elements["ne"].value)) {
											        alert("The email is not correct");
											        return false;
											    }
											    if (f.elements["ny"] && !f.elements["ny"].checked) {
											        alert("You must accept the privacy statement");
											        return false;
											    }
											    return true;
											}
											}
											//]]>
										</script>
										<form action="https://livedemo00.template-help.com/wordpress_48550/wp-content/plugins/newsletter/do/subscribe.php" onsubmit="return newsletter_check(this)" method="post">
											<input type="hidden" name="nr" value="widget"/>
											<p><input class="newsletter-email" type="email" required name="ne" value="enter your e-mail address" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue"/></p>
											<p><input class="newsletter-submit" type="submit" value="Sign Up"/></p>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="span12 footer-info-wrap" data-motopress-type="static" data-motopress-static-file="static/static-footer-info.php">
								<div class="footer-info">
									<div class="label-name">Feel free to contact us:</div>
									<div class="phone"><i class="icon-phone"></i>+1 959 603 6035</div>
									<div class="mail"><i class="icon-envelope-alt"></i><a href="/cdn-cgi/l/email-protection#4d202c24210d292820222124232663223f2a"><span class="__cf_email__" data-cfemail="ee838f8782ae8a8b838182878085c0819c89">[email&#160;protected]</span></a></div>
								</div>
							</div>
						</div>
						<div class="row copyright">
							<div class="span7" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
								<nav class="nav footer-nav">
									<ul id="menu-footer-menu" class="menu">
										<li id="menu-item-1965" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item menu-item-1965"><a href="https://livedemo00.template-help.com/wordpress_48550/">Home</a></li>
										<li id="menu-item-1970" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1970"><a href="https://livedemo00.template-help.com/wordpress_48550/about-temple/">About Temple</a></li>
										<li id="menu-item-1969" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1969"><a href="https://livedemo00.template-help.com/wordpress_48550/services/">Services</a></li>
										<li id="menu-item-1966" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1966"><a href="https://livedemo00.template-help.com/wordpress_48550/news-media/">News &#038; Media</a></li>
										<li id="menu-item-1968" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1968"><a href="https://livedemo00.template-help.com/wordpress_48550/portfolio/">Gallery</a></li>
										<li id="menu-item-1967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1967"><a href="https://livedemo00.template-help.com/wordpress_48550/contacts/">Contacts</a></li>
									</ul>
								</nav>
							</div>
							<div class="span5" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
								<div id="footer-text" class="footer-text">
									<a href="https://livedemo00.template-help.com/wordpress_48550/" title="" class="site-name">Hindu Temple</a><span>&copy; 2019 <em></em> <a href="https://livedemo00.template-help.com/wordpress_48550/privacy-policy/" title="Privacy Policy">Privacy Policy</a></span>
									<!-- {%FOOTER_LINK} -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<a href="#top"><span></span></a>		
		</p>
	</div>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/plugins/contact-form-7/includes/js/jquery.form.min.js?ver=3.46.0-2013.11.21'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.6'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/superfish.js?ver=1.5.3'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.mobilemenu.js?ver=1.0'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.magnific-popup.min.js?ver=0.9.3'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/plugins/cherry-plugin/lib/js/FlexSlider/jquery.flexslider-min.js?ver=2.1'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jplayer.playlist.min.js?ver=2.3.0'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.jplayer.min.js?ver=2.4.0'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.debouncedresize.js?ver=1.0'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.ba-resize.min.js?ver=1.1'></script>
	<script type='text/javascript' src='https://livedemo00.template-help.com/wordpress_48550/wp-content/themes/CherryFramework/js/jquery.isotope.js?ver=1.5.25'></script>
</body>
<?php include('includes/footer.php'); ?>