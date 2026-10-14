
<?php

class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function __construct($nome, $nota1, $nota2){
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->media = 0;
    }

    public function calcularMedia(){
        $this->media = ($this->nota1 + $this->nota2) / 2;
        return $this->media;
    }
}

$aluno1 = new Aluno("Léo", 8.5, 7.4);

$aluno1->calcularMedia();

echo "<pre>";
print_r($aluno1);
echo "</pre>";

?>
