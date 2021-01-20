<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				
					<div class="col-lg-3 footer-grid-agileits-w3ls text-left">
						<img src="https://raw.githubusercontent.com/spadeems/web/master/img/brand-logo-white.png",hieght = 20 width = 20><br>
						<br><p class="text-left font-weight-normal">
						SPADE is a team of experienced professionals who are guided by their own passion to 
						deliver exhilarating outcomes in the fields of marketing, technical, events, advertising, 
						brand promotions, as well as in exhibitions. With our creative minds at work. we offer 
						the most innovative solutions to help clients take their brands to a whole new level.</p>
					</div>
					<div class="col-lg-5 footer-grid-agileits-w3ls text-left">
						<h3>About US</h3>
						<p><?php getshortdescription("titles"); ?></p>
							<div class="read">
								<a href="about.php" class="btn btn-primary read-m">Read More</a>
							</div>
					</div>
					<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
					</div><br><br><br>
			
				<!-- subscribe -->
			</div>
		</div><br><br><br>
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your privacy.No spam ever!</p>
					</div>
					<!-- //subscribe -->
				</div>
				<div class="col-lg-6 footer-grid-agileits-w3ls text-left">
					<h3>Contact</h3>
					<p>
					<i class="fas fa-home mr-3"></i>
					<p>SPADE Event Management Services Private Ltd.</p>
						<p>167 New Defence Colony,
						Jalandhar Cantt</p><br></p>
					<p>
					<i class="fas fa-envelope mr-3"></i>
					<a href="mailto:info@spadeems.com/">info@spadeems.com</a>
					</p>

					<p>
					<i class="fas fa-phone mr-3"></i>
					<a href="tel:+917508450610">+91 75084 50610</a>
					</p>	
					<p>
					<i class="fab fa-whatsapp mr-3"></i>
					<a href="https://wa.me/917508450610">+91 75084 50610</a>
					</p>
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","facebook");?>">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","twitter");?>">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="<?php getlinks("links","googleplus");?>">
									<i class="fab fa-google-plus-g"></i>
									<span>Google+</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="<?php getlinks("links","pinterest");?>">
									<i class="fab fa-pinterest-p"></i>
									<span>Pinterest</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> Responsive Blog Site <?php $current=date("Y"); print_r($current);?> | 
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>