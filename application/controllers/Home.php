<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $dados=array('tela'=>'inicio');
	$this->load->view("principal",$dados);
    }
    public function contato()
    {
        $dados = array('tela'=>'contato');
        $this->load->view("principal",$dados);
    }
    public function servico()
    {
        $dados = array('tela'=>'servico');
        $this->load->view("principal",$dados);
    }
    public function cliente()
    {
        $dados = array('tela'=>'cliente');
        $this->load->view('principal',$dados);
    }
}
