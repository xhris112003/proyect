<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2022-12-12 05:14:07 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 42.
 1 APPPATH/Controllers/Micontrolador.php(42): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 42, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->cerrarSesion()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2022-12-12 05:36:00 --> Cannot add or update a child row: a foreign key constraint fails
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')')
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
CRITICAL - 2022-12-12 05:38:00 --> Cannot add or update a child row: a foreign key constraint fails
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'ccarrasco\')')
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
CRITICAL - 2022-12-12 05:38:26 --> Cannot add or update a child row: a foreign key constraint fails
in SYSTEMPATH/Database/MySQLi/Connection.php on line 292.
 1 SYSTEMPATH/Database/MySQLi/Connection.php(292): mysqli->query('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'Ccarrasco\')', 0)
 2 SYSTEMPATH/Database/BaseConnection.php(666): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'Ccarrasco\')')
 3 SYSTEMPATH/Database/BaseConnection.php(593): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `users` (`name`, `email`, `password`, `username`) VALUES (\'christian\', \'ccarrasco@stp.es\', \'1234\', \'Ccarrasco\')')
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
