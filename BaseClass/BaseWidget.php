<?php

abstract class BaseWidget
{
    protected $ID,
    $widget_name,
    $callback;
    public function __construct()
    {

        add_action('wp_dashboard_setup',[$this,'register_widget']);
    }

    public function register_widget()
    {
        wp_add_dashboard_widget(
            $this->ID,
            $this->widget_name,
            [$this,'layout']
        );
    }
    abstract public function layout();
}