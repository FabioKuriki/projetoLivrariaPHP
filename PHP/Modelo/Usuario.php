<?php
    namespace PHP\Modelo;

    // require_once('./DAO/conexao.php');
    // require_once('./DAO/consultar.php');

    // $conexao = new Conexao();
    // $consultar = new Consultar();

    
    class Usuario{
        private string $cpf;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;

        //Construtor
        // public function __construct(string $cpf,
        //                             string $nome,
        //                             string $endereco,
        //                             string $telefone,
        //                             string $dtNascimento,
        //                             string $login,
        //                             string $senha)
        // {
        //     $this->cpf = $cpf;
        //     $this->nome = $nome;
        //     $this->endereco = $endereco;
        //     $this->telefone = $telefone;
        //     $this->dtNascimento = $dtNascimento;
        //     $this->login = $login;
        //     $this->senha = $senha;
        // }//Fim do construtor

        public function __get(string $campo)
        {
            return $this->campo;
        }//Fim do get genérico

        function getVar(){
            $teste = $consultar($conexao, "2", "usuario");
            return $this->teste;
        }

        public function __set(string $campo, string $valor):void
        {
            $this->campo = $valor;
        }//Fim do set genérico

        public function imprimir():string
        {
            return "<br>CPF: " . $this->cpf . 
                    "<br>Nome: " . $this->nome . 
                    "<br>Endereço: " . $this->endereco . 
                    "<br>Telefone: " . $this->telefone . 
                    "<br>Data de Nascimento: " . $this->dtNascimento . 
                    "<br>Login: " . $this->login . 
                    "<br>Senha: " . $this->senha;
        }//Fim do imprimir

        public function realizarLogin():string{
            if($this->login == 'fabio' && $this->senha == 123){
                return "Login Validado";
            }
            else{
                return "Login Invalido";
            }
        }//Fim do realizarLogin
    }//Fim da classe Usuario
?>