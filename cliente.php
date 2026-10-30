<?php
//cria a classe cliente:
class Cliente{
    private $nome;
    private $email;
    private $cpf;

    //metodos
    public function __construct($n,$c){
        $this->nome = $n;
        $this->cpf = $c;
    }
    //metodos acessores para nome, email, cpf (get, set):

    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        return $this->$n;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        return $this->$e;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($c){
        return $this->$c;
    }
    public function mostrarCliente(){
        echo "Dados do cliente: \n";
        echo "Nome: {$this->nome}\n";
        echo "Email: {$this->email}\n";
        echo "Cpf: {$this->cpf}\n";
    }
}

$c1 = new Cliente("Matheus", "123.123.123-01");
$c1->setEmail("matheus@gmail.com");
$c1->mostrarCliente();
?>