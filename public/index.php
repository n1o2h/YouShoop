<?php
require dirname(__DIR__) . '/vendor/autoload.php';
use App\controllers\AdminController;
use App\controllers\AuthController;
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
$app->router->get('/admin/categories', [\App\controllers\CategoryController::class, 'index']);
$app->router->get('/admin/categories/create', [\App\controllers\CategoryController::class, 'create']);
$app->router->post('/admin/categories/store', [\App\controllers\CategoryController::class, 'store']);
$app->router->get('/admin/categories/edit', [\App\controllers\CategoryController::class, 'edit']);
$app->router->post('/admin/categories/update', [\App\controllers\CategoryController::class, 'update']);
$app->router->get('/admin/categories/delete', [\App\controllers\CategoryController::class, 'delete']);
$app->run();



