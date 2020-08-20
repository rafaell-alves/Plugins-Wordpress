<?php
$smis_options = get_option('smis_op_icons');
echo var_dump( $smis_options);
?>
<div class='wrap'>
    <h1> PLUGIN SOCIAL MEDIA ICONS</h1>
    <hr>
    <form action="options.php" method='POST'>
        <?php settings_fields( 'smis_op' )?>
        <label>Facebook:</label><br>
        <input type="url" name="smis_op_icons[fb_perfil]" id="smis_op_icons[fb_perfil]" value='<?php echo $smis_options['fb_perfil']?>'><br>
        <label>Twitter:</label><br>
        <input type="url" name="smis_op_icons[tw_perfil]" id="smis_op_icons[tw_perfil]" value='<?php echo $smis_options['tw_perfil']?>'><br>
        <label>Youtube:</label><br>
        <input type="url" name="smis_op_icons[yt_perfil]" id="smis_op_icons[yt_perfil]" value='<?php echo $smis_options['yt_perfil']?>'><br>
        <input type="submit" value="salvar">
    </form>
</div>