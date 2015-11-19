<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/bootstrap.php';
$app = require __DIR__.'/../src/routes.php';

# debug mode
//$app->settings['displayErrorDetails'] = true;

$app->run();
