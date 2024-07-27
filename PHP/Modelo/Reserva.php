<?php
    namespace PHP\Modelo;

    class Reserva{
        private int $codigo;
        private string $cpf;
        private string $data;
        private string $quantidade;

        //Construtor
        public function __construct(int $codigo,
                                    string $cpf,
                                    string $data,
                                    string $quantidade)
        {
            $this->codigo = $codigo;
            $this->cpf = $cpf;
            $this->data = $data;
            $this->quantidade = $quantidade;
        }//Fim do construtor

        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set():void
        {
            $this->campo = $valor;
        }//Fim do set genérico
    }//Fim da classe Reserva
?>