<?php

/**
 * @var $app Slim\App
 */
$app->group("/server", function () use ($app)
{
    require_once __DIR__ . '/v1/routes.php';
});
