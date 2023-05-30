<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$featured_image_args = array(
		'class' => 'single-featured',
	);
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		the_post_thumbnail( 'sparkling-featured-fullwidth', $featured_image_args );
	} else {
		the_post_thumbnail( 'sparkling-featured', $featured_image_args );
	}
	?>
	<div class="post-inner-content">
		<header class="entry-header page-header">

			<h1 class="entry-title "><?php the_title(); ?></h1>

			<div class="entry-meta">
				<?php sparkling_posted_on(); ?>
				<?php if ( get_edit_post_link() ) : ?>
					<?php
						edit_post_link(
							sprintf(
								/* translators: %s: Name of current post */
								esc_html__( 'Edit %s', 'sparkling' ),
								the_title( '<span class="screen-reader-text">"', '"</span>', false )
							),
							'<i class="fa fa-edit"></i><span class="edit-link">',
							'</span>'
						);
					?>
				<?php endif; ?>
<div class="alert alert-info" style="margin-top: 20px">
<p>Bagi yang ingin nonton/streaming <?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?> sub indo, silakan kunjungi situs streaming kami: <span style="color: #DA4453;">koinime.net</span></p>
</div>			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
<table class=" table table-hover" style="width:100%">
<tr><td bgcolor="#33363b"><span style="color: #FFFFFF;"><b>Informasi Seputar <?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?></b></span></td></tr>
</table>
<ul>
<li><strong>Judul Anime : </strong><?php display_custom_taxonomy('judul'); ?></li>
<li><strong>Judul Alternatif : </strong><?php display_custom_taxonomy('subtitle'); ?></li>
<li><strong>Tipe Anime : </strong><?php $type = get_the_terms($post->ID, 'type');$tipe = $type[0]; echo $tipe->name;?></li>
<li><strong>Status Anime : </strong><?php $status= get_the_terms($post->ID, 'status');$status= $status[0]; echo $status->name;?></li>
<li class="Episodex"><strong>Jumlah Episode : </strong><?php $episode = get_the_terms($post->ID, 'episode');$episode= $episode[0]; echo $episode->name;?></li>
<li><strong>Musim Rilis : </strong><?php $season= get_the_terms($post->ID, 'season');$season= $season[0]; echo $season->name;?></li>
<li><strong>Tanggal Tayang : </strong><?php display_custom_taxonomy('aired'); ?></li>
<li class="Studiox"><strong>Studio yang Memproduksi : </strong><?php $studio= get_the_terms($post->ID, 'studio');$studio= $studio[0]; echo $studio->name;?></li>
<li><strong>Durasi per Episode : </strong><?php $duration= get_the_terms($post->ID, 'duration');$duration= $duration[0]; echo $duration->name;?></li>
<li class="Genrex"><strong>Genre : </strong><?php display_custom_taxonomy('genre'); ?></li>
<li class="Scorex"><strong>Skor di MyAnimeList : </strong><?php $score= get_the_terms($post->ID, 'score');$score= $score[0]; echo $score->name;?></li>
</ul>
<p>&nbsp;<span id="more-16057"></span></p>
<table class=" table table-hover" style="width:100%">
<tr><td bgcolor="#33363b"><span style="color: #FFFFFF;"><b>Sinopsis <?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?></b></span></td></tr>
</table>
<?php the_content(); ?>
<table class=" table table-hover" style="width:100%">
<tr><td bgcolor="#33363b"><span style="color: #FFFFFF;"><b>Download <?php $judul= get_the_terms($post->ID, 'judul');$judul = $judul[0]; echo $judul->name;?> Subtitle Indonesia</b></span></td></tr>
</table> 
<div class="dlx">
<?php echo rwmb_meta('download-embed-batch'); ?>
</div>
		</div><!-- .entry-content -->

	</div>

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="post-inner-content secondary-content-box">
	  <!-- author bio -->
	  <div class="author-bio content-box-inner">

		<!-- avatar -->
		<div class="avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ), '60' ); ?>
		</div>
		<!-- end avatar -->

		<!-- user bio -->
		<div class="author-bio-content">

		  <h4 class="author-name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></h4>
		  <p class="author-description">
				<?php echo get_the_author_meta( 'description' ); ?>
		  </p>

		</div><!-- end .author-bio-content -->

	  </div><!-- end .author-bio  -->

		</div>
		<?php endif; ?>

</article><!-- #post-## -->
<div class="anu-ini-info">
	<p><center><h3>Penting! Mohon Dibaca!</h3></center></p></br>
	<ul>
<li><p>Bagi yang mendapati masalah seputar file batch —baik itu diminta password ketika hendak mengekstrak, error saat mengekstrak, file batch tidak ada isinya setelah diekstrak, maupun pemasalahan-permasalahan lainnya— silakan baca <a href="https://meownime.com/solusi-masalah-file-batch/">tutorial ini</a> untuk mengatasinya. </p></li>
<li><p>Bila menemukan link atau video rusak, silakan lapor <a href="https://meownime.com/tempat-lapor-link-rusak/">di sini</a>.</p></li>
<li><p>Bila ingin request, silakan request <a href="https://meownime.com/request-anime/">di sini</a>.</p></li>
<li><p>Meowdrive dan Meowcloud = Google Drive.</p><p>Bagi yang terbiasa download di Google Drive, ke depannya silakan download di Meowdrive dan Meowcloud.</p><p>Jika memang tidak bisa download dari sana, kalian bisa men-download langsung dari Google Drive dengan menekan <a href="https://meownime.com/wp-content/uploads/2018/08/Convert-to-google-drive.png">tombol Convert to Google Drive</a> yang ada di header kedua situs tersebut.</p></li>
	</ul>
	</div>
<style>
.dlx{backgound:#ddd;padding:3px}
.dlx h4{background:#c2382b;color:#fff;font-size:14px;font-weight:700;border-left:6px solid #e4ab01;border-right:6px solid #e4ab01;margin:5px 0;padding:8px}
.dlx strong{background:#305d7b;padding:3px 8px;margin-right:1px;font-size:12px;color:#fff;border-radius:2px;}
.dlx a{padding:3px 8px;color:#333;font-weight:500;font-size:12px;margin-right:2px;border-radius:2px;background:#FFF;border-left:2px solid #eee;border-bottom:2px solid #eee;transition:.02s}
.dlx a:hover {background:#e4ab01;color#fff}
</style>	
