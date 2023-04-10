<?php

abstract class BaseSetting
{
    protected $option_group,
        $option_names = [],
        $args = [],
        $section_ID,
        $section_title,
        $section_callback,
        $field_ID,
        $field_title,
        $field_callback,
        $field_section;


    public function __construct()
    {
        add_action('admin_init', [$this, 'register_setting']);
    }

    public function register_setting()
    {
        foreach ($this->option_names as $option_name) {
            register_setting($this->option_group, $option_name, $this->args);
        }

        add_settings_section(
            $this->section_ID,
            $this->section_title,
            [$this, 'title'],
            $this->option_group
        );
        add_settings_field(
            $this->field_ID,
            $this->field_title,
            [$this, 'layout'],
            $this->option_group,
            $this->field_section

        );
    }

    abstract public function title();

    abstract public function layout();
}