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
					<h2>CONTACTO</h2>
					<p id = "textslider" style="direction: initial;">Manejo Integrado de Plagas de Oriente SA de CV.</p>
				</div>
			</div>
		</div>
		<!-- End Page Title Area -->
	    <!-- Start Contact Area -->
        <section class="contact-area ptb-100 bg-about-color" style="direction: initial;background-color: #FFFFFF;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-wrap">
							<div class="contact-form">
								<div class="section-title">
									<h3 style="text-align: left;">Solicita más información</h3>
									<p class = "textabout" style="text-align: left;" >Disponemos de un equipo de emergencia entrenado y debidamente capacitado para manejar con éxito en forma rápida y precisa, todas las situaciones inesperadas vinculadas a los problemas de plagas durante las 24 horas.</p>
								</div>
								
								<form id="contactForm">
									<div class="row">
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Porfavor introduce tu nombre completo" placeholder="Nombre completo">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Porfavor introduce tu correo electrónico" placeholder="Correo electrónico">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Porfavor introduce tu teléfono" class="form-control" placeholder="Teléfono">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-6 col-sm-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Porfavor introduce tu ciudad" placeholder="Ciudad">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Escribe tu mensaje" placeholder="Mensaje"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-lg-12 col-md-12">
											<button type="submit" class="default-btn page-btn">
												ENVIAR
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
							<!-- <h3 style="text-align: initial;">Contacto </h3>	 -->
							<ul style="margin-bottom: 21px;">
								<li>
									<i class="bx bx-location-plus"></i>
									<h3>Oficinas Generales</h3>									
									<span>15 Poniente Num. 503, San Nicolás Tecamachalco, Puebla.</span>
								</li>

								<li>
									<i class="bx bx-phone-call"></i>
									<h3>Teléfonos</h3>									
									<a href="tel:249 103 06 88">249 103 06 88 <br>249 103 05 35</a>
									<br>
									<h3>Lada sin costo</h3>
									<a href="tel:800 838 16 88">800 838 16 88</a>									
								</li>
								<li>
									<i class="bx bx-envelope"></i>
									<h3>Correo</h3>									
									<a href="mailto:servicios@mip.com.mx">
										servicios@mip.com.mx
									</a>
									<br>
									<h3>Quejas y sugerencias:</h3>									
									<a href="mailto:gerencia@mip.com.mx">
										gerencia@mip.com.mx 										
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->	
			<!-- Start Process Area -->
			<section class="process-area pt-100 pb-70 bg-about-color">
			<div class="container">
				<div class="section-title">					
					<h2>DIRECTORIO</h2>					
				</div>

				<div class="row" style="direction: ltr;">
					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>DIRECTOR GENERAL</h3>
							<p>Víctor H. Adame Rodríguez</p>
							<p>Cel.:238 38 8 21 83 (24 HORAS)</p>
							<p>Correo: victor.adame@mip.com.mx</p>
							<span>01</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>JEFE ADMINISTRATIVO</h3>
							<p>Yolanda Moro Ortiz.</p>
							<p>Tel.: 01 249 103 06 88</p>
							<p>Correo: administracion@mip.com.mx</p>
							<span>02</span>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>JEFE DE SERVICIOS TÉCNICOS</h3>
							<p>José Flores Lozano.</p>
							<p>Cel.: 249 119 9499 (24 HORAS)</p>
							<p>Correo: jose.flores@mip.com.mx</p>							
							<span>03</span>
						</div>
					</div>
				</div>
				<div class="row" style="direction: ltr;">
					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>CORDOBA</h3>
							<p>Cel.:249 160 44 01.</p>
							<p>Correo: antonio.ramirez@mip.com.mx</p>							
							<span>04</span>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>COATZACOALCOS</h3>
							<p>Cel.: 921 103 93 37</p>
							<p>Correo: minatitlan@mip.com.mx</p>							
							<span>05</span>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-process">							
							<h3>QUERETARO y MICHOACAN</h3>
							<p>Alejandra Adame Uvalle</p>
							<p>Cel 782 170 78 06</p>
							<p>Correo: alejandra.adame@mip.com.mx</p>
							<span>06</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Process Area -->

		<!-- Start Map Area -->
		<!-- <div class="single-contact-map pb-100">
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60998820.06503915!2d95.33864521600859!3d-21.06976582721498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sbd!4v1589611558925!5m2!1sen!2sbd" style="border:0;"></iframe>
			</div>
		</div> -->
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