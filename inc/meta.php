<?php
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );
function your_prefix_register_meta_boxes( $meta_boxes )
{
	$prefix = 'ero_';
	$meta_boxes[] = array(
		'title'	=> __('Ongoing Episode', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'name' => __( 'Episode', 'meta-box' ),
				'id'   => "{$prefix}eps",
				'type' => 'text',
			),
			array(
				'name'     => __( 'Jadwal', 'meta-box' ),
				'id'       => "{$prefix}jadwal",
				'type'     => 'select',
				'options'  => array(
					'Senin' => __( 'Senin', 'meta-box' ),
					'Selasa' => __( 'Selasa', 'meta-box' ),
					'Rabu' => __( 'Rabu', 'meta-box' ),
					'Kamis' => __( 'Kamis', 'meta-box' ),
					'Jumat' => __( 'Jumat', 'meta-box' ),
                                        'Sabtu' => __( 'Sabtu', 'meta-box' ),
                                        'Minggu' => __( 'Minggu', 'meta-box' ),
                                        'Random' => __( 'Random', 'meta-box' ),
				),
				'multiple'    => false,
				'std'         => 'Random',
			),
		),
	);
	$meta_boxes[] = array(
		'title'	=> __('Link Download Batch (max. 5)', 'textdomain'),
		'post_types' => 'post',
		'fields' => array(
			array(
				'id' => 'download-embed-batch',
				'name' => esc_html__( 'Batch Content', 'textdomain' ),
				'type' => 'wysiwyg',
			),
		),
	);
	return $meta_boxes;
}