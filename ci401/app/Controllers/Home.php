<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct(){
	

		helper('form');
	}
	public function guarda(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$data=array(
			'name'=>$request->getPostGet('name'),
			'email'=>$request->getPostGet('email'),
		);
		if($request->getPostGet('id')){
			$data['id']=$request->getPostGet('id');
		}
		if($userModel->save($data)===false){
			var_dump($userModel->errors());
		}
		if($request->getPostGet('id')){
			$users=$userModel->find([$request->getPostGet('id')]);
			$users=array('users'=>$users);
			$estructura=view('header').view('formulario',$users);	
		}
		else{
			$users=$userModel->findAll();
			$users=array('users'=>$users);
			$estructura=view('header').view('body',$users);
		}
		return $estructura;

	}
	public function editar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
		$users=$userModel->find([$id]);
		$users=array('users'=>$users);
		$estructura=view('header').view('form',$users);
		return $estructura;

	}
	public function borrar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
		$userModel->delete($id);
		$users=$userModel->findAll();
		$users=array('users'=>$users);
		$estructura=view('header').view('body',$users);
		return $estructura;

	}

	public function formulario(){
		$estructura=view('header').view('form');
		return $estructura;
	}
	public function index()
	{
		echo "Home";
		$userModel=new UserModel($db);
		$users=$userModel->findAll();
		
		$users=array('users'=>$users);
		$estructura=view('header').view('body',$users);
		return $estructura;
		
	}

	//--------------------------------------------------------------------

}