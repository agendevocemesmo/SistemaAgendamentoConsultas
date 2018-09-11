<?php

public class Paciente extends Usuario{
    
    private $cpf;
    
    function getCpf() {
        return $this->cpf;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }


    
}

