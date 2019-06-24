<?php
	include "navbar.php";
?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Contact Us
				</h1>
				<p class="text-white link-nav">
					<a href="index.php">Home </a>
					<span class="lnr lnr-arrow-right"></span>
					<a href="contact.php"> Contact Us</a>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
	<div class="container">
		<div class="row">
			<div class="map-wrap" style="width:100%; height: 45vw;">
				<img src="img/assets/barcode/map.png" style="width: 100%;" alt="map">
			</div>
			<div class="col-lg-4 d-flex flex-column address-wrap">
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-home"></span>
					</div>
					<div class="contact-details">
						<h5>bluegold Technology</h5>
						<address>
						Address: plot no:48,  sangamithra avenue, koluthuvanchery,  iyyappanthangal,  chennai-122
						</address>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-phone-handset"></span>
					</div>
					<div class="contact-details">
						<h5>Calls us</h5>
						<p>
							<a href="tel:+919789370825">+91-9789370825</a>
						</p>
					</div>
				</div>
				<div class="single-contact-address d-flex flex-row">
					<div class="icon">
						<span class="lnr lnr-envelope"></span>
					</div>
					<div class="contact-details">
						<h5>Send us your query anytime!</h5>
						<p>
							<a href="mailto:info@sciontech.in">info@sciontech.in</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
					<div class="row">
						<div class="col-lg-6 form-group">
							<input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
							 class="common-input mb-20 form-control" required="" type="text">

							<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''"
							 onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

							<input type="number" name="phone" placeholder="Enter your number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your number'"
							 class="common-input mb-20 form-control" required="" type="text">
							<div class="mt-20 alert-msg" style="text-align: left;"></div>
						</div>
						<div class="col-lg-6 form-group">
							<textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"
							 required=""></textarea>
							<button class="genric-btn primary circle mt-30" style="float: right;">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- End contact-page Area -->
<?php
				include "footer.php";
			?>