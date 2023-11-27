<?php
    namespace POO\ProjetoBDPHP\DAO; /* Namespace: POO, Nome do projeto: ProjetoBDPHP e aonde está localizado: DAO */

    class Conexao{
        public function Conectar(){
            try {
                $conn = mysqli_connect('localhost', 'root', '','bancoPhp'); /* Conectando o BD */
                if ($conn) {
                    echo "Conectado com Sucesso!";
                    return $conn;
                }//Fim do IF

            } catch (Except $erro) {
                echo $erro;
            }//Fim do  Try/Except
        }//Fim da Function Conectar
    }//Fim da Classe


?> <!-- Fim do PHP TAG -->