<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Title</title>
		<!-- fonts  -->
		<!-- <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'> -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googl 	eapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<!-- bootstrap -->
		<link rel="stylesheet" type="text/css" href="tools/bootstrap/bootstrap.min.css">
		<!-- font awesome  -->
		<link rel="stylesheet" type="text/css" href="tools/css/font-awesome.css">
		<!-- style -->
		<link href="assets/style/css/style.css" rel="stylesheet">
		<!-- scripts -->
		<script src = "assets/js/jquery-3.1.0.js"></script>
		<script src = "assets/js/main.js"></script>
		<script src = "assets/js/getstarted.js"></script>
		<script src = "assets/js/clients.js"></script>
		<script src = "assets/js/news.js"></script>
		<script src = "assets/js/rich.js"></script>
		<script src = "assets/js/features.js"></script>
		<script src = "assets/js/login.js"></script>
		<script src = "assets/js/award.js"></script>
		<script src = "assets/js/quotes.js"></script>
		<script src = "assets/js/developers.js"></script>
	</head>
	<body>
		<?php
			include 'php/db.php';
			include "php/src.php";
		?>
		<!-- menu -->
		<section id="menu">
			<div id="topBar" class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-1 leftMenu">
							<a href="index.html">
								<p>Startup<span>ly</span></p>
							</a>
						</div>
						<div class="col-md-8 centerMenu">
							<ul class="topBar-lists">
								<li class="active activatable">
									<a href="#">
										HOME
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										ABOUT
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										FEATURES
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										PRICES
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										FEEDBACK
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										TEAM
									</a>
								</li>
								<li class="activatable">
									<a href="#">
										CONTACTS
									</a>
								</li>
								<li class="slideDown-li">
									<a href="#">
										EXTRA <i class="fa fa-caret-down" aria-hidden="true"></i>
									</a>
									<ul class="hidden-ul">
										<li class="a">
											<a href="#">
												HOMEPAGES
											</a>
											<i class="fa fa-caret-right icon-right" aria-hidden="true"></i>
											<ul class="secondhl">
												<li>
													<a href="#">
														DEFAULT
													</a>
												</li>
												<li>
													<a href="#">
														CLICKTHROUGH
													</a>
												</li>
												<li>
													<a href="#">
														COLORED
													</a>
												</li>
												<li>
													<a href="#">
														FAST REGISTRATION
													</a>
												</li>
												<li>
													<a href="#">
														PROMO
													</a>
												</li>
												<li>
													<a href="#">
														WAITING LIST
													</a>
												</li>
												<li>
													<a href="#">
														VIDEO BACKGROUND
													</a>
												</li>
												<li>
													<a href="#">
														YOUTUBE EMBED
													</a>
												</li>
												<li>
													<a href="#">
														VIMEO EMBED
													</a>
												</li>
											</ul>
										</li>
										<li class="b">
											<a href="#">
												BLOG <i class="fa fa-caret-right" aria-hidden="true"></i>
											</a>
											<ul class="thirdhl">
												<li class="jfc">
													<a href="#" class="justforcolor">LIST</a>
												</li>
												<li class="jfc2">
													<a href="#" class="justforcolor2">POST</a>
												</li>
											</ul>
										</li>
										<li class="c">
											<a href="#">
												ECOMMERCE <i class="fa fa-caret-right" aria-hidden="true"></i>
											</a>
											<ul class="fourthhl">
												<li class="">
													<a href="#">
														PRODUCT GRID
													</a>
												</li>
												<li>
													<a href="#">
														PRODUCT LIST
													</a>
												</li>
												<li>
													<a href="#">
														PRODUCT PAGE
													</a>
												</li>
												<li>
													<a href="#">
														CART CHECKOUT
													</a>
												</li>
												<li>
													<a href="#">
														PAYMENT CONFIRMATION
													</a>
												</li>
											</ul>
										</li>
										<li class="d">
											<a href="#">
												REGISTRATION
											</a>
										</li>
										<li class="e">
											<a href="#">
												FORMS
											</a>
										</li>
										<li class="f">
											<a href="#">
												SHORTCODES
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-md-3 pull-right rightMenu">
							<ul>
								<li>
									<a href="#">LOGIN</a>
								</li>
								<li>
									<input type="button" name="" class="btn" value="SIGN UP">
								</li>
							</ul>
						</div>
						<div class="col-offset-7 col-md-2 bar">
							<div class="smthg">
								<div class="bar-line"></div>
								<div class="bar-line"></div>
								<div class="bar-line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div id="getStarted">
				<div class="gsfadeIn">
					<p>Do not wait - <span>launch</span> your startup now!</p>
					<h5>this tempate is flexible enough to suit any kind of startup or new business</h5>
					<ul>
						<li>
							<button id="gsbtn">
							<i class="fa fa-shopping-cart" aria-hidden="true"></i> GET STARTED
							</button>
						</li>
						<li>
							<button id="gsbtn1">TAKE TOUR</button>
						</li>
					</ul>
				</div>
				<div class="rightBarMenu">
					<div class="scroll-right">
						<div class="rightBarMenu-list">
							<ul>
								<li>
									<a href="#">HOME</a>
								</li>
								<li>
									<a href="#">ABOUT</a>
								</li>
								<li>
									<a href="#">FEATURES</a>
								</li>
								<li>
									<a href="#">PRICES</a>
								</li>
								<li>
									<a href="#">FEEDBACK</a>
								</li>
								<li>
									<a href="#">TEAM</a>
								</li>
								<li>
									<a href="#">CONTACTS</a>
								</li>
								<li>
									<a href="#">EXTRA</a>
								</li>
								<li>
									<a href="#">LOGIN</a>
								</li>
								<li>
									<button>SIGN UP</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</section>
		<section id="clients">
			<div class="container cclients">
				<div class="col-md-offset-1 col-md-12 cclients2">
					<div class="col-md-2 odd">
						<img src="assets/img/logo.png">
					</div>
					<div class="col-md-2 even">
						<img src="assets/img/logo.png">
					</div>
					<div class="col-md-2 odd">
						<img src="assets/img/logo.png">
					</div>
					<div class="col-md-2 even">
						<img src="assets/img/logo.png">
					</div>
					<div class="col-md-2 odd">
						<img src="assets/img/logo.png">
					</div>
				</div>
			</div>
		</section>
		
		<section id="news">
			<div class="news-first">
				<div class="news-first-button">
					<div class="news-frst-btns">FIRST TAB</div>
					<div class="news-frst-btns">SECOND TAB</div>
					<div class="news-frst-btns">THIRD TAB</div>
				</div>
			</div>
			<div class="news-sec">
				<div class="news-sec-left">
					<img src='<?php my_pic(); ?>' alt="">
				</div>
				<div class="news-sec-right">
					<div class="news-sec-right-top">
						<p> <?php my_header(); ?> </p>
					</div>
					<div class="news-sec-right-sec">
						<h4> <?php my_txt(); ?> </h4>
					</div>
					<div class="news-sec-right-third">
						<h4> <?php my_txt();  ?> </h4>
					</div>
					<div class="news-sec-right-buttons">
						<ul>
							<li><button>GET TEMPLATE</button></li>
							<li>
								<button>SEE ELEMENTS</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="news-third">
				<div class="col-md-6 news-third-left">
					
					<h4> <?php my_txt(); ?> </h4>
				</div>
				<div class="col-md-6 news-third-right">
					<img src = "<?php  ?>">
				</div>
			</div>
			<div class="newsFourth">
				<div class="col-md-6 news-fourth-left">
					<img src="assets/img/helmet.jpg">
				</div>
				<div class="col-md-6 news-fourth-right">
					
					<div class="nfrs">
						<h4><?php my_header(); ?> </h4>
					</div>
					<div class="nfrb">
						<h4><?php my_txt();  ?> </h4>
					</div>
				</div>
			</div>
		</section>
		
		<section id="rich">
			<div class="container">
				<div class="col-md-3">
					<div class="rich-list rlfirst">
						<p>LOREM DOLOR</p>
						<h4>Sit amet,consectetur adipiscing elit hac divisione rem ipsam prorsus</h4>
					</div>
					<div class="rich-list rlsec">
						<p>LOREM DOLOR</p>
						<h4>Sit amet,consectetur adipiscing elit hac divisione rem ipsam prorsus</h4>
					</div>
					<div class="rich-list rlthird">
						<p>LOREM DOLOR</p>
						<h4>Sit amet,consectetur adipiscing elit hac divisione rem ipsam prorsus</h4>
					</div>
				</div>
				<div class="col-md-9">
					<img src="assets/img/rich_features_1.png" id="richImg" alt="">
				</div>
			</div>
		</section>
		<section id="features">
			<div class="container">
				<div class="row features-top">
					<div class="col-md-3">
						<div><i class="fa fa-cloud-download" aria-hidden="true"></i></div>
						<p>FEATURE 1</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
						<p>FEATURE 2</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-desktop" aria-hidden="true"></i></div>
						<p>FEATURE 3</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<p>FEATURE 4</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
				</div>
				<div class="row features-bottom">
					<div class="col-md-3">
						<div><i class="fa fa-magic" aria-hidden="true"></i></div>
						<p>FEATURE 5</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-bar-chart" aria-hidden="true"></i></div>
						<p>FEATURE 6</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-shield" aria-hidden="true"></i></div>
						<p>FEATURE 7</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
					<div class="col-md-3">
						<div><i class="fa fa-star-o" aria-hidden="true"></i></div>
						<p>FEATURE 8</p>
						<h5>Sit amet, consectetur adipiscing elit. In hac divisione rem ipsam prorsus probo elegantiam desidero.</h5>
					</div>
				</div>
			</div>
		</section>
		<section id="login">
			<!-- 147 -->
			<div class="container">
				<div class="col-md-12">
					<div class="col-md-5 login-left">
						<div class="row">
							<div class="col-md-12">
								<p>GET LIVE UPDATES</p>
							</div>
							<div class="col-md-12">
								<h5>No spam promise - only latest news and prices!</h5>
							</div>
						</div>
					</div>
					<div class="col-md-7 login-right">
						<ul>
							<li>
								<input type="text" class="feature-txt" placeholder="Your name">
							</li>
							<li>
								<input type="text" class="feature-txt" placeholder="your@email.com" style="width:250px">
							</li>
							<li>
								<input type="submit" class="feature-btn" value="SUBSCRIBE">
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section id="packages">
			<div class="container">
				<div class="row packages-first">
					<div class="col-md-12">
						<div class="col-md-6 col-md-offset-3">
							<div class="row">
								<div class="col-md-12">
									<p>PRODUCT <span>PACKAGES</span></p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h5>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
									dfs sit atmet sit dolor greand fdanrh sdfs</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row packages-sec">
					<div class="container">
						<div class="col-md-12">
							<div class="col-md-4 individual">
								<div class="individual1">
									<div class="row individual2">
										<p>INDIVIDUAL</p>
									</div>
									<div class="row individual2-1">
										<div>
											<p>$</p>
											<h1>19</h1>
											<h6>PER MONTH</h6>
										</div>
									</div>
									<div class="row individual2-2">
										<ul>
											<li>
												<p><span>Free</span>Domain</p>
											</li>
											<li>
												<p><span>Unlimited</span>Websites</p>
											</li>
											<li>
												<p><span>Unlimited</span> Bandwidth</p>
											</li>
											<li>
												<p><span>Unlimited</span> Disk Space</p>
											</li>
										</ul>
										<input type="submit" value="GET STARTED" class="packages-btn">
									</div>
								</div>
							</div>
							<div class="col-md-4 studio">
								<div class="studio1">
									<div class="row studio2">
										<p>STUDIO</p>
									</div>
									<div class="row studio2-1">
										<div>
											<p>$</p>
											<h1>19</h1>
											<h6>SUBSCRIPTION</h6>
										</div>
									</div>
									<div class="row studio2-2">
										<ul>
											<li>
												<p><span>Free</span>Domain</p>
											</li>
											<li>
												<p><span>Unlimited</span>Websites</p>
											</li>
											<li>
												<p><span>Unlimited</span> Bandwidth</p>
											</li>
											<li>
												<p><span>Unlimited</span> Disk Space</p>
											</li>
										</ul>
										<input type="submit" value="GET STARTED" class="packages-btn">
									</div>
								</div>
							</div>
							<div class="col-md-4 enterprise">
								<div class="studio1">
									<div class="row studio2">
										<p>ENTERPRISE</p>
									</div>
									<div class="row studio2-1">
										<div>
											<p>$</p>
											<h1>49</h1>
											<h6>SUBSCRIPTION</h6>
										</div>
									</div>
									<div class="row studio2-2">
										<ul>
											<li>
												<p><span>Free</span>Domain</p>
											</li>
											<li>
												<p><span>Unlimited</span>Websites</p>
											</li>
											<li>
												<p><span>Unlimited</span> Bandwidth</p>
											</li>
											<li>
												<p><span>Unlimited</span> Disk Space</p>
											</li>
										</ul>
										<input type="submit" value="GET STARTED" class="packages-btn">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row awards">
					<div class="row award-contents">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 award-txt">
								<div class="row">
									<div class="col-md-12 ">
										<p><span>OUR</span> AWARDS</p>
									</div>
								</div>
								<div class="row">
									<h5>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
									dfs sit atmet sit dolor greand fdanrh sdfs</h5>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="container award-logo">
								<div class="col-md-12">
									<div class="col-md-3">
										<img src="assets/img/logo.png" alt="">
									</div>
									<div class="col-md-3">
										<img src="assets/img/logo.png" alt="">
									</div>
									<div class="col-md-3">
										<img src="assets/img/logo.png" alt="">
									</div>
									<div class="col-md-3">
										<img src="assets/img/logo.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="quote">
			<div class="container">
				<div class="row quote-txt">
					<p>WHAT <span>CLIENTS</span> SAY</p>
				</div>
				<div class="row quote-txt2">
					<div class="col-md-10 col-md-offset-1 visible-quote">
						<div class="quotes">
							<div class="quotes-p">
								<div class="col-md-1">
									<img src="assets/img/quotes-a.png" alt="">
								</div>
								<div class="col-md-10 q-p">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
								</div>
								<div class="col-md-1">
									<img src="assets/img/quotes-b.png" alt="">
								</div>
							</div>
							<div class="quotes-p">
								<div class="col-md-1">
									<img src="assets/img/quotes-a.png" alt="">
								</div>
								<div class="col-md-10 q-p">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
								</div>
								<div class="col-md-1">
									<img src="assets/img/quotes-b.png" alt="">
								</div>
							</div>
							<div class="quotes-p">
								<div class="col-md-1">
									<img src="assets/img/quotes-a.png" alt="">
								</div>
								<div class="col-md-10 q-p">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non bibendum metus. Aenean vel rutrum velit. Duis aliquet augue non augue volutpat, ut viverra est sagittis. Duis elementum mi mauris, nec rhoncus dolor consectetur vitae lorem ipsum.</p>
								</div>
								<div class="col-md-1">
									<img src="assets/img/quotes-b.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="users">
			<div class="users">
				<div class="container contain">
					<div class="col-md-12 ">
						<div class="col-md-4 amy hover">
							<div class="col-md-12">
								<div class="col-md-5">
									<img src="assets/img/profile-1.jpg">
								</div>
								<div class="col-md-7">
									<div class="row">
										<p>AMY WARNER</p>
									</div>
									<div class="row">
										<h5>Investor at <span>Pear Inc.</span></h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 john active-user hover">
							<div class="col-md-12">
								<div class="col-md-5">
									<img src="assets/img/profile-2.jpg">
								</div>
								<div class="col-md-7">
									<div class="row">
										<p>JOHN DOESOME</p>
									</div>
									<div class="row">
										<h5>Accountant at <span>Vell Inc.</span></h5>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 peter hover">
							<div class="col-md-12">
								<div class="col-md-5">
									<img src="assets/img/profile-1.jpg">
								</div>
								<div class="col-md-7">
									<div class="row">
										<p>PETER MOOSOME</p>
									</div>
									<div class="row">
										<h5>VP Marketing at <span>Footbook</span></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="line col-md-offset-1">
						<div class="inside-line"></div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="developers">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 behind">
						<p>BEHIND <span>THE</span> SCENES</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 dev-2">
						<h5>Lorem ipsum dolor sit atmet sit dolor greand fdanrh s
						dfs sit atmet sit dolor greand fdanrh sdfs</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 dev-3">
						<h5>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil
						ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae
						qui non vident, nihilamane umquam magnum ac cognitione. In his rest gestiret. Sed ipsam inchoavit, nihil ampliusuma.
						Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident,
						nihilamane umquam magnum ac cognitione.</h5>
					</div>
				</div>
				<div class="row developer-row">
					<div class="col-md-12">
						<div class="col-md-3">
							<div class="person boy1">
								<div class="row">
									<img src="assets/img/team-1.jpg" alt="">
								</div>
								<div class="row">
									<h4>MIKE BOLDER</h4>
								</div>
								<div class="row">
									<h5>Developer</h5>
								</div>
								<div class="dev-hover">
									<div>
										<p> Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
									</div>
									<div class="icons">
										<div>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-skype" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-linkedin" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="person girl1">
								<div class="row">
									<img src="assets/img/team-2.jpg" alt="">
								</div>
								<div class="row">
									<h4>MIKE BOLDER</h4>
								</div>
								<div class="row">
									<h5>Developer</h5>
								</div>
								<div class="dev-hover">
									<div>
										<p> Mike has worked with CARE USA, for 12 years holding positions such as Deputy Country Director to Director of Programs and Information Systems.</p>
									</div>
									<div class="icons" style="margin-left: 90px">
										<div>
											<i class="fa fa-skype" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="person boy2">
								<div class="row">
									<img src="assets/img/team-3.jpg" alt="">
								</div>
								<div class="row">
									<h4>MIKE BOLDER</h4>
								</div>
								<div class="row">
									<h5>Developer</h5>
								</div>
								<div class="dev-hover">
									<div>
										<p style="margin-top: -20px">Ellen has over 13 years of experience in development projects as a senior consultant and project manager in the areas of project management, fund and board development, strategic & financial planning, monitoring & evaluation.</p>
									</div>
									<div class="icons" style="margin-top:-20px; margin-left: 70px">
										<div>
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="person girl2">
								<div class="row">
									<img src="assets/img/team-4.jpg" alt="">
								</div>
								<div class="row">
									<h4>MIKE BOLDER</h4>
								</div>
								<div class="row">
									<h5>Developer</h5>
								</div>
								<div class="dev-hover">
									<div>
										<p style="margin-top:20px">Mike has worked with CARE USA for 12 years.</p>
									</div>
									<div class="icons" style="margin-top: 50px">
										<div style="margin-right:22px">
											<i class="fa fa-envelope-o" aria-hidden="true"></i>
										</div>
										<div style="margin-right:22px">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</div>
										<div style="margin-right:22px">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</div>
										<div>
											<i class="fa fa-skype" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="startup">
			<div class="container">
				<div class="col-md-1 vol">
					<i class="fa fa-bullhorn" aria-hidden="true"></i>
				</div>
				<div class="col-md-8 launch">
					<div class="row">
						<p>LAUNCH YOUR STARTUP NOW!</p>
					</div>
					<div class="row">
						<h5>In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.</h5>
					</div>
				</div>
				<div class="col-md-3 start-up-btn">
					<input type="button" value="GET THIS TEMPLATE">
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="container">
				<div class="col-md-5 fl">
					<div class="row">
						<p>Startuply</p>
					</div>
					<div class="row fl-2">
						<h5>Ut enim ad minim veniam, quis nostrud exercitation ullamco. Qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Nisi ut aliquid ex ea commodi consequatur?</h5>
					</div>
					<div class="row">
						<h6>John Doeson, Founder.</h6>
					</div>
				</div>
				<div class="col-md-4 fc">
					<div class="row">
						<p>SOCIAL NETWORKS</p>
					</div>
					<div class="row">
						<div class="col-md-3">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-skype" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-skype" aria-hidden="true"></i>
						</div>
						<div class="col-md-3">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
					</div>
				</div>
				<div class="col-md-3 fr">
					<div class="row">
						<p>OUR CONTACTS</p>
					</div>
					<div class="row">
						<ul>
							<li> <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">info@startup.ly</a></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> 2901 Marmora road, Glassgow, Seattle, WA 98122-1090</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> 1 - 234-456-7980</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-12 fb">
					<p>startup.ly 2014. All rights reserved.</p>
				</div>
			</div>
		</section>
	</body>
</html>
<!-- <div class="rightBarMenu">
					<div class="scroll-right">
							<div class="rightBarMenu-list">
									<ul>
											<li>
													<a href="#">HOME</a>
											</li>
											<li>
													<a href="#">ABOUT</a>
											</li>
											<li>
													<a href="#">FEATURES</a>
											</li>
											<li>
													<a href="#">PRICES</a>
											</li>
											<li>
													<a href="#">FEEDBACK</a>
											</li>
											<li>
													<a href="#">TEAM</a>
											</li>
											<li>
													<a href="#">CONTACTS</a>
											</li>
											<li>
													<a href="#">EXTRA</a>
											</li>
											<li>
													<a href="#">LOGIN</a>
											</li>
											<li>
													<button>SIGN UP</button>
											</li>
									</ul>
							</div>
					</div>
</div> -->