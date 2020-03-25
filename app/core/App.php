<?php

class App{
	private $controller = 'Beranda';
	private $method = 'index';
	private $parameter = [];
	
	// fungsi routing
	public function __construct(){
		$url = $this->parseURL();
		
		// cek kontroler
		if (isset($url[0])) {
			if (strpos($url[0], '-')) { // ganti kontroller yang mengandung '-' menjadi '_'
				$url[0] = str_replace('-', '_', $url[0]);
			}
			
			if (file_exists('app/controllers/' . $url[0] . '.php')) {
				$this->controller = $url[0];
				unset($url[0]);
			}else {
				$this->controller = 'Notfound';
				unset($url[0]);
			}
		}
		
		require_once 'app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
		
		// cek method
		if (isset($url[1])) {
			if (method_exists($this->controller, $url[1])) {
				$this->method = $url[1];
				unset($url[1]);
			}
		}
		
		// cek parameter
		if (!empty($url)) {
			$this->parameter = array_values($url);
		}
		
		// jalankan fungsi call_user_func_array
		call_user_func_array([$this->controller, $this->method], $this->parameter);
	}
	
	public function parseURL(){
		if (isset($_GET['url'])) { // cek alamat url
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}