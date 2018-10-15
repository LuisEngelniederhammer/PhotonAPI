<?php

namespace src\server\v1;

use Slim\Http\Response;
use Slim\Http\Request;

/**
 * @var $app \Slim\App
 */
$app->group("/v1", function () use ($app)
{
    $app->get("/ping", function (Request $request, Response $response)
    {
        return $response->withStatus(200)->withJson(["Success"]);
    });
});