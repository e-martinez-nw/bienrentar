<?php get_header(); ?>
	<?php if(is_active_sidebar('cta-slider')): ?>
		<div class="hidden-xs col-sm-5 col-sm-offset-7 col-md-4 col-md-offset-8">
			<div class="cta-slider">
				<?php dynamic_sidebar( 'cta-slider' ); ?>
			</div><!--.features-->
		</div><!--.col-sm-3-->
	<?php endif; ?>
	<div id="slider">
		<?php nivo_slider( "index" ); ?>
	</div><!--slider-->

	<?php if(is_active_sidebar('cta-slider')): ?>
		<div class="visible-xs">
			<div class="cta-slider2 col-xs-12">
				<?php dynamic_sidebar( 'cta-slider' ); ?>
			</div><!--.col-sm-3-->
		</div><!--.features-->
	<?php endif; ?>

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
		<div class="container-fluid hidden-xs no-padding">
			<?php if(is_active_sidebar('beneficios-img')): ?>
				<div class="col-sm-offset-6">
					<?php dynamic_sidebar( 'beneficios-img' ); ?>
				</div><!--.col-sm-6 col-sm-offset-6-->
			<?php endif; ?>
		</div><!--.container-fluid-->
		<div class="container">
			<div class="row">
				<?php if(is_active_sidebar('beneficios')): ?>
					<div class="col-sm-6 text">
							<?php dynamic_sidebar( 'beneficios' ); ?>
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
					<?php dynamic_sidebar(' mapa' ); ?>
				</div><!--.col.sm-8-->
			</div><!--.row-->
		</div><!--.container-->
	</section><!--#contacto-->
<?php get_footer(); ?>