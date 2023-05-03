<?php 
/* 
Template name: Quem somos 
*/
?>
<?php get_header() ?>

<div class="container-fluid">
	<div class="row py-3 mt-2">

		<div class="col-lg-6 p-0">
			<section class="section section-height-3 bg-color-primary-darken-1 h-100 m-0 border-0">
				<div class="row justify-content-end m-0">
					<div class="col-half-section col-half-section-right text-color-light">
						<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-secondary ms-0 me-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"></span></p>
						<h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">TITULO AQUI</h2>
						<span class="opacity-7 d-block">
							<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
						</span>
					</div>
				</div>
			</section>
		</div>

		<div class="col-lg-6 p-0">
			<section class="section section-height-3 bg-color-primary h-100 m-0 border-0">
				<div class="row m-0">
					<div class="col-half-section text-color-light text-end">
						<p class="text-uppercase font-weight-semibold mb-1 text-color-light appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="100"><span class="line-pre-title me-0 ms-3 bg-color-secondary appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200"></span></p>
						<h2 class="text-color-light font-weight-bold text-capitalize mb-1 letter-spacing-08 font-size-32 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">TITULO AQUI</h2>
						<span class="opacity-7 d-block">
							<p class="text-color-light pt-3 mb-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
						</span>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
				
<div class="container py-5 mb-3">
	<div class="row align-items-center">
		<div class="col-lg-5 pt-3 pt-lg-0 pb-4 pb-lg-0">
			<div class="card border-radius-0 box-shadow-1 border-0 me-lg-3 p-3 mb-3 mb-lg-0">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/demos/business-consulting-2/bg/sobre2.jpg" class="img-fluid border-radius-0" alt="quem somos">
			</div>
		</div>
		<div class="col-lg-7">
			<p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<p class="m-0 p-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semr vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<div class="counters custom-counters d-flex mb-4">
				<div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
					<i class="fa fa-folder-open"></i>
					<strong data-to="1176" >1.176</strong>
					<label class="text-color-primary font-weight-bold">Projetos realizados</label>
				</div>

				<div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">
				<i class="fa fa-comments"></i>
					<strong data-to="35288">35.288</strong>
					<label class="text-color-primary font-weight-bold">Perguntas respondidas</label>
				</div>

				<div class="counter counter-primary appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
				<i class="fa fa-perquestionson-circle-"></i>
					<strong data-to="1186727">1.186.727</strong>
					<label class="text-color-primary font-weight-bold">Pessoas entrevistadas</label>
				</div>												
			</div>
		</div>
	</div>
</div>

<?php 
	get_template_part('template-parts/final-quemsomos'); 
?>

</div>

<?php get_footer()?>