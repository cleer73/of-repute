<?php

// BOOTSTRAP //////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

date_default_timezone_set('America/Los_Angeles');

require 'App/Data.php';
require 'App/Library.php';
require 'Slim/Slim.php';

// AUTOLOADER -----------------------------------------------------------------
\Slim\Slim::registerAutoloader();


// CREATE APP -----------------------------------------------------------------
$app = new \Slim\Slim();

// The default index route
$app->get('/', function () use ($app) {
    require 'App/Help.html';
});

// The API accessor route.
$app->get('/api(/)(:path+)', function ($dirtyPath = array()) use ($app, $resume) {
    // Filter each of our nodes to only alphanumeric values.
    $cleanPath = preg_replace(array('/[^a-z0-9]+/i'), array(''), $dirtyPath);

    // Build our basic response object
    $response = array(
        'status' => 'success',
        'path'   => $cleanPath,
        'resume' => null,
    );

    // Get the response payload
    $payload = walkTree($cleanPath, $resume);

    if ($payload === false) {
        $response['status'] = 'failure';
    } else {
        $response['resume'] = $payload;
    }

    // Setup the response
    $headers = $app->response();
    $headers['Content-Type'] = 'application/json;utf-8';
    echo json_encode($response);
});

// RUN THE APP ----------------------------------------------------------------
$app->run();


