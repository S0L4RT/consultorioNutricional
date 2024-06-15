<?php
    class Consultorio{
        private $nome;
        private $anoNasc;
        private $peso;
        private $altura;
    }

    public function __Construct($nome, $anoNasc, $peso, $altura){
        $this -> nome = $nome;
        $this -> anoNasc = $anoNasc;
        $this -> peso = $peso;
        $this -> altura = $altura;
    }

    public function setNome($nome){
        $this -> nome = $nome;
    }

    public function setAnoNasc($anoNasc){
        $this -> anoNasc = $anoNasc;
    }


?>