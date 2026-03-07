## Acerca de la decisión de la arquitectura tomada

Se trabajara con una arquitectura MVC - Service Layer, se toma esta decisión porque se debe elaborar un e commerce, una arquitectura Controlador, Servicio, Modelo, Vista, es mas que suficiente y permite una buena modulación entre cada subsistema aumentando así su mantenibilidad y disminuyendo la duplicidad de código. 

## Flujo de la arquitectura

HTTP Request
      │
      ▼
index.php
(router)
      │
      ▼
Controller
      │
      ▼
Service
      │
      ▼
Repository
      │
      ▼
Database

## Ejemplo flujo real

/productos/15

index.php
   ↓
ProductoController::detalle(15)
   ↓
ProductoService::getProducto(15)
   ↓
ProductoRepository::findById(15)
   ↓
MySQL
   ↓
Producto
   ↓
views/productos/detalle.php