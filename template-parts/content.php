<?php
/**
 * @package sparkling
 */
?>
<?php
	$classes = array(
		'col-xs-12',
		'col-md-4',
		'col-md-4',
		'col-sm-2',
		'grid',
		'grid_3_column',
		'meownime',
	);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
<div class="featured-thumb grid-img col-md-12">
<a href="<?php the_permalink(); ?>" title="<?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?>" >
<?php the_post_thumbnail(); ?></a>	
<div class="postedon">Episode <?php $eps = get_post_meta($post->ID, 'ero_eps', true); echo $eps; ?></div>
<div class="out-thumb">
<h1 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?></a></h1>
</div>
</div><!--.featured-thumb-->
</article><!-- #post-## -->
