<?php

class Login extends Controller{
	public function index(){
		$data['webtitle'] = 'LAPOR! - Login';
		$data['css'] = ['sign.css', 'base.css'];
		
		$this->view('template/header', $data);
		$this->view('page/login');
		$this->view('template/footer');
	}
}