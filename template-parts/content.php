<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

// method to retrieving meta data in WP
$source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
	// var_dump($source_url);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<div class="entry-meta">
		<?php the_title( '<h2 class="entry-title">&mdash; ', '</h2>' ); ?>

		<?php if( $source && $source_url ): ?>

			<span class="source">, <a href="<?php echo $source_url; ?>"><?= $source; ?></a></span>
		
		<?php elseif( $source ): ?>

			<span class="source">, <?= $source; ?></span>

		<?php else: ?>

			<span class="source"></span>
			
		<?php endif; ?>

	</div><!-- .entry-meta -->

</article><!-- #post-## -->