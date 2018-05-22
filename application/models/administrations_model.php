<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrations_model extends CI_Model
{
    public function __construct()
{       
    parent::__construct();
    $this->get_preferences();
}

//Считывание настроек из базы в массив config для дальнейшего использования
public function get_preferences()
{
    $query = $this->db->get('preferences');
    
    //Получаем в переменную массив со всеми настройками
    $preferences = $query->result_array();
    
    foreach ($preferences as $item)
    {
        $val = $item['value']; 
                
        if(is_numeric($val))
        {
            settype($val,"int");
        }     
        //Устанавливаем элементу значение
        $this->config->set_item($item['pref_id'],$val);          
    }    
}


public function delete_img($img, $rel)
{
    
    if($rel){ // если удаляется базовая картинка
        $uploaddir = "./img/banners/$rel/$img";
        //удаляем ее из сервера
        @unlink($uploaddir);
        //обновляем базу
        $query = "UPDATE banners SET block_$rel = 'no_$rel.jpg' WHERE id = 1";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
            //$uploaddir = "./img/afisha/$img";
            //@unlink($uploaddir);
            $res = '<input type="file" name="block_'.$rel.'" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
  }
}
// правила для добавления нового материала
public $edit_rules = array
(
    array
    (
      'field' => 'run_words',
      'label' => 'Бегущая строка',
      'rules' => 'required'
    )
);

public $login_rules = array
(
    array
    (
      'field' => 'login',
      'label' => 'Логин',
      'rules' => 'trim|required|alpha_dash|max_length[50]'
    ),
   array
   (
     'field' => 'pass',
     'label' => 'Пароль',
     'rules' => 'trim|required|alpha_dash'
    ),
       array
       (
         'field' => 'captcha',
         'label' => 'Цифры с картинки',
         'rules' => 'required|numeric|exact_length[5]'
       )
);

// правила для добавления нового материала
public $add_portfolio_rules = array
(
    array
    (
      'field' => 'title',
      'label' => 'Название',
      'rules' => 'required|max_length[100]'
    ),
    array
    (
      'field' => 'category',
      'label' => 'Категория',
      'rules' => 'required'
    )
);

// правила для добавления нового материала
public $add_shop_rules = array
(
    array
    (
      'field' => 'category',
      'label' => 'Категория',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'title',
      'label' => 'Название',
      'rules' => 'required|max_length[200]'
    ),
    array
    (
      'field' => 'text',
      'label' => 'Описание',
      'rules' => 'required|max_length[1000]'
    ),
    array
    (
      'field' => 'price',
      'label' => 'Стоимость',
      'rules' => 'required|max_length[100]|numeric'
    )
);
// правила для добавления нового материала
public $add_banner_rules = array
(
    array
    (
      'field' => 'alt_text',
      'label' => 'Название',
      'rules' => 'required|max_length[300]'
    ),
    array
    (
      'field' => 'link',
      'label' => 'ссылка',
      'rules' => ''
    ),
    array
    (
      'field' => 'width',
      'label' => 'ширина в пикселях',
      'rules' => 'required|numeric'
    )
);

// Добавление записи
public function update($id)
{
     $data = array();  
	     foreach ($this->add_portfolio_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('id',$id);
	 $this->db->update('portfolio_materials',$data);
} 
// Добавление записи
public function update_banner($id)
{
     $data = array();  
	     foreach ($this->add_banner_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('id',$id);
	 $this->db->update('partners',$data);
} 

public function update_shop($id)
{
     $data = array();  
	     foreach ($this->add_shop_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('id',$id);
	 $this->db->update('shop_materials',$data);
} 
// Добавление записи в портфолио
public function add_portfolio()
{
     $data = array();  
	     foreach ($this->add_portfolio_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         

	 $this->db->insert('portfolio_materials',$data);
} 

// Добавление записи в портфолио
public function add_banner()
{
     $data = array();  
	     foreach ($this->add_banner_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         

	 $this->db->insert('partners',$data);
} 
// Добавление записи в портфолио
public function add_shop()
{
     $data = array();  
	     foreach ($this->add_shop_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         

	 $this->db->insert('shop_materials',$data);
} 

public function get($obj_id)
    {
        $this->db->where('id',$obj_id);
        $query = $this->db->get('banners');
        return $query->row_array();
    }
}   