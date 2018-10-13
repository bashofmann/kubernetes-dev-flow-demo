<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function (Request $request, Response $response) {
    $name = $request->getQueryParams()['name'] ?? 'unknown';
    $client = new \GuzzleHttp\Client();
    $helloSvcResponse = $client->request(
        'GET',
        'http://hello-svc/?name=' . urlencode($name)
    );
    $quoteSvcResponse = $client->request(
        'GET',
        'http://quote-svc/quote'
    );
    $quotes = json_decode($quoteSvcResponse->getBody());
    $response->getBody()->write('<p>' . $helloSvcResponse->getBody() . '</p>');
    $response->getBody()->write('<b>' . $quotes[0]->title . ' said:</b> ' . $quotes[0]->content);

    return $response;
});
$app->run();
