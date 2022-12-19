<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-19 04:26:06 --> Undefined variable: usuarioLogin
in APPPATH/Controllers/LoginController.php on line 19.
 1 APPPATH/Controllers/LoginController.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: usuarioLogin', 'APPPATH/Controllers/LoginController.php', 19, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:27:10 --> Undefined property: stdClass::$username
in APPPATH/Controllers/LoginController.php on line 28.
 1 APPPATH/Controllers/LoginController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$username', 'APPPATH/Controllers/LoginController.php', 28, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:36:37 --> Undefined variable: login
in APPPATH/Controllers/LoginController.php on line 19.
 1 APPPATH/Controllers/LoginController.php(19): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: login', 'APPPATH/Controllers/LoginController.php', 19, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:37:03 --> Undefined property: stdClass::$username
in APPPATH/Controllers/LoginController.php on line 28.
 1 APPPATH/Controllers/LoginController.php(28): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined property: stdClass::$username', 'APPPATH/Controllers/LoginController.php', 28, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:38:55 --> Undefined index: username
in APPPATH/Views/estructura/bodyUser.php on line 24.
 1 APPPATH/Views/estructura/bodyUser.php(24): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined index: username', 'APPPATH/Views/estructura/bodyUser.php', 24, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/bodyUser.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyUser', [], true)
 5 APPPATH/Controllers/LoginController.php(39): view('estructura/bodyUser', [...])
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:39:31 --> Undefined variable: username
in APPPATH/Views/estructura/bodyUser.php on line 24.
 1 APPPATH/Views/estructura/bodyUser.php(24): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: username', 'APPPATH/Views/estructura/bodyUser.php', 24, [...])
 2 SYSTEMPATH/View/View.php(213): include('APPPATH/Views/estructura/bodyUser.php')
 3 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 4 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/bodyUser', [], true)
 5 APPPATH/Controllers/LoginController.php(39): view('estructura/bodyUser', [...])
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\loginController->loginUser()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\loginController))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-19 04:45:57 --> Cannot add or update a child row: a foreign key constraint fails
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'alberto\', \'1234alberto@gmail.com\', \'1234\', \'alberto01\')', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'alberto\', \'1234alberto@gmail.com\', \'1234\', \'alberto01\')')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'alberto\', \'1234alberto@gmail.com\', \'1234\', \'alberto01\')')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (:name:, :email:, :password:, :username:)', [...], false)
 5 SYSTEMPATH/Model.php(279): CodeIgniter\Database\BaseBuilder->insert()
 6 SYSTEMPATH/BaseModel.php(749): CodeIgniter\Model->doInsert([...])
 7 SYSTEMPATH/Model.php(667): CodeIgniter\BaseModel->insert([...], false)
 8 SYSTEMPATH/BaseModel.php(659): CodeIgniter\Model->insert([...], false)
 9 APPPATH/Controllers/Micontrolador.php(72): CodeIgniter\BaseModel->save([...])
10 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->guarda()
11 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
12 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
13 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
