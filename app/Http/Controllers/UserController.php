<?php
namespace App\Http\Controllers;

use App\Json;
use App\JsonKey;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserController extends Controller implements JsonKey{	
	public function create($name=null, $email=null, $password=null){
		$json = new Json;	
		try { 
     		$user = new User;
			$user->name = $name;
			$user->email = $email;
			$user->password = $password;
			$user->save();
						
			$data = array($user->id, $name, $email, $password);
			$json->setData(self::USER_KEYS, $data);
			$data = array("Exito de ejecucion", 200, $json->getData());	
		
			return $json->format(self::GLOBAL_KEYS,$data);

    	 } catch(QueryException $ex){ 
    	 	$e = array($ex->getMessage(), 500, null);
    	 	return $json->error(self::GLOBAL_KEYS,$e); 
    	}
	}
}
