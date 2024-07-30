<?php
    namespace PHP\Modelo;

    class Compra{
        private int $codigo;
        private string $cartaoCredito;
        private string $cpf;
        private string $data;
        private float $valor;
        private int $quantidade;
        private int $codigoLivro;

        //Construtor
        public function __construct(int $codigo,
                                    string $cartaoCredito,
                                    string $cpf,
                                    string $data,
                                    float $valor,
                                    int $quantidade,
                                    int $codigoLivro)
        {
            $this->codigo = $codigo;
            $this->cartaoCredito = $cartaoCredito;
            $this->cpf = $cpf;
            $this->data = $data;
            $this->valor = $valor;
            $this->quantidade = $quantidade;
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
                    "<br>Cartão de Crédito: " . $this->cartaoCredito . 
                    "<br>CPF: " . $this->cpf . 
                    "<br>Data da Compra: " . $this->data . 
                    "<br>Valor: " . $this->valor . 
                    "<br>Quantidade: " . $this->quantidade . 
                    "<br>Código Livro: " . $this->codigoLivro;
        }//Fim do imprimir
    }//Fim da classe Compra
?>