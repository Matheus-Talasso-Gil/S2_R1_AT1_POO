
<?php

class Produto {

    private $nome;
    private $preco;

    // Construtor
    public function __construct($n, $p) {
        $this->nome = $n;
        $this->preco = $p;
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Criando dois objetos
$p1 = new Produto("Celular", 1200);
$p2 = new Produto("Fone Bluetooth", 150);

// Mostrando os produtos
echo "Produto: " . $p1->getNome() . "\n";
echo "Preco: R$ " . $p1->getPreco() . "\n";

echo "Produto: " . $p2->getNome() . "\n";
echo "Preco: R$ " . $p2->getPreco() . "\n";

?>
