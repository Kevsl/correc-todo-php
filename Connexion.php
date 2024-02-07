<?php

class Connexion extends MySQLi
{
	private $host 	= "localhost";
	private $login 	= "root";
	private $pass 	= "";
	private $bdd 	= "todo";
	private $mysqli;

	function __construct()
	{
		$this->mysqli = @parent::__construct(
			$this->host,
			$this->login,
			$this->pass,
			$this->bdd
		);

		if ($this->connect_errno) {
			die("Service indisponible");
		} else {
			$this->set_charset("utf8");
		}
	}
}
