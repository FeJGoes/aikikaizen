<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'logo.css?v='.filemtime(CSS_DIR.'logo.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'burger.css?v='.filemtime(CSS_DIR.'burger.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'nav.css?v='.filemtime(CSS_DIR.'nav.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=HOST.CSS_DIR.'footer.css?v='.filemtime(CSS_DIR.'footer.css')?>">

    <?php

    if ($this->css)
    {
        foreach($this->css as $css)
        {
            echo ' <link rel="stylesheet" type="text/css" href="'.$css.'?v='.filemtime($css).'">';
        };
    }
    
    ?>

    <link rel="stylesheet" type="text/css" href="libs/uikit@3.2.3/css/uikit.min.css">
    <script src="libs/uikit@3.2.3/js/uikit.min.js"></script>
    <script src="libs/uikit@3.2.3/js/uikit-icons.min.js"></script>

    <title><?=$title?></title>
</head>