<?php
class Database
{
	public $db_host = NULL;
	public $db_user = NULL;
	public $db_pass = NULL;
	public $db_name = NULL;
	public $db_connect = 0;

	public function  connect()
	{	
		$this->db_host = 'localhost';
		$this->db_user = 'root';
		$this->db_pass = 'm@rio';
		$this->db_name = 'kristentro';	
		$this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		if(!$this->mysqli)
		{
			 printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();			
		}	
	}
	
	public function closeConnection()
        {
                $this->mysqli->close();
        }
}

$newdb = new Database();
$newdb->connect();
$newdb->closeConnection();


?>