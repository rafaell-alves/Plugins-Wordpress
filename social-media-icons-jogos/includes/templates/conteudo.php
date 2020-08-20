<style>
.smis-conteudo .smis-icones img{
    width:40px;
    height:auto;
}
</style>
<div class="smis-conteudo">
    ME ENCONTRE NAS REDES SOCIAIS:
    <hr>
        <div class="smis-icones">
           <?php $smis_options = get_option( 'smis_op_icons' ) ?>
          <a href="<?php echo $smis_options['fb_perfil'];?>"> <img src="<?php echo plugin_dir_url( __FILE__  ) . 'img/facebook.png' ?>"></a>
          <a href="<?php echo $smis_options['tw_perfil'];?>"> <img src="<?php echo plugin_dir_url( __FILE__ ) .'img/twiiter.png'?>"></a>
          <a href="<?php echo $smis_options['yt_perfil'];?>"> <img src="<?php echo plugin_dir_url(__FILE__ ) .'img/youtube.png'?>"></a>
       
        </div>
    <hr>
</div>