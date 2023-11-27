<?php
    namespace POO\ProjetoBDPHP\DAO;

    require_once('Conexao.php');

    use POO\ProjetoBDPHP\DAO\Conexao;

    class Atualizar{
        public function Atuali(Conexao $conexao, string $nomeTabela, int $cpf, string $campo, string $valor)
        {
            
            try {
                $conn = $conexao->Conectar();
                $sql = "update $nomeTabela set $campo = '$valor' where cpf = '$cpf'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<br><br> Atualizado com Sucesso!<br><br>";
                }else {
                    echo "<br><br> Não Atualizado";
                }//Fim do If/Else;

                mysqli_close($conn); //Fechando o Banco

            } catch (Except $erro) {
                echo $erro;
            }//Fim do Try/Catch;



        }//Fim do atualizar
    }//Fim da Classe
    







?>