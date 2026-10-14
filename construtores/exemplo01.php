<?php

class ContaBancaria{

    private string $titular;
    private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function exibirTitular(){
        echo "<br>Nome: " . $this->titular;
    }

    public function alteraTitular($novoNome){
        $this->titular = $novoNome;
    }

    public function exibirSaldo(){
        echo "<br> Saldo: " . $this->saldo;
    }

    public function depositarSaldo($valor1){
        $this->saldo += $valor1;
    }

    public function sacarSaldo($valor1){
        if($valor1 > $this-> saldo){
            echo "não pode sacar esse valor!";
        }else{
            $this->saldo -= $valor1;
        }
    }
}

$conta1 = new ContaBancaria("Klara", 10000);
// $conta1->titular = "Luiz";
$conta1->exibirTitular();
$conta1->alteraTitular("Luiz");
$conta1->exibirTitular();
$conta1->exibirSaldo();
$conta1->depositarSaldo(1000);
$conta1->exibirSaldo();
$conta1->sacarSaldo(6000);
$conta1->exibirSaldo();

?>