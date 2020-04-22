<?php

require 'configs/constants.php';
require 'routes/routes.php';


new Router(str_replace('/site-aikikaizen','',$_SERVER['REQUEST_URI']));
