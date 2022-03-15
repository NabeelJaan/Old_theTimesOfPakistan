<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ssrc
 */

get_header();
?>

	<div class="max-w-6xl mx-auto px-5 my-10 md:px-10 xl:px-0 sd">
		
		<div class="md:flex md:flex-row">
			<!-- single post -->
			<div class="w-full md:w-3/5">

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) : the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', 'archive' );

					endwhile;

					the_posts_pagination( array( 'mid_size' => 2 ) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<!-- side bar -->
			<div class="w-full md:w-2/5 md:pl-10 lg:pl-100" id="sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();