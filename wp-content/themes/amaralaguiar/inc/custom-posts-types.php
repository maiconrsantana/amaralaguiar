<?php

//Custom Posts Types

	//Banners Home
	add_action('init', 'type_post_banners');

	function type_post_banners() {
		$labels = array(
			'name' => _x('Destaques Home', 'post type general name'),
			'singular_name' => _x('Destaque', 'post type singular name'),
			'add_new' => _x('Adicionar Novo', 'Novo item'),
			'add_new_item' => __('Novo Item'),
			'edit_item' => __('Editar Item'),
			'new_item' => __('Novo Item'),
			'view_item' => __('Ver Item'),
			'search_items' => __('Procurar Item'),
			'not_found' =>  __('Nenhum item encontrado'),
			'not_found_in_trash' => __('Nenhum item encontrado na lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Destaques Home'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => false,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 4,
			'menu_icon' => 'dashicons-align-center',
			'supports' => array('title', 'revisions')
    );

register_post_type( 'banners' , $args );
flush_rewrite_rules();
}

//Áreas de Atuação
add_action('init', 'type_post_areas_atuacao');

function type_post_areas_atuacao() {
	$labels = array(
		'name' => _x('Áreas de Atuação', 'post type general name'),
		'singular_name' => _x('Área de Atuação', 'post type singular name'),
		'add_new' => _x('Adicionar Nova', 'Nova Área'),
		'add_new_item' => __('Nova Área'),
		'edit_item' => __('Editar Área'),
		'new_item' => __('Nova Área'),
		'view_item' => __('Ver Área'),
		'search_items' => __('Procurar Área'),
		'not_found' =>  __('Nenhuma área encontrada'),
		'not_found_in_trash' => __('Nenhuma área encontrada na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Áreas de Atuação'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'query_var' => 'areas_atuacao',
		'rewrite' => array('slug' => 'atuacao','with_front' => false),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-editor-quote',
		'supports' => array('title', 'revisions')
	);

register_post_type( 'area_atuacao' , $args );
flush_rewrite_rules();
}

?>
