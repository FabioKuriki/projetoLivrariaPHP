<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');
    
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        public Conexao $conexao;
        public string $nomeTabela;
        public string $login;
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
                    if($dados["login"] == $login){
                        return true; //Encerrando um processo para ver só um dado específico
                    }
                }
                    
            }
            catch(Exeception $erro){
                echo $erro;
            }
        }

    }//Fim da classe
?>