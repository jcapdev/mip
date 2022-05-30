<!doctype html>
<html lang="en">
    <?php 
       require_once "assets/php/head.php";
       require_once "assets/php/nav.php";
       require_once "assets/php/load.php";
    ?>   

    <body>
		<style>
			img {
				max-width: 100%;
			}
		</style>

        <!-- html boddy  -->
          <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>About Us</h2>
                        <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                    </div>
                </div>

                <div class="sidebar-instagram-feed">
                    <h2>Blog</h2>

                    <ul>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/1.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/2.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/3.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/4.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/5.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/6.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/7.jpg" alt="image">
							</a>
						</li>
                        <li>
							<a href="blog-details.html">
								<img src="assets/img/blog/8.jpg" alt="image">
							</a>
						</li>
                    </ul>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:+61-821-456">+61-821-456</a>
                                <span>OR</span>
                                <a href="mailto:hello@trice.com">hello@trice.com</a>
                            </h2>
    
                            <ul class="social">
                                <li>
									<a href="#" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
                                <li>
									<a href="#" target="_blank">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
                                <li>
									<a href="#" target="_blank">
										<i class="bx bxl-linkedin"></i>
									</a>
								</li>
                                <li>
									<a href="#" target="_blank">
										<i class="bx bxl-youtube"></i>
									</a>
								</li>
                                <li>
									<a href="#" target="_blank">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn">
					<i class="bx bx-x"></i>
				</span>
            </div>
        </div>
		<!-- End Sidebar Modal -->
		
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-19">
			<div class="container">
				<div class="page-title-content">
					<h2>Contact</h2>
					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li>Pages</li>

						<li class="active">Contact</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->

		<!-- Start Contact Area -->
		<section class="contact-area ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="section-title">
									<h2>Drop Us A Message For Any Query</h2>
								</div>
								
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn page-btn">
												Send Message
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="quick-contact">
							<h3>Quick Contact </h3>

							<ul>
								<li>
									<i class="bx bx-location-plus"></i>
									Location:
									<span>123, Western Road, Melbourne Australia</span>
								</li>

								<li>
									<i class="bx bx-phone-call"></i>
									Call Us:
									<a href="tel:+61-821-456">+61-821-456 <br> +61-987-786</a>
								</li>

								<li>
									<i class="bx bx-envelope"></i>
									Email Us:
									<a href="mailto:hello@contlib.com">
										hello@trice.com <br>
										info@trice.com
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="single-contact-map pb-100">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.33864521600859!3d-21.06976582721498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1589611558925!5m2!1sen!2sbd" style="border:0;"></iframe>
			</div>
		</div>
		<!-- End Map Area -->  
	
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class='bx bx-chevrons-up'></i>
			<i class='bx bx-chevrons-up'></i>
		</div>
		<!-- End Go Top Area -->
		<?php
        require_once "assets/php/footer.php";
        require_once "assets/php/script.php";
        ?>    

       
    </body>
</html>