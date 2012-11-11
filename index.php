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

// APP ROUTES -----------------------------------------------------------------

// The default index/help route
$app->get('/', function () {
    require 'App/Help.html';
});

// The API accessor route.
$app->get('/resume(/)(:path+)', function ($dirtyPath = array()) use ($app, $resume) {
    // Filter each of our nodes to only alphanumeric values.
    $cleanPath = preg_replace('/[^a-z0-9]+/i', '', $dirtyPath);

    // Build the default response object
    $response = array(
        'status' => 'success',
        'path'   => $cleanPath,
        'data'   => null,
    );

    // Walk the tree of document nodes to get the payload
    $payload = walkTree($cleanPath, $resume);

    // If walkTree() found a bad node in the path, fail the response, otherwise
    // store the data.
    if ($payload === false) { $response['status'] = 'failure'; }
    else                    { $response['data']   = $payload; }

    // Render the response
    $headers = $app->response();
    $headers['Content-Type'] = 'application/json;utf-8';
    echo json_encode($response, true);
});

// RUN THE APP ----------------------------------------------------------------
$app->run();


