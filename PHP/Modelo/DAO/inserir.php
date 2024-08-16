<?php
    namespace PHP\Modelo\DAO;

    require_once('conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        public Conexao $conexao;
        public string $cpf;
        public string $nome;
        public string $endereco;
        public string $telefone;
        public string $dtNascimento;
        public string $login;
        public string $senha;

        function cadastrar(Conexao $conexao,
                            string $cpf,
                            string $nome,
                            string $endereco,
                            string $telefone,
                            string $dtNascimento,
                            string $login,
                            string $senha)
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into usuario (cpf, nome, endereco, 
                telefone, dtNascimento, login, senha) values 
                ('$cpf', '$nome', '$endereco',
                '$telefone', '$dtNascimento', '$login', '$senha')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);
                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Exception $erro){
                return $erro;
            }
        }//Fim do cadastrar

        function realizarCompra(Conexao $conexao,
                                string $cartao,
                                string $cpf,
                                string $dataCompra,
                                int $codigoLivro,
                                )
        {
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into compra (cartaoCredito, cpf, dataCompra,
                codigoLivro) values 
                ('$cartao', '$cpf', '$dataCompra',
                '$codigoLivro')";
                $result = mysqli_query($conn, $sql);

                //Fechar a conexão
                mysqli_close($conn);
                if($result){
                    return "<br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Exception $erro){
                return $erro;
            }
        }//Fim do realizarCompra
    }//Fim da classe inserir
?>