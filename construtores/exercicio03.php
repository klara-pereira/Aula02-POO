<?php

class Carro {
    private string $modelo;
    private float $consumo;
    private float $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {
        if ($litros > 0) {
            $this->tanque += $litros;
            echo "Abastecidos " . $litros . " litro(s) com sucesso!";
        } else {
            echo "Erro: informe uma quantidade positiva de litro(s).";
        }
    }

    public function dirigir($km) {
        $necessario = $km / $this->consumo;

        if ($km > 0 && $necessario <= $this->tanque) {
            $this->tanque -= $necessario;
            echo " | Viagem de " . $km . " km realizada com sucesso! <br>";
        } else {
            echo "Não há combustível suficiente para percorrer essa distância.";
        }
    }

    public function exibirInfo() {
        echo " Modelo: " . $this->modelo;
        echo " | Consumo: " . $this->consumo . " km/L";
        echo " | Combustível no tanque: " . number_format($this->tanque, 2, ',', '.') . " litro(s)";
    }
}

$carro = new Carro(" Honda Civic", 10, 20);

$carro->abastecer(10);
$carro->dirigir(100);
$carro->exibirInfo();

?>