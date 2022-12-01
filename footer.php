				<?php
					// If Single or Archive (Category, Tag, Author or a Date based page).
					if ( is_single() || is_archive() ) :
				?>
						</div><!-- /.col -->

						<?php
							get_sidebar();
						?>

					</div><!-- /.row -->
				<?php
					endif;
				?>

		<footer>
			<div class="footer-top text-center">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 text-center">
							<h4 class="navbar-brand">Prixima<span class="dot">.</span></h4>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
								classical Latin literature from</p>
							<div class="col-auto social-icons">
								<a href="#"><i class='bx bxl-facebook'></i></a>
								<a href="#"><i class='bx bxl-twitter'></i></a>
								<a href="#"><i class='bx bxl-instagram'></i></a>
								<a href="#"><i class='bx bxl-pinterest'></i></a>
							</div>
							<div class="col-auto conditions-section">
								<a href="#">privacy</a>
								<a href="#">terms</a>
								<a href="#">disclaimer</i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom text-center">
				<p class="mb-0">Copyright vicpra 2022. All rights Reserved</p> Distributed By <a
					hrefs="https://themewagon.com">ThemeWagon</a>
			</div>
		</footer>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-xl">
				<div class="modal-content">
					<div class="modal-body p-0">
						<div class="container-fluid">
							<div class="row gy-4">
								<div class="col-lg-4 col-sm-12 bg-cover"
									style="background-image: url(img/c2.jpg); min-height:300px;">
									<div>

									</div>
								</div>
								<div class="col-lg-8">
									<form class="p-lg-5 col-12 row g-3">
										<div>
											<h1>Get in touch</h1>
											<p>Fell free to contact us and we will get back to you as soon as possible</p>
										</div>
										<div class="col-lg-6">
											<label for="userName" class="form-label">First name</label>
											<input type="text" class="form-control" placeholder="Jon" id="userName"
												aria-describedby="emailHelp">
										</div>
										<div class="col-lg-6">
											<label for="userName" class="form-label">Last name</label>
											<input type="text" class="form-control" placeholder="Doe" id="userName"
												aria-describedby="emailHelp">
										</div>
										<div class="col-12">
											<label for="userName" class="form-label">Email address</label>
											<input type="email" class="form-control" placeholder="Johndoe@example.com"
												id="userName" aria-describedby="emailHelp">
										</div>
										<div class="col-12">
											<label for="exampleInputEmail1" class="form-label">Enter Message</label>
											<textarea name="" placeholder="This is looking great and nice."
												class="form-control" id="" rows="4"></textarea>
										</div>

										<div class="col-12">
											<button type="submit" class="btn btn-brand">Send Message</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php
			wp_footer();
		?>	
	</div>  <!-- MAIN -->
</body>
</html>
