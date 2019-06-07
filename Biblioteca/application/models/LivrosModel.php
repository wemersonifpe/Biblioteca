<?php
define('BASEPATH') OR exit("No direct scipt access allowed");

class LivrosModel extends CI_Model {

    public function listar_todos(){
        $this->db->select("codigo, nome");

        $resultado = $this->db->get("livros")->result();

        return $resultado;
    }
}