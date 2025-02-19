# 📦 API RESTful de Productos con Laravel 10

Este proyecto es una API RESTful construida con **Laravel 10** que permite realizar operaciones CRUD sobre productos.

---

## 🚀 Características

- CRUD de productos (`GET`, POST, PUT, DELETE)
- Uso de **Eloquent ORM**
- Validaciones de datos en el controlador
- **Paginación** en la lista de productos
- **Seeder y Factory** para poblar la base de datos
- Documentación con **Swagger (L5 Swagger)**

---

## 🛠️ Instalación y Configuración

### 1️⃣ Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/api-productos.git
cd api-productos
```

### 2️⃣ Instalar dependencias
```bash
composer install
```

### 3️⃣ Configurar variables de entorno
Copia el archivo `.env.example` y renómbralo a `.env`:
```bash
cp .env.example .env
```

Luego, edita `.env` y configura la conexión a tu base de datos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_productos
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generar la clave de la aplicación
```bash
php artisan key:generate
```

### 5️⃣ Ejecutar migraciones y seeders
```bash
php artisan migrate --seed
```
Esto creará la tabla `products` y llenará la base de datos con datos de prueba.

### 6️⃣ Levantar el servidor
```bash
php artisan serve
```
El servidor estará disponible en: 📌 **http://127.0.0.1:8000**

## 📌 Rutas API

| Método | Ruta | Descripción |
|--------|------|-------------|
| `GET` | `/api/products` | Obtener todos los productos (paginados) |
| `POST` | `/api/products` | Crear un nuevo producto |
| `GET` | `/api/products/{id}` | Obtener un producto por ID |
| `PUT` | `/api/products/{id}` | Actualizar un producto |
| `DELETE` | `/api/products/{id}` | Eliminar un producto |

## 🛠 Uso con Postman

### 📍 Obtener todos los productos
**Método:** `GET`
**URL:** `http://127.0.0.1:8000/api/products`

### 📍 Crear un producto
**Método:** `POST`
**URL:** `http://127.0.0.1:8000/api/products`
**Body (JSON, raw en Postman):**
```json
{
  "name": "Laptop",
  "description": "Laptop gamer de alto rendimiento",
  "price": 1500.99
}
```

### 📍 Obtener un producto por ID
**Método:** `GET`
**URL:** `http://127.0.0.1:8000/api/products/1`

### 📍 Actualizar un producto
**Método:** `PUT`
**URL:** `http://127.0.0.1:8000/api/products/1`
**Body (JSON, raw en Postman):**
```json
{
  "name": "Laptop Pro",
  "price": 1800.99
}
```

### 📍 Eliminar un producto
**Método:** `DELETE`
**URL:** `http://127.0.0.1:8000/api/products/1`

## 📖 Documentación con Swagger

Este proyecto incluye documentación automática con **Swagger**.

### 1️⃣ Instalar Swagger (si no está instalado)
```bash
composer require "darkaonline/l5-swagger"
```

### 2️⃣ Publicar configuración
```bash
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```

### 3️⃣ Generar la documentación
```bash
php artisan l5-swagger:generate
```

### 4️⃣ Acceder a la documentación
La documentación estará disponible en: 📌 **http://127.0.0.1:8000/api/documentation**

## 🏗️ Estructura del Proyecto

```
api-productos/
│── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProductController.php
│   ├── Models/
│   │   ├── Product.php
│── database/
│   ├── factories/
│   │   ├── ProductFactory.php
│   ├── migrations/
│   │   ├── create_products_table.php
│   ├── seeders/
│   │   ├── ProductSeeder.php
│── routes/
│   ├── api.php
│── .env
│── composer.json
│── README.md
```

## 📌 Generar datos de prueba

Si necesitas poblar la base de datos con datos falsos, puedes usar el siguiente comando:
```bash
php artisan db:seed --class=ProductSeeder
```

## 🛠 Comandos Útiles

| Comando | Descripción |
|---------|-------------|
| `php artisan migrate` | Ejecutar migraciones |
| `php artisan migrate:refresh --seed` | Resetear BD y volver a poblarla |
| `php artisan db:seed` | Ejecutar los seeders |
| `php artisan route:list` | Ver todas las rutas registradas |
| `php artisan serve` | Levantar el servidor de desarrollo |

## 📜 Licencia

Este proyecto está bajo la licencia **MIT**.
