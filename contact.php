<?php

session_start();

use Doctrine\Common\ClassLoader;

/* Initializing Doctrine */
require_once'Doctrine/Common/ClassLoader.php';
$classLoader = new ClassLoader("source");
$classLoader->register();

/* Initializing Twig */
require_once("lib/Twig/Autoloader.php");
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem("source/presentation");
$twig = new Twig_Environment($loader);
$view = $twig->render("contact.twig", array());

print($view);