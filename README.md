# **Proyecto Laravel: Gestión de Usuarios y Pedidos**

Este proyecto es una aplicación Laravel que gestiona usuarios y pedidos. Incluye migraciones, modelos, controladores y consultas SQL utilizando **Query Builder** y **Eloquent ORM**. El objetivo es demostrar el uso de consultas avanzadas en Laravel para interactuar con una base de datos.

## **Tabla de Contenidos**
1. [Requisitos](#requisitos)
2. [Instalación](#instalación)
3. [Configuración](#configuración)
4. [Estructura del Proyecto](#estructura-del-proyecto)
5. [Consultas Implementadas](#consultas-implementadas)
6. [Ejecución del Proyecto](#ejecución-del-proyecto)

## **Requisitos**
- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL

## **Instalación**
1. Clona el repositorio
2. Instala las dependencias de Composer:
  composer install
4. Copia el archivo .env.example y renómbralo a .env
5. Configura la conexión a la base de datos en el archivo .env
6. Ejecuta las migraciones para crear las tablas en la base de datos: php artisan migrate


---

### **7. Estructura del Proyecto**

## **Estructura del Proyecto**
- **`app/Models/`**: Contiene los modelos `Usuario` y `Pedido`.
- **`app/Http/Controllers/`**: Contiene el controlador `PedidoController` con las consultas implementadas.
- **`database/migrations/`**: Contiene las migraciones para crear las tablas `usuarios` y `pedidos`.
- **`routes/web.php`**: Define las rutas para acceder a las consultas.

## **Consultas Implementadas**
1. Insertar 5 registros en las tablas de usuarios y pedidos.
2. Recuperar todos los pedidos asociados al usuario con ID 2.
3. Obtener la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios.
4. Recuperar todos los pedidos cuyo total esté en el rango de $100 a $250.
5. Encontrar todos los usuarios cuyos nombres comiencen con la letra "R".
6. Calcular el total de registros en la tabla de pedidos para el usuario con ID 5.
7. Recuperar todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido.
8. Obtener la suma total del campo "total" en la tabla de pedidos.
9. Encontrar el pedido más económico, junto con el nombre del usuario asociado.
10. Obtener el producto, la cantidad y el total de cada pedido, agrupándolos por usuario.

## **Consultas Implementadas**
1. Insertar 5 registros en las tablas de usuarios y pedidos.
2. Recuperar todos los pedidos asociados al usuario con ID 2.
3. Obtener la información detallada de los pedidos, incluyendo el nombre y correo electrónico de los usuarios.
4. Recuperar todos los pedidos cuyo total esté en el rango de $100 a $250.
5. Encontrar todos los usuarios cuyos nombres comiencen con la letra "R".
6. Calcular el total de registros en la tabla de pedidos para el usuario con ID 5.
7. Recuperar todos los pedidos junto con la información de los usuarios, ordenándolos de forma descendente según el total del pedido.
8. Obtener la suma total del campo "total" en la tabla de pedidos.
9. Encontrar el pedido más económico, junto con el nombre del usuario asociado.
10. Obtener el producto, la cantidad y el total de cada pedido, agrupándolos por usuario.

## **Ejecución del Proyecto**
1. Inicia el servidor de Laravel:
   php artisan serve
   
3. Accede a las rutas definidas en routes/web.php para probar las consultas. Por ejemplo:

Pedidos del usuario con ID 2: http://127.0.0.1:8000/pedidos-usuario-2

Suma total de pedidos: http://127.0.0.1:8000/suma-total-pedidos

## Autor
José Miguel Chávez Hernández<br>
