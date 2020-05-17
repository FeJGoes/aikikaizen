
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?=KEY?>&libraries=places&callback=initMap&language=pt-br">
</script>
<script src="<?=HOST.JS_DIR?>global.js<?='?v='.filemtime(JS_DIR.'global.js')?>"></script>
<?php
if ($this->js)
{
    foreach($this->js as $js)
    {
        echo '<script src="'.$js.'?v='.filemtime($js).'"></script>';
    };
}
?>