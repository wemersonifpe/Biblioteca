<?php

class Livro {

    protected $id;
    protected $exemplar;
    protected $autor;
    protected $ano;
    protected $edicao;
    protected $disponibilidade;

    function __construct($id = null, $exemplar = null, $autor = null, $ano = null, $edicao = null, $disponibilidade = null){
        $this->id = $id;
        $this->exemplar = $exemplar;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->edica0 = $edicao;
        $this->didponibilidade = $disponibilidade;
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }

    function getExemplar(){
        return $this->exemplar;
    }

    function setExempal($exemplar){
        $this->exemplar = $exemplar;
    }

    function getAutor(){
        return $this->autor;
    }

    function setAutor($autor){
        $this->autor = $autor;
    }

    function getAno(){
        return $this->ano;
    }

    function setAno($ano){
        $this->ano = $ano;
    }

    function getEdicao(){
        return $this->edicao;
    }

    function setEdicao($edicao){
        $this->edicao = $edicao;
    }

    function getDisponibilidade(){
        return $this->disponibilidade;
    }

    function setDisponibilidade($disponibilidade){
        $this->didponibilidade = $disponibilidade;
    }
}