<?php 
/* 
Template name: Serviços
*/
?>
<?php get_header() ?>
<div role="main" class="main">

<?php 
	get_template_part('template-parts/topo-servicos'); 
?>

<div class="container py-5">
	<div class="row align-items-center">
		<div class="col-lg-12">
			<p class="text-4 line-height-9 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="100">
				<?php 
					if (have_posts()) : while(have_posts()) : the_post();
				?>
				<?php the_content(); ?>

				<?php 
					endwhile;
					endif;
				?>  
			</p>
		</div>

		<div class="row bg-color-light cards-container d-flex justify-content-center justify-content-xl-between w-100 mb-5 mx-0 box-shadow-1 p-relative top-0">
			<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
				<div class="card border-radius-0 border-0 shadow-none">
					<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
						<i id="cor-card" class="fas fa-user-check mb-4"></i>
						
						<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Medir o grau de satisfação da população em relação a gestão em qualquer esfera da prefeitura e do seu prefeito...</p>						
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
				<div class="card border-radius-0 border-0 shadow-none">
					<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1">
						<i id="cor-card" class="fas fa-vote-yea mb-4"></i>
						
						<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">Medir, através de pesquisa quantitativa, a aceitação e rejeição de candidatos e campanhas, em período eleitoral ou durante seu mandato...</p>						
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-xl-4 bg-light p-0 shadow-none">
				<div class="card border-radius-0 border-0 shadow-none">
					<div class="card-body d-flex align-items-center justify-content-between flex-column z-index-1 border-end-0">
						<i id="cor-card" class="fas fa-clipboard-check mb-4"></i>
						
						<p class="card-text text-center pt-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Avaliar a aceitação e a opinião do público sobre determinado produto, antes mesmo de ser lançado no mercado....</p>						
					</div>
				</div>
			</div>
		</div>

	</div>	

		<div class="row">
			<div class="col py-5">
				<hr class="m-0">
			</div>
		</div>
	<div class="row">
		<div class="col">
			<p class="text-uppercase font-weight-semibold mb-1 text-color-primary appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="100"><span class="line-pre-title bg-color-primary"></span></p>
			<h2 class="text-color-secondary font-weight-bold text-capitalize mb-4 custom-letter-spacing-2 custom-text-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">Qual a sua necessidade?</h2>
		</div>
	</div>

	<div class="row" id="text-service">
		
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card2"class="fas fa-users"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card" class="fas fa-chart-pie"></i>
				<div class="ps-2 ps-lg-0">							
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
			<div class="row align-items-center no-gutters">
				
			<i id="cor-card2" class="fas fa-bullhorn"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
			<div class="row align-items-center no-gutters">
				
			<i id="cor-card" class="fas fa-clipboard-check"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card3" class="fas fa-clipboard-check"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card" class="fas fa-clipboard-check"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card2" class="fas fa-clipboard-check"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card" class="fas fa-users"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 pt-3 mb-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
			<div class="row align-items-center no-gutters">
				
				<i id="cor-card2" class="fas fa-clipboard-check"></i>
				<div class="ps-2 ps-lg-0">
					<h4 class="mb-3 text-5 font-weight-bold text-color-tertiary">Serviço</h4>
					<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor lacus tincidunt ut...</p>
				</div>
			</div>
		</div>

	</div>
</div>

<?php 
	get_template_part('template-parts/final-servicos'); 
?>

</div>

<?php get_footer()?>