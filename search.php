<?php get_header(); ?>

<div id="search">
	<div class="container">
		<div class="col-sm-8">
			<h1><span>Resultados de búsqueda Para:</span> <?php echo esc_attr(get_search_query()); ?></h1>

			<?php if (have_posts()) : ?> 
				<?php while (have_posts()) : the_post(); ?>

					<article>
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</header>

						<section>
								<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'NuevaWeb' ) . '</span>' ); ?>
						</section>

						<footer></footer>
					</article>
				<?php endwhile; ?>

				<?php if (function_exists('nw_paginate_links')) { ?>
						<?php nw_paginate_links(); ?>
				<?php } else { ?>
						<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'NuevaWeb' )) ?></li>
									<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'NuevaWeb' )) ?></li>
								</ul>
						</nav>
				<?php } ?>

			<?php else : ?>

						<h3>El término de búsqueda no ha sido encontrado, inténtalo nuevamente.</h3>

						<?php get_search_form(); ?>

			<?php endif; ?>
		</div><!--.col-sm-8-->
	</div><!--.container-->
</div><!--#search-->

<?php get_footer(); ?>
