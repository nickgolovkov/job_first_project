<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pages_model extends Crud
{
    public $table = 'pages'; //��� �������
    public $idkey = 'page_id'; //��� id
    
// ������� ��� ���������� �����
public $contact_rules = array
    (   
       array
       (
         'field' => 'name',
         'label' => '���',
         'rules' => 'trim|required|xss_clean|max_length[70]'
       ),
       array
       (
         'field' => 'email',
         'label' => '�-mail',
         'rules' => 'trim|required|valid_email|xss_clean|max_length[70]'
       ),
       array
       (
         'field' => 'topic',
         'label' => '���� ���������',
         'rules' => 'required|xss_clean|max_length[70]'
       ),        
       array
       (
         'field' => 'message',
         'label' => '����� ���������',
         'rules' => 'required|xss_clean|max_length[5000]'
       ),
       array
       (
         'field' => 'captcha',
         'label' => '����� � ��������',
         'rules' => 'required|numeric|exact_length[5]'
       )
    );
    
// ������� ��� ���������� �����
public $edit_rules = array
    (   
       array
       (
         'field' => 'title',
         'label' => '��������',
         'rules' => 'trim|required|xss_clean|max_length[100]'
       ),
       array
       (
         'field' => 'description',
         'label' => '��������',
         'rules' => 'required|xss_clean|max_length[1000]'
       ),
       array
       (
         'field' => 'keywords',
         'label' => '�������� �����',
         'rules' => 'required|xss_clean|max_length[1000]'
       ),        
       array
       (
         'field' => 'main_texts',
         'label' => '�����',
         'rules' => 'required'
       )
    );
    
public $edit_contakt_rules = array
    (   
       array
       (
         'field' => 'main_texts',
         'label' => '�������� �����',
         'rules' => 'required'
       ),
       array
       (
         'field' => 'main_texts1',
         'label' => '���������',
         'rules' => 'required'
       ),        
       array
       (
         'field' => 'main_texts2',
         'label' => '�����',
         'rules' => 'required'
       )
    );   


           
public function get_all()
{
    $query = $this->db->get('pages');
    
    //���������� ������ �� ����� ����������
    return $query->result_array();
}

public function get_partners()
{
    $query = $this->db->get('partners');
    return $query->result_array();
}

public function update($id)
{
     $data = array();  
	     foreach ($this->edit_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('page_id',$id);
	 $this->db->update('pages',$data);
} 
public function update_contakt()
{
    $data = array();  
	     foreach ($this->edit_contakt_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('page_id','contakt');
	 $this->db->update('pages',$data);
}

public function update_price($id)
{
    $data = array();  
	     foreach ($this->edit_contakt_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('page_id',$id);
	 $this->db->update('pages',$data);
}
}