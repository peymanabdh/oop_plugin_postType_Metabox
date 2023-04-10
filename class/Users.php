<?php
//include_once 'BaseMenu.php';
class Users extends BaseMenu
{
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
    public function index()
    {
        // TODO: Implement index() method.
        echo '<h1>مدیریت کاربران</h1>';
    }

    public function add_user()
    {
        echo '<h1>افزودن کاربر</h1>';
        if (isset($_POST['submit'])) {
            echo 'submit';
        }
        include_once OOP_PLUGIN_DIR . 'view/user/user_add_view.php';
    }

    public function transaction_user()
    {
        echo '<h1>تراکنش های کاربر</h1>';

        include_once OOP_PLUGIN_DIR . 'view/user/transaction_user.php';
    }
}
