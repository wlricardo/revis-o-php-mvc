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

/**
 *  Exemplo:
 *  $nomeDoArquivo = $pastaAtual . $nomeDaClass . '.php'
 *                 = classes/models/Animal.php 
 *  Procurou pela classe Animal.php que está dentro da pasta 'models', que está dentro de 'classes'
 */

/**
 *  Tha spl_autoload_function registers an anonymous function with PHP's SPL autoload stack. When PHP encounters 
 *  an undefined class or interface, it calls registered autoloaders with the class name; here the parameter 
 *  $nomeDaClasse will receive that fully qualified class name.
 * 
*/
