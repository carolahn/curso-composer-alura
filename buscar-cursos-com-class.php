#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
// require 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

Teste::metodo();
Teste2::metodo();

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$courses = $buscador->buscar('/cursos-online-programacao/php');

foreach ($courses as $course) {
    exibeMensagem($course);
}