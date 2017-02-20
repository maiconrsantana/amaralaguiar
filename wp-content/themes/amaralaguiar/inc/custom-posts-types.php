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

?>
