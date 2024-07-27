<?php
    namespace PHP\Modelo;

    class Compra{
        private int $codigo;
        private string $cartaoCredito;
        private string $cpf;
        private string $data;

        //Construtor
        public function __construct(int $codigo,
                                    string $cartaoCredito,
                                    string $cpf,
                                    string $data)
        {
            $this->codigo = $codigo;
            $this->cartaoCredito = $cartaoCredito;
            $this->cpf = $cpf;
            $this->data = $data;
        }//Fim do construtor

        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set():void
        {
            $this->campo = $valor;
        }//Fim do set genérico
    }//Fim da classe Compra
?>