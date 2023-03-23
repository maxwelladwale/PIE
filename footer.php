
		<!-- FOOTER -->

		<footer class="glax_tm_footer_wrap">
			<div class="glax_tm_universal_parallax_wrap">
				<div class="main_bg">
					<div class="overlay_image footer jarallax" data-speed="0"></div>
					<div class="overlay_video"></div>								
					<div class="overlay_color footer"></div>
				</div>



				<div class="main_content footer">



					<div class="glax_tm_footer_wrap">



						<div class="container">



							<div class="glax_tm_list_wrap footer" data-column="3" data-space="40">



								<ul class="glax_list">



									<li>



										<div class="inner">



											<div class="footer_section_title">



												<h3>About Us</h3>



											</div>



											<div class="definition">



												<p>

												Headquartered in eastern Washington State since 2013, we are a national leader in industrial equipment engineering, fabrication, and integration. With superior engineering services and ability to integrate multiple pieces of technology into one line, PIE provides universal services from design to delivery. PIE’s industrial lines can receive and palletize any product for a ready-to-ship solution

												</p>



											</div>



										</div>



									</li>



									<li>
										<div class="inner">
											<div class="footer_section_title">
												<h3>Business Hours & Location</h3>
											</div>
											<div class="inner_list">
												<ul>
													<li>
														<div class="wrap">
															<span class="left">Monday - Friday: 7am – 3:00pm</span>
														</div>
													</li>
													<li>
														<div class="wrap">
															<span class="left">8100 Postma Rd, Moxee, WA 98936</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="footer_section_title">
												<h3>Contact Us</h3>
											</div>
											<div class="helpful_links">
												<div class="definition">
													<p style="padding-bottom:25px;">
													We want to hear from you to learn how we can help with your next project.
													</p>
													<div class="inner_list">
														<ul style="display:flex; flex-direction:column;">
															<li style="width:100%;">
																<p class="wrapss">
																	<img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/old_phone.png" alt="">
																	<span class="left" style="padding-left:2em;">(509) 492-3392</span>
																</p>
															</li>
															<!-- <li style="width:100%;">
																<p class="wrapss">
																	<img class="svg" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/svg/fax.png" alt="">
																	<span class="left" style="padding-left:2em;">(509) 922-8746</span>
																</p>
															</li> -->
															<li style="width:100%;">
																<p class="wrapss">
																	<img class="svg" src="<?php echo esc_url( get_template_directory_uri() ) ;?>/assets/img/svg/message2.svg" alt="" />
																	<span class="left" style="padding-left:2em;">sales@precisionie.com</span>
																</p>
															</li>
															<li style="width:100%;">
																<p class="wrapss">
																<a href="<?php get_template_directory_uri();?>/contact-us"><span class="left" style="color:white;">Send us a message </span></a>
																</p>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>



			<div class="bottom_wrap">
				<div class="container">
					<div class="links_wrap">
						<ul>
							<li><a href="<?php echo esc_url( home_url() );?>">Home</a></li>
							<li><a href="<?php get_template_directory_uri();?>/about-us">About Us</a></li>
							<li><a href="<?php get_template_directory_uri();?>/services">Services</a></li>
							<li><a href="<?php get_template_directory_uri();?>/equipment">Equipment</a></li>
							<li><a href="<?php get_template_directory_uri();?>/projects">Projects</a></li>
						</ul>
					</div>
					<div class="copyright">
						<p>&copy; <span  id="year"></span> PIE</p>
						<a class="glax_tm_totop" href="#">
							 <span class="shape"></span>

							 <span class="name">To Top</span>
						 </a>
					</div>
				</div>



			</div>



		</footer>



		<!-- /FOOTER -->



		<script>



            document.getElementById("year").innerHTML = new Date().getFullYear();



        </script>



	</div>



</div>
<!-- / WRAPPER ALL -->
<?php wp_footer(); ?>
</body>
</html>