<?php
define ('ROOT', __DIR__ . '/../');

require_once   ROOT . 'vendor/autoload.php';
$app = require ROOT . 'src/bootstrap.php';
$app = require ROOT . 'src/routes.php';

# debug mode
$app->settings['displayErrorDetails'] = true;

$app->run();
