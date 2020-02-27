<?php

/**
 * 
 */
class dbh
{

	private $host="localhost";
	private $dbname="meditec";
	private $password="";
	private $user="root";
	
	protected function connect()
	{
	$dsn='mysql:host='.$this->host.';dbname='.$this->dbname;
	$pdo=new PDO($dsn,$this->user,$this->password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	return $pdo;
	}
}









  ?>