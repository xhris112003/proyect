<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct(){
		helper('form');
	}

	public function LoginUsers($username,$password){

		$db = \Config\Database::connect();
		
			$builder = $db->table('users user');
		
			$query   = $builder->select('user.id as id')
		
						->where('user.username', $username)
		
						->where('user.password', $password);
		
			return $query->get()->getResult();
		}
	public function guarda(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$data=array(
			'name'=>$request->getPostGet('name'),
			'email'=>$request->getPostGet('email'),
			'password'=>$request->getPostGet('password'),
			'username'=>$request->getPostGet('username'),
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
			$estructura=view('estructura/header').view('estructura/formulario',$users);
		}
		else{
			$users=$userModel->findAll();
			$users=array('users'=>$users);
			$estructura=view('estructura/header').view('estructura/body',$users);
		}
		return $estructura;

	}

	public function loginsUsers ($username, $password){
        $db = \Config\Database::connect();
        $request = \Config\Services::request();
        $username = $request->getPostGet('username');
        $password = $request->getPostGet('password');
            
        $builder = $db->table('users user');

        $query = $builder->select('user.id as id, user.email as email, user.rol_id as rol_id')

                    ->where('user.username', $username)

                    ->where('user.password', $password);

        return $query->get()->getResult();
    }
	
	public function editar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
		$users=$userModel->find([$id]);
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/formulario',$users);
		return $estructura;

	}

	public function deleteUser($idUser) {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->delete(['id' => $idUser]);

    }

	public function borrar(){
		$userModel=new UserModel($db);
		$request= \Config\Services::request();
		$id=$request->getPostGet('id');
		$userModel->delete($id);
		$users=$userModel->findAll();
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/body',$users);
		return $estructura;

	}

	public function formulario(){
		$estructura=view('estructura/header').view('estructura/formulario');
		return $estructura;
	}
	public function index()
	{
		echo "Home";
		$userModel=new UserModel($db);
		//$users=$userModel->find([1,2]);
		//$users=$userModel->findAll();
		//$users=$userModel->where('name','maria')->findAll();
		//$users=$userModel->findAll(2,3);
		//$users=$userModel->withDeleted()->findAll();
		/*
		$data=[
			'name'=>"programador1",
			'email'=>"programador1@hotmail.com"
		];
		$userModel->insert($data);
		
		$data=[
			'name'=>"programador2",
			'email'=>"programador2@hotmail.com"
		];
		$userModel->update(10,$data);
		
		$data=[
			'name'=>"yo"
		];
		$userModel->update([2,3],$data);
		
		$userModel->whereIn('id',[4,5,10])
		->set(['name'=>'yo tambien'])
		->update();
		
		$data=[
			'name'=>"programador11",
			'email'=>"programador11@hotmail.com"
		];
		$userModel->save($data);
		
		$data=[
			'id'=>"12",
			'name'=>"programador yo tambien",
			'email'=>"programadorto@hotmail.com"
		];
		$userModel->save($data);
		*/
		//$userModel->delete([2,4,5]);
		//$userModel->where('id',10)->delete();
		//$userModel->purgeDeleted();
		/*
		$data=[
			'name'=>"programadorvalido nuevo 2",
			'email'=>"programadornuevo2@hotmail.com"
		];
		if($userModel->save($data)===false){
			var_dump($userModel->errors());
		}
		*/
		/*
		$users=$userModel->asArray()->where('name','programador11')
		->orderBy('id','asc')
		->findAll();
		var_dump($users);
		*/
		$users=$userModel->findAll();
		
		$users=array('users'=>$users);
		$estructura=view('estructura/header').view('estructura/body',$users);
		return $estructura;
		
	}

	//--------------------------------------------------------------------

}
