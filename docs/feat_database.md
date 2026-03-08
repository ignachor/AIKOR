# Objetivo de esta parte

- que el proyecto PHP pueda conectarse a MySQL
- que la conexión esté centralizada en un solo lugar
- que después cualquier `Repository` use esa conexión
- que no se repita DB_USER, DB_PASS y host por todo el proyecto

En otras palabras, `database.php` es la **puerta de acceso a la base de datos**.

- `database.php` no consulta productos
- no renderiza vistas
- no maneja rutas
- solo crea y devuelve una conexión PDO reutilizable

## Qué es PDO

    PDO significa:

    PHP Data Objects

    Es una interfaz de PHP para conectarse a bases de datos.

    Ventajas:

        es estándar

        funciona con MySQL y otros motores

        soporta consultas preparadas

        es más seguro que concatenar SQL manualmente

## DSN

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

## DSN significa:

    Data Source Name

Es el string que le dice a PDO cómo conectarse.

    Ejemplo final:

    mysql:host=localhost;dbname=aikor;charset=utf8mb4