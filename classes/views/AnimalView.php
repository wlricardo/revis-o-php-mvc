<?php

class AnimalView
{
    function ExibirTodosOsAnimais()
    {
        $animalController = new AnimalController();
        $listarTodosOsAnimais = $animalController->Listar();

        foreach ($listarTodosOsAnimais as $animal) {
            echo "<p>" . $animal->Nome . "</p>";
        }
    }
}
