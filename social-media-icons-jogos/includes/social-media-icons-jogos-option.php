<?php


function smis_paginas_de_options_frontend(){
    require_once(DIRETORIO_RAIZ_SOCIAL_MEDIA.'includes/templates/op.php');
}
function smis_paginas_de_options_registro(){
    add_options_page('SMIS Options','SMIS Options','manage_options','smis','smis_paginas_de_options_frontend');
}

add_action('admin_menu','smis_paginas_de_options_registro');

function smis_carregando_settings_api(){
    register_setting('smis_op','smis_op_icons');
}
add_action( 'admin_init','smis_carregando_settings_api');