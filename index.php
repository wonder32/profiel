<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./view');
$twig = new Twig_Environment($loader, array(
    'debug' => true, 'auto_reload' => true
));

$template = $twig->loadTemplate('profiel.twig');

echo $template->render(array('name' => 'variables', 'go' => 'here'));