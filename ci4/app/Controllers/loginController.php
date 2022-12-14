<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Controllers\Home;

class loginController extends BaseController{
    public $session = null;
	public function __construct()
	{
		helper('form');
		$this->session = \Config\Services::session();
	}


    public function loginUser(){
        $session = \Config\Services::session();
        $session->start();
        $db = \Config\Database::connect();
        $request = \Config\Services::request();
        $userModel=new UserModel($db);
        $username = $request->getPostGet('username');
        $password = $request->getPostGet('password');

        $user = new Home();

        $login = $user -> LoginUsers($username,$password);
       
        $listausuarios=[];
        if($login != null && intval($login[0]->id) > 0 ){
            $users=$userModel->findAll();
		    $userModel = new UserModel($db);
		    $users = $userModel->paginate(10);
		    $paginador = $userModel->pager;
		    $estructura = view('estructura/header') . view('estructura/bodyUser', [
			'users' => $users,
			'paginador' => $paginador
		    ]);
            return $estructura;
        }else{
            echo 'error';
        }
    }
}
