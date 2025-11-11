# TPE PARTE 3 APIREST
# HACER: 

#### - Ver si tira bien los errores (200,201,400,404)
#### - Verificar el ordenamiento 
#### - Verificar el filtro
#### - Hacer la paginación
#### - Hacer los README (router y general)
#### - Agregar tabla reseñas


# CAMBIOS

#### App
    - auth-api.controller-php // copiado de los profes
    - category-api.controller.php // actualizado
    - product-api.controller.php // actualizado

#### Middlewares
    - guard-api.middlewares.php // copiado de los profes

#### Database // no se modificó
    - acá el tp dice de hacer una tabla reseñas 
    (CUIDADO QUE NO ROMPA EL TPE 2!!)

#### api_router.php
    - actualizado 

## Postman

- Descargar postmanAgent (para desktop), así detecta la url local (localhost)

#### ***Lo que funciona en postman***
    - GET api/productos
    - GET api/productos/id
    - GET api/categorias/1/productos
    - GET api/productos?orderBy=name / price /model
    - GET filterByCategory
    - GET api/categorias
    - GET api/categorias/id
    - POST api/auth/login 
    // el post/put/delete funciona con auth
    - POST api/productos
    - POST api/categorias/id
    - PUT api/productos/id
    - PUT api/categorias/id
    - DELETE api/productos/id
    - DELETE api/categorias/id

//ME ACABO DE DAR CUENTA QUE - GET api/categorias/1/productos Y  - GET filterByCategory ES LO MISMO, 
    //HAY QUE VER DE AGREGAR OTROS TIPOS DE FILTROS
---- 
token : 

   "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsInVzdWFyaW8iOiJ3ZWJhZG1pbiIsInJvbGVzIjpbIkFETUlOIiwiVVNFUiIsIkJBTkFOQSJdLCJleHAiOjE3NjI4ODc3NTZ9.xTA-jqHrLuT9B65VxLhyH_iBZFfCG0898G3mVNWDdiU"
