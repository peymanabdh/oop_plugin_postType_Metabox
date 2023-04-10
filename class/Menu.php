<?php
//include_once 'BaseMenu.php';
//include_once 'User.php';
include_once 'AjaxHandler.php';
class Menu extends BaseMenu
{
    use User;
    public function __construct()
    {
        $this->page_title = 'صفحه مدیریت کاربران';
        $this->menu_title = 'مدیریت کاربران';
        $this->menu_slug = 'all_users';
        $this->has_sub_menu = true;
        $this->sub_menu_items = [
            'add_user' => [
                'parent_slug' => $this->menu_slug,
                'page_title' => 'صفحه افزودن کاربر',
                'menu_title' => 'افزودن کاربر',
                'menu_slug' => 'add_user',
                'callback' => 'add_user'
            ],
            'transaction_user' => [
                'parent_slug' => $this->menu_slug,
                'page_title' => 'صفحه تراکنش های کاربر',
                'menu_title' => 'تراکنش های کاربر ',
                'menu_slug' => 'transaction_user',
                'callback' => 'transaction_user'
            ],
        ];
        parent::__construct();
    }

}