<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pages_model extends Crud
{
    public $table = 'pages'; //имя таблицы
    public $idkey = 'page_id'; //имя id
    
// правила для контактной формы
public $contact_rules = array
    (   
       array
       (
         'field' => 'name',
         'label' => 'Имя',
         'rules' => 'trim|required|xss_clean|max_length[70]'
       ),
       array
       (
         'field' => 'email',
         'label' => 'Е-mail',
         'rules' => 'trim|required|valid_email|xss_clean|max_length[70]'
       ),
       array
       (
         'field' => 'topic',
         'label' => 'Тема сообщения',
         'rules' => 'required|xss_clean|max_length[70]'
       ),        
       array
       (
         'field' => 'message',
         'label' => 'Текст сообщения',
         'rules' => 'required|xss_clean|max_length[5000]'
       ),
       array
       (
         'field' => 'captcha',
         'label' => 'Цифры с картинки',
         'rules' => 'required|numeric|exact_length[5]'
       )
    );
    
// правила для контактной формы
public $edit_rules = array
    (   
       array
       (
         'field' => 'title',
         'label' => 'Название',
         'rules' => 'trim|required|xss_clean|max_length[100]'
       ),
       array
       (
         'field' => 'description',
         'label' => 'описание',
         'rules' => 'required|xss_clean|max_length[1000]'
       ),
       array
       (
         'field' => 'keywords',
         'label' => 'Ключевые слова',
         'rules' => 'required|xss_clean|max_length[1000]'
       ),        
       array
       (
         'field' => 'main_texts',
         'label' => 'Текст',
         'rules' => 'required'
       )
    );
    
public $edit_contakt_rules = array
    (   
       array
       (
         'field' => 'main_texts',
         'label' => 'почтовый адрес',
         'rules' => 'required'
       ),
       array
       (
         'field' => 'main_texts1',
         'label' => 'реквизиты',
         'rules' => 'required'
       ),        
       array
       (
         'field' => 'main_texts2',
         'label' => 'карта',
         'rules' => 'required'
       )
    );   


           
public function get_all()
{
    $query = $this->db->get('pages');
    
    //Возвращаем массив со всеми страницами
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