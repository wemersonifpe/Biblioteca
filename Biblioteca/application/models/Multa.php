<?php

use Doctrine\Common\Collections\ArrayCollection;

class Multa{

    protected $id;
    protected $usuario;
    protected $valor;

    function __construct($id=null, $usuario=null, $valor=null){
        $this->id = $id;
        $this->valor = $valor;
        $this->usuario = $usuario;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getUsuario(){
        return $this->usuario;
    }
    function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    function getValor(){
        return $this->valor;
    }
    function setValor($valor){
        $this->valor = $valor;
    }
}