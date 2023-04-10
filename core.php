<?php
/*
Plugin Name: oop-plugin
Plugin URI: http://wordpress.org/
Description: oop plugin
Author: peyman rahmani
Version: 1.0.0
License:
Author URI: http://wordpress.org
*/
//include_once 'class/Users.php';
//include_once 'class/menu.php';
//include_once 'class/metaBox_VideoUrl.php';
//include_once 'class/PostType_Course.php';
//include_once 'class/Widget_User.php';
//include_once 'class/GatePay_Setting.php';

defined('ABSPATH') || exit;
class Core
{
    public function __construct(){
        $this->define_constants();
        $this->init();
    }

    public function define_constants()
    {
        define('OOP_PLUGIN_DIR',plugin_dir_path(__FILE__));
        define('OOP_PLUGIN_URL',plugin_dir_url(__FILE__));
    }

    public function init()
    {
        include_once 'AutoLoad.php';
        register_activation_hook(__FILE__,[$this,'activation']);
        register_activation_hook(__FILE__,[$this,'deactivation']);
        add_action('wp_enqueue_scripts', [$this,'register_assets']);
        add_action('admin_enqueue_scripts',[$this,'register_assets']);
        $this->loadEntities();
    }

    public function register_assets()
    {
        //Register CSS
        wp_register_style('bootstrap-5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css', '', '5.2.0');
        wp_register_style('main-style', plugins_url('oop-plugin/assets/css/style.css'), '1.0.0');
        wp_enqueue_style('bootstrap-5');
        wp_enqueue_style('main-style');
        //Register JS
        if (is_admin()) {
            wp_register_script('dashboard-js', OOP_PLUGIN_URL . 'assets/js/dashboard.js', ['jquery'], '1.0.0', '');
            wp_enqueue_script('dashboard-js');
        } else {
            wp_register_script('front-js', OOP_PLUGIN_URL . 'assets/js/front.js', ['jquery'], '1.0.0', '');
            wp_enqueue_script('front-js');
        }
    }

    public function activation()
    {
        
    }

    public function deactivation()
    {
        
    }

    public function loadEntities()
    {
//      new Users();
        new Menu();
        new metaBox_VideoUrl();
        new PostType_Course();
        new Widget_User();
        new GatePay_Setting();
    }
}
$Core = new Core();
//var_dump(OOP_PLUGIN_URL);
