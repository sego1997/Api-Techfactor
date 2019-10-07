<?php
namespace App\Http\Controllers;

use App\Json;
use App\JsonKey;
use App\Product;
use App\User;
use App\Shop;
use App\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ProductController extends Controller implements JsonKey{
    
    public function create($user=null, $product_name=null){
    	$json = new Json;	
		try { 
     		$user = User::where('name', $user)->first();
			if($user){
				$product = new Product;
				$product->name = $product_name;
				$product->id_user = $user->id;
				$product->save();

				$data = array($product->id, $user->id, $product_name);
				$json->setData(self::PRODUCT_KEYS_CREATE, $data);
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

    public function add($user=null, $shop=null, $product=null, $quantity=null, $price=null){
    	$json = new Json;
		try { 
     		$user = User::where('name', $user)->first();
			if($user){
				$shop = Shop::where('name', $shop)->first();
				if($shop){
					$product = Product::where('name', $product)->first();
					if($product){
						$shopProduct = new ShopProduct;
						$shopProduct->id_shop = $shop->id;
						$shopProduct->id_product = $product->id;
						$shopProduct->quantity = $quantity;
						$shopProduct->price = $price;
						$shopProduct->save();

						$data = array($shop->id, $product->id, $quantity, $price);
						$json->setData(self::PRODUCT_KEYS_ADD, $data);
						$data = array("Exito de ejecucion", 200, $json->getData());

						return $json->format(self::GLOBAL_KEYS,$data);
					}else{
						return $json->error(self::GLOBAL_KEYS,array("Producto invalido",500,null));
					}
				}else{
					return $json->error(self::GLOBAL_KEYS,array("Tienda invalida",500,null));
				}
			}else{
				return $json->error(self::GLOBAL_KEYS,array("Usuario invalido",500,null));
			}
			
    	 } catch(QueryException $ex){ 
    	 	$e = array($ex->getMessage(), 500, null);
    	 	return $json->error(self::GLOBAL_KEYS,$e); 
    	}
    }
}
