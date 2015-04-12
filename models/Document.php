<?php
	class Document {

		private $docType;
		private $docData;
		private $progress;
		private $lastSubmitted;
		private $originDate;

		public function __CONSTRUCT($name,$data){
			$this->docData = $data;
			$this->docType = $name;
			$originDate = time();
		}

		public function serialize() {
	        return serialize($this->data);
	    }

	    public function unserialize($data) {
	        $this->data = unserialize($data);
	    }

		public function getData(){
			return $this->docData;
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
	}
?>