<?php

// Uncomment this line if you must temporarily take down your site for maintenance.
//require '.maintenance.php';

$container = require __DIR__ . '/../misc/bootstrap.php';

$container->getService('application')->run();
