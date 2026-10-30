
# AT02 - Programação Orientada a Objetos (POO)

## 1. Exercícios de Apropriação

### 1.1. Qual a diferença entre public e private?

- **Public:** permite acessar atributos e métodos dentro e fora da classe.
- **Private:** permite acessar atributos e métodos somente dentro da própria classe.

### 1.2. O que acontece se tentarmos acessar um atributo private fora da classe?

O PHP apresenta um erro, pois atributos privados não podem ser acessados diretamente fora da classe.

### 1.3. Qual a função do construtor?

O construtor serve para inicializar os atributos de um objeto quando ele é criado.

---

## 2. Exercícios de Aplicação

Foi criada uma classe `Produto` contendo:

- Atributos privados: `nome` e `preco`.
- Construtor para receber nome e preço.
- Métodos `getNome()` e `getPreco()`.

### Código PHP

```php
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
```

### Resultado esperado

```text
Produto: Celular
Preco: R$ 1200
Produto: Fone Bluetooth
Preco: R$ 150
```

---

## 3. Desafio Profissional

### A empresa quer validar o CPF antes de salvar. Onde essa validação deve ficar?

A validação deve ficar principalmente no **setter**, pois ele controla os valores atribuídos ao CPF.

- **No formulário:** pode validar para avisar o usuário quando o CPF estiver incorreto.
- **No setter:** deve validar o CPF antes de aceitar o valor.
- **Direto no atributo:** não é o ideal, pois o atributo serve para armazenar o valor.

---

## 4. Capacidades Desenvolvidas

### Técnicas

- [x] Encapsulamento
- [x] Getters e Setters
- [x] Construtores

### Básicas

- [x] Organização de código
- [x] Leitura crítica

### Socioemocionais

- [x] Responsabilidade
- [x] Autonomia
- [x] Atenção à qualidade
