<?php

class Produto {
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade <= $this->estoque && $quantidade > 0) {
            $this->estoque -= $quantidade;
            echo "Venda realizada com sucesso!";
        } else {
            echo "Estoque insuficiente!";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
        echo " - Preço reajustado com sucesso!";
    }

    public function exibirInfo() {
        echo "<br>Nome: " . $this->nome ;
        echo " - Preço: R$ " . number_format($this->preco, 2, ',', '.') ;
        echo " - Estoque: " . $this->estoque . " unidades";
    }
}

$produto = new Produto("Teclado", 250, 10);

$produto->vender(2);
$produto->reajustarPreco(10);
$produto->exibirInfo();

?>