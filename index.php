<?php
// Sample PHP project with a vulnerable dependency
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

// Basic response
$response->setContent('Hello, this is a vulnerable PHP project.');
$response->send();
?>
