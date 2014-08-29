<?php 
class User {
	protected $db;

	// this is where dependency injection happens 
	public function __construct(Database $db)
	{
		$this->db = $db;
	}
	public function create(array $data)
	{
		// with dependency injection now you can use the query() method created in Database.php
		$this->db->query('INSERT INTO `users` ...' );
	}
}


 ?>