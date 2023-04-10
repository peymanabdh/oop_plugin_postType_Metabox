<?php


trait User
{

    public function index()
    {
        // TODO: Implement index() method.
        echo '<h1>مدیریت کاربران</h1>';
    }

    public function add_user()
    {

        echo '<h1>افزودن کاربر</h1>';

        include_once OOP_PLUGIN_DIR . 'view/user/user_add_view.php';
    }

    public function transaction_user()
    {
        echo '<h1>تراکنش های کاربر</h1>';

        include_once OOP_PLUGIN_DIR . 'view/user/transaction_user.php';
    }
}