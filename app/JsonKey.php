<?php
namespace App;

interface JsonKey{
	public const GLOBAL_KEYS = array('title','status','data');
	public const USER_KEYS = array('id_usuario','user_name','email','password');
	public const SHOP_KEYS = array('id_shop','user','shop_name','country','city','address');
	public const PRODUCT_KEYS_CREATE = array('id_product','id_user','name_product');
	public const PRODUCT_KEYS_ADD = array('id_shop','id_product','quantity','price');
}

