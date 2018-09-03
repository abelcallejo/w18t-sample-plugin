<?php
/**
  * Plugin Name: W18T sample plugin
  * Version: 1.1
  * Author: Abel Melquiades Callejo
  * Description: A sample plugin implementation using the W18T library
  */

$path = plugin_dir_path( __FILE__ );
include_once $path . '/lib/wordpress-environment/W18T.class.php';

class Function_Holder
    {
    public function register_menu()
        {
        add_menu_page( 'W18T plugin', 'W18T plugin', 'manage_options', 'w18t-sample-plugin', array($this,'render'), 'dashicons-admin-tools', 3 );
        }
        
    public function render()
        {
        $environment = new W18T();

        echo "<pre>";
        echo $environment->interpreter;
        echo "</pre>";
        }
    }

$function_holder = new Function_Holder();

add_action( 'admin_menu', array( $function_holder, 'register_menu' ) );

?>