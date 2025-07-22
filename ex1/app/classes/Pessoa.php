<?php
namespace app\classes;

class Pessoa{
    public $nome;
    public $idade;
    public $email;

    // __construct é um método especial chamado automaticamente ao criar uma instância da classe
    // Ele é usado para inicializar as propriedades da classe
    public function __construct($nome, $idade, $email){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->email = $email;
    }

    public function dados(){
        return "Nome: $this->nome; Idade: $this->idade; Email: $this->email";
    }
}

