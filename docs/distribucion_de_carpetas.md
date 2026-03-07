## Se presenta la siguiente distribucion de carpetas

AIKOR/
│
├── public/                         # Punto de entrada web (DocumentRoot)
│   ├── index.php                   # Front Controller / Router
│   │
│   └── assets/
│       ├── css/
│       ├── js/
│       └── images/
│
├── app/                            # Código de la aplicación
│
│   ├── controllers/
│   │   ├── HomeController.php
│   │   ├── ProductoController.php
│   │   ├── CarritoController.php
│   │   ├── PedidoController.php
│   │   └── AdminController.php
│
│   ├── models/
│   │   ├── Usuario.php
│   │   ├── Producto.php
│   │   ├── Categoria.php
│   │   ├── Carrito.php
│   │   ├── DetalleCarrito.php
│   │   ├── Pedido.php
│   │   └── DetallePedido.php
│
│   ├── repositories/
│   │   ├── ProductoRepository.php
│   │   ├── CategoriaRepository.php
│   │   ├── CarritoRepository.php
│   │   ├── DetalleCarritoRepository.php
│   │   ├── PedidoRepository.php
│   │   └── DetallePedidoRepository.php
│
│   ├── services/
│   │   ├── ProductoService.php
│   │   ├── CarritoService.php
│   │   ├── PedidoService.php
│   │   └── WhatsAppService.php
│
│   └── views/
│       │
│       ├── layout/
│       │   ├── header.php
│       │   └── footer.php
│       │
│       ├── home/
│       │   └── home.php
│       │
│       ├── productos/
│       │   ├── lista.php
│       │   └── detalle.php
│       │
│       ├── carrito/
│       │   └── carrito.php
│       │
│       └── admin/
│           ├── login.php
│           ├── dashboard.php
│           ├── productos.php
│           ├── crear_producto.php
│           └── editar_producto.php
│
├── storage/                        # Archivos generados por el sistema
│   └── uploads/
│       └── productos/
│
├── docker/
│   └── docker-compose.yml
│
├── config/
│   └── database.php                # conexión PDO
│
├── vendor/                         # Composer (si se usa)
│
├── .env                            # variables de entorno
│
├── README.md
├──docs/
