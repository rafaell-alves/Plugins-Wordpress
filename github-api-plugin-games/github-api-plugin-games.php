<?php
/*
Plugin Name: GITHUB API PLUGIN- GAMES
Description: Um plugin que utiliza da api do github
Author: Rafael Luis Alves
Version: 0.1
*/

if( !defined('ABSPATH')){
    exit("ACESSO NEGADO");
}

require_once(plugin_dir_path( __FILE__ ).'widgets/GithubWidget.php');

function gaps_register_widgets(){
    register_widget( 'GithubWidget' );
}
add_action( 'widgets_init','gaps_register_widgets' );