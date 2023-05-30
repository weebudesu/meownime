<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

	<div id="primary" class="content-area">
	<h1 class="meow-home">Ongoing</h1>	
    <div class="meow-more"><a href="/tag/ongoing/" title="Lihat Lainnya">More</a></div>
		<main id="main" class="site-main" role="main">

		<?php
		$the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'tax_query' => array(
                array (
                            'taxonomy' => 'post_tag',
                            'field' => 'slug',
                             'terms' => 'ongoing',
                           )
     ),
) );
while ( $the_query->have_posts() ) :
    $the_query->the_post();
        get_template_part( 'template-parts/content', get_post_format() );
        endwhile;
wp_reset_postdata();
		?>

		</main><!-- #main -->
	<h1 class="meow-home">Batch</h1>
<div class="meow-more"><a href="/tag/batch/" title="Lihat Lainnya">More</a></div>
		<main id="main" class="site-main" role="main">

		<?php
		$the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 6,
     'tax_query' => array(
                array (
                            'taxonomy' => 'post_tag',
                            'field' => 'slug',
                             'terms' => 'Batch',
                           )
     ),
) );
while ( $the_query->have_posts() ) :
    $the_query->the_post();
        get_template_part( 'template-parts/content_2', get_post_format() );
        endwhile;
wp_reset_postdata();
		?>

		</main><!-- #main -->
	<h1 class="meow-home">Movie</h1>
<div class="meow-more"><a href="/tag/movie/" title="Lihat Lainnya">More</a></div>
		<main id="main" class="site-main" role="main">

		<?php
		$the_query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => 6,
     'tax_query' => array(
                array (
                            'taxonomy' => 'post_tag',
                            'field' => 'slug',
                             'terms' => 'Movie',
                           )
     ),
) );
while ( $the_query->have_posts() ) :
    $the_query->the_post();
        get_template_part( 'template-parts/content_2', get_post_format() );
        endwhile;
        wp_reset_postdata();
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
