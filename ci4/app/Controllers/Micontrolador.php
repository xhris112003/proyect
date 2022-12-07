<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Controllers\Home;

class Micontrolador extends BaseController
{
	public $session = null;
	public function __construct()
	{
		helper('form');
		$this->session = \Config\Services::session();
	}

	public function ponerDatos()
	{
		$newdata = [
			'name' => 'novato',
			'email' => 'info@programadornovato.com',
			'login' => TRUE,
		];
		$this->session->set($newdata);
		echo $this->session->get('email');
	}
	public function leerDatos()
	{
		if ($this->session->has('name')) {
			echo "name=" . $this->session->get('name') . "<br>";
			echo "email=" . $this->session->get('email') . "<br>";
			echo "login=" . $this->session->get('login') . "<br>";
		} else {
			echo "No hay datos";
		}
	}
	public function quitarDatos()
	{
		$this->session->remove('email');
	}
	public function destruirDatos()
	{
		$this->session->destroy();
	}


	public function guarda()
	{
		$db = \Config\Database::connect();
		$userModel = new UserModel($db);
		$request = \Config\Services::request();
		$data = array(
			'id' => $request->getPostGet('id'),
			'name' => $request->getPostGet('name'),
			'email' => $request->getPostGet('email'),
			'password' => $request->getPostGet('password'),
			'username'=>$request->getPostGet('username'),
		);
		$id = 0;
		if ($request->getPostGet('id')) {
			$id = $request->getPostGet('id');
		}
		if ($userModel->save($data) === false) {
			var_dump($userModel->errors());
		}
		if ($request->getPostGet('id')) {
			$users = $userModel->findAll();
			$users = array('users' => $users);
			$estructura = view('estructura/header') . view('estructura/body', $users);
			
		} else {
			$users = $userModel->findAll();
			$users = array('users' => $users);
			$estructura = view('estructura/header') . view('estructura/body', $users);
		}

		return $estructura;

	}
	public function editar()
	{
		$userModel = new UserModel();
		$request = \Config\Services::request();
		if ($request->getPostGet('id')) {
			$id = $request->getPostGet('id');
		} else {
			$id = $request->uri->getSegment(3);
		}
		$users = $userModel->find($id);
		$users = array('users' => $users);
		$estructura = view('estructura/header') . view('estructura/formulario', $users);
		return $estructura;

	}


	public function borrar()
	{
		$db = \Config\Database::connect();
		$userDel = new Home();
		$request = \Config\Services::request();
		$id = $request->getPostGet('id');
		$userDel = $userDel->deleteUser($id);
		$userModel = new UserModel($db);
		$users = $userModel->paginate(10);
		$paginador = $userModel->pager;
		$estructura = view('estructura/header') . view('estructura/body', [
			'users' => $users,
			'paginador' => $paginador
		]);
		return $estructura;

	}

	public function formulario()
	{
		$estructura = view('estructura/header') . view('estructura/formulario');
		return $estructura;
	}
	public function index()
	{
		$db = \Config\Database::connect();
		$userModel = new UserModel($db);
		$users = $userModel->paginate(10);
		$paginador = $userModel->pager;
		//$paginador->setPath('ci4/');
		//$datos=array('users'=>$datos,'paginador'=>$paginador);
		$estructura = view('estructura/header') . view('estructura/login');
		return $estructura;
	}

	public function exportData()
	{
		$db = \Config\Database::connect();
		$filename = 'users_'.date('Ymd').'.csv'; 
		header("Content-Description: File Transfer"); 
		header("Content-Disposition: attachment; filename=$filename"); 
		header("Content-Type: application/csv; ");
   
		$users = new UserModel($db);
		$usersData = $users->select('*')->findAll();
    
		$file = fopen('php://output', 'w');
   
		$header = array("id","name","username","password"); 
		fputcsv($file, $header);
		foreach ($usersData as $key=>$line){ 
		   fputcsv($file,$line); 
		}
		fclose($file); 
		exit; 
	}
	

	public function imagenManipulacion()
	{
		$info = \Config\Services::image()
			->withFile('codeigniter.jpg')
			->getFile()
			->getProperties(true);
		$ancho = $info['width'];
		$alto = $info['height'];

		$imagen = \Config\Services::image()
			->withFile('codeigniter.jpg')
			->reorient()
				//->rotate(90)
				//->fit(250,250,'bottom-left')
				//->resize($ancho/2,$alto/2)
			->crop(300, 300, 50, 0)
			->save('codeigniter_p.jpg');
		return view('estructura/imagen');
	}
//--------------------------------------------------------------------

}