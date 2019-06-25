<?php

class UsuarioModel extends CI_Model{
	
	public function salvar(){}

	public function alterar(){}

	public function deletar(){}

	public function recuperarId(){}

	public function listar_todos(){
		$this->db->select("codigo, nome");

		$resultado = $this->db->get("usuario")->result();

		return $resulatdo;
	}
}