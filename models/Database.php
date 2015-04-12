<?php
	class Database {
		private $host;
		private $user;
		private $password;
		private $database;
		private $connection;

		public function __CONSTRUCT($db){
			$this->host = $db['host'];
			$this->user = $db['username'];
			$this->password = $db['password'];
			$this->database = $db['dbname'];
		}

	    public function __GET($property) {
	        if (property_exists($this, $property)) {
	            return $this->$property;
	        }
	    }

	    public function __SET($property, $value) {
	        if (property_exists($this, $property)) {
	            $this->$property = $value;
	        }
	    }

		public function query($sql){
			$connection = new mysqli($this->host, $this->user, $this->password, $this->database);
			$result = $connection->query($sql);
			return $result;
		}

		public function getID(){
			return $this->connection->insert_id();
		}
	}
	
?>