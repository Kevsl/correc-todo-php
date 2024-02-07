<?php
class Manager extends Connexion
{
	protected $db;

	function __construct(Connexion $connexion)
	{
		$this->db = $connexion;
	}
}
