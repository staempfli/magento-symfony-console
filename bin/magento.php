#!/usr/bin/env php
<?php

require_once dirname(dirname(__FILE__)) . '/app/Mage.php';
Mage::app('admin', 'store');

require Mage::getBaseDir() . '/' . Mage::getStoreConfig('staempfli_console/vendor_dir') . '/' . 'autoload.php';
$application = new \Symfony\Component\Console\Application();

$commands = Mage::getStoreConfig('staempfli_console/commands');
foreach ($commands as $commandClass) {
    $application->add(Mage::getModel($commandClass));
}

$application->run();