<?php
require_once __DIR__.'/../bootstrap.php';

$json_string = file_get_contents("./assets/js/data.json");
$config = json_decode($json_string);
echo $twig->render('index.html.twig', ['config' => $config] );
