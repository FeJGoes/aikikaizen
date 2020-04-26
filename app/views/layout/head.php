<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?=HOST.IMGS_DIR."aikido-ico.ico"?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'global/global.css?v='.filemtime(CSS_DIR.'global/global.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'global/logo.css?v='.filemtime(CSS_DIR.'global/logo.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'global/burger.css?v='.filemtime(CSS_DIR.'global/burger.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'global/header.css?v='.filemtime(CSS_DIR.'global/header.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'global/footer.css?v='.filemtime(CSS_DIR.'global/footer.css')?>">

    <?php

    if ($this->css)
    {
        foreach($this->css as $css)
        {
            echo ' <link rel="stylesheet" type="text/css" href="'.HOST.$css.'?v='.filemtime($css).'">';
        };
    }
    
    ?>

    <link rel="stylesheet" type="text/css" href="<?=HOST?>libs/uikit@3.2.3/css/uikit.min.css">
    <script src="<?=HOST?>libs/uikit@3.2.3/js/uikit.min.js"></script>
    <script src="<?=HOST?>libs/uikit@3.2.3/js/uikit-icons.min.js"></script>

    <title><?=$title?></title>
</head>