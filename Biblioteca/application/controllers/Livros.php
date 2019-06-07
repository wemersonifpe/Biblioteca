<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livros extends CI_Controller{
    public function index(){
        $texto = "Voçê esta usando o controller Livros";

        $dados = array("mensagem" => $texto);

        $this->load->view("livros/lista", $dados);
    }
}