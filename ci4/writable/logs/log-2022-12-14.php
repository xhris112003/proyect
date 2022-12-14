<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-14 06:20:12 --> Undefined offset: 0
in APPPATH/Controllers/LoginController.php on line 29.
 1 APPPATH/Controllers/LoginController.php(29): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined offset: 0', 'APPPATH/Controllers/LoginController.php', 29, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-14 06:20:40 --> Undefined variable: login
in APPPATH/Controllers/LoginController.php on line 19.
 1 APPPATH/Controllers/LoginController.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: login', 'APPPATH/Controllers/LoginController.php', 19, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-14 06:21:05 --> Undefined variable: usuarioLogin
in APPPATH/Controllers/LoginController.php on line 19.
 1 APPPATH/Controllers/LoginController.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: usuarioLogin', 'APPPATH/Controllers/LoginController.php', 19, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-14 06:21:55 --> syntax error, unexpected '='
in APPPATH/Views/estructura/bodyUser.php on line 47.
 1 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyUser', [], true)
 3 APPPATH/Controllers/LoginController.php(37): view('estructura/bodyUser', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
