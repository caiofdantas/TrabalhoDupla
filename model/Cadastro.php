<?php
    namespace Projeto\model;

    class Cadastro{
        private string $usuariobd;
        private int $senhabd;
        private string $email;

        public function __construct(string $usuariobd, int $senhabd, string $email){
            $this-> usuariobd = $usuariobd;
            $this-> senhabd = $senhabd;
            $this-> email = $email;
        }

        public function __get(string $dado):mixed
        {
            return $this->dado;
        }
        public function __set(string $variavel, string $novoDado):void
        {
            $this-> variavel = $novoDado;
        }
    }
?>