<?php
if ($this->js)
{
    foreach($this->js as $js)
    {
        echo '<script src="'.$js.'?v='.filemtime($js).'"></script>';
    };
}
?>