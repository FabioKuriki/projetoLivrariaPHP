<?php
    namespace PHP\Modelo;

    class Livro{
        private int $codigo;
        private string $nome;
        private string $autor;
        private string $quantidade;

        //Construtor
        public function __construct(int $codigo,
                                    string $nome,
                                    string $autor,
                                    string $quantidade)
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

        public function __set():void
        {
            $this->campo = $valor;
        }//Fim do set genérico
    }//Fim da classe Livro
?>