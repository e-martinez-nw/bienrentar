<?php get_header(); ?>
	<div class="slider">
		<?php putRevSlider("index") ?>
	</div><!--slider-->

	<section id="icons">
		<div class="container">
			<div class="row">
				<?php if(is_active_sidebar('features')): ?>
					<div class="features">
						<?php dynamic_sidebar( 'features' ); ?>
					</div><!--.features-->
				<?php endif; ?>
			</div><!--.row-->
		</div><!--.container-->
	</section><!--.icons-->

	<section id="beneficios">
		<div class="container">
			<div class="row">
				<?php if(is_active_sidebar('beneficios')): ?>
					<div class="col-sm-6">
						<?php dynamic_sidebar( 'beneficios' ); ?>
					</div><!--.col-sm-6-->
				<?php endif; ?>
				<?php if(is_active_sidebar('beneficios-img')): ?>
					<div class="col-sm-6">
						<?php dynamic_sidebar( 'beneficios-img' ); ?>
					</div><!--.col-sm-6-->
				<?php endif; ?>
			</div><!--.row-->
		</div><!--.container-->
	</section><!--#beneficios-->

	<section id="contacto">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<?php dynamic_sidebar( 'contacto' ); ?>
				</div><!--.col-sm-4-->
				<div class="col-sm-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3762.4636650119787!2d-99.20045320000001!3d19.4355661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2020350d36a7d%3A0x2387503a2889b3d!2sGoldsmith+232%2C+Polanco%2C+11550+Ciudad+de+M%C3%A9xico%2C+D.F.!5e0!3m2!1ses-419!2smx!4v1431120371421" width="100%" height="544" frameborder="0" style="border:0"></iframe>
				</div><!--.col.sm-8-->
			</div><!--.row-->
		</div><!--.container-->
	</section><!--#contacto-->
<?php get_footer(); ?>