<?php

$xunit = new atoum\reports\asynchronous\xunit();
$clover = new atoum\reports\asynchronous\clover();
$runner->addReport($xunit);
$runner->addReport($clover);

$report = $script->addDefaultReport();
$runner->setBootstrapFile(__DIR__ . DIRECTORY_SEPARATOR .  '.bootstrap.atoum.php');
$runner->addTestsFromDirectory(__DIR__ . DIRECTORY_SEPARATOR);

$writer = new atoum\writers\file('build/logs/xunit.xml');
$writer3 = new atoum\writers\file('build/logs/clover.xml');
$xunit->addWriter($writer);
$clover->addWriter($writer3);
?>
