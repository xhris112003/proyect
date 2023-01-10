<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-01 11:46:08 --> Unable to connect to the database.
Main connection [MySQLi]: php_network_getaddresses: getaddrinfo failed: Name or service not known
in SYSTEMPATH/Database/BaseConnection.php on line 418.
 1 SYSTEMPATH/Database/BaseConnection.php(561): CodeIgniter\Database\BaseConnection->initialize()
 2 SYSTEMPATH/Database/BaseBuilder.php(1669): CodeIgniter\Database\BaseConnection->query('SELECT COUNT(*) AS `numrows`
FROM `users`', [], false)
 3 SYSTEMPATH/Model.php(551): CodeIgniter\Database\BaseBuilder->countAllResults(false)
 4 SYSTEMPATH/BaseModel.php(1106): CodeIgniter\Model->countAllResults(false)
 5 APPPATH/Controllers/Micontrolador.php(139): CodeIgniter\BaseModel->paginate(10)
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->index()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-01 11:47:11 --> Unable to connect to the database.
Main connection [MySQLi]: Connection refused
in SYSTEMPATH/Database/BaseConnection.php on line 418.
 1 SYSTEMPATH/Database/BaseConnection.php(561): CodeIgniter\Database\BaseConnection->initialize()
 2 SYSTEMPATH/Database/BaseBuilder.php(1669): CodeIgniter\Database\BaseConnection->query('SELECT COUNT(*) AS `numrows`
FROM `users`', [], false)
 3 SYSTEMPATH/Model.php(551): CodeIgniter\Database\BaseBuilder->countAllResults(false)
 4 SYSTEMPATH/BaseModel.php(1106): CodeIgniter\Model->countAllResults(false)
 5 APPPATH/Controllers/Micontrolador.php(139): CodeIgniter\BaseModel->paginate(10)
 6 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->index()
 7 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 8 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 9 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
