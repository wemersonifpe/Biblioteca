<?php

class Usuario{

    protected $id;
    protected $nome;
    protected $cpf;
    protected $login;
    protected $senha;

    function __construct($id=null, $nome=null, $cpf=null, $login=null, $senha=null){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->login = $login;
        $this->senha = $senha;
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getCpf(){
        return $this->cpf;
    }

    function setCpf($cpf){
        $this->cpf = $cpf;
    }

    function getLogin(){
        return $this->login;
    }

    function setLogin($login){
        $this->login = $login;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }
}