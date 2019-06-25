<?php

class MultaModel extends CI_Model{
	
	public function gerar_multa(){

	}

	public function alterar(){}

	public function deletar(){}

	public function recuperarId(){}

	public function retornarMulta_usuario(){}

	public function listar_todos(){
		$this->db->select("codigo, usuario, valor");

		$resulatdo = $this->db->get("multa")->result();

		return $resulatdo;
	}
}