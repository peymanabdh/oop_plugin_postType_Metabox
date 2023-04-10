<?php
class AjaxHandler
{
    private $actions = [
        'add_user',
        'transaction_user'
    ];
    public function __construct()
    {
        foreach ($this->actions as $action){
            add_action('wp_ajax_'.$action,$action);
            add_action('wp_ajax_nopriv_'.$action,$action);
        }
//        add_action('wp_ajax_add_user','add_user');
//        add_action('wp_ajax_transaction_user','transaction_user');
    }

}
 new AjaxHandler();

