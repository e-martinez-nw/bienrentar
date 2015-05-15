<?php get_header(); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="main-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<article>
							<header>
								<h1><?php the_title(); ?></h1>
							</header>

							<?php the_content(); ?>
						</article>
					</div><!-- /.col-xs-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!--#main-content-->

		<?php endwhile; else : ?>
		<?php endif; ?>

<?php get_footer(); ?>