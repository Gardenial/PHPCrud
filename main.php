<?php
    namespace POO\ProjetoBDPHP;

    require_once('Modelo/Pessoa.php'); //Requisitando o uso do arquivo Pessoa;
    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');

    /* Acessar e usar todos os Métodos desse arquivo. */
    use POO\ProjetoBDPHP\Modelo\Pessoa;
    use POO\ProjetoBDPHP\DAO\Conexao;
    use POO\ProjetoBDPHP\DAO\Inserir;
    use POO\ProjetoBDPHP\DAO\Consultar;
    use POO\ProjetoBDPHP\DAO\Atualizar;
    use POO\ProjetoBDPHP\DAO\Excluir;

    $pessoa = new Pessoa("123456","Allan","119898989","AV Senador Vergueiro","Garden.ori");
    /* Banco de Dados */

    $conexao = new Conexao(); //Acionar o Banco

    //Inserir os Dados no Banco

    $inserir = new Inserir();
    /* echo $inserir->Insert($conexao,"Pessoa", $pessoa->getCPF(), $pessoa->getNome(), 
    $pessoa->getTelefone(), $pessoa->getEndereco(), $pessoa->getEmail() ); */

    //Consulta no BD

    $consultar = new Consultar();
    //$consultar->ConsultarIndividual($conexao, "pessoa","123456 "); //Método de Consultar Individualmente
    $consultar->ConsultarTudo($conexao, "pessoa");


    //Atualização

    $atualizar = new Atualizar();
    //$atualizar->Atuali($conexao, "pessoa", "123456", "nome", "Gostosa"); //Metodo de atualizar

    //Excluir

    $excluir = new Excluir();
    $excluir->Deletar($conexao, "pessoa", "123456");

?>