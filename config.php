<?php

spl_autoload_register(function ($nomeDaClasse) {
    $pastDasClasses = 'classes/';
    $pastasDoSistema = [
        $pastDasClasses,
        $pastDasClasses . 'models/',
        $pastDasClasses . 'views/',
        $pastDasClasses . 'controllers/'
    ];

    foreach ($pastasDoSistema as $pastaAtual) {
        $nomeDoArquivo = $pastaAtual . $nomeDaClasse . '.php';
        if (file_exists($nomeDoArquivo)) {
            require_once $nomeDoArquivo;
            break;
        }
    }
});
