<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Livros extends CI_Controller{

    public function index(){
        //foi criado 
        $this->load->model('LivrosModel', 'livros');
        //pega do model
        $data['livros'] = $this->livros->getLivros();

        $this->load->view('listarlivros', $data);
    }

    public function add(){
        //carrega model livros
        $this->load->model("LivrosModel", "livros");
        //carrega a view
        $this->load->view("addlivros");
    }

    public function salvar(){
        if($this->input->post('exemplar') == NULL){
            echo 'O campo exemplar é obrigatorio.';
            echo '<a href="/livros/add" title="voltar">Voltar</a>';
        }else{
            //carrega model livros
            $this->load->model('LivrosModel', 'livros');
            //pega dados do post e gauarda no array $dados
            $dados['exemplar'] = $this->input->post('exemplar');
            $dados['autor'] = $this->input->post('autor');

            if($this->input->post('id')!=NULL){
                //se foi passado o id ele vai atualizar
                $this->livro->alterar($dados, $this->input->post('id'));
            }else{
                //se nao foi passado ele ira adicionar
                $this->livros->salvar($dados);
            }
            
            //fazendo o redirecionamento para pagina
            redirect("/");
        }
    }

    public function editar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('livromodel', 'livros');
        //faz a consulta do banco de dados
        $query = $this->livros->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query==NULL){
            redirect('/');
        }
        //array onde vai guardar todos os dados do livro passados como parametro para view
        $dados['livro'] = $query;
        //carrega a view
        $this->load->view('editarlivros', $dados);
    }

    public function apagar($id=NULL){
        if ($id==NULL) {
            redirect('/');
        }
        //carrega model livro
        $this->load->model('livromodel', 'livros');
        //faz a consulta do banco de dados
        $query = $this->livros->recuperarId($id);
        //verifica se a consualta volta vazia
        if($query!=NULL){
            $this->livros->deletar($query->id);
            redirect('/');
        }else{
            redirect('/');
        }
    }

    public function listar_array(){
        $this->load->model("LivrosModel", "livros");

        $resultado = $this->livros->listar_todos();

        echo '<pre>';

        var_dump($resultado);
    }

    public function listar_tabela(){
        $this->load->model("LivrosModel","livros");

        $resultado = $this->livros->listar_todos();

        $dados = array("Livros" => $resultado);

        $this->load->view("livros/listar_tabela", $dados);
    }
}