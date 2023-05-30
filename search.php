<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package sparkling
 */

get_header(); ?>
<style type="text/css">

.cari {
    float: right;
    clear: both;
    position: absolute;
    right: 26px;
    top: 0;
    margin-top: 20px;
    margin-bottom: 10px;
}
</style>
 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
<div class="clear"></div><div class="clear"></div>
 		<?php
	if ( have_posts() ) :
		?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'sparkling' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<div class="cari">
			<div class="form-group">
			<select class="form-control" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
			<option value="" disabled selected>Sort...</option>
			<option value="/?s=a&orderby=a-z">A-Z</option>
			<option value="/?s=a&orderby=z-a">Z-A</option>
			<option value="/?s=a&orderby=newest">Newest</option>
			<option value="/?s=a&orderby=oldest">Oldest</option>
			<option value="/?s=a&orderby=most_viewed">Most Viewed</option>			
			</select>          
			</div>
			</div>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content_2', 'search' );

			endwhile;
			echo '<div class="paginations">';
			the_posts_pagination(
				array(
					'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Prev', 'sparkling' ),
					'next_text' => __( 'Next', 'sparkling' ) . ' <i class="fa fa-chevron-right"></i>',
				)
			);
			echo '</div>';

		else :

			get_template_part( 'template-parts/content_2', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
