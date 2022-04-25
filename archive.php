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

							get_template_part( 'template-parts/content', 'archive' );

						endwhile;

					the_posts_pagination( array( 'mid_size' => 2 ) );

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
			<!-- sidebar -->
			<div class="border border-grey-100 shadow bg-white p-4">
				<h2 class="font-semibold border-b-2 border-green pb-2 mb-4">Most Viewed</h2>
				<div>
					<?php get_sidebar(); ?>
				</div>
		</div>
		</div>
	</div>

<?php
get_footer();