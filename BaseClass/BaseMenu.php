<?php

abstract class BaseMenu
{
    protected $page_title,
        $menu_title,
        $capability,
        $menu_slug,
        $callback,
        $has_sub_menu = false,
        $sub_menu_items = [];

    public function __construct()
    {
        $this->capability = 'manage_options'; //set capabiluty of menu usage
        add_action('admin_menu',[$this,'add_menu_page']);
    }

    public function add_menu_page()
    {
        add_menu_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            [$this, 'index'] //callback
        );
        if($this->has_sub_menu){
/*            echo '<pre>';
            var_dump($this->sub_menu_items);
            echo '</pre>';*/
        foreach ($this->sub_menu_items as $item) {
            add_submenu_page(
                $item['parent_slug'],
                $item['page_title'],
                $item['menu_title'],
                $this->capability,
                $item['menu_slug'],
                [$this,$item['callback']]
            );
        }
        }
    }
    abstract public function index();
}