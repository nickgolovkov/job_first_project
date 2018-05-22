<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Materials extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->model('materials_model');
    $this->load->model('pages_model');
    $this->load->library('auth_lib');
}    
    
public function index()
{
    redirect (base_url());
}

   public function show($material_id)
{
    
   $data = array();
   // Массив по одному материалу 
   $data['main_info'] = $this->materials_model->get($material_id);
   $data['portfolio'] = $this->materials_model->get_mat_info($material_id, 'portfolio_materials'); 
   $data['partners'] = $this->pages_model->get_partners();       
   //Если массив пуст
   if (empty($data['main_info']))
   {                            
        $data['info'] = 'Нет такого материала';                              
        $name = 'info'; 
        $this->display_lib->user_info_page($data,$name);
   }
   else
   {    
       $name = 'materials/content'; 
       $this->display_lib->user_page($data,$name);
   }    
}

   public function open($material_id)
{
    
   $data = array();
   // Массив по одному материалу 
   $data['main_info'] = $this->materials_model->get($material_id);     
   $data['partners'] = $this->pages_model->get_partners();  
   //Если массив пуст
   if (empty($data['main_info']))
   {                            
        $data['info'] = 'Нет такого материала';                              
        $name = 'info'; 
        $this->display_lib->user_info_page($data,$name);
   }
   else
   {    
       $name = 'materials/content_prise'; 
       $this->display_lib->user_page($data,$name);
   }    
}

  public function shop($material_id)
{
    
   $data = array();
   // Массив по одному материалу 
   $data['main_info'] = $this->materials_model->get($material_id);     
   $data['materials'] = $this->materials_model->get_mat_info($material_id, 'shop_materials'); 
   $data['partners'] = $this->pages_model->get_partners();  
   //Если массив пуст
   if (empty($data['main_info']))
   {
        $data['info'] = 'Нет такого материала';                              
        $name = 'info'; 
        $this->display_lib->user_page($data,$name);
   }
   else
   {    
       $name = 'materials/content_shop'; 
       $this->display_lib->user_page($data,$name);
   }    
}

public function listok()
{
     $this->auth_lib->check_admin();
     $data = array();  
      //информация
     $data['all_material'] = $this->materials_model->get_all_material();
      // всего
     $data['materials_count'] = $this->materials_model->count_all();
     $data['info'] = '<span style="color:green;"> Выбор материалов</span>';  
      
      $name = 'admin/materials/list';
      $this->display_lib->admin_page($data,$name); 
      
}

/* ===Ajax - удаление материала=== */
public function delete()
{
    $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['id']){ 
   
    $id = (int)$_POST['id'];
    
    if($id){ 
        
        $query = "DELETE FROM `materials` WHERE material_id = $id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
           //$res = $this->materials_model->count_all();
           $res = 'удалено';
           exit($res);
        }else{
            $res = false;
            exit($res);
        }
      }else{
            $res = false;
            exit($res);
        }
    }
}
/* ===Ajax - удаление материала=== */ 


/* ===Ajax - удаление картинки афиши=== */
public function delete_img()
{
    //$this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['img']){
        
      $img = $_POST['img']; 
      
     $this->materials_model->delete_img($img);

    } 
}
/* ===Ajax - удаление картинки афиши=== */ 

public function edit_material($id)
{
    
    $this->auth_lib->check_admin();
    //$user = $this->materials_model->found_shef($id);// имя автора
    //$data['my_category'] = $this->login_model->my_category($id, $user); //вторичная категория
    //$data['my_num_category'] = $this->login_model->my_num_category($id, $user);
    //$data['my_first_category'] = $this->login_model->my_first_category($data['my_category']);//первичная категория
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['edit_material_button']))
    {      
        $this->form_validation->set_rules($this->materials_model->edit_rules_admin);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->materials_model->update($id);
            
                    /* базовая картинка */
                    if(isset($_FILES['baseimg_material']['name'])){
                        $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg_material']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg_material']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg_material']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg_material']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg_material']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > 1048576) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                       
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/material/tmp/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               $this->materials_model->resize($uploaddir, "./userfiles/material/$baseimgName", 50, 50, $baseimgExt);
                                @unlink($uploaddir);
                                mysql_query("UPDATE materials SET baseimg_material = '$baseimgName' WHERE material_id = $id");
                            }else{
                                $data = array();
                                $data['info'] = 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /material/';
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                    /* базовая картинка */
                    $data = array();
                    $data['info'] = '<h3 style="color:green;text-align:center;">вот и все</h3>';
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
        }
        
        else
        {            
            
            $data = array();
            $data = $this->materials_model->get($id);
            $data['info'] = '<h3 style="color:red;text-align:center;">Вы не правильно заполнили поля</h3>';
            //вытаскиваем фото-галлерею, если она есть
            $data['all_category'] = $this->materials_model->all_category();
            $data['my_category'] = $this->login_model->my_category($id, $user);
            $data['my_first_category'] = $this->login_model->my_first_category($data['my_category']);
            $data['my_num_category'] = $this->login_model->my_num_category($id, $user);
            $data['material_img'] = $this->materials_model->get_img($id);
            $name = 'admin/materials/edit_new';
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/materials/edit_new';
        $data = array();
        $data = $this->materials_model->get($id);
        $data['info'] = '<h3 style="color:green;text-align:center;">Страница редактирования товара пользователей</h3>';
        //вытаскиваем фото-галлерею, если она есть
        $data['all_category'] = $this->materials_model->all_category();
        $data['my_category'] = $this->login_model->my_category($id, $user);
        $data['my_first_category'] = $this->login_model->my_first_category($data['my_category']);
        $data['my_num_category'] = $this->login_model->my_num_category($id, $user);
        $data['material_img'] = $this->materials_model->get_img($id);
   
        $this->display_lib->admin_page($data,$name);            
    }  
}



}