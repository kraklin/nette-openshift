<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

//$configurator->setDebugMode('10.10.10.10');  // enable for your IP
$configurator->enableDebugger($_ENV['OPENSHIFT_LOG_DIR']);

$configurator->setTempDirectory($_ENV['OPENSHIFT_TMP_DIR']);

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->addDirectory(__DIR__ . '/../vendor/others')
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
