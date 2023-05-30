<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package sparkling
 */

 get_header(); ?>

<style type="text/css">
#cari {
    top: 0;
    margin-top: 20px;
    margin-bottom: 10px;
}
#filteranime {
    width: 100%;
    display: none;
}

.show_filter{
	z-index: 998;
	background: #000;
	display: inline-block;
	color: #fff;
	border-radius: 3px;
	margin: 3px;
	padding: 5px 8px;
}
</style>
 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">
			<div id="cari">
			<!--<div id="filteranime">
	<form action="/tag/ongoing/" id="filterin" method="post">
    <div class="form-group">
      <label for="genre_list">Mutiple select list (hold shift to select more than one):</label>
      <select multiple class="form-control" id="genre_list" name="genrenya[]">
        <option value="20">Action</option><option value="69">Adventure</option><option value="13">Comedy</option><option value="222">Dementia</option><option value="57">Demons</option><option value="22">Drama</option><option value="25">Ecchi</option><option value="70">Fantasy</option><option value="77">Game</option><option value="28">Harem</option><option value="49">Historical</option><option value="26">Horror</option><option value="117">Josei</option><option value="580">Kids</option><option value="10">Magic</option><option value="156">Martial Arts</option><option value="103">Mecha</option><option value="97">Military</option><option value="32">Music</option><option value="43">Mystery</option><option value="158">Parody</option><option value="44">Police</option><option value="46">Psychological</option><option value="15">Romance</option><option value="187">Samurai</option><option value="16">School</option><option value="52">Sci-Fi</option><option value="29">Seinen</option><option value="110">Shoujo</option><option value="107">Shoujo Ai</option><option value="21">Shounen</option><option value="12">Slice of Life</option><option value="171">Space</option><option value="55">Sports</option><option value="67">Super Power</option><option value="14">Supernatural</option><option value="45">Thriller</option><option value="58">Vampire</option>      </select>
    </div>
	<div class="form-group row">
	  <button type="submit">Send </button>
	</div>
	<input type="hidden" name="submitted" id="submitted" value="true" />
	</form></div> 
  <button class="show_filter">SHOW FILTER</button> -->
			<div class="form-group">
			<select class="form-control" onchange="window.open(this.options[this.selectedIndex].value,'_self')">
			<option value="" disabled selected>Sort...</option>		
			<option value="?orderby=a-z">A-Z</option>
			<option value="?orderby=z-a">Z-A</option>
			<option value="?orderby=newest">Newest</option>
			<option value="?orderby=oldest">Oldest</option>			
			<option value="?orderby=most_viewed">Most Viewed</option>			
			</select>          
			</div>
			</div>
<div class="mklnkm">
</div><div class="clear"></div>

			<?php
			if ( have_posts() ) :
			?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
				get_template_part( 'template-parts/content', get_post_format() );
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

				get_template_part( 'template-parts/content', 'none' );

		 endif;
			?>

		 </main><!-- #main -->
	 </div><!-- #primary -->

	<?php
	get_sidebar();
	get_footer();
