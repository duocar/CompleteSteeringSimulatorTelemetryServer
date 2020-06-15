<?php

require 'vendor/autoload.php';

$context = new Service\TelemetryContext();

$strategy = new Service\ETS2TelemetryStrategy();

$context->setStrategy($strategy);

$telemetry = $context->makeTelemetry();

$data = json_encode($telemetry, JSON_PRETTY_PRINT);

var_dump($data);

