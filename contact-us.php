<?php 
$activeclass[0]="";
  $activeclass[1]="";
  $activeclass[2]="";
  $activeclass[3]="";
  $activeclass[4]="active";
include 'header.php';
?>

<!--// SubHeader \\-->
		<div class="moverspackers-subheader">
			<span class="moverspackers-dark-transparent"></span>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Contact Us</h1>
						<ul class="moverspackers-breadcrumb">
							<li><a href="index.html">Homepage</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--// SubHeader \\-->		

		<!--// Main Content \\-->
		<div class="moverspackers-main-content moverspackers-contactfull">

			<!--// Main Section \\-->
			<div class="moverspackers-main-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="moverspackers-fancy-title">
								<span>01</span>
								<h2>Get <span>In Touch</span></h2>
								<p>Drop us your queries here. We will get back to you soon....</p>
							</div>
						</div>
						<div class="col-md-9">
							<div class="moverspackers-contact-form">
								<form method="post" class="myform" action="process-form.php">
									<ul>
										<li class="coment-box">
											<label>Message:</label>
											<textarea placeholder="Type here" name="message"></textarea>
										</li>
										<li>
											<label>Name:</label>
											<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text" name="name">
										</li>
										<li>
											<label>Email:</label>
											<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text" name="email">
										</li>
										<li>
											<label>Website:</label>
											<input value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }" tabindex="0" type="text" name="website">
										</li>
										<li class="full-form">
											<input type="submit" name="submit" value="Send Now">
											<span class="output_message"></span>
										</li>
									</ul>
								</form>
							</div>
						</div>
						<div class="col-md-3">
							<div class="moverspackers-contact-info moverspackers-contact-widget">
								<ul>
									<li>
										<div class="moverspackers-contact-info-text">
											<h5>Contact Us At</h5>
											<p><a href="tel:+919812554410">+91 98125 54410</a></p>
											
											<span><i class="flaticon moverspackers-technology"></i></span>
										</div>
									</li>
									<li>
										<div class="moverspackers-contact-info-text">
											<h5>Mail Us At</h5>
											<a href="mailto:info@mungipapackersmovers.com">info@mungipapackersmovers.com</a>
											<!--<a href="mailto:yourdomain@name.com">Movers@abc.com</a>-->
											<span><i class="flaticon moverspackers-letter"></i></span>
										</div>
									</li>
									<li>
										<div class="moverspackers-contact-info-text">
											<h5>Find Us At</h5>
											<p>Shop no 14,</p>
											<p>Dev shopping complex</p>
											<p>zirakpur</p>
											<p>Punjab-140603</p>
											<span><i class="flaticon moverspackers-signs"></i></span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<div class="moverspackers-fancy-title">
								<span>02</span>
								<h2>Find <span>Us At</span></h2>
								<p>Shop no 14, Dev shopping complex, zirakpur, Punjab-140603</p>
							</div>
						</div>
					</div>
				</div>
				<div class="moverspackers-contact-map">
					
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->


<?php 
include 'footer.php';
?>