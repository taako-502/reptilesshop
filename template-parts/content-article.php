<?php
/**
 * Template part for displaying page content in index.php
 *
 * @link https://github.com/taako-502/reptilesshop
 *
 * @package reptilesshop
 */

?>
<div class="article-area col-md-12">
	<article id="post-<?php the_ID(); ?>" <?php post_class('row article-one'); ?>>
		<div class="article-thumbnail col-sm-12 col-md-5">
			<?php reptilesshop_post_thumbnail(); ?>
		</div>
		<div class="article-describe col-sm-12 col-md-7">
			<a class="apermalink" href="<?php echo get_permalink(); ?>">
	    	<h3><?php echo the_title( '' , '' , false ); ?></h3>
				<div class="except">
					<?php the_excerpt(); ?>
				</div>
	    </a>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'reptilesshop' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
