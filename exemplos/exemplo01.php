<?php

class Pessoa{
    public string $nome;
    public int $idade;

    // Metodo construtor, deixa alguns campos obrigatorios para ser preenchidos 
    public function __construct($valor1, $valor2){
           $this->nome = $valor1;
           $this->idade = $valor2;
    }

    public function exibirDadosPessoa(){
        echo "Nome: " . $this->nome .  "<br> Idade: " . $this->idade;
    }
}

$pessoa = new Pessoa("Klara", 16);

$pessoa-> exibirDadosPessoa();

// $pessoa-> nome = "Recebe nome";
// $pessoa-> idade = 16;

?>