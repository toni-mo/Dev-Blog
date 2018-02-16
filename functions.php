<?php

	function myblog_scripts(){
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), 'some_version');
		wp_enqueue_style('style', get_template_directory_uri().'/style.css', array(), 'some_version');
	}

	function create_development_post(){
		register_post_type('development-post', array(
			'labels' => array(
				'name' => __('Development Post'),
				'singular_name' => __('Development Post'),
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'custom-fields'
				)
			));
	}

	add_action('init', 'create_development_post');

	add_theme_support('title-tag');

	add_action('wp_enqueue_scripts', 'myblog_scripts');



?>