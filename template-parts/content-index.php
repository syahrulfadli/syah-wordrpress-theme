<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package syah
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta-index">
				<?php
				syah_posted_on();
				syah_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif;?>
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title-index">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title-index"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<?php syah_post_thumbnail(); ?>

	<div class="entry-content">
	<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php syah_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
