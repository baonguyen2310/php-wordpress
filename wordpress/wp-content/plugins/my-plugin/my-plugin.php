<?php
/**
 * Plugin Name: My Plugin
 * Plugin URI: // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: baonguyen // Tên tác giả, người thực hiện plugin này
 * Author URI: // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */
?>

<?php
    if(!class_exists('my_plugin')){
        class my_plugin {
            function __construct() {
                if (!function_exists('add_shortcode')) {
                    return;
                }
                add_shortcode('hello', array(&$this, 'hello_func'));
            }
            function hello_func($atts = array(), $content = null) {
                extract(shortcode_atts(array('name' => 'World'), $atts));
                return '<div><p>Hello ' . $name . '</p></div>';
            }
        }
    }
    function mfpd_load() {
        global $mfpd;
        $mfpd = new my_plugin();
    }

    add_action('plugins_loaded', 'mfpd_load');
?>

<?php
    function my_plugin_head(){ ?>
        <style>
            body {
                background-color: gray;
            }
        </style>
        <script>
            alert("Hello Js from Wordpress");
        </script>
    <?php
    }
    function my_plugin_footer(){
        echo '<h1><a href="https://google.com">WOw</a></h1>';
    }
    add_action('wp_head', 'my_plugin_head');
    add_action('wp_footer', 'my_plugin_footer');
?>

