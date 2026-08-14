<?php

class AnimalController
{
    function Listar()
    {
        // Conectar ao banco de dados
        $servidor = 'mysql:host=localhost;dbname=prontuario_vet';
        $usuario = 'root';
        $senha = '1234';

        $lista = [];
        try {
            $pdo = new PDO($servidor, $usuario, $senha);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $pdo->prepare('SELECT * FROM animal;');
            $query->execute();

            while ($dados = $query->fetch(PDO::FETCH_ASSOC)) {
                $idAnimal = $dados['id_animal'];
                $nome = $dados['nome_animal'];

                $animal = new Animal($idAnimal, $nome);
                array_push($lista, $animal);
            }
            $pdo = null;
        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
        return $lista;
    }
}
