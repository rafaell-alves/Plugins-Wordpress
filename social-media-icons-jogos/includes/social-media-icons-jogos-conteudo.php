<?php

function smi_plugin_games_register_content($post){
     require_once(DIRETORIO_RAIZ_SOCIAL_MEDIA.'/includes/templates/conteudo.php');
     echo $post;
}
add_filter( 'the_content','smi_plugin_games_register_content');