<?php
    namespace POO\ProjetoBDPHP\Modelo;

    class Pessoa{

        public int $cpf;
        public string $nome;
        public string $telefone;
        public string $endereco;
        public string $email;

        public function __construct(int $cpf, string $nome, string $telefone, string $endereco, string $email){
            $this->cpf      = $cpf;
            $this->nome     = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->email    = $email;

        }//Fim do Construtor

        public function getCPF():int{
            return $this->cpf;
        }//Fim do Get

        public function setCPF(int $cpf):void{
            $this->cpf = $cpf;
        }//Fim do Método set

        
        public function getNome():string{

            return $this->nome;
        }//Fim do Get

        public function setNome(string $nome):void{
            $this->nome = $nome;
        }//Fim do Método set

        
        public function getTelefone():string{

            return $this->telefone;
        }//Fim do Get

        public function setTelefone(string $telefone):void{
            $this->telefone = $telefone;
        }//Fim do Método set

        
        public function getEndereco():string{

            return $this->endereco;
        }//Fim do Get

        public function setEndereco(string $endereco):void{
            $this->Endereco = $endereco;
        }//Fim do Método set

        
        public function getEmail():string{

            return $this->email;
        }//Fim do Get

        public function setEmail(string $email):void{
            $this->email = $email;
        }//Fim do Método set

        
    }//Fim da Classe



?>