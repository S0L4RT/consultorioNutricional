<?php
    class Consultorio{
        private $nome;
        private $anoNasc;
        private $peso;
        private $altura;


        public function __Construct(){
            $this->nome = "";
            $this->anoNasc = 0;
            $this->peso = 0;
            $this->altura = 0;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setAnoNasc($anoNasc){
            $this->anoNasc = $anoNasc;
        }
    }
