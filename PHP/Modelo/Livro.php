<?php
    namespace PHP\Modelo;

    class Livro{
        private int $codigo;
        private string $nome;
        private string $autor;
        private int $quantidade;

        //Construtor
        public function __construct(int $codigo,
                                    string $nome,
                                    string $autor,
                                    int $quantidade)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->autor = $autor;
            $this->quantidade = $quantidade;
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
                    "<br>Nome: " . $this->nome . 
                    "<br>Autor: " . $this->autor . 
                    "<br>Quantidade: " . $this->quantidade;
        }//Fim do imprimir
    }//Fim da classe Livro
?>