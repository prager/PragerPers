

		<!--=============================================================================
			Preloader
		===============================================================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='<?php echo base_url() ;?>/assets/img/load.gif' alt='symp' >
			</div>
		</div>
		<!--=============================================================================
			Main Wrapper
		===============================================================================-->
		<div id='wrapper' >
		<!--=============================================================================
				Front Section
			===============================================================================-->
			<section class='front-section' >
				<div class='container' >
					<div class='transition-mask' ></div>
					<div class='front-person-img' >
						<!--person's image-->
						<img src='<?php echo base_url() ;?>/assets/img/me.png' alt='Symp' >
						<!--/person's image-->
					</div>
					<!--person's titles-->
					<div class='front-person-titles' >

						<!--title1-->
						<span class='t1' >
							Consultant
						</span>
						<!--/title1-->

						<!--title2-->
						<span class='t2' >
							Programmer
						</span>
						<!--/title2-->

						<!--title3-->
						<span class='t3' >
							Freelancer
						</span>
						<!--/title3-->
					</div>
					<!--/person's titles-->
					<nav class='front-person-links' >
						<!--
							navigation links, data-section attribute points towards the section with id to be opened.
						-->
						<ul>
							<li>
								<a href='#' data-section='about' >About Me</a>
							</li>
							<li>
								<a href='#' data-section='resume' >Resume</a>
							</li>
							<!-- <li>
								<a href='#' data-section='services' >Services</a>
							</li>
							<li>
								<a href='#' data-section='portfolio' >Portfolio</a>
							</li>
							 -->
							<li>
								<a href='#' data-section='contact' >Contact</a>
							</li>
							<li>
								<a href='#' data-section='blog' >My Blog</a>
							</li>
							<li>
								<a href='#' data-section='ham' >KM6NFC</a>
							</li>
							<li>
								<a href="#" data-section='login' >Login</a>
							</li>
						</ul>
					</nav>

					<div class='front-heading text-center' >
						<h2>
							Jan Kul&iacute;sek
						</h2>
					</div>


				</div>
			</section>
			<!--=============================================================================
				/Front Section
			===============================================================================-->

			<!--=============================================================================
				About Section
			===============================================================================-->
			<?php include "incl_about.php"; ?>
			<!--=============================================================================
				/About Section
			===============================================================================-->

			<!--=============================================================================
				Ham Section
			===============================================================================-->
			<?php include "incl_ham.php"; ?>
			<!--=============================================================================
				/Ham Section
			===============================================================================-->

			<!--=============================================================================
				Resume Section
			===============================================================================-->
			<section id='resume' class='resume-section section' >
				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header text-center' >

								<h2 class='animate text-over-block' >My Resume</h2>

								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->
								<p>Jan Kulisek in Concord, CA</p>
							</div>
						</div>
					</div>
				</div>
				<div class='timeline-block section-block' >
					<div class='container' >
						<ul class='timeline' >
							<li class='timeline-header' >
							<h4>Education</h4>
								<!-- <h4>Education</h4> -->
							</li>
							 <li class="inverse">
								<div class='timeline-content' >
									<h4>Professional Certificate</h4>
									<span>Massachusetts Institute of Technology, MA</span>
									<p>
									Architecture and Systems Engineering
									</p>
								</div>
								<div class='timeline-desc' >
									<h4>2018</h4>
								</div>
							</li>
							 <li>
								<div class='timeline-desc' >
									<h4>2009-2016</h4>
								</div>
								<div class='timeline-content' >
									<h4>Bachelor's Degree</h4>
									<span>Franklin University in Columbus, OH</span>
									<p>
									Computer Science Degree achieved while<br>on full time job in the US Army.
									</p>
								</div>
							</li>


							<li class='timeline-header' >
								<h4>Experience</h4>
							</li>


							<li>

								<div class='timeline-desc' >

									<h4>2003-Present</h4>

								</div>

								<div class='timeline-content' >

									<h4>Web Developer</h4>
									<span>JLK Consulting in Concord, CA</span>

									<p>
									Current projects involve LAMP stack: PHP, CodeIgniter<br>
									and MySQL. Up until my retirement from<br>
									the US Army on partime basis and since July 2016<br>
									full time.
									</p>

								</div>

							</li>

							<li class='inverse' >

								<div class='timeline-desc' >

									<h4>2003-2016</h4>

								</div>

								<div class='timeline-content' >

									<h4>Operations Manager</h4>
									<span>US Army (many locations)</span>

									<p>
									Prepared and resourced training for the US Army and<br> civilian personnel. During deployment in Iraq
									developed C++<br> application for aviation parts management with<br> command line interface.
									</p>

								</div>

							</li>

							<li>

								<div class='timeline-desc' >

									<h4>2000-2002</h4>

								</div>

								<div class='timeline-content' >

									<h4>Software Engineer</h4>
									<span>Systron Donner in Concord, CA</span>

									<p>Developed instrument testing
									software for prototypes<br> of automotive yaw sensors in Visual Basic and C in<br> client-server architecture.
									</p>

								</div>

							</li>

							<li class='inverse' >

								<div class='timeline-desc' >

									<h4>1997-2000</h4>

								</div>

								<div class='timeline-content' >

									<h4>Electronic Technician</h4>
									<span>Systron Donner in Concord, CA</span>

									<p>
									Tested automotive and aviation yaw sensors using variety of instruments including signal analyzers, oscilloscopes,
									volt and ampmeters. Developed simple test programs using Visual Basic.
									</p>

								</div>

							</li>

						</ul>
					</div>
				</div>

			<!--<div class='hobbies-block bg-lightgray section-block' >
					<div class='container' >

						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Hobbies</h2>
							<div class='divider-draft center' ></div>
						</div>

						<div class='row' >

							<div class='col-md-2 col-sm-4 col-xs-6' >

								<div class='hobby' >

									<div class='icon' >
										<i class='ion-ios-game-controller-b' ></i>
									</div>

									<h4>Gaming</h4>

								</div>

							</div>

							<div class='col-md-2 col-sm-4 col-xs-6' >

								<div class='hobby' >

									<div class='icon' >
										<i class='ion-ios-book' ></i>
									</div>

									<h4>Reading</h4>

								</div>

							</div>

							<div class='col-md-2 col-sm-4 col-xs-6' >

								<div class='hobby' >

									<div class='icon' >
										<i class='ion-ios-chatboxes' ></i>
									</div>

									<h4>Chat</h4>

								</div>

							</div>

							<div class='col-md-2 col-sm-4 col-xs-6' >

								<div class='hobby' >

									<div class='icon' >
										<i class='ion-ios-musical-notes' ></i>
									</div>

									<h4>Music</h4>

								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >

								<div class='hobby' >

									<div class='icon' >
										<i class='ion-beer' ></i>
									</div>
									<h4>Drinking</h4>
								</div>
							</div>
							<div class='col-md-2 col-sm-4 col-xs-6' >
								<div class='hobby' >
									<div class='icon' >
										<i class='ion-ios-football' ></i>
									</div>
									<h4>Football</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class='skills-block section-block' >
					<div class='container' >
						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >My Skills</h2>
							<div class='divider-draft center' ></div>
						</div>
						<div class='row' >
							<div class='col-md-6' >
								<div class='skill' >
									<h4>HTML/CSS</h4>
									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
								<div class='skill' >

									<h4>php</h4>

									<div class='skill-bar' data-percent='70' >
										<div class='bar' >
											<div class='percent' >70%</div>
										</div>
									</div>
								</div>
								<div class='skill' >

									<h4>HTML/CSS</h4>

									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>
								</div>
							</div>

							<div class='col-md-6' >

								<div class='skill' >

									<h4>VB</h4>

									<div class='skill-bar' data-percent='90' >
										<div class='bar' >
											<div class='percent' >90%</div>
										</div>
									</div>

								</div>

								<div class='skill' >

									<h4>Wordpress</h4>

									<div class='skill-bar' data-percent='85' >
										<div class='bar' >
											<div class='percent' >85%</div>
										</div>
									</div>

								</div>

								<div class='skill' >

									<h4>SEO</h4>

									<div class='skill-bar' data-percent='95' >
										<div class='bar' >
											<div class='percent' >95%</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

				</div>  -->

				<div class='footer bg-lightgray section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-xs-6 text-left' >
								<h4>Jan Kul&iacute;sek</h4>
							</div>

							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/jkulisek' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/JanKulisek' >
											<i class='ion-social-twitter' ></i>
										</a>
									<li>
										<a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
								</ul>
							</div>

						</div>


					</div>

				</div>

			</section>
			<!--=============================================================================
				/Resume Section
			===============================================================================-->


			<!--=============================================================================
				Services Section
			===============================================================================-->
			<section id='services' class='services-section section' >

				<div class='container' >
					<div class='row' >
						<div class='col-md-6 col-md-offset-3' >
							<div class='section-header main-title text-center' >

								<h2 class='animate text-over-block' >My Services</h2>

								<!--divider-->
								<div class='divider-draft center' ></div>
								<!--/divider-->

								<p>
									I provide <b>high quality</b> services. My services that I provide are listed below. Hope you will like them. Lorem ipsum dolor.
								</p>

							</div>
						</div>
					</div>
				</div>

				<div class='services-block section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-camera' ></i>
									</div>

									<div class='content' >

										<h4>Photography</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-code' ></i>
									</div>

									<div class='content' >

										<h4>Coding</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>
									<div class='content' >
										<h4>Creativity</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>
									</div>
								</div>
							</div>
							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-monitor' ></i>
									</div>
									<div class='content' >
										<h4>Web Design</h4>
										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

						</div>

						<div class='row' >

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-camera' ></i>
									</div>

									<div class='content' >

										<h4>Photography</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-code' ></i>
									</div>

									<div class='content' >

										<h4>Coding</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-lightbulb' ></i>
									</div>

									<div class='content' >

										<h4>Creativity</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

							<div class='col-md-3' >
								<div class='service' >
									<div class='icon' >
										<i class='ion-ios-monitor' ></i>
									</div>

									<div class='content' >

										<h4>Web Design</h4>

										<p>
											Ut aboramus, numquam corpora qui naex. Dolore aliquando id duo, voluptua laboramus quo ad.
										</p>

									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

				<div class='pricing-block section-block' >
					<div class='container' >

						<div class='section-header text-center' >
							<h2 class='animate text-over-block' >Pricing</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
							<p>
								How much I charge
							</p>
						</div>

						<div class='row' >

							<div class='col-md-4 text-center' >

								<div class='pricing-table' >

									<div class='header' >

										<h4>Personal</h4>

										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >29</span>
											<span class='period' >/mo</span>
										</div>


									</div>

									<ul class='table-items' >

										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>

									</ul>

									<a href='#' class='table-btn' >
										Choose This
									</a>

								</div>

							</div>

							<div class='col-md-4 text-center' >

								<div class='pricing-table' >

									<div class='header' >

										<h4>Creative</h4>

										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >39</span>
											<span class='period' >/mo</span>
										</div>

									</div>

									<ul class='table-items' >

										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>

									</ul>

									<a href='#' class='table-btn' >
										Choose This
									</a>

								</div>

							</div>

							<div class='col-md-4 text-center' >

								<div class='pricing-table' >

									<div class='header' >

										<h4>Ultimate</h4>

										<div class='price' >
											<span class='currency' >$</span>
											<span class='amount' >42</span>
											<span class='period' >/mo</span>
										</div>


									</div>

									<ul class='table-items' >

										<li>
											Logo Design
										</li>
										<li>
											PSD to HTML
										</li>
										<li>
											Fixed to Responsive
										</li>
										<li>
											App Development
										</li>
										<li>
											Photography
										</li>

									</ul>

									<a href='#' class='table-btn' >
										Choose This
									</a>

								</div>

							</div>

						</div>

					</div>
				</div>

				<div class='process-block bg-lightgray section-block' >
					<div class='container' >

						<div class='section-header text-center' >
							<h2>Work Process</h2>
							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->
						</div>

						<div class='row' >

							<div class='col-md-3' >

								<div class='process' >

									<div class='number' >
										<span>01</span>
									</div>

									<div class='content' >

										<h4>Design</h4>

										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>

									</div>

								</div>

							</div>

							<div class='col-md-3' >

								<div class='process' >

									<div class='number' >
										<span>02</span>
									</div>

									<div class='content' >

										<h4>Develop</h4>

										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>

									</div>

								</div>

							</div>

							<div class='col-md-3' >

								<div class='process' >

									<div class='number' >
										<span>03</span>
									</div>

									<div class='content' >

										<h4>Publish</h4>

										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>

									</div>

								</div>

							</div>

							<div class='col-md-3' >

								<div class='process last' >

									<div class='number' >
										<span>04</span>
									</div>

									<div class='content' >

										<h4>Enjoy</h4>

										<p>
											Lorem ipsum dolor sit amet is simply a dummy text used by typeset industries. Lorem ipsum dolor.
										</p>

									</div>

								</div>

							</div>



						</div>

					</div>
				</div>

				<div class='testimonials-block section-block' >
					<div class='container' >

						<div class='section-header text-center' >

							<h2 class='animate text-over-block' >Testimonials</h2>

							<!--divider-->
							<div class='divider-draft center' ></div>
							<!--/divider-->


						</div>

						<div class='row' >

							<div class='col-md-8 col-md-offset-2' >

								<div class='testimonials-slider' >

									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>

										<div class='author' >
											<h4>Jack Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>

									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>

										<div class='author' >
											<h4>Jessica Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>

									<div class='testimonial' >
										<p>
											Ad oportere voluptatibus nec, sea ei civibus praesent. At timeam expetenda inciderint has. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero. Invidunt constituto ne per, paulo omnium quaerendum his eu, cu congue consul cetero.
										</p>

										<div class='author' >
											<h4>Jim Smith</h4>
											<p>CEO at Google</p>
										</div>
									</div>




								</div>

							</div>

						</div>

					</div>
				</div>

				<div class='footer bg-lightgray section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-xs-6 text-left' >
								<h4>Jan Kul&iacute;sek</h4>
							</div>

							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/jkulisek' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/JanKulisek' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
								</ul>
							</div>

						</div>


					</div>

				</div>


			</section>
			<!--=============================================================================
				/Services Section
			===============================================================================-->


			<!--=============================================================================
				Portfolio Section
			===============================================================================-->
			<section id='portfolio' class='portfolio-section section' >

				<div class='portfolio-block section-block' >

					<div class='container' >

						<div class='row' >
							<div class='col-md-6 col-md-offset-3' >

								<div class='section-header text-center' >

									<h2 class='animate text-over-block' >Portfolio</h2>

									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->

									<p>
										Check out my works. Lorem ipsum dolor sit amet is simply a dummy text. Lorem ipsum dolor sit amet.
									</p>

								</div>

							</div>
						</div>

						<div id='portfolio-filters' >
							<ul>
								<li>
									<a href='#' data-group='all' class='active' >All</a>
								</li>
								<li>
									<a href='#' data-group='web' >Web</a>
								</li>
								<li>
									<a href='#' data-group='tech' >Tech</a>
								</li>
								<li>
									<a href='#' data-group='photography' >Photography</a>
								</li>
							</ul>
						</div>

						<div id='portfolio-grid' class='portfolio-items' >

							<div class='item' data-groups='["all","web","photography"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/1.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/1.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","photography","tech"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/2.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/2.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","web","tech"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/3.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/3.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","web"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/4.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/4.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","tech"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/5.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='<?php echo base_url() ;?>/assets/work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/5.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","photography"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/6.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='<?php echo base_url() ;?>/assets/work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/6.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","web"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/7.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='<?php echo base_url() ;?>/assets/work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/7.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","tech"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/8.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/8.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>

							<div class='item' data-groups='["all","photography"]' >
								<div class='inner' >

									<img alt='symp' src='<?php echo base_url() ;?>/assets/img/portfolio/9.jpg' >

									<div class='caption' >

										<div class='caption-inner' >

											<h4>Project Title</h4>

											<ul class='links' >

												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>

												<li>
													<a href='<?php echo base_url() ;?>/assets/img/portfolio/9.jpg' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>

											</ul>

										</div>


									</div>

								</div>
							</div>



						</div>

					</div>

				</div>

				<div class='footer bg-lightgray section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-xs-6 text-left' >
								<h4>Jan Kul&iacute;sek</h4>
							</div>

							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/jkulisek' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/JanKulisek' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
								</ul>
							</div>

						</div>


					</div>

				</div>

			</section>
			<!--=============================================================================
				/Portfolio Section
			===============================================================================-->


			<!--=============================================================================
				Blog Section
			===============================================================================-->

			<?php include "incl_blog.php"; ?>
			
			<!--=============================================================================
				/Blog Section
			===============================================================================-->


			<!--=============================================================================
				Contact Section
			===============================================================================-->
			<section id='contact' class='contact-section section' >

				<div class='contact-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-6 col-md-offset-3' >

								<div class='section-header text-center' >
									<h2 class='animate text-over-block' >Contact Me</h2>
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									<p>
										In case you have anything specific to say or just to say hi, feel free to shoot me a message.
									</p>
								</div>

							</div>
						</div>

						<div class='row' >
							<div class='col-md-8 col-md-offset-2' >
								<?php echo form_open('home/msg', array('class' => 'contact-form', 'data-toggle' => 'validator')) ?>
								<!-- <form id='contact' name='contact' class='contact-form' action='mail.php' method='post' data-toggle='validator' > -->

									<div id='contact-form-result' ></div>

									<div class='row' >

										<div class='col-md-6' >

											<div class='form-group' >
												<input type='text' id='name' name='name' class='form-control' placeholder='Name' required>

												<div class='help-block with-errors' ></div>
											</div>

										</div>

										<div class='col-md-6' >
											<div class='form-group' >
												<input type='email' id='email' name='email' class='form-control' placeholder='Email' required>

												<div class='help-block with-errors' ></div>

											</div>
										</div>

									</div>

									<div class='row' >

										<div class='col-md-6' >
											<div class='form-group' >
												<input type='text' id='subj' name='subj' class='form-control' placeholder='Subject' required>
												<div class='help-block with-errors' ></div>

											</div>
										</div>

										<div class='col-md-6' >
											<div class='form-group' >
												<input type='text' id='web' name='web' class='form-control' placeholder='Website (enter "none" if no website)' required>
												<div class='help-block with-errors' ></div>

											</div>
										</div>

									</div>

									<div class='form-group' >
										<textarea rows='5' id='msg' name='msg' class='form-control' placeholder='Message' required></textarea>
										<div class='help-block with-errors' ></div>
									</div>

									<div class='form-group text-center' >
										<button type='submit' class='symp-btn' >Send Message</button>
									</div>
								<?php echo form_close(); ?>
								<!-- </form> -->
							</div>
						</div>


					</div>
				</div>


				<div class='footer bg-lightgray section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-xs-6 text-left' >
								<h4>Jan Kul&iacute;sek</h4>
							</div>

							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/jkulisek' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/JanKulisek' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
								</ul>
							</div>

						</div>


					</div>

				</div>


			</section>
			<!--=============================================================================
				/Contact Section
			===============================================================================-->

			<!--=============================================================================
				Login Section
			===============================================================================-->
			<section id='login' class='contact-section section' >

				<div class='contact-block section-block' >
					<div class='container' >
						<div class='row' >
							<div class='col-md-6 col-md-offset-3' >

								<div class='section-header text-center' >
									<h2 class='animate text-over-block' >Login</h2>
									<!--divider-->
									<div class='divider-draft center' ></div>
									<!--/divider-->
									<p>Please, enter your Login ID and Password</p>
								</div>

							</div>
						</div>

						<div class='row' >
							<div class='col-md-8 col-md-offset-2' >

								<?php echo form_open('login/load', array('class' => 'contact-form', 'data-toggle' => 'validator')) ?>
								<!-- <form class='contact-form' action='mail.php' method='post' data-toggle='validator' > -->

									<div id='contact-form-result' ></div>

									<div class='row' >

										<div class='col-md-6 col-md-offset-3' >
											<div class='form-group' >
												<input type='text' class='form-control' id='username' name='username' placeholder='Username' required>
												<div class='help-block with-errors' ></div>

											</div>
										</div>

									</div>

									<div class='row' >

										<div class='col-md-3' >&nbsp;</div>

										<div class='col-md-6' >
											<div class='form-group' >
												<input type='password' class='form-control' id='pass' name='pass' placeholder='password' required>
												<div class='help-block with-errors' ></div>

											</div>
										</div>

									</div>
									<div class='row' >
									<div class='section-header text-center' >
									For user registration click <?php echo anchor('home/register', 'here') ?>.
									&nbsp;Forgot username or password? Click <?php echo anchor('home/recover', 'here'); ?>
									</div>
									</div>
									<div class='form-group text-center' >
										<button type='submit' class='symp-btn' >Login</button>
									</div>

								<!--  </form>-->
								<?php echo form_close(); ?>
							</div>
						</div>


					</div>
				</div>

				<div class='footer bg-lightgray section-block' >

					<div class='container' >

						<div class='row' >

							<div class='col-xs-6 text-left' >
								<h4>Jan Kul&iacute;sek</h4>
							</div>

							<div class='col-xs-6 text-right' >
								<ul class='footer-social' >
									<li>
										<a href='https://www.facebook.com/jkulisek' >
											<i class='ion-social-facebook' ></i>
										</a>
									</li>
									<li>
										<a href='https://twitter.com/JanKulisek' >
											<i class='ion-social-twitter' ></i>
										</a>
									</li>
									<li>
										<a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
											<i class='ion-social-linkedin' ></i>
										</a>
									</li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</section>

			<!--close button-->
			<div class='close-btn' >
				<span></span>
				<span></span>
			</div>
			<!--/close button-->
		</div>
		<!--=============================================================================
			/Main Wrapper
		===============================================================================-->
