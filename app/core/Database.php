<?php

class Database{
	private $db_host = DB_HOST;
	private $db_user = DB_USER;
	private $db_pass = DB_PASS;
	private $db_name = DB_NAME;
	public $dbh, $sth, $row;
	
	public function __construct(){
		$this->dbh = @new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		
		if ($this->dbh->connect_errno) {
			die('Database connection failed!');
		}
		
		return $this->dbh;
	}
	
	public function prepare($query){
		if ($this->dbh->prepare($query)) {
			$this->sth = $this->dbh->prepare($query);
		}else {
			// var_dump($this->dbh->error);
			die("<br /><strong>Fatal Error</strong>: Query error!");
		}
	}
	
	public function execute(){
		$this->sth->execute();
	}
	
	public function getResult(){
		$result = $this->sth->get_result();
		return $this->row = $result->fetch_all();
	}
	
	public function affectedRows(){
		return $this->dbh->affected_rows;
	}
}