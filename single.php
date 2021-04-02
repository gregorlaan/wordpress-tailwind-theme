<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tailwind_theme
 */

get_header();
?>

	<div class="flex max-w-7xl mx-auto flex-col md:flex-row">
		<main id="primary" class="site-main w-full md:flex-grow">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<div class="bg-white p-4 shadow-sm sm:mr-2"><span class="nav-subtitle text-blue-500 block">' . esc_html__( 'Previous:', 'tailwindcss' ) . '</span> <span class="nav-title font-medium">%title</span></div>',
						'next_text' => '<div class="bg-white p-4 shadow-sm sm:ml-2"><span class="nav-subtitle text-blue-500 block">' . esc_html__( 'Next:', 'tailwindcss' ) . '</span> <span class="nav-title font-medium">%title</span></div>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();
