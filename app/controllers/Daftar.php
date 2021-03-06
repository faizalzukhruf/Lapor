<?php

class Daftar extends Controller{
	public function index(){
		$data['webtitle'] = 'LAPOR! - Daftar';
		$data['css'] = ['sign.css', 'base.css'];
		
		$this->view('template/header', $data);
		$this->view('page/daftar');
		$this->view('template/footer');
	}
	
	public function proccess(){
		if ($this->model('Daftar_model')->proccess($_POST) === TRUE) {
			header('location: ' . BASEURL);
		}else {
			header('location: ' . BASEURL . '/daftar');
		}
	}
}