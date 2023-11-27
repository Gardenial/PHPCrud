<?php
    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php');
    
    use POO\ProjetoBDPHP\DAO\Conexao;

    class Consultar{
        public function ConsultarIndividual(Conexao $conexao, string $nomeTabela, int $cpf)
        {
            
            try {
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);

                while ($dados = mysqli_fetch_Array($result)) {
                    if ($dados["cpf"] == $cpf) {
                        echo "<br>CPF: ".$dados["cpf"]."<br>Nome: ".$dados["nome"]."<br>Telefone: ".
                        $dados["telefone"]."<br>Endereço: ".$dados["endereco"]."<br>Email: ".$dados["email"];
                    }//Fim do IF
                }//Fim do While

                mysqli_close($conn); //Fechando a conexão com o BD
            } catch (Except $erro) {
                echo $erro;
            }//Fim do Try/Catch;
        }//Fim da Function

        public function ConsultarTudo(Conexao $conexao, string $nomeTabela)
        {
            try {
                $conn = $conexao->Conectar();
                $sql = "select * from $nomeTabela";
                $result = mysqli_query($conn, $sql);
            } catch (Except $erro) {
                echo $erro;
            }//Fim do Try/Catch;

            while ($dados = mysqli_fetch_Array($result)) {
                echo "<br>CPF: ".$dados['cpf']."<br>Nome: ".$dados["nome"]."<br>Telefone: ".
                $dados["telefone"]."<br>Endereço: ".$dados["endereco"]."<br>Email: ".$dados["email"];
            }//Fim do While

            mysqli_close($conn); //Fechando a conexão com o BD


        }//Fim da Function ConsultarTudo
    }//Fim da classe Consultar



?>