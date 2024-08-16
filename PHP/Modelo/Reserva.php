<?php
    namespace PHP\Modelo;

    class Reserva{
        private int $codigo;
        private string $cpf;
        private string $data;
        private int $quantidade;
        private string $telefone;
        private int $codigoLivro;

        //Construtor
        public function __construct(int $codigo,
                                    string $cpf,
                                    string $data,
                                    int $quantidade,
                                    string $telefone,
                                    int $codigoLivro)
        {
            $this->codigo = $codigo;
            $this->cpf = $cpf;
            $this->data = $data;
            $this->quantidade = $quantidade;
            $this->telefone = $telefone;
            $this->codigoLivro = $codigoLivro;
        }//Fim do construtor

        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        public function __set(string $campo, string $valor):void
        {
            $this->campo = $valor;
        }//Fim do set genérico

        public function imprimir(){
            return "<br>Código: " . $this->codigo . 
                    "<br>CPF: " . $this->cpf . 
                    "<br>Data: " . $this->data .
                    "<br>Quantidade: " . $this->quantidade . 
                    "<br>Telefone: " . $this->telefone . 
                    "<br>Código Livro: " . $this->codigoLivro;
        }//Fim da função imprimir
    }//Fim da classe Reserva
?>