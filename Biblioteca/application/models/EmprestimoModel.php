<?php

class EmprestimoModel extends CI_Model{

	public function salvar(){}

	public function alterar(){}

	public function deletar(){}

	public function recuperarId(){}

	public function retornarEmp_usuario(){}

	public function listar_todos(){
		$this->db->select("codigo, nome");

		$resulatado = $this->db->get("emprestimo")->result();

		return $resulatado;
	}
	
}