<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-12 02:02:05 --> syntax error, unexpected '{', expecting '('
in APPPATH/Controllers/UserAjax.php on line 11.
 1 SYSTEMPATH/Autoloader/Autoloader.php(259): CodeIgniter\Autoloader\Autoloader->includeFile('APPPATH/Controllers/UserAjax.php')
 2 SYSTEMPATH/Autoloader/Autoloader.php(237): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers\\UserAjax')
 3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers\\UserAjax')
 4 [internal function]: spl_autoload_call('App\\Controllers\\UserAjax')
 5 SYSTEMPATH/CodeIgniter.php(877): class_exists('\\App\\Controllers\\UserAjax', true)
 6 SYSTEMPATH/CodeIgniter.php(469): CodeIgniter\CodeIgniter->startController()
 7 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 8 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:02:25 --> Class 'App\Models\UserAjaxModel' not found
in APPPATH/Controllers/UserAjax.php on line 12.
 1 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->index()
 2 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 3 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 4 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:02:43 --> Invalid file: list.php
in SYSTEMPATH/Exceptions/FrameworkException.php on line 33.
 1 SYSTEMPATH/View/View.php(201): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('list.php')
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('list', [], true)
 3 APPPATH/Controllers/UserAjax.php(16): view('list', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->index()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:19:48 --> Column 'username' cannot be null
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (:name:, :email:, :username:, :password:, :rol_id:)', [...], false)
 5 APPPATH/Models/UserAjaxModel.php(28): CodeIgniter\Database\BaseBuilder->insert([...])
 6 APPPATH/Controllers/UserAjax.php(32): App\Models\UserAjaxModel->insert_data([...])
 7 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->register()
 8 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 9 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
10 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:19:50 --> Column 'username' cannot be null
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (:name:, :email:, :username:, :password:, :rol_id:)', [...], false)
 5 APPPATH/Models/UserAjaxModel.php(28): CodeIgniter\Database\BaseBuilder->insert([...])
 6 APPPATH/Controllers/UserAjax.php(32): App\Models\UserAjaxModel->insert_data([...])
 7 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->register()
 8 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 9 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
10 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:19:54 --> Column 'username' cannot be null
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (:name:, :email:, :username:, :password:, :rol_id:)', [...], false)
 5 APPPATH/Models/UserAjaxModel.php(28): CodeIgniter\Database\BaseBuilder->insert([...])
 6 APPPATH/Controllers/UserAjax.php(32): App\Models\UserAjaxModel->insert_data([...])
 7 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->register()
 8 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 9 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
10 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:19:54 --> Column 'username' cannot be null
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (:name:, :email:, :username:, :password:, :rol_id:)', [...], false)
 5 APPPATH/Models/UserAjaxModel.php(28): CodeIgniter\Database\BaseBuilder->insert([...])
 6 APPPATH/Controllers/UserAjax.php(32): App\Models\UserAjaxModel->insert_data([...])
 7 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->register()
 8 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 9 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
10 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-12 02:19:54 --> Column 'username' cannot be null
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (NULL, NULL, NULL, NULL, 1)')
 4 SYSTEMPATH/Database/BaseBuilder.php(1916): CodeIgniter\Database\BaseConnection->query('INSERT INTO `users` (`name`, `email`, `username`, `password`, `rol_id`) VALUES (:name:, :email:, :username:, :password:, :rol_id:)', [...], false)
 5 APPPATH/Models/UserAjaxModel.php(28): CodeIgniter\Database\BaseBuilder->insert([...])
 6 APPPATH/Controllers/UserAjax.php(32): App\Models\UserAjaxModel->insert_data([...])
 7 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\UserAjax->register()
 8 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\UserAjax))
 9 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
10 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
