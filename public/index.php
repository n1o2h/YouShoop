<?php
require dirname(__DIR__) . '/vendor/autoload.php';
use App\controllers\AdminController;
use App\controllers\AuthController;
use App\controllers\CategoryController;
use App\controllers\DashboardController;
use App\controllers\ProductController;
use App\controllers\SiteController;
use App\controllers\UserController;
use App\core\Application;


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'userClass' => \App\models\User::class,
    'db' => [
        'dsn' =>$_ENV['DB_DSN'],
        'user' =>$_ENV['DB_USER'],
        'password' =>$_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

/* front */
$app->router->get('/',array(SiteController::class, 'home'));
$app->router->get('/home',array(SiteController::class, 'home'));
#$app->router->get('/contact', array(SiteController::class, 'handelContact'));
#$app->router->get('/contact',array(SiteController::class, 'contact'));
#$app->router->post('/contact',array(SiteController::class, 'handelContact'));

/* admin */
$app->router->get('/admin/dashboard', [AdminController::class, 'dashboard']);
/* admin */
$app->router->get('/user/dashboard', [UserController::class, 'dashboard']);
/* login */
$app->router->get('/login',array(AuthController::class, 'login'));
$app->router->post('/login',array(AuthController::class, 'login'));
/* register */
$app->router->post('/register',array(AuthController::class, 'register'));
$app->router->get('/register',array(AuthController::class, 'register'));
/* logout */
$app->router->get('/logout',array(AuthController::class, 'logout'));

/* profile */
$app->router->get('/profile', array(AuthController::class, 'profile'));

/* category */
$app->router->get('/admin/categories', [CategoryController::class, 'index']);
$app->router->post('/admin/categories/store', [CategoryController::class, 'store']);
$app->router->post('/admin/categories/update', [CategoryController::class, 'update']);
$app->router->post('/admin/categories/delete', [CategoryController::class, 'delete']);

/* product */

$app->router->get('/admin/dashboard', [ProductController::class, 'index']);

//$app->router->get('/admin/dashboard/sta', [DashboardController::class, 'index']);

/* CRUD produits */
$app->router->post('/admin/products/store', [ProductController::class, 'store']);
$app->router->post('/admin/products/update', [ProductController::class, 'update']);
$app->router->post('/admin/products/delete', [ProductController::class, 'delete']);
$app->run();



