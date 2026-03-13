<?php
    namespace Projeto\model;

    class Pessoa{
        private string $usuario;
        private int $senha;

        public function __construct(string $usuario, int $senha){
            $this-> usuario = $usuario;
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
            function logar(){
                if($this->usuario == $usuariobd && $this->senha == $senhabd){
                header('location: login.php');
            }
        }//fim do projeto
    }
?>