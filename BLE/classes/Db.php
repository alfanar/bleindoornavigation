<?php

class Db
{
	private $_connection;
	private $_result;

    public function __construct($host, $username, $password, $database)
    {
    	$this->_connection = mysqli_connect($host, $username, $password, $database);
    }

    public function db_query($query)
    {
    	$this->_result = mysqli_query($this->_connection, $query);

    	if (!$this->_result)
    	{
    		return false;
    	}

    	return true;
    }

    public function db_fetch()
    {
    	$row = mysqli_fetch_assoc($this->_result);
    	return $row;
    }

    public function db_num_rows()
    {
    	$count = mysqli_num_rows($this->_result);
    	return $count;
    }

    public function db_error()
    {
    	return mysqli_error($this->_connection);
    }

    public function __destruct()
    {
    	mysqli_close($this->_connection);
    }
}