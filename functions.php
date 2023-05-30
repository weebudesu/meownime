<?php 
add_action( 'wp_enqueue_scripts', 'sparkling_enqueue_child_styles', 99 );

function sparkling_enqueue_child_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}
 /**	
 * Metabox & Cuatom Tax.	
 */	
require get_stylesheet_directory() . '/inc/meta.php';	

require get_stylesheet_directory() . '/inc/post_tax.php';

function complete($atts)
	{
			extract(shortcode_atts(['count' => '10000'], $atts)); ?>
<div id="daftaranime">
<div class="tab-content">
<div class="abjtext">
<a href="#.">.</a><a href="#%23">#</a><a href="#A">A</a><a href="#B">B</a><a href="#C">C</a><a href="#D">D</a><a href="#E">E</a><a href="#F">F</a><a href="#G">G</a><a href="#H">H</a><a href="#I">I</a><a href="#J">J</a><a href="#K">K</a><a href="#L">L</a><a href="#M">M</a><a href="#N">N</a><a href="#O">O</a><a href="#P">P</a><a href="#Q">Q</a><a href="#R">R</a><a href="#S">S</a><a href="#T">T</a><a href="#U">U</a><a href="#V">V</a><a href="#W">W</a><a href="#X">X</a><a href="#Y">Y</a><a href="#Z">Z</a>
<div class="clear"></div></div>
<?php
$myposts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'batch', ) ), 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($myposts1);		

		$first_letter = '';

		while ($wp_query->have_posts()) {
			$wp_query->the_post();
			$seriesname = get_the_title();
			$first_lettercur = $seriesname[0];

			if (is_numeric($first_lettercur)) {
				$first_lettercur = '#';
			}

			if ($first_lettercur == $first_letter) {
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}
			else {
				echo '</ul></aside><aside id="' . $first_lettercur . '" class="meow-list meow-archive" style="margin:0px"><h1 class="letter">' . $first_lettercur . '</h1><ul>';
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}

			$first_letter = $first_lettercur;
			echo '    ';
		}
?>
</div>
</div>
<?php
	}
add_shortcode("complete", "complete");

function ongoing($atts)
	{
		extract(shortcode_atts(['count' => '10000'], $atts)); ?>
<div id="daftaranime">
<div class="tab-content">
<div class="abjtext">
<a href="#.">.</a><a href="#%23">#</a><a href="#A">A</a><a href="#B">B</a><a href="#C">C</a><a href="#D">D</a><a href="#E">E</a><a href="#F">F</a><a href="#G">G</a><a href="#H">H</a><a href="#I">I</a><a href="#J">J</a><a href="#K">K</a><a href="#L">L</a><a href="#M">M</a><a href="#N">N</a><a href="#O">O</a><a href="#P">P</a><a href="#Q">Q</a><a href="#R">R</a><a href="#S">S</a><a href="#T">T</a><a href="#U">U</a><a href="#V">V</a><a href="#W">W</a><a href="#X">X</a><a href="#Y">Y</a><a href="#Z">Z</a>
<div class="clear"></div></div>
<?php
$myposts2 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($myposts2);		

		$first_letter = '';

		while ($wp_query->have_posts()) {
			$wp_query->the_post();
			$seriesname = get_the_title();
			$first_lettercur = $seriesname[0];

			if (is_numeric($first_lettercur)) {
				$first_lettercur = '#';
			}

			if ($first_lettercur == $first_letter) {
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}
			else {
				echo '</ul></aside><aside id="' . $first_lettercur . '" class="meow-list meow-archive" style="margin:0px"><h1 class="letter">' . $first_lettercur . '</h1><ul>';
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}

			$first_letter = $first_lettercur;
			echo '    ';
		}
?>
</div>
</div>
<?php
	}
add_shortcode("ongoing", "ongoing");

function movie($atts)
	{
		extract(shortcode_atts(['count' => '10000'], $atts)); ?>
<div id="daftaranime">
<div class="tab-content">
<div class="abjtext">
<a href="#.">.</a><a href="#%23">#</a><a href="#A">A</a><a href="#B">B</a><a href="#C">C</a><a href="#D">D</a><a href="#E">E</a><a href="#F">F</a><a href="#G">G</a><a href="#H">H</a><a href="#I">I</a><a href="#J">J</a><a href="#K">K</a><a href="#L">L</a><a href="#M">M</a><a href="#N">N</a><a href="#O">O</a><a href="#P">P</a><a href="#Q">Q</a><a href="#R">R</a><a href="#S">S</a><a href="#T">T</a><a href="#U">U</a><a href="#V">V</a><a href="#W">W</a><a href="#X">X</a><a href="#Y">Y</a><a href="#Z">Z</a>
<div class="clear"></div></div>
<?php
$myposts3 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'movie', ) ), 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($myposts3);		

		$first_letter = '';

		while ($wp_query->have_posts()) {
			$wp_query->the_post();
			$seriesname = get_the_title();
			$first_lettercur = $seriesname[0];

			if (is_numeric($first_lettercur)) {
				$first_lettercur = '#';
			}

			if ($first_lettercur == $first_letter) {
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}
			else {
				echo '</ul></aside><aside id="' . $first_lettercur . '" class="meow-list meow-archive" style="margin:0px"><h1 class="letter">' . $first_lettercur . '</h1><ul>';
				echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
			}

			$first_letter = $first_lettercur;
			echo '    ';
		}
?>
</div>
</div>
<?php
	}
add_shortcode("movie", "movie");

function jadwal($atts)
	{
			extract(shortcode_atts(['count' => '10000'], $atts)); ?>
<div id="abtext"> 
<div class="bariskelom"> 			
<div id="daftaranime">
<aside id="a-z" class="meow-list list_a-z"> 
<aside id="Senin" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Senin</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Senin', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Selasa" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Selasa</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Selasa', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Rabu" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Rabu</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Rabu', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Kamis" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Kamis</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Kamis', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Jumat" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Jumat</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Jumat', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Sabtu" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Sabtu</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Sabtu', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Minggu" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Minggu</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Minggu', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
<aside id="Randon" class="meow-list meow-archive" style="margin:0px"> <h1 class="letter">Random</h1>
<ul>
<?php $posts1 = ['showposts' => $count, 'post_type' => 'post', 'tax_query' => array ( array ('taxonomy' => 'post_tag', 'field' => 'slug', 'terms' => 'ongoing', ) ), 'meta_key' => 'ero_jadwal', 'meta_value' => 'Random', 'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true, 'ignore_sticky_posts' => 1];
		$wp_query = NULL;
		$wp_query = new WP_Query();
		$wp_query->query($posts1);
		if ( $wp_query->have_posts() )		{
		while ($wp_query->have_posts()) {
		$wp_query->the_post();
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" rel="';
				the_ID();
				echo '" href="';
				the_permalink();
				echo '">';
				$judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;
				echo '</a></li></ul></div></div>' . "\n\t";
		}
		}
		else {
       echo "\t" . '<div class="penzbar"><div class="jdlbar"><ul><li>Belum Tersedia</li></ul></div></div>' . "\n\t";
       } ?>
</ul>
</aside>
</aside>
<?php echo '</div>';
echo '</div>';
echo '</div>';
}
add_shortcode("jadwal", "jadwal");

function genre($atts)
	{
			extract(shortcode_atts(['count' => '10000'], $atts)); ?>
<div id="daftaranime"> 
<!-- Nav tabs --> 
<ul class="nav nav-tabs" role="tablist"> 
<li class="active"><a href="#genre" role="tab" data-toggle="tab" aria-control="#genre">Genre</a></li> 
<li><a href="#season" role="tab" data-toggle="tab" aria-control="#season">Season</a></li> 
<li><a href="#studio" role="tab" data-toggle="tab" aria-control="#studio">Studio</a></li> 
</ul> 	
<!-- Tab panes --> 
<div class="tab-content"> 	
<div class="tab-pane fade active in" id="genre">
<?php 
$taxonomy = 'genre';
$tax_terms = get_terms($taxonomy,'number=100');
      echo '<div class="meow-genres"><ul>';
      foreach ($tax_terms as $tax_term){
      echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "Lihat genre %s" ), $tax_term->name ) . '" ' . '><span>' . $tax_term->name.'</span></a></li>';
      }
      echo '</ul></div>'; 
?>
</div>
<div class="tab-pane fade" id="season"> 		
<?php 
$taxonomy1 = 'season';
$tax_terms1 = get_terms($taxonomy1,'number=100');
      foreach ($tax_terms1 as $tax_term1){
      $first_letter1 = '';
      $season = $tax_term1->name;
	   $first_lettercur1 = $season[1];
		if ($first_lettercur1 == $first_letter1) {
		   echo '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" href="';
		   echo esc_attr(get_term_link($tax_term1, $taxonomy1));
		   echo '" title="';
	           sprintf( __( "Lihat studio %s" ), $tax_term1->name );	           
	           echo '">';
	           echo $tax_term1->name;
	           echo '</a></li></ul></div></div>';				
		}	
		else {		   
	           echo '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" href="';
		   echo esc_attr(get_term_link($tax_term1, $taxonomy1));
		   echo '" title="';
	           sprintf( __( "Lihat studio %s" ), $tax_term1->name );	           
	           echo '">';
	           echo $tax_term1->name;
	           echo '</a></li></ul></div></div>';
		}
	}	
?>
</div>
<div class="tab-pane fade" id="studio"> 		
<?php 
$taxonomy1 = 'studio';
$tax_terms1 = get_terms($taxonomy1,'number=100');
      foreach ($tax_terms1 as $tax_term1){
      $first_letter1 = '';
      $season = $tax_term1->name;
	   $first_lettercur1 = $season[1];
		if ($first_lettercur1 == $first_letter1) {
		   echo '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" href="';
		   echo esc_attr(get_term_link($tax_term1, $taxonomy1));
		   echo '" title="';
	           sprintf( __( "Lihat studio %s" ), $tax_term1->name );	           
	           echo '">';
	           echo $tax_term1->name;
	           echo '</a></li></ul></div></div>';				
		}	
		else {		   
	           echo '<div class="penzbar"><div class="jdlbar"><ul><li><a class="nyaalist" href="';
		   echo esc_attr(get_term_link($tax_term1, $taxonomy1));
		   echo '" title="';
	           sprintf( __( "Lihat studio %s" ), $tax_term1->name );	           
	           echo '">';
	           echo $tax_term1->name;
	           echo '</a></li></ul></div></div>';
		}
	}	
?>
<?php echo '</div>';
echo '</div>';
}
add_shortcode("genre", "genre");

function display_custom_taxonomy($taxonomy) {
    $terms = get_the_terms( get_the_ID(), $taxonomy );

    if ( $terms && ! is_wp_error( $terms ) ) {
        $term_names = array();

        foreach ( $terms as $term ) {
            $term_names[] = $term->name;
        }

        $term_list = implode( ', ', $term_names );

        echo $term_list;
    }
}

 ?>
