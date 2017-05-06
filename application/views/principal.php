<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	$dados_cabecalho=array('titulo'=>'Telesat Comunicações');
	$dados_menu=array('menu'=>'Menu principal');
	
	$this->load->view("./includes/cabecalho",$dados_cabecalho);
	$this->load->view("./includes/menu_usuario",$dados_menu);
        $this->load->view($tela);
        $this->load->view("./includes/rodape");

