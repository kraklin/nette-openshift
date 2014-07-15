<?php

require __DIR__ . '/../libs/autoload.php';

$configurator = new Nette\Configurator;

//$configurator->setDebugMode('10.10.10.100'); // enable for your remote IP
$configurator->enableDebugger($_ENV['OPENSHIFT_LOG_DIR']);

$configurator->setTempDirectory($_ENV['OPENSHIFT_TMP_DIR']);

$configurator->createRobotLoader()
	->addDirectory(__DIR__)
	->addDirectory(__DIR__ . '/../libs/others')
	->register();

$configurator->addConfig(__DIR__ . '/config/config.neon');
$configurator->addConfig(__DIR__ . '/config/config.local.neon');

$container = $configurator->createContainer();

return $container;
