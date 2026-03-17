<?php
    namespace Projeto\model;

    class Pessoa{
        private string $login;
        private string $senha;

        public function __construct(string $login, string $senha){
            $this-> login = $login;
            $this-> senha = $senha;
        }

        public function __get(string $dado):mixed
        {
            return $this ->dado;
        }
        public function __set(string $variavel, string $novodado):void
        {
            $this-> variavel = $novoDado;
        }  
    }//fim do projeto
?>