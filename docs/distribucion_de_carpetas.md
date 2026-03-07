## Se presenta la siguiente distribucion de carpetas

AIKOR/
│
├── public/                  # Punto de entrada del sitio
│   ├── index.php            #Se usa un router, para poder acceder a (servicio, productos, contacto, (ubicacion))
│   ├── admin.php
|   |
│   │
│   └── assets/
│      ├── css/
│      ├── js/
│      └── images/
│
├── app/                     # Lógica del sistema
│   ├── controllers/
|   |   ├── HomeController.php
|   |   ├── AdminController.php
│   │   ├── ProductoController.php
│   │   └── CategoriaController.php
│   │   └── PedidoController.php
|   |   └── CarritoController.php
│   ├── models/
|   |   ├── Usuario.php #Que derive en admin y cliente
│   │   ├── Producto.php
│   │   └── Categoria.php
|   |   |____ Pedidos.php
|   |   |____ Carrito.php
|
|   ├── repositories/
|   |    ├──ProductoRepository.php
|   |    └──PedidoRepository.php   
│   │
│   ├── services/
│   │   ├── WhatsAppService.php
|   |   ├── PedidoService.php
|   |   ├── CarritoService.php
|   |   └── ProductoService.php
│   │
│   └── views/
│       ├── layout/
│       |   ├── header.php
│       |   └── footer.php
│       | 
│       ├── productos/
│       |    ├── lista.php
│       |    └── detalle.php
│       |   
│       ├── home/
│       |    └── home.php
|       └── admin/
│            ├── login.php
│            ├── dashboard.php
│            ├── productos.php
│            ├── crear_producto.php
│            └── editar_producto.php
│
├── docker/
|   └── docker-compose.yml
│
├── storage/
      └── uploads/  # imágenes de productos

