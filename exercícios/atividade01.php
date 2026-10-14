
<?php

class Livro {
    public string $titulo;
    public string $autor;
    public int $paginas;
    public int $anoDePublicacao;

    public function __construct($valor1, $valor2, $valor3, $valor4){
        $this->titulo = $valor1;
        $this->autor = $valor2;
        $this->paginas = $valor3;
        $this->anoDePublicacao = $valor4;
    }

    public function exibirDetalhes(){
        echo "Título: " . $this->titulo .
        " Autor: " . $this->autor .
        " Páginas: " . $this->paginas .
        " Ano de Publicação: " . $this->anoDePublicacao;
    }
}

$livro = new Livro("Dom Casmurro", "Machado de Assis", 256, 1899);

$livro->exibirDetalhes();

?>