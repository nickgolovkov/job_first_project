<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//Проставляет галочки в чекбоксах для тех категорий, к которым относится материал на момент редактирования. 
//Суть в том, что если у нас материал отнесен к категории articles, то он в любом случае имеет категорию section0.
// Если материал отнесен к категории html, то он может иметь категорию section0 или section1 
//(если html - единственная категория, либо если материал относится к одновременно к категориям articles и html)).
// Далее если материал имеет категорию php, то он может иметь категорию section0 или section1 или section2.
// И так далее...

function populate($material_id,$names,$section_name)//
{   
    switch($section_name)
    {    
        case 'diz':        
        if ($names['category'] == 'diz'){echo 'checked';}       
        break;
        
        case 'web':
        if ($names['category'] == 'web'){echo 'checked';}  
        break;
        
        case 'style':
        if ($names['category'] == 'style'){echo 'checked';}  
        break;
        
        case 'advert':
        if ($names['category'] == 'advert'){echo 'checked';}  
        break;  
        
        case 'inet':
        if ($names['category'] == 'inet'){echo 'checked';}  
        break; 
        
        case 'happy':
       if ($names['category'] == 'happy'){echo 'checked';}  
        break; 
        
        case 's_print':
        if ($names['category'] == 's_print'){echo 'checked';}  
        break;
        
        case 't_print':
        if ($names['category'] == 't_print'){echo 'checked';}  
        break; 
        
        case 'advert_materials':
        if ($names['category'] == 'advert_materials'){echo 'checked';}
        break;
        
        case 'shop_diz_sait':
        if ($names['category'] == 'shop_diz_sait'){echo 'checked';}
        break;
        
        case 'shop_diz_vizitka':
        if ($names['category'] == 'shop_diz_vizitka'){echo 'checked';}
        break;
        
        case 'shop_diz_listovka':
        if ($names['category'] == 'shop_diz_listovka'){echo 'checked';}
        break;
        
        case 'shop_diz_priglasitelnie':
        if ($names['category'] == 'shop_diz_priglasitelnie'){echo 'checked';}
        break;
        
        case 'shop_diz_otkritki':
        if ($names['category'] == 'shop_diz_otkritki'){echo 'checked';}
        break;
        
        case 'shop_pp_krujki':
        if ($names['category'] == 'shop_pp_krujki'){echo 'checked';}
        break;
        
        case 'shop_pp_podushki':
        if ($names['category'] == 'shop_pp_podushki'){echo 'checked';}
        break;
        
        case 'shop_pp_tarelki':
        if ($names['category'] == 'shop_pp_tarelki'){echo 'checked';}
        break;
        
        case 'shop_pp_magnit':
        if ($names['category'] == 'shop_pp_magnit'){echo 'checked';}
        break;
        
        case 'shop_pp_nakleyka':
        if ($names['category'] == 'shop_pp_nakleyka'){echo 'checked';}
        break;
        
        case 'shop_pos_info_stend':
        if ($names['category'] == 'shop_pos_info_stend'){echo 'checked';}
        break;
        
        case 'shop_pos_beydj':
        if ($names['category'] == 'shop_pos_beydj'){echo 'checked';}
        break;
        
        case 'shop_pos_tablichki':
        if ($names['category'] == 'shop_pos_tablichki'){echo 'checked';}
        break;
        
        case 'shop_pos_aks_for_sale':
        if ($names['category'] == 'shop_pos_aks_for_sale'){echo 'checked';}
        break;
        
        case 'shop_pos_other':
        if ($names['category'] == 'shop_pos_other'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_roll_stend':
        if ($names['category'] == 'shop_reklama_oborud_roll_stend'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_x_banner':
        if ($names['category'] == 'shop_reklama_oborud_x_banner'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_pop_up_stend':
        if ($names['category'] == 'shop_reklama_oborud_pop_up_stend'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_komplekt_for_pop_up':
        if ($names['category'] == 'shop_reklama_oborud_komplekt_for_pop_up'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_br_stoyki':
        if ($names['category'] == 'shop_reklama_oborud_br_stoyki'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_poster_ramka':
        if ($names['category'] == 'shop_reklama_oborud_poster_ramka'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_flagshtok':
        if ($names['category'] == 'shop_reklama_oborud_flagshtok'){echo 'checked';}
        break;
        
        case 'shop_reklama_oborud_shtender':
        if ($names['category'] == 'shop_reklama_oborud_shtender'){echo 'checked';}
        break;
        
        case 'shop_akvarium':
        if ($names['category'] == 'shop_akvarium'){echo 'checked';}
        break;
        
        case 'shop_prazdnik_bloknot':
        if ($names['category'] == 'shop_prazdnik_bloknot'){echo 'checked';}
        break;
        
        case 'shop_prazdnik_kalendar':
        if ($names['category'] == 'shop_prazdnik_kalendar'){echo 'checked';}
        break;
        
        case 'shop_prazdnik_suvenir':
        if ($names['category'] == 'shop_prazdnik_suvenir'){echo 'checked';}
        break;
    }     
}
?>