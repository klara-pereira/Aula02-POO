<?php

class Funcionario {
    private string $nome;
    private float $salario;

    public function __construct($nome, $salario = 1000) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        if ($percentual > 0 && $percentual <= 10) {
            $this->salario += $this->salario * ($percentual / 100);
        } else {
            echo "Erro: o percentual deve ser maior que 0 e menor ou igual a 10%.<br>";
        }
    }

    public function exibirSalario() {
        echo "Funcionário: " . $this->nome . "  -  ";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.');
    }
}

$funcionario = new Funcionario("Klara", 3000);

$funcionario->aumentarSalario(10);

$funcionario->exibirSalario();

?>