<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');
    
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public Conexao $conexao;
        public string $nomeTabela;
        public $login = "";
        public string $senha;

        function realizarLogin(Conexao $conexao,
                                string $login,
                                string $senha,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $login && $dados["senha"] == $senha){
                        return true; //Encerrando um processo para ver só um dado específico
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function pegarLogin(){
            return $this->login;
        }

        function receberLogin(string $valor){
            $this->login = $valor;
        }

        function pegarCpf(Conexao $conexao,
                                string $login,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $login){
                        return $dados["cpf"]; //Encerrando um processo para ver só um dado específico
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function pegarNome(Conexao $conexao,
                                string $login,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["login"] == $login){
                        return $dados["nome"]; //Encerrando um processo para ver só um dado específico
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function cadastroExistente(Conexao $conexao,
                                string $cpf,
                                string $login,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf || $dados["login"] == $login){
                        return true; 
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

        function cadastroExistenteResposta(Conexao $conexao,
                                string $cpf,
                                string $login,
                                string $nomeTabela)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);//Executa o comando no banco

                //enquanto tiver dados para consultar
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["cpf"] == $cpf){
                        echo "<br><text style='color: red; font-size: 150%'>CPF já existente!</text>";
                    }

                    if($dados["login"] == $login){
                        echo "<br><text style='color: red; font-size: 150%'>Login já existente!</text>";
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

    }//Fim da classe
?>