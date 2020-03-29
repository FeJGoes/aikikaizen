<?php
class Controller
{
    private $css = [];
    private $js = [];
    private $title;
    private $data;

    public function renderView($pageRequested, $title, $footer)
    {
        $title = $title;
        include 'pages/layout/head.php';
        include 'pages/layout/header.php';
        include 'pages/'.$pageRequested.'.php';
        include 'pages/layout/scripts.php';
        if ($footer)
        {
            // include 'pages/layout/footer.php';
        }
    }

    public static function renderPage($pageRequested, $title, $footer)
    {
        $title = $title;
        include 'pages/layout/head.php';
        include 'pages/layout/header.php';
        include 'pages/'.$pageRequested.'.php';
        include 'pages/layout/scripts.php';
        if ($footer)
        {
            // include 'pages/layout/footer.php';
        }
    }

    /**
     * Get the value of css
     */ 
    public function getCss()
    {
        return $this->css;
    }

    /**
     * Set the value of css
     *
     * @return  self
     */ 
    public function setCss($css)
    {
        $this->css = $css;

        return $this;
    }

    /**
     * Get the value of js
     */ 
    public function getJs()
    {
        return $this->js;
    }

    /**
     * Set the value of js
     *
     * @return  self
     */ 
    public function setJs($js)
    {
        $this->js = $js;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
 }
