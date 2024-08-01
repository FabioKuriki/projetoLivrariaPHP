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

        public function consultarLivro():string{
            switch($this->codigo){
                case 1:
                    return "<br>Código: " . $this->codigo . 
                            "<br>Nome: " . "Aventuras nas Estrelas" . 
                            "<br>Autor: " . "Joseph Joestar" . 
                            "<br>Quantidade: " . 5;
                    break;
                case 2;
                    return "<br>Código: " . $this->codigo . 
                                "<br>Nome: " . "Vingadores" . 
                                "<br>Autor: " . "Stan Lee" . 
                                "<br>Quantidade: " . 0;
                    break;
                default:
                    return "O código informado não existe";
                    break;
            }
        }//Fim do consultarLivro

        public function realizarCompra()
        {
            switch($this->codigo){
                case 1:
                    $this->quantidade = 5;
                    $this->quantidade -= 1;
                    return "<br>Compra realizada, " . $this->quantidade . " livros restantes";
                    break;
                case 2;
                    return "<br>Livro indisponível, gostaria de realizar a reserva?";
                    break;
                }

        }//Fim do realizarCompra

        public function decisao(string $decisao)
        {
            if($this->codigo == 2){
                switch($decisao){
                    case "sim":
                        return "Reserva realizada";
                        break;
                    case "não":
                        return "Tenha um ótimo dia!";
                        break;
                    default:
                        return "Informe sim ou não";
                        break;
                }
            }
        }//Fim da decisao
    }//Fim da classe Livro
?>