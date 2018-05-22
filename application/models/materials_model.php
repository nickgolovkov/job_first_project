<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Materials_model extends Crud
{

public $table = 'materials'; // имя таблицы
public $idkey = 'material_id'; 

// правила для добавления нового материала
public $edit_rules = array
(
    array
    (
      'field' => 'short_text',
      'label' => 'Краткое описание',
      'rules' => 'required|max_length[23]'
    ),
    array
    (
      'field' => 'brand',
      'label' => 'Категория',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'main_text',
      'label' => 'Полное описание',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'phone',
      'label' => 'Телефон',
      'rules' => 'required|max_length[15]|numeric'
    ),
    array
    (
      'field' => 'price',
      'label' => 'Цена',
      'rules' => 'required|numeric'
    )
);

public $edit_rules_admin = array
(
    array
    (
      'field' => 'short_text',
      'label' => 'Краткое описание',
      'rules' => 'required|max_length[23]'
    ),
    array
    (
      'field' => 'brand',
      'label' => 'Категория',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'main_text',
      'label' => 'Полное описание',
      'rules' => 'required'
    ),
    array
    (
      'field' => 'phone',
      'label' => 'Телефон',
      'rules' => 'required|max_length[15]|numeric'
    ),
    array
    (
      'field' => 'price',
      'label' => 'Цена',
      'rules' => 'numeric'
    )
);

public $edit_price_rules = array
    (   
       array
       (
         'field' => 'zametka',
         'label' => 'почтовый адрес',
         'rules' => ''
       ),
       array
       (
         'field' => 'gallery',
         'label' => 'фото прайса',
         'rules' => 'required'
       )
    );
    
public function get_info_materials($id, $table)
    {
        $this->db->where('id', $id);
        $query = $this->db->get($table);
        return $query->row_array();
    }
public function get_mat_info($id, $table)
    {
        $this->db->where('category', $id);
        $query = $this->db->get($table);
        return $query->result_array();
    }   

public function delete_img($img)
{  
    $material_id = (int)$_POST['material_id'];
    $img = $_POST['img'];
    $rel = (int)$_POST['rel'];
    
    if(!$rel){ //попадает 0, а rel="0" - это базавая картинка
        // если удаляется базовая картинка
        $uploaddir = "./userfiles/material/$img";
        //удаляем ее из сервера
        @unlink($uploaddir);
        //обновляем базу
        $query = "UPDATE materials SET baseimg_material = 'no_img.jpg' WHERE material_id = $material_id";
        mysql_query($query);
        if(mysql_affected_rows() > 0){
            //$uploaddir = "./img/afisha/$img";
            //@unlink($uploaddir);
            $res = '<input type="file" name="baseimg-material" />';
            exit($res);
        }else{
            $res = false;
            exit($res);
        }
    }else{
        // если удаляется картинка галереи
        $query = "SELECT gallery FROM materials WHERE material_id = $material_id";
        $res = mysql_query($query);
        $row = mysql_fetch_assoc($res);
        // получаем картинки в массив
        $images = explode("|", $row['gallery']);
        foreach($images as $item){
            // пропускаем удаляемую картинку
            if($item == $img) continue;
            // формируем строку с картинками
            if(!isset($galleryfiles)){
                $galleryfiles = $item;
            }else{
                $galleryfiles .= "|$item";
            }
        }
        mysql_query("UPDATE materials SET gallery = '$galleryfiles' WHERE material_id = $material_id");
        if(mysql_affected_rows() > 0){
            $uploaddir = "./userfiles/photos/$img";
            $uploaddirsmall = "./userfiles/thumbs/$img";
            @unlink($uploaddir);
            @unlink($uploaddirsmall);
            $res = 'удалена';
            exit($res);
        }else{
            $res = 'ошибка';
            exit($res);
        }
  }
}
   
   
// Добавление записи
public function update_price($id)
{
     $data = array();  
	     foreach ($this->edit_price_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('material_id',$id);
	 $this->db->update('materials',$data);
} 
  // Добавление записи
public function update($id)
{
     $data = array();  
	     foreach ($this->edit_rules_admin as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);
	     }         
     $this->db->where('material_id',$id);
	 $this->db->update('materials',$data);
}      
public function get_img($obj_id)
    {
        $query = "SELECT * FROM materials WHERE material_id = $obj_id";
        $res = mysql_query($query);
        $material_img = array();
        $material_img = mysql_fetch_assoc($res);
        if($material_img['gallery']){
            $material_img['gallery'] = explode("|", $material_img['gallery']);
        }
        return $material_img;
    }
    
    
public function get_all_material(){
        $this->db->order_by ('material_id','desc');
       $query = $this->db->get('materials');
       return $query->result_array();
}

public function get_all()
    {
        $query = $this->db->query("SELECT * FROM `portfolio_materials`");
        return $query->result_array();
    }   

public function get_all_partners()
    {
        $query = $this->db->query("SELECT * FROM `partners`");
        return $query->result_array();
    } 

public function get_all_shop($category)
    {
        $query = $this->db->query("SELECT * FROM `shop_materials` WHERE $category");
        return $query->result_array();
    }   
//Подсчет количества материалов в конкретной категории
public function count_by($section_id)
{
    $this->db->where ('brand',$section_id);
    return $this->db->count_all_results('materials');
}

//Получение значений, хранящихся в полях section0 - section3 для конкретного материала
public function get_section_values($material_id, $table)
{
    $this->db->where('id',$material_id);
    $this->db->select('category');
    $query = $this->db->get($table);
    return $query->row_array();
}
/* ===Ресайз картинок=== */
public function resize($target, $dest, $wmax, $hmax, $ext){
    /*
    $target - путь к оригинальному файлу
    $dest - путь сохранения обработанного файла
    $wmax - максимальная ширина
    $hmax - максимальная высота
    $ext - расширение файла
    */
    list($w_orig, $h_orig) = getimagesize($target);
    $ratio = $w_orig / $h_orig; // =1 - квадрат, <1 - альбомная, >1 - книжная

    if(($wmax / $hmax) > $ratio){
        $wmax = $hmax * $ratio;
    }else{
        $hmax = $wmax / $ratio;
    }
    
    $img = "";
    // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
    switch($ext){
        case("gif"):
            $img = imagecreatefromgif($target);
            break;
        case("png"):
            $img = imagecreatefrompng($target);
            break;
        default:
            $img = imagecreatefromjpeg($target);    
    }
    $newImg = imagecreatetruecolor($wmax, $hmax); // создаем оболочку для новой картинки
    
    if($ext == "png"){
        imagesavealpha($newImg, true); // сохранение альфа канала
        $transPng = imagecolorallocatealpha($newImg,0,0,0,127); // добавляем прозрачность
        imagefill($newImg, 0, 0, $transPng); // заливка  
    }
    
    imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig); // копируем и ресайзим изображение
    switch($ext){
        case("gif"):
            imagegif($newImg, $dest);
            break;
        case("png"):
            imagepng($newImg, $dest);
            break;
        default:
            imagejpeg($newImg, $dest);    
    }
    imagedestroy($newImg);
}
/* ===Ресайз картинок=== */
};