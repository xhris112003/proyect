<?php namespace App\Models;

use CodeIgniter\Model;

class UserAjaxModel extends Model
{
        protected $table      = 'users';
        protected $primaryKey = 'id';

        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['name', 'email', 'password', 'username', 'rol_id'];

        protected $useTimestamps = false;
        protected $createdField  = 'created_at';
        protected $updatedField  = 'updated_at';
        
        
        public function __construct() {
            parent::__construct();
            //$this->load->database();
            $db = \Config\Database::connect();
            $builder = $db->table('Students');
        }
        
        public function insert_data($data) {
            if($this->db->table($this->table)->insert($data))
            {
                return $this->db->insertID();
            }
            else
            {
                return false;
            }
        }
}