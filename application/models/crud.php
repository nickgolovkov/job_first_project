<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Model
{
public $table = ''; //��� �������
public $idkey = ''; //��� id
    
public function __construct()
    {
        parent::__construct();
    }
    public function get($obj_id)
    {
        $this->db->where($this->idkey,$obj_id);
        $query = $this->db->get($this->table);
        return $query->row_array();
    }
    
    
    //������� ������ ����� �������
    
     public function count_all()
     {
        return $this->db->count_all($this->table);
        
     }
}
?>