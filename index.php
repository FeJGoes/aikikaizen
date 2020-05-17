<?php

require 'configs/constants.php';
require 'routes/routes.php';

new Router($_SERVER['REQUEST_URI']);


