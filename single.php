<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package reptilesshop
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<div class="row">
				<div class="main-area col-md-9">


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'reptilesshop' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'reptilesshop' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			// 関連記事
			get_template_part('template-parts/content','related');
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.

		?>
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
