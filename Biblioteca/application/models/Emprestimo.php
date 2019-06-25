<?php

use Doctrine\Common\Collections\ArrayCollection;

class Emprestimo{

    protected $id;
    protected $usuario;
    protected $livro;
    protected $dataEmprestimo;
    protected $dataDevolucao;

    function __construct($id=null, $usuario=null, $livro = null, $dataEmprestimo=null, $dataDevolucao=null){
        $this->id = $id;
        $this->dataEmprestimo = $dataEmprestimo;
        $this->dataDevolucao = $dataDevolucao;

        if($livro == null){
            $this->livro = new ArrayCollection();
        } else{
            $this->livro = $livro;
        }
        //pode ser que nao precise ser um array
        if($usuario == null){
            $this->usuario = new ArrayCollection();
        } else{
            $this->usuario = $usuario;
        }
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

    function getDataEmprestimo(){
        return $this->dataEmprestimo;
    }
    function setDataEmprestimo($dataEmprestimo){
        $this->dataEmprestimo = $dataEmprestimo;
    }

    function getDataDevolucao(){
        return $this->dataDevolucao;
    }
    function setDataDevolucao($dataDevolucao){
        $this->dataDevolucao = $dataDevolucao;
    }

}