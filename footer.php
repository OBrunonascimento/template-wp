<?php wp_footer(); ?>
<footer id="footer" class="m-0 border-0 bg-color-quaternary overflow-hidden">
		
				<div class="container">
							
					<div class="row py-5 custom-row-footer">
						<div class="col-12 col-sm-12 col-lg-3 d-flex align-items-start flex-column footer-column custom-footer-column-logo">
							<img width="123" src="<?php bloginfo('template_directory');?>/assets/img/demos/business-consulting-2/logos/logo.jpg" alt="Logo footer">
							<p class="d-block m-0 text-color-default">Lorem ipsum dolor sit amet, conse adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor.</p>
						</div>
						<div class="col-12 col-sm-12 col-lg-9 footer-column">
							<div class="d-flex align-items-start align-sm-items-end justify-content-between flex-column h-100 mt-4 mt-sm-0">
								<div class="d-flex flex-nowrap flex-lg-wrap justify-content-start justify-content-lg-end align-items-start align-items-lg-center w-100 flex-column flex-lg-row mt-4 mt-lg-0 custom-container-info-socials">
									
									
									<ul class="social-icons custom-social-icons">
										<li class="social-icons-instagram">
											<a class="custom-bg-color-light-grey" href="#" target="_blank" title="Instagram">
												<i class="fab fa-instagram text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="#" target="_blank" title="Facebook">
												<i class="fab fa-facebook-f text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-yt">
											<a class="custom-bg-color-light-grey" href="#" target="_blank" title="Youtube">
												<i class="fab fa-youtube text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
										<li class="social-icons-facebook">
											<a class="custom-bg-color-light-grey" href="#" target="_blank" title="Opinião">
												<i class="fa fa-question-circle text-4 font-weight-semibold text-color-secondary"></i>
											</a>
										</li>
									</ul>
									<nav class="navbar navbar-expand-md" role="navigation">
				
										<?php
										wp_nav_menu( array(
											'theme_location'    => 'footer',
											'depth'             => 2,
											'container'         => 'div',
											'container_class'   => 'collapse navbar-collapse',
											'container_id'      => 'bs-example-navbar-collapse-1',
											'menu_class'        => 'nav',
											'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
											'walker'            => new WP_Bootstrap_Navwalker(),
										) );
										?>
									
									</nav>
									
								</div>
							</div>
						</div>
					</div>
				</div>
						
				<div class="footer-copyright container bg-color-quaternary">
					<div class="row">
						<div class="col-lg-12 text-center m-0">
							<p class="text-color-grey"> All Rights Reserved</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php bloginfo('template_url'); ?>/assets/vendor/plugins/js/plugins.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/demos/demo-business-consulting-2.js"></script>

		<!-- Theme Custom -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="<?php bloginfo('template_url'); ?>/assets/js/theme.init.js"></script>

	</body>
    
</html>