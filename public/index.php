<?php
require "../vendor/autoload.php";

$products = ['product1', 'product2', 'product3', 'product4', 'product5', 'product6', 'product7', 'product8', 'product9'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render("index.html.twig", ["products" => $products]);

