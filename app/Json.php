<?php
namespace App;

class Json{    
	private $data;
	private $keys;

	public function setData($keys,$data){
		$this->data = $data;
		$this->keys = $keys;
	}

    public function getData(){
        return $this->refactor($this->keys,$this->data);
    }

    public function format($keys,$data){
        return $this->refactor($keys,$data);        
    }

    private function refactor($keys, $data){
    	$json = array();
        for ($i=0; $i <count($data); $i++) {
        	$json[$keys[$i]] = $data[$i];
        }
        return $json;
    }

    public function error($keys,$data){
        return $this->refactor($keys,$data);
    }    
}
