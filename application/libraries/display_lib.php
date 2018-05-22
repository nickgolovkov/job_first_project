<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Display_lib
{
//data - массив с переменными, name - начало имени файла вида    
public function user_page($data,$name)
{
    $CI =& get_instance ();
    $CI->load->view('preheader_view',$data);
    $CI->load->view('menu_view');
    $CI->load->view($name.'_view',$data);
    $CI->load->view('footer_view',$data);        
}
public function user_index_page($data,$name)
{
    $CI =& get_instance ();
    $CI->load->view('preheader_index_view',$data);
    $CI->load->view('menu_view');
    $CI->load->view($name.'_view',$data);
    $CI->load->view('index_footer_view',$data);        
}
public function user_info_page($data,$name)
{
    $CI =& get_instance ();
    $CI->load->view('preheader_view',$data);
    $CI->load->view('header_view');
    $CI->load->view($name.'_view',$data);
    $CI->load->view('footer_view',$data);        
}
public function login_page($data,$name)
{
    $CI =& get_instance ();
    
    $CI->load->view('info_pre_header_view');
    $CI->load->view($name.'_view', $data);        
   
}
public function admin_page($data,$name)
{
    $CI =& get_instance ();
    $CI->load->view('admin/header_new_view',$data);
    $CI->load->view($name.'_view', $data);             
}
}
?>