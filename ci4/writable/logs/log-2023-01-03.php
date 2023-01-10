<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-03 09:46:23 --> Undefined property: App\Controllers\loginController::$db
in APPPATH/Controllers/LoginController.php on line 33.
 1 APPPATH/Controllers/LoginController.php(33): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: App\\Controllers\\loginController::$db', 'APPPATH/Controllers/LoginController.php', 33, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 09:46:50 --> Undefined property: App\Controllers\loginController::$db
in APPPATH/Controllers/LoginController.php on line 37.
 1 APPPATH/Controllers/LoginController.php(37): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: App\\Controllers\\loginController::$db', 'APPPATH/Controllers/LoginController.php', 37, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 09:47:23 --> Undefined property: App\Controllers\loginController::$db
in APPPATH/Controllers/LoginController.php on line 22.
 1 APPPATH/Controllers/LoginController.php(22): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: App\\Controllers\\loginController::$db', 'APPPATH/Controllers/LoginController.php', 22, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 09:58:31 --> Undefined variable: id
in APPPATH/Views/estructura/home.php on line 61.
 1 APPPATH/Views/estructura/home.php(61): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: id', 'APPPATH/Views/estructura/home.php', 61, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/home.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/home', [], true)
 5 APPPATH/Controllers/Micontrolador.php(42): view('estructura/home')
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->cerrarSesion()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 09:59:23 --> Undefined variable: id
in APPPATH/Views/estructura/home.php on line 61.
 1 APPPATH/Views/estructura/home.php(61): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: id', 'APPPATH/Views/estructura/home.php', 61, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/home.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/home', [], true)
 5 APPPATH/Controllers/Micontrolador.php(42): view('estructura/home')
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->cerrarSesion()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:01:58 --> Undefined index: name
in APPPATH/Views/estructura/bodyUser.php on line 15.
 1 APPPATH/Views/estructura/bodyUser.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index: name', 'APPPATH/Views/estructura/bodyUser.php', 15, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/bodyUser.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyUser', [], true)
 5 APPPATH/Controllers/LoginController.php(41): view('estructura/bodyUser', [...])
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:14:28 --> Invalid file: estructura/bpdyUser.php
in SYSTEMPATH/Exceptions/FrameworkException.php on line 33.
 1 SYSTEMPATH/View/View.php(201): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('estructura/bpdyUser.php')
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bpdyUser', [], true)
 3 APPPATH/Controllers/LoginController.php(45): view('estructura/bpdyUser', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:15:08 --> Undefined variable: users
in APPPATH/Views/estructura/body.php on line 8.
 1 APPPATH/Views/estructura/body.php(8): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Views/estructura/body.php', 8, [])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/body.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/body', [], true)
 5 APPPATH/Controllers/Micontrolador.php(155): view('estructura/body')
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:24:33 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 151.
 1 APPPATH/Controllers/Micontrolador.php(151): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 151, [])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:24:56 --> syntax error, unexpected 'return' (T_RETURN)
in APPPATH/Controllers/Micontrolador.php on line 151.
 1 SYSTEMPATH/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->includeFile('APPPATH/Controllers/Micontrolador.php')
 2 SYSTEMPATH/Autoloader/Autoloader.php(237): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers\\Micontrolador')
 3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers\\Micontrolador')
 4 [internal function]: spl_autoload_call('App\\Controllers\\Micontrolador')
 5 SYSTEMPATH/CodeIgniter.php(877): class_exists('\\App\\Controllers\\Micontrolador', true)
 6 SYSTEMPATH/CodeIgniter.php(469): CodeIgniter\CodeIgniter->startController()
 7 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 8 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:25:21 --> syntax error, unexpected 'return' (T_RETURN)
in APPPATH/Controllers/Micontrolador.php on line 151.
 1 SYSTEMPATH/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->includeFile('APPPATH/Controllers/Micontrolador.php')
 2 SYSTEMPATH/Autoloader/Autoloader.php(237): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers\\Micontrolador')
 3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers\\Micontrolador')
 4 [internal function]: spl_autoload_call('App\\Controllers\\Micontrolador')
 5 SYSTEMPATH/CodeIgniter.php(877): class_exists('\\App\\Controllers\\Micontrolador', true)
 6 SYSTEMPATH/CodeIgniter.php(469): CodeIgniter\CodeIgniter->startController()
 7 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 8 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:26:27 --> Undefined variable: session
in APPPATH/Controllers/Micontrolador.php on line 150.
 1 APPPATH/Controllers/Micontrolador.php(150): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: session', 'APPPATH/Controllers/Micontrolador.php', 150, [])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:26:55 --> Undefined variable: userModel
in APPPATH/Controllers/Micontrolador.php on line 150.
 1 APPPATH/Controllers/Micontrolador.php(150): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: userModel', 'APPPATH/Controllers/Micontrolador.php', 150, [])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:31:10 --> Undefined variable: request
in APPPATH/Controllers/Micontrolador.php on line 149.
 1 APPPATH/Controllers/Micontrolador.php(149): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: request', 'APPPATH/Controllers/Micontrolador.php', 149, [])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:32:32 --> Undefined variable: session
in APPPATH/Controllers/Micontrolador.php on line 157.
 1 APPPATH/Controllers/Micontrolador.php(157): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: session', 'APPPATH/Controllers/Micontrolador.php', 157, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 10:36:34 --> syntax error, unexpected 'public' (T_PUBLIC), expecting end of file
in APPPATH/Controllers/Micontrolador.php on line 164.
 1 SYSTEMPATH/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->includeFile('APPPATH/Controllers/Micontrolador.php')
 2 SYSTEMPATH/Autoloader/Autoloader.php(237): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers\\Micontrolador')
 3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers\\Micontrolador')
 4 [internal function]: spl_autoload_call('App\\Controllers\\Micontrolador')
 5 SYSTEMPATH/CodeIgniter.php(877): class_exists('\\App\\Controllers\\Micontrolador', true)
 6 SYSTEMPATH/CodeIgniter.php(469): CodeIgniter\CodeIgniter->startController()
 7 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 8 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:32:11 --> Undefined property: stdClass::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:33:53 --> Undefined property: stdClass::$
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:34:04 --> Undefined property: stdClass::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:35:55 --> Undefined property: stdClass::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:36:36 --> Undefined property: stdClass::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:40:53 --> Undefined property: stdClass::$username
in APPPATH/Controllers/LoginController.php on line 33.
 1 APPPATH/Controllers/LoginController.php(33): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$username', 'APPPATH/Controllers/LoginController.php', 33, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:44:27 --> Undefined variable: login
in APPPATH/Views/estructura/bodyAdmin.php on line 15.
 1 APPPATH/Views/estructura/bodyAdmin.php(15): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: login', 'APPPATH/Views/estructura/bodyAdmin.php', 15, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/bodyAdmin.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyAdmin', [], true)
 5 APPPATH/Controllers/LoginController.php(41): view('estructura/bodyAdmin', [...])
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:45:04 --> Undefined property: stdClass::$rol_id
in APPPATH/Controllers/LoginController.php on line 33.
 1 APPPATH/Controllers/LoginController.php(33): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$rol_id', 'APPPATH/Controllers/LoginController.php', 33, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:48:19 --> Cannot use object of type App\Controllers\Home as array
in APPPATH/Controllers/LoginController.php on line 34.
 1 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 2 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 3 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 4 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:48:53 --> Cannot use object of type App\Controllers\Home as array
in APPPATH/Controllers/LoginController.php on line 34.
 1 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 2 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 3 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 4 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:49:19 --> Undefined property: App\Controllers\Home::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: App\\Controllers\\Home::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-03 11:49:40 --> Undefined property: App\Controllers\Home::$rol_id
in APPPATH/Controllers/LoginController.php on line 34.
 1 APPPATH/Controllers/LoginController.php(34): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: App\\Controllers\\Home::$rol_id', 'APPPATH/Controllers/LoginController.php', 34, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
