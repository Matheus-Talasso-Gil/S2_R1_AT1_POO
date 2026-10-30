
<?php

class FoneBluetooth {
    private $modelo;
    private $bateria;
    private $ligado;

    // Construtor
    public function __construct($m, $b) {
        $this->modelo = $m;
        $this->bateria = 0;
        $this->ligado = false;
        $this->setBateria($b);
    }

    // Getters e Setters
    public function getModelo() {
        return $this->modelo;
    }

    public function getBateria() {
        return $this->bateria;
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function setBateria($b) {
        if ($b >= 0 && $b <= 100) {
            $this->bateria = $b;
        } else {
            echo "Bateria invalida!\n";
        }
    }

    // Metodos funcionais
    public function ligar() {
        if ($this->bateria > 0) {
            $this->ligado = true;
            echo "Fone ligado!\n";
        } else {
            echo "Sem bateria!\n";
        }
    }

    public function tocarMusica() {
        if ($this->ligado && $this->bateria > 0) {
            $this->bateria -= 10;
            if ($this->bateria < 0) {
                $this->bateria = 0;
            }
            echo "Tocando musica!\n";
        } else {
            echo "Fone desligado ou sem bateria!\n";
        }
    }
}

// Testes
$fone = new FoneBluetooth("JBL", 50);

echo "Modelo: " . $fone->getModelo() . "\n";
echo "Bateria: " . $fone->getBateria() . "%\n";

$fone->tocarMusica(); // Teste desligado
$fone->ligar();
$fone->tocarMusica();
$fone->setBateria(150); // Teste invalido

echo "Bateria final: " . $fone->getBateria() . "%\n";

?>
