<?php
   namespace POO\ProjetoBDPHP\DAO;

   require_once('Conexao.php');

   use POO\ProjetoBDPHP\DAO\Conexao;

    class Excluir{
        public function Deletar(Conexao $conexao, string $nomeTabela, int $cpf){
            try {
                $conn = $conexao->Conectar();
                $sql = "Delete from $nomeTabela where cpf ='$cpf'";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<br><br> Excluido com sucesso!<br>";
                }else {
                    echo "<br><br> Erro ao Excluir<br>";
                }


            } catch (Except $erro) {
                echo $erro;
            }

        }//Fim do Método
    }//Fim da classe
    
?>