<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration extends CI_Controller
{           
public function __construct()
    {
       parent::__construct();       
       $this->load->model('pages_model');
       $this->load->model('materials_model');
       $this->load->model('administrations_model');
       $this->load->library('auth_lib');     
    }

public function index()
{
   $this->auth_lib->check_admin();
   $data = array(); 
   // приветствие 
   $data['info'] = '<span style="color:green;">Привет АДМИН</span>';  
   $name = 'admin/main_admin';
   $this->display_lib->admin_page($data,$name);
}

public function pages_listok()
{
      $this->auth_lib->check_admin();
      $data['info'] = 'Страницы доступные для редактирования'; 
      $name = 'admin/pages_listok';
      $this->display_lib->admin_page($data,$name);   
}

public function edit_page($id)
{
    
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['edit_page_button']))
    {      
        $this->form_validation->set_rules($this->pages_model->edit_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->pages_model->update($id);

                    $data = array('info' => '<span style="color:green;">Страница обновлена</span>');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
        }
        
        else
        {            
            $name = 'admin/pages_edit';
            $data = $this->pages_model->get($id);
            $data['info'] = '<span style="color:red;">Вы не правильно заполнили поля</span>';
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/pages_edit';
        $data = $this->pages_model->get($id);
        $data['info'] = '<span style="color:green;">Редактирование страницы</span>';
        $this->display_lib->admin_page($data,$name);            
    }  
}

public function edit_contakt()
{
    
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['edit_contakt']))
    {      
        $this->form_validation->set_rules($this->pages_model->edit_contakt_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->pages_model->update_contakt();

                    $data = array('info' => '<span style="color:green;">Страница обновлена</span>');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
        }
        
        else
        {            
            $name = 'admin/edit_contakt';
            $data = $this->pages_model->get('contakt');
            $data['info'] = '<span style="color:red;">Вы не правильно заполнили поля</span>';
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/edit_contakt';
        $data = $this->pages_model->get('contakt');
        $data['info'] = '<span style="color:green;">Редактирование страницы контактов</span>';
        $this->display_lib->admin_page($data,$name);            
    }  
}

public function edit_price($id)
{
    
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['edit_price']))
    {      
        $this->form_validation->set_rules($this->materials_model->edit_price_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->materials_model->update_price($id);

                    $data = array('info' => '<span style="color:green;">Прайс обновлен</span>');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
        }
        
        else
        {            
            $name = 'admin/edit_price';
            $data = $this->materials_model->get($id);
            $data['info'] = '<span style="color:red;">Вы не правильно заполнили поля</span>';
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/edit_price';
        $data = $this->materials_model->get($id);
        $data['info'] = '<span style="color:green;">Редактирование страницы прайса</span>';
        $this->display_lib->admin_page($data,$name);            
    }  
}
public function sitemap()
{
      $this->auth_lib->check_admin();
       if (isset($_POST['rewrite_sitemsp']))
   {
     
     // указываем заголовок XML документа, говоря ему о том, что это SITEMAP.XML
        $s_map = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset
              xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
              xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
              xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
         
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\r\n";
         
        // указываем главную страницу сайта
        $s_map .= 'http://ra-kontur.by
        <url>
            <loc>http://www.ra-kontur.by/</loc>
            <lastmod>'.date("Y-m-d\TH:i:s+02:00").'</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.00</priority>
        </url>'."\r\n";
         
        // тут нужно получить ссылку на страницу
        $query = "SELECT * FROM materials";
        $result = mysql_query($query);
        $num_result = mysql_num_rows($result);
        for ($i=0;$i<$num_result;$i++)
        {
        $row = mysql_fetch_array($result);
        $s_map .= '<url>'."\r\n";
        $s_map .= '<loc>http://www.ra-kontur.by/materials/show/'.$row["material_id"].'</loc>'."\r\n";
        $s_map .= '<changefreq>weekly</changefreq>'."\r\n";
        $s_map .= '<priority>0.50</priority>'."\r\n";
        $s_map .= '</url>'."\r\n";
        }
        
        $query = "SELECT * FROM pages";
        $result = mysql_query($query);
        $num_result = mysql_num_rows($result);
        for ($i=0;$i<$num_result;$i++)
        {
        $row = mysql_fetch_array($result);
        $s_map .= '<url>'."\r\n";
        $s_map .= '<loc>http://www.ra-kontur.by/pages/show/'.$row["page_id"].'</loc>'."\r\n";
        $s_map .= '<changefreq>weekly</changefreq>'."\r\n";
        $s_map .= '<priority>0.50</priority>'."\r\n";
        $s_map .= '</url>'."\r\n";
        }
        $s_map .= '</urlset>';
         
        // запись в файл
        $file_name = 'sitemap.xml';
        $one_file = fopen($file_name,"w");
        fwrite($one_file,$s_map);
        fclose($one_file);
      
     
        $data['info'] = '<span style="color:green;">все прошло успешно</span>';                                           
        $name = 'admin/info';
        //Передаем пустой массив data, так как этого требует функция admin_page()
        $this->display_lib->admin_page($data,$name);// 
        
        
      }
      else
      {
        $data['info'] = '<span style="color:green;">Нажмите кнопку для перезаписи файла</span>';                                           
        $name = 'admin/sitemap';
        //Передаем пустой массив data, так как этого требует функция admin_page()
        $this->display_lib->admin_page($data,$name);// 
      }

    } 
    



public function login()
{
    $this->load->library('captcha_lib');
    
     // Не нажата кнопка "Отправить"    
        if ( ! isset($_POST['enter_button']))
        {    $data = array();
            //Получаем код картинки
            $data['captcha'] = $this->captcha_lib->captcha_actions();
            $data['info'] = '<a class="ng-binding" href="http://www.ra-kontur.by">Админ-центр www.ra-kontur.by</a>';                           
            $name = 'admin/login'; 
            $this->display_lib->login_page($data,$name);
        }else{
            
            $this->form_validation->set_rules($this->administrations_model->login_rules);
                //Если валидация не пройдена
                if ($this->form_validation->run() == FALSE)
                {
                    $data = array();
                    $data['captcha'] = $this->captcha_lib->captcha_actions();  
                    $data['info'] = '<a class="ng-binding" style="color:red;" href="#">Не верные данные !!!</a>';                         
                    $name = 'admin/login'; 
                    $this->display_lib->login_page($data,$name);
                }else{
                    
                     $entered_captcha = $this->input->post('captcha');
                     if ($entered_captcha == $this->session->userdata('rnd_captcha'))
                    {  
                     $this->auth_lib->do_login($this->input->post('login'),$this->input->post('pass'));
                     }
                     else{
                            $data = array();
                            $data['captcha'] = $this->captcha_lib->captcha_actions();  
                            $data['info'] = '<a class="ng-binding" style="color:red;" href="#">Не верные данные !!!</a>';                         
                            $name = 'admin/login'; 
                            $this->display_lib->login_page($data,$name);
                     }
                }
        }
    
    
}

//Добавление материала 
public function add_portfolio()
{
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['add_portfolio']))
    {      
        $this->form_validation->set_rules($this->administrations_model->add_portfolio_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->administrations_model->add_portfolio();
            
            
                   if(mysql_affected_rows() > 0){
                    $id = mysql_insert_id(); // ID сохраненного товара
                    $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                    /* базовая картинка */
                    if($_FILES['baseimg']['name']){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки новости! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_info_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/portfolio/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE portfolio_materials SET baseimg = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                   ///миниатюра
                     if($_FILES['baseimg_s']['name']){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg_s']['name'])); // расширение картинки
                        $baseimgName = "{$id}_s.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg_s']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg_s']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg_s']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg_s']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки новости! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_info_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/portfolio/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                                mysql_query("UPDATE portfolio_materials SET baseimg_s = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                    
                    
                    $data = array('info' => 'портфолио добавлено');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
                else{
                    $data = array('info' => 'Ошибка при добавлении портфолио');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
        }
        
        else
        {            
            $name = 'admin/add_portfolio';
            $data = array('info' => 'Вы не правильно заполнили поля');
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/add_portfolio';
        $data = array('info' => '<h3 style="color:green;text-align:center;">Добавление элементов портфолио</h3>');
        $this->display_lib->admin_page($data,$name);            
    }  
}    

public function portfolio_listok()
{
      $this->auth_lib->check_admin();
      $data['portfolio_list'] = $this->materials_model->get_all('portfolio_materials');
      $data['info'] = 'Портфолио доступные для редактирования'; 
      $name = 'admin/portfolio_listok';
      $this->display_lib->admin_page($data,$name);   
}

//Редактирование материала (форма со значениями, подставившимися из базы) 
public function edit_portfolio($id = '')
{
  $this->auth_lib->check_admin();   
  $this->load->helper('checkbox');
    //Формируем массив одного материала для отображения в форме               редактирования
    $data = array();
    $data = $this->materials_model->get_info_materials($id, 'portfolio_materials');

    //Если массив пуст
    if (empty($data))
    {
        $data['info'] = 'Такого материала не существует';
        $this->display_lib->admin_info_page($data);                   
    }

    else
    {   $data ['info'] = '';
        //Получаем дополнительно значения полей section0 - section3 
        //$data['material_img'] = $this->materials_model->get_img($id, 'portfolio_materials');
        $data['names'] = $this->materials_model->get_section_values($id, 'portfolio_materials'); 
        $name = 'admin/edit_portfolio';    
        $this->display_lib->admin_page($data,$name);
    }
}

public function update_portfolio($id = '')
{
     $this->auth_lib->check_admin();
     $this->load->helper('checkbox');
     //$this->load->helper('tinymce');
   
   //Если нажата кнопка "Обновить категорию"    
   if (isset($_POST['edit_portfolio']))
   {
       $this->form_validation->set_rules($this->administrations_model->add_portfolio_rules);
		
	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем категорию
           $this->administrations_model->update($id);
                 /* базовая картинка */
                  $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                   if(isset($_FILES['baseimg']['name'])){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допусти расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/portfolio/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE portfolio_materials SET baseimg = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
           
           ///миниатюра
                     if(isset($_FILES['baseimg_s']['name'])){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg_s']['name'])); // расширение картинки
                        $baseimgName = "{$id}_s.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg_s']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg_s']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg_s']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg_s']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/portfolio/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                                mysql_query("UPDATE portfolio_materials SET baseimg_s = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                    
                    
           $data ['info'] = 'Категория обновлена';
           $name = 'admin/info';
           $this->display_lib->admin_page($data, $name);
       } 
       
       else
       {    
        $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'portfolio_materials');
            $data ['info'] = '';
            //Получаем дополнительно значения полей section0 - section3
            $data['names'] = $this->materials_model->get_section_values($id, 'portfolio_materials');                  
            $name = 'admin/edit_portfolio';
            
            $this->display_lib->admin_page($data,$name);			
       }
   }
       
   //Не нажата кнопка "Обновить категорию"
   else
   {
            $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'portfolio_materials');
            
            //Получаем дополнительно значения полей section0 - section3
            $data['names'] = $this->materials_model->get_section_values($id, 'portfolio_materials');    
            $data ['info'] = 'Категория не была обновлена, так как вы не нажали кнопку "Обновить категорию"';
            $name = 'admin/edit_portfolio';
            $this->display_lib->admin_page($data, $name);
   }
}

/* ===Ajax - удаление картинки портфолио=== */
public function delete_img_portfolio()
{
   $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['img']){
 
            $portfolio_id = (int)$_POST['portfolio_id'];
            $img = $_POST['img'];
            $rel = (int)$_POST['rel'];
    
    if(!$rel){ //попадает 0, а rel="0" - это миниатюра !!!

        //обновляем базу
        $query = "UPDATE portfolio_materials SET baseimg_s = '' WHERE id = $portfolio_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){

        //удаляем ее из сервера если удаляется базовая картинка
            $uploaddir = "./userfiles/portfolio/$img";
            @unlink($uploaddir);
            $res = '<input type="file" name="baseimg_s" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }else{
    //обновляем базу
        $query = "UPDATE portfolio_materials SET baseimg = '' WHERE id = $portfolio_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){

        //удаляем ее из сервера если удаляется базовая картинка
            $uploaddir = "./userfiles/portfolio/$img";
            @unlink($uploaddir);
            $res = '<input type="file" name="baseimg" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }

    } 
}

/* ===Ajax - удаление всего материала портфолио=== */
public function delete_portfplio()
{
    $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['portfolio_id']){
        $img = $_POST['portfolio_id']; 

    $portfolio_id = (int)$_POST['portfolio_id'];
    
    if($portfolio_id){ 
        
        $query = "DELETE FROM `portfolio_materials` WHERE id = $portfolio_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
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

//Добавление материала 
public function add_banner()
{
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['add_banner']))
    {      
        $this->form_validation->set_rules($this->administrations_model->add_banner_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->administrations_model->add_banner();
            
            
                   if(mysql_affected_rows() > 0){
                    $id = mysql_insert_id(); // ID сохраненного товара
                    $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                    /* базовая картинка */
                    if($_FILES['baseimg']['name']){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки новости! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_info_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/banner/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE partners SET img = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
      
                    $data = array('info' => 'партнер добавлен');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
                else{
                    $data = array('info' => 'Ошибка при добавлении партнеров');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
        }
        
        else
        {            
            $name = 'admin/add_banner';
            $data = array('info' => 'Вы не правильно заполнили поля');
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/add_banner';
        $data = array('info' => '<h3 style="color:green;text-align:center;">Добавление партнеров</h3>');
        $this->display_lib->admin_page($data,$name);            
    }  
}    

public function banner_listok()
{
      $this->auth_lib->check_admin();
      $data['banner_list'] = $this->materials_model->get_all_partners('partners');
      $data['info'] = 'Партнеры доступные для редактирования'; 
      $name = 'admin/banner_listok';
      $this->display_lib->admin_page($data,$name);   
}


//Редактирование материала (форма со значениями, подставившимися из базы) 
public function edit_banner($id = '')
{
  $this->auth_lib->check_admin();   
    //Формируем массив одного материала для отображения в форме               редактирования
    $data = array();
    
    //ЭТА ФУНКЦИЯ УНИВЕРСАЛЬНА - как для портфолио так и для партнеров
    $data = $this->materials_model->get_info_materials($id, 'partners');

    //Если массив пуст
    if (empty($data))
    {
        $data['info'] = 'Такого материала не существует';
        $this->display_lib->admin_info_page($data);                   
    }

    else
    {   $data ['info'] = '';
        //$data['names'] = $this->materials_model->get_section_values($id); 
        $name = 'admin/edit_banner';    
        $this->display_lib->admin_page($data,$name);
    }
}


public function update_banner($id = '')
{
     $this->auth_lib->check_admin();
   //Если нажата кнопка "Обновить категорию"    
   if (isset($_POST['edit_banner']))
   {
       $this->form_validation->set_rules($this->administrations_model->add_banner_rules);
		
	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем категорию
           $this->administrations_model->update_banner($id);
                 /* базовая картинка */
                  $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                   if(isset($_FILES['baseimg']['name'])){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допусти расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/banner/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE partners SET img = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                    
                    
           $data ['info'] = 'Партнер обновлен';
           $name = 'admin/info';
           $this->display_lib->admin_page($data, $name);
       } 
       
       else
       {    
        $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'partners');
            $data ['info'] = '';
            //Получаем дополнительно значения полей section0 - section3
            //$data['names'] = $this->materials_model->get_section_values($id);                  
            $name = 'admin/edit_banner';
            
            $this->display_lib->admin_page($data,$name);			
       }
   }
       
   //Не нажата кнопка "Обновить категорию"
   else
   {
            $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'partners');
            
            //Получаем дополнительно значения полей section0 - section3
            //$data['names'] = $this->materials_model->get_section_values($id);    
            $data ['info'] = 'Партнер не был обновлен, так как вы не нажали кнопку "Обновить"';
            $name = 'admin/edit_banner';
            $this->display_lib->admin_page($data, $name);
   }
}



/* ===Ajax - удаление картинки партнеров=== */
public function delete_img_banner()
{
   $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['img']){
 
            $banner_id = (int)$_POST['banner_id'];
            $img = $_POST['img'];
            $rel = (int)$_POST['rel'];
    
    if(!$rel){
        
            $res = false;
            exit($res);
            
    }else{
    //обновляем базу
        $query = "UPDATE partners SET img = '' WHERE id = $banner_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){

        //удаляем ее из сервера если удаляется базовая картинка
            $uploaddir = "./userfiles/banner/$img";
            @unlink($uploaddir);
            $res = '<input type="file" name="baseimg" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }

    } 
}


/* ===Ajax - удаление всего материала партнеров=== */
public function delete_banner()
{
    $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['banner_id']){
        $img = $_POST['banner_id']; 

    $banner_id = (int)$_POST['banner_id'];
    
    if($banner_id){ 
        
        $query = "DELETE FROM `partners` WHERE id = $banner_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
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


//Добавление материала магазина
public function add_shop()
{
    $this->auth_lib->check_admin();
    //Если нажата кнопка "Добавить материал"  
    if (isset($_POST['add_shop']))
    {      
        $this->form_validation->set_rules($this->administrations_model->add_shop_rules);
		
     	if ($this->form_validation->run() == TRUE)
        {  
            //Добавляем новый материал
            $this->administrations_model->add_shop();
            
            
                   if(mysql_affected_rows() > 0){
                    $id = mysql_insert_id(); // ID сохраненного товара
                    $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                    /* базовая картинка */
                    if($_FILES['baseimg']['name']){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки новости! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_info_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/shop/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE shop_materials SET baseimg = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                   ///миниатюра
                     if($_FILES['baseimg_s']['name']){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg_s']['name'])); // расширение картинки
                        $baseimgName = "{$id}_s.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg_s']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg_s']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg_s']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg_s']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        if(!empty($error)){
                            
                                $data = array('info' => 'Ошибка при загрузке картинки новости! <br />'.$error);
                                $name = 'admin/info';
                                $this->display_lib->admin_info_page($data,$name);
                        }
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/shop/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                                mysql_query("UPDATE shop_materials SET baseimg_s = '$baseimgName' WHERE id = $id");
                            }else{
                                
                                $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                                $name = 'admin/info';
                                $this->display_lib->admin_page($data,$name);
                            }
                        }
                    }
                    
                    
                    $data = array('info' => 'элемент магазина добавлен');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
                else{
                    $data = array('info' => 'Ошибка при добавлении элемента магазина');
                    $name = 'admin/info';
                    $this->display_lib->admin_page($data,$name);
                }
        }
        
        else
        {            
            $name = 'admin/add_shop';
            $data = array('info' => 'Вы не правильно заполнили поля');
            // Передаем пустой массив data так как того требует функция admin_page
            $this->display_lib->admin_page($data,$name); 			
        }
    }  
      
    //Если не нажата кнопка "Добавить материал", выводим пустую форму
    else
    {    
        $name = 'admin/add_shop';
        $data = array('info' => '<h3 style="color:green;text-align:center;">Добавление элементов магазина</h3>');
        $this->display_lib->admin_page($data,$name);            
    }  
}        


public function shop_listok()
{
      $this->auth_lib->check_admin();
      $data['shop_list1'] = $this->materials_model->get_all_shop('`category` = "shop_diz_sait" OR `category` = "shop_diz_vizitka" OR `category` = "shop_diz_listovka" OR `category` = "shop_diz_priglasitelnie" OR `category` = "shop_diz_otkritki"');
      $data['shop_list2'] = $this->materials_model->get_all_shop('`category` = "shop_pp_nakleyka" OR `category` = "shop_pp_magnit" OR `category` = "shop_pp_tarelki" OR `category` = "shop_pp_podushki" OR `category` = "shop_pp_krujki"');
      $data['shop_list3'] = $this->materials_model->get_all_shop('`category` = "shop_pos_other" OR `category` = "shop_pos_aks_for_sale" OR `category` = "shop_pos_tablichki" OR `category` = "shop_pos_beydj" OR `category` = "shop_pos_info_stend"');
      $data['shop_list4'] = $this->materials_model->get_all_shop('`category` = "shop_reklama_oborud_shtender" OR `category` = "shop_reklama_oborud_flagshtok" OR `category` = "shop_reklama_oborud_poster_ramka" OR `category` = "shop_reklama_oborud_br_stoyki" OR `category` = "shop_reklama_oborud_komplekt_for_pop_up" OR `category` = "shop_reklama_oborud_pop_up_stend" OR `category` = "shop_reklama_oborud_x_banner" OR `category` = "shop_reklama_oborud_roll_stend"');
      $data['shop_list5'] = $this->materials_model->get_all_shop('`category` = "shop_akvarium"');
      $data['shop_list6'] = $this->materials_model->get_all_shop('`category` = "shop_prazdnik_bloknot" OR `category` = "shop_prazdnik_kalendar" OR `category` = "shop_prazdnik_suvenir"');
      $data['info'] = 'Материалы доступные для редактирования'; 
      $name = 'admin/shop_listok';
      $this->display_lib->admin_page($data,$name);   
}

//Редактирование материала (форма со значениями, подставившимися из базы) 
public function edit_shop($id = '')
{
  $this->auth_lib->check_admin();  
  $this->load->helper('checkbox'); 
    //Формируем массив одного материала для отображения в форме               редактирования
    $data = array();
    
    //ЭТА ФУНКЦИЯ УНИВЕРСАЛЬНА - как для портфолио так и для партнеров
    $data = $this->materials_model->get_info_materials($id, 'shop_materials');

    //Если массив пуст
    if (empty($data))
    {
        $data['info'] = 'Такого материала не существует';
        $name = 'admin/info';
        $this->display_lib->admin_page($data,$name);                   
    }

    else
    {   $data ['info'] = '';
        $data['names'] = $this->materials_model->get_section_values($id, 'shop_materials'); 
        $name = 'admin/edit_shop';    
        $this->display_lib->admin_page($data,$name);
    }
}


public function update_shop($id = '')
{
     $this->auth_lib->check_admin();
     $this->load->helper('checkbox');
   //Если нажата кнопка "Обновить категорию"    
   if (isset($_POST['edit_shop']))
   {
       $this->form_validation->set_rules($this->administrations_model->add_shop_rules);
		
	   if ($this->form_validation->run() == TRUE)
       {        
           //Обновляем категорию
           $this->administrations_model->update_shop($id);
                 /* базовая картинка */
                  $types = array("image/gif", "image/png", "image/jpeg", "image/pjpeg", "image/x-png"); // массив допустимых расширений
                   if(isset($_FILES['baseimg']['name'])){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg']['name'])); // расширение картинки
                        $baseimgName = "{$id}.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        //if(!in_array($baseimgType, $types)) $error .= "Допусти расширения - .gif, .jpg, .png <br />";
                        //if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        //if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        //if(!empty($error)){
                            
                       //         $data = array('info' => 'Ошибка при загрузке картинки! <br />'.$error);
                        //        $name = 'admin/info';
                        //        $this->display_lib->admin_page($data,$name);
                        //}
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/shop/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                               //$this->news_model->resize($uploaddir, "./userfiles/news/$baseimgName", 100, 100, $baseimgExt);
                                //@unlink($uploaddir);
                                mysql_query("UPDATE shop_materials SET baseimg = '$baseimgName' WHERE id = $id");
                            }
                            //else{
                                
                             //   $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                             //   $name = 'admin/info';
                             //   $this->display_lib->admin_page($data,$name);
                            //}
                        }
                    }
                    ///миниатюра
                          if(isset($_FILES['baseimg_s']['name'])){
                        $baseimgExt = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $_FILES['baseimg_s']['name'])); // расширение картинки
                        $baseimgName = "{$id}_s.{$baseimgExt}"; // новое имя картинки
                        $baseimgTmpName = $_FILES['baseimg_s']['tmp_name']; // временное имя файла
                        $baseimgSize = $_FILES['baseimg_s']['size']; // вес файла
                        $baseimgType = $_FILES['baseimg_s']['type']; // тип файла
                        $baseimgError = $_FILES['baseimg_s']['error']; // 0 - OK, иначе - ошибка
                        $error = "";
                        
                        //if(!in_array($baseimgType, $types)) $error .= "Допустимые расширения - .gif, .jpg, .png <br />";
                        //if($baseimgSize > SIZE) $error .= "Максимальный вес файла - 1 Мб";
                        //if($baseimgError) $error .= "Ошибка при загрузке файла. Возможно, файл слишком большой";
                        
                        //if(!empty($error)){
                            
                        //        $data = array('info' => 'Ошибка при загрузке картинки! <br />'.$error);
                        //        $name = 'admin/info';
                        //        $this->display_lib->admin_page($data,$name);
                        //}
                        
                        // если нет ошибок
                        if(empty($error)){
                            $uploaddir = "./userfiles/shop/$baseimgName" ;
                            if(@move_uploaded_file($baseimgTmpName, $uploaddir)){
                                mysql_query("UPDATE shop_materials SET baseimg_s = '$baseimgName' WHERE id = $id");
                            }//else{
                             //   
                              //  $data = array('info' => 'Не удалось переместить загруженную картинку'.$baseimgName.' Проверьте права на папки в каталоге /userfiles/');
                             //   $name = 'admin/info';
                             //   $this->display_lib->admin_page($data,$name);
                           // }
                        }
                    }
                    
           $data ['info'] = 'Магазин обновлен';
           $name = 'admin/info';
           $this->display_lib->admin_page($data, $name);
       } 
       
       else
       {    
            $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'shop_materials');
            $data ['info'] = '';
            //Получаем дополнительно значения полей section0 - section3
            $data['names'] = $this->materials_model->get_section_values($id, 'shop_materials');                  
            $name = 'admin/edit_shop';
            
            $this->display_lib->admin_page($data,$name);			
       }
   }
       
   //Не нажата кнопка "Обновить категорию"
   else
   {
            $data = array();
            //Формируем массив с данными о категории для подстановки в поля формы (те, что не прошли                   валидацию, берутся из базы, а те, что прошли - из массива POST)
            $data = $this->materials_model->get_info_materials($id, 'shop_materials');
            
            //Получаем дополнительно значения полей section0 - section3
            $data['names'] = $this->materials_model->get_section_values($id, 'shop_materials');    
            $data ['info'] = 'Магазин не был обновлен, так как вы не нажали кнопку "Обновить"';
            $name = 'admin/edit_shop';
            $this->display_lib->admin_page($data, $name);
   }
}

/* ===Ajax - удаление картинки портфолио=== */
public function delete_img_shop()
{
   $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['img']){
 
            $shop_id = (int)$_POST['shop_id'];
            $img = $_POST['img'];
            $rel = (int)$_POST['rel'];
    
    if(!$rel){ //попадает 0, а rel="0" - это миниатюра !!!

        //обновляем базу
        $query = "UPDATE shop_materials SET baseimg_s = '' WHERE id = $shop_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){

        //удаляем ее из сервера если удаляется базовая картинка
            $uploaddir = "./userfiles/shop/$img";
            @unlink($uploaddir);
            $res = '<input type="file" name="baseimg_s" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }else{
    //обновляем базу
        $query = "UPDATE shop_materials SET baseimg = '' WHERE id = $shop_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){

        //удаляем ее из сервера если удаляется базовая картинка
            $uploaddir = "./userfiles/shop/$img";
            @unlink($uploaddir);
            $res = '<input type="file" name="baseimg" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }

    } 
}

/* ===Ajax - удаление всего материала портфолио=== */
public function delete_shop()
{
    $this->auth_lib->check_admin();
    //Формируем массив одного материала для отображения в форме редактирования
    if($_POST['shop_id']){
        $img = $_POST['shop_id']; 

    $shop_id = (int)$_POST['shop_id'];
    
    if($shop_id){ 
        
        $query = "DELETE FROM `shop_materials` WHERE id = $shop_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
           $res = '<center><input style="margin-top: 15px;" class="btn btn-success btn-block" type = "submit" name = "shop" value = "Удалено успешно"/></center>';
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


public function logout()
{
    //Проверяем, был ли осуществлен вход
    $this->auth_lib->check_admin();//Здесь проверка не так обязательна в принципе
    $this->auth_lib->do_logout();
}

}