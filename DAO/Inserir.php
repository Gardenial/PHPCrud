<?php

    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php'); // Acessando a classe de Conexão.
    use POO\ProjetoBDPHP\DAO\Conexao;

    class Inserir{
        public function Insert(Conexao $conexao, string $nomeTabela, int $cpf,
        string $nome, string $telefone, string $endereco, string $email){
            try {
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone, endereco, email)
                values('$cpf', '$nome', '$telefone', '$endereco', '$email')";

                $result = mysqli_query($conn, $sql); //Ordem de Inserção no banco: Conexão, depois inserção.

                if ($result) {
                    return "<br>Inserido com Sucesso.";
                } else {
                    return "<br> Não Inserido.";
                }//Fim do IF/Else

                mysqli_close($conn); //Fechando a conexão com o BD

            } catch (Except $erro){
                echo $erro;
            }//Fim do Try/Catch

        }//Fim da Function Insert
    }//Fim da Classe Inserir

?>