# Api-Techfactor
API de prueba para el registro de usuarios, tiendas y productos.
Para la implementacion del API el puerto es opcional, si es que se requiere trabajar con el.

***** Crear una nueva tienda:*****
host_name:port/shops/create/by_user/{user}/name/{shop_name}/country/{country}/city/{city}/address/{address};
Parametros requeridos:
      Usuario:   {user}      => Es el usuario que creara una tienda
      Nombre:    {shop_name} => Nombre que se le asignara a la tienda
      Pais:      {country}   => Pais en donde se encuentra
      Ciudad:    {city}      => Ciudad donde se encuentra
      Direccion: {address}   => Direccion donde se encuentra
Ejemplo:
http://localhost:544/shops/create/by_user/jose/name/RadioShak/country/Mexico/city/Guadalajara/address/Villa corona #33 A
http://localhost:544/shops/create/by_user/luis/name/BMW/country/Alemania/city/Guadalajara/address/Villa corona #33 B
http://localhost:544/shops/create/by_user/luis/name/IBM/country/Francia/city/Guadalajara/address/Villa corona #33 C

***** Crear un producto *****
host_name:port/products/create/by_user/{user}/product/{product_name}
Parametros requeridos:
      Usuario: {user}         => Es el usuario que creara un producto
      Nombre:  {product_name} => Nombre que se le asignara al producto
Ejemplo:
http://localhost:544/products/create/by_user/luis/product/Camara digital

***** Agregar un producto *****
host_name:port/products/add/by_user/{user}/shop/{shop_name}/product/{product_name}/quantity/{quantity}/price/{price}
Parametros requeridos:
      Usuario:   {user}           => Es el usuario al que se le agregara un producto para su tienda
      Tienda:    {shop_name}      => Nombre de la tienda al que se le asignara el producto
      Producto:  {product_name}   => Nombre del producto que se agregara
      Cantidad:  {quantit}        => Cantidad o existencia del producto
      Precio:    {price}          => Precio que cuesta
Ejemplo:
http://localhost:544/products/add/by_user/luis/shop/IBM/product/Camara digital}/quantity/500/price/1025.55

***** Crear usuario *****
host_name:port/users/create/user_name/{user_name}/email/{email}/password/{password}
Parametros requeridos:
      Usuario:   {user}           => Es el usuario al que se le agregara un producto para su tienda
      Tienda:    {shop_name}      => Nombre de la tienda al que se le asignara el producto
      Producto:  {product_name}   => Nombre del producto que se agregara
      Cantidad:  {quantit}        => Cantidad o existencia del producto
      Precio:    {price}          => Precio que cuesta
Ejemplo:
http://localhost:544/users/create/user_name/luis/email/legh1997@gmail.com/password/itachi_123
