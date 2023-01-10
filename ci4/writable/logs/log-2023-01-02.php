<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-02 10:13:34 --> Undefined variable: rol_id
in APPPATH/Controllers/LoginController.php on line 33.
 1 APPPATH/Controllers/LoginController.php(33): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: rol_id', 'APPPATH/Controllers/LoginController.php', 33, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-02 10:14:38 --> syntax error, unexpected 'class' (T_CLASS), expecting ';' or ','
in APPPATH/Views/estructura/bodyUser.php on line 16.
 1 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyUser', [], true)
 3 APPPATH/Controllers/LoginController.php(41): view('estructura/bodyUser', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
