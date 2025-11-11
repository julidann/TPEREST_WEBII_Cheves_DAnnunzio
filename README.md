README: 
# TPEREST_WEBII_Cheves_DAnnunzio
### Datos integrantes
  - Cheves Nicolas, nicocheves99@gmail.com
  - D'Annunzio Julieta, dannunzio.julieta@gmail.com
---
### Temática del Trabajo Especial 
- API REST Catálogo de productos para una tienda de dispositivos tecnológicos Apple.
- 
### Qué contiene este proyecto:

- app/controllers/ --> Controladores
  - auth-api.controller.php
  - category-api.controller.php
  - product-api.controller.php
- app\middlewares\ --> Seguridad
  - guard-api.middleware.php
- app/models/ --> Modelos
  - model.php
  - category.model.php
  - product.model.php
  - user.model.php
- config / config.php --> Configuración
- database/ devices.sql --> Script SQL para crear la base de datos y tablas iniciales.
- libs/router/ --> Librería interna de ruteo 
  - jwt/
    - jwt.middleware.php
    - jwt.php
  - router/
    - README.md --> más info
    - request.php
    - router.php
- api_router.php - Entry point para los endpoints de la API.
- .htaccess: reglas apache para soportar URL semánticas


Endpoints

| MÉTODO  | ENDPOINT                                | DESCRIPCIÓN |
|---------|-----------------------------------------|--------------|
| GET     | api/productos                                           | Ver lista de productos |
| GET     | api/productos/id                                        | Ver un producto específico por ID |
| GET     | api/categorias/1/productos                              | Ver productos de una categoría específica |
| GET     | api/productos?orderBy=name/price/model                  | Ordenar productos por nombre, precio o modelo |
| GET     | api/productos?orderBy=name/price/model & order=ASC/DESC | Ordenar productos ascendente/descendente |
| GET     | api/productos?filterByCategory=id                       | Filtrar productos por categoría |
| GET     | api/categorias                                          | Ver lista de categorías |
| GET     | api/categorias/id                                       | Ver una categoría específica por ID |
| POST    | api/auth/login                          | Iniciar sesión (necesario para POST, PUT, DELETE) |
| POST    | api/productos                           | Crear un nuevo producto |
| POST    | api/categorias/id                       | Crear una categoría nueva (según ID padre si aplica) |
| PUT     | api/productos/id                        | Editar un producto existente |
| PUT     | api/categorias/id                       | Editar una categoría existente |
| DELETE  | api/productos/id                        | Eliminar un producto |
| DELETE  | api/categorias/id                       | Eliminar una categoría |
