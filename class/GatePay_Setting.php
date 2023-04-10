<?php
//include_once 'BaseSetting.php';
class GatePay_Setting extends BaseSetting
{
    public function __construct()
    {
        $this->option_group = 'general';
        $this->option_names = ['_gate_pay_name','_merchant_ID'];
        $this->args = [
            'type' =>'string',
            'sanitize_callback'=>'sanitize_text_field',
            'default' =>null
            ];
        $this->section_ID = 'merchant_ID_section';
        $this->section_title= '';
        $this->section_callback ='title';
        $this->field_ID = 'merchant_ID_field';
        $this->field_title = 'تنظیمات درگاه پرداخت';
        $this->field_callback = 'layout';
        $this->field_section =$this->section_ID;
        parent::__construct();
    }

    public function title()
    {

    }

    public function layout()
    {
        $gate_pay_name = get_option('_gate_pay_name');
        $merchant_ID = get_option('_merchant_ID');
        ?>
        <input type="text" name="_gate_pay_name" value="<?php echo isset($gate_pay_name) ? esc_attr($gate_pay_name) :''?>" placeholder="نام درگاه پرداخت...">
        <input type="text" name="_merchant_ID" value="<?php echo isset($merchant_ID) ? esc_attr($merchant_ID) :''?>" placeholder="مرچنت آی دی...">
   <?php }
}