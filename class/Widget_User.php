<?php

//require_once '../BaseClass/BaseWidget.php';

class Widget_User extends BaseWidget
{
    public function __construct()
    {
        $this->ID = 'my_widget';
        $this->widget_name= 'اطلاعات کاربر';
        parent::__construct();
    }

    public function layout()
    {

       var_dump("بببببببببببببببببببببببببببببب");
    }
}