<?php
/*

Template name: Home

*/
?>
<?php get_header() ?>

<div role="main" class="main">		 
	<div id="demo" class="carousel slide" data-bs-ride="carousel">							
			<div class="container-carousel">
					<div class="carousel-inner" id="sublinhado">
						<?php 
							$args = array('post_type' => 'slider', 'showposts' => 2 );
							$my_slider = get_posts($args);

							$cont = 0; if($my_slider) : foreach($my_slider as $post) : setup_postdata($post);
						?> 
						<div class="carousel-item <?php if($cont == 0) echo "active"; ?>">
							<div class="carousel-caption">

								<h1><?php the_title()?></h1>

								<a id="btn-color" class="btn btn-modern bg-primary font-weight-bold text-2 btn-py-3 px-5 mt-2 appear-animation" href="<?php the_permalink();?>" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250" data-plugin-options="{'minWindowWidth': 0}">Saiba mais</a>

							</div>

							<?php the_post_thumbnail('full' , array('class' => 'w-100 img-fluid')) ?>
						</div>
						<?php 
							$cont ++;
							endforeach;
							endif;
						?>															
					</div>
							
				<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
				</button>
			</div>		
		
	</div>
  
<section class="bg-warning p-relative z-index-2">
		
		<div class="cards custom-cards custom-cards-slider h-auto pt-5 pb-4 container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">	
			<div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
				<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
					<div class="card border-radius-0 border-0 shadow-none">
						<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
							<i id="cor-card" class="fas fa-user-check mb-4"></i>
							
							<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Qui veritatis nemo corrupti rerum, sint voluptates repellendus quaerat enim eum dolor modi! Nesciunt dolorum veritatis ipsa, beatae quisquam fuga sequi perspiciatis!...</p>
							<a href="<?php the_permalink(); ?>" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Ler mais +</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
					<div class="card border-radius-0 border-0 shadow-none">
						<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
							<i id="cor-card" class="fas fa-vote-yea mb-4"></i>
							
							<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Quidem, illum. Accusamus atque earum magni. Quos quia consequuntur soluta cum dignissimos inventore aspernatur vitae quasi officiis dicta? Doloribus id voluptatem hic....</p>
							<a href="<?php the_permalink(); ?>" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">Ler mais +</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
					<div class="card border-radius-0 border-0 shadow-none">
						<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
							<i id="cor-card" class="fas fa-clipboard-check mb-4"></i>
							
							<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100"> Aliquam cupiditate exercitationem magnam ut eum, quos vitae fugit non iste commodi quibusdam quod excepturi corporis consequuntur temporibus nesciunt iure itaque rerum!....</p>
							<a href="<?php the_permalink(); ?>" class="font-weight-bold text-uppercase text-decoration-none mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Ler mais +</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

<section class="coaching-consulting d-flex p-relative bg-color-light pt-3 pb-3 pt-lg-5 pb-lg-4">
	<div class="container">
		<div class="row justify-content-end py-5">
			<div class="col-lg-6">
				<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span>Persquisa e Opinião</p>
				<h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Soluções customizáveis para o seu negócio</h2>
				<p class="font-weight-semibold mb-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
				<p class="mb-4 pb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
			</div>
			<div class="col-lg-6 col-coaching-consulting-imgs p-relative">
				<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
					<img src="<?php bloginfo('template_directory');?>/assets/img/demos/business-consulting-2/coaching/pesquisa-opiniao3.jpg" class="img-fluid border-radius-0" alt="">
				</div>
				<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
					<img src="<?php bloginfo('template_directory');?>/assets/img/demos/business-consulting-2/coaching/pesquisa-opiniao2.jpg" class="img-fluid border-radius-0" alt="">
				</div>
				<div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
					<img src="<?php bloginfo('template_directory');?>/assets/img/demos/business-consulting-2/coaching/pesquisa-opiniao1.jpg" class="img-fluid border-radius-0" alt="">
				</div>
			</div>
		</div>
	</div>
</section>



<?php 
	get_template_part('template-parts/conteudo-final'); 
?>
				                          
<?php get_footer()?>