<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct()
{
    parent::__construct();
    $this->load->model('pages_model');
    $this->load->model('materials_model');
}    

public function show ($page_id)
{          
  // Формируем массив для передачи в вид
 $data = array(); 
  //Массив по одной странице  
 $data['main_info'] = $this->pages_model->get($page_id); 
  $data['partners'] = $this->pages_model->get_partners(); 
  
  
  switch($page_id)
  {
    //Если страница "Главная"
     case 'index':        
     $data['shar'] = 'shar';
     $name = 'pages/mainpage';
     $this->display_lib->user_index_page($data,$name);        
     break;

     case 'portfolio':        
     $data['shar'] = '';
     $name = 'pages/portfolio';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'price':        
     $data['shar'] = '';
     $name = 'pages/price';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'shop':        
     $data['shar'] = '';
     $name = 'pages/shop';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'shop_diz':        
     $data['shar'] = '';
     $name = 'pages/shop_diz';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'shop_pos':        
     $data['shar'] = '';
     $name = 'pages/shop_pos';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'shop_reklama':        
     $data['shar'] = '';
     $name = 'pages/shop_reklama';
     $this->display_lib->user_page($data,$name);        
     break;
     
     case 'shop_parazdnik':        
     $data['shar'] = '';
     $name = 'pages/shop_parazdnik';
     $this->display_lib->user_page($data,$name);        
     break;
     
     //Если страница "Контакты"
    case 'contakt':
     $data['shar'] = '';
     $data['main_info'] = $this->pages_model->get('contakt');    
     $name = 'pages/contakt';
     $this->display_lib->user_page($data,$name);       
        break;

            // Любая другая страница
            default:
                //Если массив пуст
                if (empty($data['main_info']))
                {
                    $data['shar'] = '';
                   $data['info'] = 'Нет такой страницы';
                 $name = 'info'; 
                 
                 $this->display_lib->user_page($data,$name);
                }
                   
                else
                {
                    $data['shar'] = '';
                 $name = 'pages/page';
                 $this->display_lib->user_page($data,$name);           
            	}
                break;    
  }

}
}