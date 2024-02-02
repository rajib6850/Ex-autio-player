<?php

/*
* Plugin Name: Ex audio player
* Plugin URI: https://nextevoit.com/
* Description: "Ex Audio Player plugin" Seamlessly integrate an attractive and feature-rich audio player to engage your visitors. With a sleek design, easy customization options, and smooth playback controls, Ex Audio Player is the perfect solution for showcasing your audio content.
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Execute Rajib
* Author URI: https://executerajib.com/
* License: GPL-2.0-only
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: ex-audio-player
*/

defined('ABSPATH') or die('No access permission to direct folder or file');



final class ExAudioPlayer
{

   
    public function __construct( ){

        add_action( 'init', [$this, 'ex_audio_player_init'] );
        add_action( 'wp_enqueue_scripts', [$this, 'ex_auto_player_css_and_js_file'] );  
        add_action( 'wp_footer', [$this, 'ex_audio_direct_script'] );
        add_action( 'admin_menu', [$this, 'ex_audio_player_user_instruction'] );
       
    }


    // Shortcode register
    public function ex_audio_player_init (){

        add_shortcode( 'ex-audio-player', 'ex_audio_player' );

        function ex_audio_player($attr, $content){

            $atts = shortcode_atts( [

                'acf_field_name'        => '',

            ], $attr, 'ex-audio-player' );

            extract($atts);

            ob_start();

            get_template_part( 'audio-player-output', 'html' );

            require_once plugin_dir_path( __FILE__ )."/template-parts/audio-player-output-html.php";            
  

            return ob_get_clean();
            
        }

    }

    // Add HTML Output
    public function ex_auto_player_css_and_js_file(){

        $plugin_data = get_plugin_data( __FILE__ );
        $plugin_ver = $plugin_data['Version'];

        wp_enqueue_style( 'ex_audio_player_style', plugin_dir_url(__FILE__)."/assets/css/style.css", [], $plugin_ver, 'all' );

    }

    // Add Script
    public function ex_audio_direct_script(){

        require_once plugin_dir_path( __FILE__ )."/template-parts/audio-player-output-script.php";

    }

    // user instruction 
    public function ex_audio_player_user_instruction(){

        add_submenu_page( 
            'options-general.php', 
            __('Ex Audio Player user instruction', 'ex-audio-player'), 
            __('Ex Audio Player', 'ex-audio-player'), 
            'edit_pages',
            'ex-audio-player',
            [$this, 'ex_audio_player_user_instruction_callback']
        );

    }

    public function ex_audio_player_user_instruction_callback(){
        require_once plugin_dir_path( __FILE__ ).'/template-parts/ex-audio-player-user-instruction-callback.php';
    }


}
$ex_audio_player = new ExAudioPlayer();

