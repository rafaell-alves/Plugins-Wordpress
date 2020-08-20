<?php
/*
    Plugin Name: Social Media Icons-Jogos e Reviews
    Author: Rafael Luis Alves
    Description :Plugin exibe os icones de rede social
    Version :1.0
  
*/

if(!defined('ABSPATH')){
    exit("ACESSO NEGADO");
}

define("DIRETORIO_RAIZ_SOCIAL_MEDIA",plugin_dir_path( __FILE__ ));

require_once(DIRETORIO_RAIZ_SOCIAL_MEDIA.'includes/social-media-icons-jogos-conteudo.php');

require_once(DIRETORIO_RAIZ_SOCIAL_MEDIA.'includes/social-media-icons-jogos-option.php');