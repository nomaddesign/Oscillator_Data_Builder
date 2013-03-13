<?php

/**
 * @namespace db
 **/
namespace db;

/**
 * pdo connection class
 **/
class pdo
{

	/**
	 * dsn
	 * @var string
	 **/
	private $dsn;

	/**
	 * username
	 * @var string
	 **/
	private $username;

	/**
	 * password
	 * @var string
	 **/
	private $password;

	/**
	 * connection
	 * @var string
	 **/
	private $connection;

	/**
	 * result
	 * @var string
	 **/
	protected $result;

  	/**
   	 * public __constructor
	 * sets connection values
	 * @param array configuration options
	 **/
	public function __construct($conf) {
		$this->dsn = "mysql:dbname=".$conf['database'].";host=".$conf['hostname']."";
		$this->username = $conf['username'];
		$this->password = $conf['password'];
	}

	/**
	 * public connect
	 * open a database connection
	 **/
	public function connect()
	{
		try {
			$this->connection = new \PDO( $this->dsn, $this->username, $this->password );
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	}

	/**
   * private runSQL
	 * query database with statement and values
	 * @param string statement to run
	 * @param array of parameters 
	 **/
	private function runSQL($statement, $params=array())
	{
		$handle = $this->connection->prepare($statement);
		// bind parameter to prevent sql injection
		foreach ($params as $key => $value) {
			$handle->bindParam($key+1, $value);
		}
		$handle->execute();
		return $handle;
	}

	/**
	 * public query
	 * build query to run
	 * @param string table to query
	 * @param string fields to query
	 * @param string where to query
	 * @param array parameters of where values to query
	 **/
	public function query($table, $fields="*", $where="" $params=array())
	{
		$statement = "SELECT ".$fields." FROM ".$table."";
		if($where != "")
		{
			$statement .= " WHERE ".$where."";
		}
		$this->result = $this->runSQL($statement, $params);
		return $this->result->fetchAll();
	}

	/**
	 * public update
	 * build the update statement
	 * @param string table to make update
	 * @param string set of values to be set
	 * @param array set parameters to update
	 * @param string where to update
	 **/
	public function update($table, $set, $set_params=array(), $where)
	{
		$statement = "UPDATE ".$table." SET ".$set." WHERE ".$where."";	
		try {
			$this->runSQL($statement, $set_params)->rowCount();
		} catch (PDOException $e) {
			echo "Update failed: ".$e->getMessage();
		}
	}

	/**
	 * public delete
	 * build the delete statement
	 * @param string table to make delete
	 * @param string where to make delete
	 * @param array parameters of values to delete
	 **/
	public function delete($table, $where, $params=array())
	{
			$statement = "DELETE FROM ".$table." WHERE ". $where."";
		try {
			$this->runSQL($statement, $params);
		} catch (PDOException $e) {
			echo "Delete failed: ".$e->getMessage();
		}
	}

	/**
	 * public insert
	 * build insert statement
	 * @param string table to make insert
	 * @param array columns to insert
	 * @param array of parameters to insert
	 **/
	public function insert($table, $columns=array(), $params=array())
	{
		$values = "";
		foreach ($columns as $column) {
			$values .= "?, ";
		}
		$values = rtrim($values, ", ");
		$statement = "INSERT INTO ". $table." (".implode(", ", $columns).") VALUES (".$values.")";
		try {
			$this->runSQL($statement, $params)->rowCount();
		} catch (PDOException $e) {
			echo "Insert failed: ".$e->getMessage();
		}
	}

}

?>