<?php
namespace App\Http\Controllers;

use App\Json;
use App\JsonKey;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ShopController extends Controller implements JsonKey{
	public function create($user=null, $shop_name=null, $country=null, $city=null, $address=null){
		$json = new Json;	
		try { 
     		$user = User::where('name', $user)->first();
			if($user){
				$shop = new Shop;
				$shop->name = $shop_name;
				$shop->country = $country;
				$shop->city = $city;
				$shop->address = $address;
				$shop->id_user = $user->id;
				$shop->save();

				$data = array($shop->id, $user->id, $shop_name, $country, $city, $address);
				$json->setData(self::SHOP_KEYS, $data);
				$data = array("Exito de ejecucion", 200, $json->getData());

				return $json->format(self::GLOBAL_KEYS,$data);
			}else{
				return $json->error(self::GLOBAL_KEYS,array("Usuario invalido",500,null));
			}
			
    	 } catch(QueryException $ex){ 
    	 	$e = array($ex->getMessage(), 500, null);
    	 	return $json->error(self::GLOBAL_KEYS,$e); 
    	}
	}
}
