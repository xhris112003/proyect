<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-09 03:11:47 --> Undefined index: rol_id
in APPPATH/Views/estructura/bodyAdmin.php on line 15.
 1 APPPATH/Views/estructura/bodyAdmin.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index: rol_id', 'APPPATH/Views/estructura/bodyAdmin.php', 15, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/bodyAdmin.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyAdmin', [], true)
 5 APPPATH/Controllers/LoginController.php(40): view('estructura/bodyAdmin', [...])
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
