<?php

if (!class_exists('DEV_MENU_ITEM')) {

    class DEV_MENU_ITEM {

        public function __construct() {
            add_action('admin_menu', array($this, 'register_menu'));
        }

        function register_menu() {
            add_menu_page("DEV", "DEV", 'administrator', 'dev_exploration_menu', array($this, 'menu_callback'), 20);
        }

        function menu_callback() {
            
        }

    }

}

new DEV_MENU_ITEM();
