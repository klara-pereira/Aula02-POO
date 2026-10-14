
<?php

class ContaBancaria {
    public string $titular;
    public float $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo = $this->saldo + $valor;
    }

    public function sacar($valor) {
        $this->saldo = $this->saldo - $valor;
    }

    public function exibirSaldo() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$conta1 = new ContaBancaria("Klara", 1000);

$conta1->depositar(500);
$conta1->sacar(200);

$conta1->exibirSaldo();

?>
