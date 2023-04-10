<?php

abstract class BaseCustomPostType
{
    protected $labels = [],
        $description,
        $public,
        $publicly_queryable,
        $show_ui,
        $show_in_menu,
        $query_var,
        $rewrite = [],
        $capability_type,
        $has_archive,
        $hierarchical,
        $menu_position,
        $supports,
        $post_type_key;

    public function __construct()
    {
        $this->public = true;
        $this->publicly_queryable = true;
        $this->show_ui = true;
        $this->show_in_menu = true;
        $this->query_var = true;
        $this->capability_type = 'post';
        $this->has_archive = true;
        $this->hierarchical = true;
        $this->menu_position = null;
        $this->supports = ['title', 'editor', 'author', 'thumbnail'];
        add_action('init', [$this, 'register_custom_post_type']);
    }

    public function register_custom_post_type()
    {
        $args = [
            'labels' => $this->labels,
            'description' => $this->description,
            'public' => $this->public,
            'publicly_queryable' => $this->publicly_queryable,
            'show_ui' => $this->show_ui,
            'show_in_menu' => $this->show_in_menu,
            'query_var' => $this->query_var,
            'rewrite' => $this->rewrite,
            'capability_type' => $this->capability_type,
            'has_archive' => $this->has_archive,
            'hierarchical' => $this->hierarchical,
            'menu_position' => $this->menu_position,
            'supports' => $this->supports
        ];
        register_post_type( $this->post_type_key, $args );
    }
}