<?php

// BOOTSTRAP //////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////

// AUTOLOADER -----------------------------------------------------------------
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// DATA -----------------------------------------------------------------------
$DATA = array(
    'resume' => array(
        'summary'    => 'I am an experienced web developer and database administrator with a proven history of designing, developing and supporting multiple, time-sensitive projects, both independently and as part of a team.',
        'contact'    => array(
            // VCARD
            // Phone: 206.778.2893 • Email: jake@cleer.net • 1945 Miss Ellis Loop • Poulsbo, WA 98370 
            'fn' => 'Jacob W. Lee',
            'nickname' => array('Jake'),
            'email' => 'jake@cleer.net',
            'tel'   => '+1.206.778.2893',
            'adr'   => array(
                'street-address' => '1945 Miss Ellis Loop NE',
                'locality'       => 'Poulsbo',
                'region'         => 'Washington',
                'postal-code'    => '98370',
                'country-name'   => 'U.S.A.'
            ),
        ),
        'experiance' => array(
            // iCalendar
            array(
                'summary' => '',
                'dtstart' => '',
                'dtend'   => '',
                'location' => '',
                '' => '',
                '' => '',
                '' => '',
            ),
        ),
        'education'  => array( /* hCalendar */ ),
        'skills'     => array( /* rel-tag */ ),
    )
);

// CREATE APP -----------------------------------------------------------------
$app = new \Slim\Slim();

// The default index route
$app->get('/', function () use ($app) {
    // !TODO: Display an info page on how to use this API
    echo('Hello there');
});

// The API accessors route.
$app->get('/api(/)(:nodes+)', function ($nodes = array()) use ($app, $DATA) {
    $headers = $app->response();

    $headers['Content-Type'] = 'application/json;utf-8';
    print_r(array('treeRequested' => $nodes, 'tree' => $DATA));
});

// RUN THE APP ----------------------------------------------------------------
$app->run();
