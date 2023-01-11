<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2023-01-11 09:32:05 --> Invalid file: estructura/body.php
in SYSTEMPATH/Exceptions/FrameworkException.php on line 33.
 1 SYSTEMPATH/View/View.php(201): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('estructura/body.php')
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/body', [], true)
 3 APPPATH/Controllers/Micontrolador.php(67): view('estructura/body', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:32:29 --> syntax error, unexpected 'userId' (T_STRING), expecting ';' or ','
in APPPATH/Views/estructura/body.php on line 28.
 1 SYSTEMPATH/View/View.php(216): CodeIgniter\View\View->CodeIgniter\View\{closure}()
 2 SYSTEMPATH/Common.php(1134): CodeIgniter\View\View->render('estructura/body', [], true)
 3 APPPATH/Controllers/Micontrolador.php(67): view('estructura/body', [...])
 4 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->admin()
 5 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 6 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 7 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:39:27 --> Request URI segment is out of range: 2
in SYSTEMPATH/HTTP/URI.php on line 529.
 1 SYSTEMPATH/HTTP/URI.php(529): CodeIgniter\HTTP\Exceptions\HTTPException::forURISegmentOutOfRange(2)
 2 APPPATH/Controllers/Micontrolador.php(148): CodeIgniter\HTTP\URI->getSegment(2)
 3 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editar()
 4 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 5 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 6 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:52:24 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:53:20 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:54:37 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:55:06 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:57:43 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:04 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 76.
 1 APPPATH/Controllers/Micontrolador.php(76): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 76, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:30 --> session_start(): Failed to read session data: user (path: /var/www/html/writable/session)
in SYSTEMPATH/Session/Session.php on line 912.
 1 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'session_start(): Failed to read session data: user (path: /var/www/html/writable/session)', 'SYSTEMPATH/Session/Session.php', 912, [])
 2 SYSTEMPATH/Session/Session.php(912): session_start()
 3 SYSTEMPATH/Session/Session.php(234): CodeIgniter\Session\Session->startSession()
 4 SYSTEMPATH/Config/Services.php(665): CodeIgniter\Session\Session->start()
 5 SYSTEMPATH/Config/BaseService.php(194): CodeIgniter\Config\Services::session(Object(Config\App), false)
 6 SYSTEMPATH/Config/Services.php(637): CodeIgniter\Config\BaseService::getSharedInstance('session', null)
 7 APPPATH/Controllers/Micontrolador.php(14): CodeIgniter\Config\Services::session()
 8 SYSTEMPATH/CodeIgniter.php(889): App\Controllers\Micontrolador->__construct()
 9 SYSTEMPATH/CodeIgniter.php(473): CodeIgniter\CodeIgniter->createController()
10 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
11 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:30 --> session_start(): Failed to read session data: user (path: /var/www/html/writable/session)
in SYSTEMPATH/Session/Session.php on line 912.
 1 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'session_start(): Failed to read session data: user (path: /var/www/html/writable/session)', 'SYSTEMPATH/Session/Session.php', 912, [])
 2 SYSTEMPATH/Session/Session.php(912): session_start()
 3 SYSTEMPATH/Session/Session.php(234): CodeIgniter\Session\Session->startSession()
 4 SYSTEMPATH/Config/Services.php(665): CodeIgniter\Session\Session->start()
 5 SYSTEMPATH/Config/BaseService.php(194): CodeIgniter\Config\Services::session(Object(Config\App), false)
 6 SYSTEMPATH/Config/Services.php(637): CodeIgniter\Config\BaseService::getSharedInstance('session', null)
 7 APPPATH/Controllers/Micontrolador.php(14): CodeIgniter\Config\Services::session()
 8 SYSTEMPATH/CodeIgniter.php(889): App\Controllers\Micontrolador->__construct()
 9 SYSTEMPATH/CodeIgniter.php(473): CodeIgniter\CodeIgniter->createController()
10 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
11 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:30 --> session_start(): Failed to read session data: user (path: /var/www/html/writable/session)
in SYSTEMPATH/Session/Session.php on line 912.
 1 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'session_start(): Failed to read session data: user (path: /var/www/html/writable/session)', 'SYSTEMPATH/Session/Session.php', 912, [])
 2 SYSTEMPATH/Session/Session.php(912): session_start()
 3 SYSTEMPATH/Session/Session.php(234): CodeIgniter\Session\Session->startSession()
 4 SYSTEMPATH/Config/Services.php(665): CodeIgniter\Session\Session->start()
 5 SYSTEMPATH/Config/BaseService.php(194): CodeIgniter\Config\Services::session(Object(Config\App), false)
 6 SYSTEMPATH/Config/Services.php(637): CodeIgniter\Config\BaseService::getSharedInstance('session', null)
 7 APPPATH/Controllers/Micontrolador.php(14): CodeIgniter\Config\Services::session()
 8 SYSTEMPATH/CodeIgniter.php(889): App\Controllers\Micontrolador->__construct()
 9 SYSTEMPATH/CodeIgniter.php(473): CodeIgniter\CodeIgniter->createController()
10 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
11 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:30 --> session_start(): Failed to read session data: user (path: /var/www/html/writable/session)
in SYSTEMPATH/Session/Session.php on line 912.
 1 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'session_start(): Failed to read session data: user (path: /var/www/html/writable/session)', 'SYSTEMPATH/Session/Session.php', 912, [])
 2 SYSTEMPATH/Session/Session.php(912): session_start()
 3 SYSTEMPATH/Session/Session.php(234): CodeIgniter\Session\Session->startSession()
 4 SYSTEMPATH/Config/Services.php(665): CodeIgniter\Session\Session->start()
 5 SYSTEMPATH/Config/BaseService.php(194): CodeIgniter\Config\Services::session(Object(Config\App), false)
 6 SYSTEMPATH/Config/Services.php(637): CodeIgniter\Config\BaseService::getSharedInstance('session', null)
 7 APPPATH/Controllers/Micontrolador.php(14): CodeIgniter\Config\Services::session()
 8 SYSTEMPATH/CodeIgniter.php(889): App\Controllers\Micontrolador->__construct()
 9 SYSTEMPATH/CodeIgniter.php(473): CodeIgniter\CodeIgniter->createController()
10 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
11 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 09:59:30 --> session_start(): Failed to read session data: user (path: /var/www/html/writable/session)
in SYSTEMPATH/Session/Session.php on line 912.
 1 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'session_start(): Failed to read session data: user (path: /var/www/html/writable/session)', 'SYSTEMPATH/Session/Session.php', 912, [])
 2 SYSTEMPATH/Session/Session.php(912): session_start()
 3 SYSTEMPATH/Session/Session.php(234): CodeIgniter\Session\Session->startSession()
 4 SYSTEMPATH/Config/Services.php(665): CodeIgniter\Session\Session->start()
 5 SYSTEMPATH/Config/BaseService.php(194): CodeIgniter\Config\Services::session(Object(Config\App), false)
 6 SYSTEMPATH/Config/Services.php(637): CodeIgniter\Config\BaseService::getSharedInstance('session', null)
 7 APPPATH/Controllers/Micontrolador.php(14): CodeIgniter\Config\Services::session()
 8 SYSTEMPATH/CodeIgniter.php(889): App\Controllers\Micontrolador->__construct()
 9 SYSTEMPATH/CodeIgniter.php(473): CodeIgniter\CodeIgniter->createController()
10 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
11 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 14:08:11 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 77.
 1 APPPATH/Controllers/Micontrolador.php(77): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 77, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 14:08:42 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 77.
 1 APPPATH/Controllers/Micontrolador.php(77): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 77, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 14:08:46 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 77.
 1 APPPATH/Controllers/Micontrolador.php(77): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 77, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
CRITICAL - 2023-01-11 14:09:01 --> Undefined variable: users
in APPPATH/Controllers/Micontrolador.php on line 77.
 1 APPPATH/Controllers/Micontrolador.php(77): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined variable: users', 'APPPATH/Controllers/Micontrolador.php', 77, [...])
 2 SYSTEMPATH/CodeIgniter.php(927): App\Controllers\Micontrolador->editarUser()
 3 SYSTEMPATH/CodeIgniter.php(482): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Micontrolador))
 4 SYSTEMPATH/CodeIgniter.php(351): CodeIgniter\CodeIgniter->handleRequest(null, Object(Config\Cache), false)
 5 FCPATH/index.php(69): CodeIgniter\CodeIgniter->run()
