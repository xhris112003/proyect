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
        $request = \Config\Services::request();
        $db = \Config\Database::connect();
        
        $userModel=new UserModel($db);
        $username = $request->getPostGet('username');
        $password = $request->getPostGet('password');

        $user = new Home();

        $login = $user -> loginsUsers($username,$password);

       
        $listausuarios=[];
        if($login != null && intval($login[0]->id) > 0 ){
            $session->set('username', $username);
            $session->set('rol_id', $login[0]->rol_id);
            $users=$userModel->findAll();
		    $userModel = new UserModel($db);
		    $users = $userModel->paginate(10);
		    $paginador = $userModel->pager;
            
            return redirect()->to('/home');
        }else{
            $estructura = view('estructura/header') . view('estructura/home');
		    
            return $estructura;
        }
    }
}
