<?php
add_action('init', 'cptui_register_my_taxes_durations');
function cptui_register_my_taxes_durations(){
	register_taxonomy(
		'duration',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Duration',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Total Duration',
				'popular_items' => 'Popular Duration',
				'all_items' => 'All Durations',
				'parent_item' => 'Parent Duration',
				'parent_item_colon' => 'Parent Duration:',
				'edit_item' => 'Edit Duration',
				'update_item' => 'Update Duration',
				'add_new_item' => 'Add New Duration',
				'new_item_name' => 'New Duration Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_episodes');
function cptui_register_my_taxes_episodes(){
	register_taxonomy(
		'episode',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Total Episode',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Total Episode',
				'popular_items' => 'Popular Episode',
				'all_items' => 'All Durations',
				'parent_item' => 'Parent Episode',
				'parent_item_colon' => 'Parent Episode:',
				'edit_item' => 'Edit Episode',
				'update_item' => 'Update Episode',
				'add_new_item' => 'Add New Episode',
				'new_item_name' => 'New Duration Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_judul');
function cptui_register_my_taxes_judul(){
	register_taxonomy(
		'judul',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Judul',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Total Judul',
				'popular_items' => 'Popular Judul',
				'all_items' => 'All Judul',
				'parent_item' => 'Parent Judul',
				'parent_item_colon' => 'Parent Judul:',
				'edit_item' => 'Edit Judul',
				'update_item' => 'Update Judul',
				'add_new_item' => 'Add New Judul',
				'new_item_name' => 'New Judul Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_genre');
function cptui_register_my_taxes_genre(){
	register_taxonomy(
		'genre',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => true,
			'label' => 'Genre',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Genre',
				'popular_items' => 'Popular Genre',
				'all_items' => 'All Genres',
				'parent_item' => 'Parent Genre',
				'parent_item_colon' => 'Parent Genre:',
				'edit_item' => 'Edit Genre',
				'update_item' => 'Update Genre',
				'add_new_item' => 'Add New Genre',
				'new_item_name' => 'New Genre Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_studio');
function cptui_register_my_taxes_studio(){
	register_taxonomy(
		'studio',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => true,
			'label' => 'Studio',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Studio',
				'popular_items' => 'Popular Studio',
				'all_items' => 'All Studio',
				'parent_item' => 'Parent Studio',
				'parent_item_colon' => 'Parent Studio:',
				'edit_item' => 'Edit Studio',
				'update_item' => 'Update Studio',
				'add_new_item' => 'Add New Studio',
				'new_item_name' => 'New Studio Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_scores');
function cptui_register_my_taxes_scores(){
	register_taxonomy(
		'score',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Total Score',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Total Score',
				'popular_items' => 'Popular Score',
				'all_items' => 'All Score',
				'parent_item' => 'Parent Score',
				'parent_item_colon' => 'Parent Score:',
				'edit_item' => 'Edit Score',
				'update_item' => 'Update Score',
				'add_new_item' => 'Add New Score',
				'new_item_name' => 'New Score Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_subtitle');
function cptui_register_my_taxes_subtitle(){
	register_taxonomy(
		'subtitle',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Judul Alternatif',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Total Subtitle',
				'popular_items' => 'Popular Subtitle',
				'all_items' => 'All Subtitle',
				'parent_item' => 'Parent Subtitle',
				'parent_item_colon' => 'Parent Subtitle:',
				'edit_item' => 'Edit Subtitle',
				'update_item' => 'Update Subtitle',
				'add_new_item' => 'Add New Subtitle',
				'new_item_name' => 'New Subtitle Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_season');
function cptui_register_my_taxes_season(){
	register_taxonomy(
		'season',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => true,
			'label' => 'Season',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Season',
				'popular_items' => 'Popular Season',
				'all_items' => 'All Season',
				'parent_item' => 'Parent Season',
				'parent_item_colon' => 'Parent Season:',
				'edit_item' => 'Edit Season',
				'update_item' => 'Update Season',
				'add_new_item' => 'Add New Season',
				'new_item_name' => 'New Season Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_aired');
function cptui_register_my_taxes_aired(){
	register_taxonomy(
		'aired',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => false,
			'label' => 'Tanggal Tayang',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Aired',
				'popular_items' => 'Popular Aired',
				'all_items' => 'All Judul',
				'parent_item' => 'Parent Aired',
				'parent_item_colon' => 'Parent Aired',
				'edit_item' => 'Edit Aired',
				'update_item' => 'Update Aired',
				'add_new_item' => 'Add New Aired',
				'new_item_name' => 'New Aired Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_status');
function cptui_register_my_taxes_status(){
	register_taxonomy(
		'status',
		array(
			0 => 'post',
			
		),
		array(
			'hierarchical' => true,
			'label' => 'Status',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Status',
				'popular_items' => 'Popular Status',
				'all_items' => 'All Status',
				'parent_item' => 'Parent Status',
				'parent_item_colon' => 'Parent Status:',
				'edit_item' => 'Edit Status',
				'update_item' => 'Update Status',
				'add_new_item' => 'Add New Status',
				'new_item_name' => 'New Status Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}
add_action('init', 'cptui_register_my_taxes_type');
function cptui_register_my_taxes_type(){
	register_taxonomy(
		'type',
		array(
			0 => 'post',
		),
		array(
			'hierarchical' => true,
			'label' => 'Type',
			'show_ui' => true,
			'query_var' => true,
			'show_admin_column' => false,
			'labels' => array(
				'search_items' => 'Type',
				'popular_items' => 'Popular Type',
				'all_items' => 'All Types',
				'parent_item' => 'Parent Type',
				'parent_item_colon' => 'Parent Type:',
				'edit_item' => 'Edit Type',
				'update_item' => 'Update Type',
				'add_new_item' => 'Add New Type',
				'new_item_name' => 'New Type Name',
				'separate_items_with_commas' => '',
				'add_or_remove_items' => '',
				'choose_from_most_used' => '',
			)
		)
	); 
}