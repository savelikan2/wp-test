<?php

/**
 * Plugin Name:     Test Plugin
 * Plugin URI:      http://сторінка-плагіну
 * Description:     Short description of test plugin
 * Version:         1.0
 * Author:          SaVelikan
 * Author URI:      http://savelikan
 * License:         GPL2
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     test-domain
 * Domain Path:     /languages
 */

include('includes/functions_settings.php');
include('includes/functions_options.php');


if(!defined('WPINC')){
    die;
}

register_activation_hook(__FILE__, function(){
    //---
});

register_deactivation_hook(__FILE__, function(){
    //---
});

register_uninstall_hook(__FILE__, function(){
    //---
});

//--створити силку в головному меню
add_action( 'admin_menu', function (){
    add_menu_page(
        'Головна сторінка тестового модуля',
        'Тестовий модуль',
        'manage_options',
        'premmerce-index',
        function(){echo 123;}
    );
} );

//--створити підменю
add_action( 'admin_menu', function (){
    add_submenu_page(
        'premmerce-index',
        'Налаштування SETTINGS',
        'Налаштування SETTINGS',
        'manage_options',
        'premmerce-settings',
        'premmerce_settings_page_html'
    );
} );

//--створити підменю
add_action( 'admin_menu', function (){
    add_submenu_page(
        'premmerce-index',
        'Налаштування OPTIONS',
        'Налаштування OPTIONS',
        'manage_options',
        'premmerce-options',
        'premmerce_options_page_html'
    );
} );
