<?php

abstract class BaseMetaBox
{
    protected $ID,
        $title,
        $callback,
        $screen,
        $context,
        $priority,
        $callback_arg;
    public function __construct() {
        $this->context = 'normal';
        $this->priority = 'default';
        add_action( 'add_meta_boxes', [$this, 'add_meta_box']);
        add_action( 'save_post',      [ $this, 'save']);
    }
    public function add_meta_box(){
        add_meta_box(
            $this->ID,
            $this->title,
            [$this,'layout'],
            $this->screen,
        );
    }

    abstract public function layout($post);
    abstract public function save($post_id);
}