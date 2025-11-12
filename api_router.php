<?php
require_once './libs/router/router.php';
require_once './app/controllers/product-api.controller.php';
require_once './app/controllers/category-api.controller.php';
require_once './app/controllers/review-api.controller.php';
require_once './app/controllers/auth-api.controller.php';
require_once './libs/jwt/jwt.middleware.php';
require_once './app/middlewares/guard-api.middleware.php';

$router = new Router();

$router->addMiddleware(new JWTMiddleware());

// --- LOGIN --- //
$router->addRoute('auth/login', 'POST', 'AuthApiController', 'login');

// --- PRODUCTOS (públicos) --- //
$router->addRoute('productos', 'GET', 'ProductApiController', 'getProducts');
$router->addRoute('productos/:id', 'GET', 'ProductApiController', 'getProduct');

// --- CATEGORÍAS (públicas) --- //
$router->addRoute('categorias', 'GET', 'CategoryApiController', 'getCategories');
$router->addRoute('categorias/:id', 'GET', 'CategoryApiController', 'getCategory');
$router->addRoute('categorias/:id/productos', 'GET', 'ProductApiController', 'getProductsByCategory');

// --- REVIEWS (públicas) --- //
$router->addRoute('reseñas', 'GET', 'ReviewApiController', 'getReviews');
$router->addRoute('reseñas/:id', 'GET', 'ReviewApiController', 'getReview');
$router->addRoute('productos/:id/reseñas', 'GET', 'ReviewApiController', 'getReviewsByProduct');
$router->addRoute('reseñas', 'POST', 'ReviewApiController', 'insertReview');
$router->addRoute('reseñas/:id', 'PUT', 'ReviewApiController', 'updateReview');
$router->addRoute('reseñas/:id', 'DELETE', 'ReviewApiController', 'deleteReview');


// --- A partir de acá, requiere autenticación ---
$router->addMiddleware(new GuardMiddleware());

$router->addRoute('productos', 'POST', 'ProductApiController', 'insertProduct');
$router->addRoute('productos/:id', 'PUT', 'ProductApiController', 'updateProduct');
$router->addRoute('productos/:id', 'DELETE', 'ProductApiController', 'deleteProduct');
$router->addRoute('categorias', 'POST', 'CategoryApiController', 'insertCategory');
$router->addRoute('categorias/:id', 'PUT', 'CategoryApiController', 'updateCategory');
$router->addRoute('categorias/:id', 'DELETE', 'CategoryApiController', 'deleteCategory');


$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
