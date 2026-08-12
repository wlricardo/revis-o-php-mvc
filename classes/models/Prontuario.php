<?php

class Prontuario
{
    public $Animal;
    public $Tratamento;
    public $DataTratamento;
    public $Descricao;

    function __construct(Animal $animal, Tratamento $tratamento, $dataTratamento, $descricao)
    {
        if ($animal != null)
            $this->Animal = $animal;
        else
            $this->Animal = new Animal();

        if ($tratamento != null)
            $this->Tratamento = $tratamento;
        else
            $this->Tratamento = new Tratamento();

        $this->DataTratamento = $dataTratamento;

        $this->Descricao = $descricao;

        throw new \Exception('Not implemented');
    }
}
