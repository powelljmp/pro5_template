<?php
require __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use powelljmp\phpboilerpackage\Hello;

echo Hello::greeting();

$someVar = array('me');

dump($someVar);




use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\Templating\Loader\FilesystemLoader;


$loader = new FilesystemLoader(__DIR__.'/views/%name%');

$templating = new PhpEngine(new TemplateNameParser(), $loader);

echo $templating->render('blank.php', array('firstname' => 'Fabien'));


