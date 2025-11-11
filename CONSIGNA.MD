# TPE PARTE 3 APIREST

# CONSIGNA
### Requerimientos Funcionales Mínimos
- **✓ La API Rest debe ser RESTful**
- **✓ Debe tener al menos un servicio que liste (GET) una colección entera de entidades.** 
- **✓ El servicio que lista una colección entera debe poder ordenarse opcionalmente por al menos un campo de la tabla, de manera ascendente o descendente. --> $orderBy**
- **✓ Debe tener al menos un servicio que obtenga (GET) una entidad determinada por su ID.**
- **✓ Debe tener al menos un servicio para agregar y otro para modificar datos (POST y PUT)**
- La API Rest debe manejar de manera adecuada al menos los siguientes códigos de error (200, 201, 400 y 404) // RECHEQUEAR

### Requerimientos Funcionales Optativos
*Los opcionales suman un punto cada uno. Se debe completar al menos uno para acceder a la promoción ya que el resto del trabajo sin opcionales suma 6 puntos.*

- El servicio que obtiene una colección entera debe poder paginar.
- **✓ El servicio que obtiene una colección entera debe poder filtrarse por alguno de sus campos. --> $filterByCategory**
- **✓ El servicio que obtiene una colección entera debe poder ordenarse por cualquiera de los campos de la tabla de manera ascendente o descendente. (A diferencia del obligatorio que es solo por un campo a elección). --> $order** //este ver si agregamos img y descripción
- **✓ El servicio debe requerir un token para realizar modificaciones (PUT, POST)** // en el router

### Requerimientos NO Funcionales OBLIGATORIOS
- Se debe adjuntar documentación de los endpoints generados en el README.md del repositorio. Es decir, una descripción de cada endpoint, cómo se usan y ejemplos. Entender que esta documentación la va a leer otro desarrollador para entender cómo se consume la API. 
--> HAY QUE HACERLO

### Aclaraciones

Respecto al modelo de datos: 
- Se puede (y se alienta) agregar columnas/tablas para que el servicio que agreguen tenga más sentido en su contexto. 
Ejemplo: Agregar una tabla “reseñas” para almacenar las reseñas via API REST de una película. --> HAY QUE HACERLO

NOTA: La base de datos es compartida por los dos proyectos. Tener cuidado de no “romper” la primera entrega con los cambios en la DB de la segunda.

### Generales:

- **✓ La API REST se debe crear en otro repositorio distinto al trabajo original.**
- La base de datos es la misma para los dos (incluirla de todos modos en el nuevo repositorio).
- No es necesario crear un frontend que consuma la API. Queda a total elección del alumno/a si quiere agregar un frontend. Todas las pruebas se harán utilizando POSTMAN (o similar)

### Criterios de corrección
- Se evaluará la correcta división de responsabilidades en las clases, no repetición de código, identificadores (nombres de clases, variables, etc) descriptivos, etc.
- Los trabajos deben implementar la totalidad de la funcionalidad (ambas entregas) funcionando correctamente. 
- El trabajo debe realizarse en equipos de 2, donde a cada miembro se le evaluarán distintas responsabilidades de la siguiente forma:

#### Miembro A (Nico):
- **✓ Listado ordenado** //orderBy 
- **✓ PUT**
- **✓ Ordenado por cualquier campo (opcional)** //RECHEQUEAR

#### Miembro B (Juli):
- **✓ Obtener un elemento por ID**
- **✓ POST**
- **✓ Filtrado (opcional)** // filterByCategory //RECHEQUEAR

#### Opcionales que suman a ambos:
- Paginado // HAY QUE HACERLO
- **✓ Autenticación Token** // en el router

---- 
