<?php

namespace App\Controllers;
   
use CodeIgniter\Controller;
use App\Models\UserAjaxModel;

class UserAjax extends Controller
{
        public function index()
        {
            $model = new UserAjaxModel();
   
            $data['users'] = $model->orderBy('id', 'ASC')->findAll();
              
            return view('estructura/list', $data);
        }

        public function register()
        {  
            helper(['form', 'url']);
            
            $model = new UserAjaxModel();
            
            $data = [
                'name' => $this->request->getVar('txtName'),
                'email'  => $this->request->getVar('txtEmail'),
                'username'  => $this->request->getVar('txtUsername'),
                'password'  => $this->request->getVar('txtPassword'),
                'rol_id' => 1
                ];
            $save = $model->insert_data($data);
            if($save != false)
            {
                $data = $model->where('id', $save)->first();
                echo json_encode(array("status" => true , 'data' => $data));
            }else{
                echo json_encode(array("status" => true , 'data' => $data));
            }
        }

        public function edit($id = null)
        {
            
            $model = new UserAjaxModel();
            
            $data = $model->where('id', $id)->first();
            
            if($data){
                    echo json_encode(array("status" => true , 'data' => $data));
                }else{
                    echo json_encode(array("status" => false));
                }
        }

        public function update()
        {  
    
            helper(['form', 'url']);
            
            $model = new UserAjaxModel();
    
            $id = $this->request->getVar('hdnUserId');
    
            $data = [
                'name' => $this->request->getVar('txtName'),
                'email'  => $this->request->getVar('txtEmail'),
                'username'  => $this->request->getVar('txtUsername'),
                'password'  => $this->request->getVar('txtPassword'),
                ];
    
            $update = $model->update($id,$data);
            if($update != false)
            {
                $data = $model->where('id', $id)->first();
                echo json_encode(array("status" => true , 'data' => $data));
            }
            else{
                echo json_encode(array("status" => false , 'data' => $data));
            }
        }

        public function delete($id = null)
        {
            $model = new UserAjaxModel();
            $delete = $model->where('id', $id)->delete();
            if($delete)
            {
               echo json_encode(array("status" => true));
            }else{
               echo json_encode(array("status" => false));
            }
        }
}

