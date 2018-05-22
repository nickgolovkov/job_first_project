<div id="content" style=" padding-top: 46px;">
    
<?= $info;?>
            <form action = "<?=base_url()."administration/edit_page/$page_id";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 70%;">
          <tr>
              <td>Описание<br />
                  <input size="115" type="text" name="description" value="<?=set_value('description', $description);?>"><br />
                        <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('description');?></span>
              </td>
           </tr>
           <tr>
              <td>Ключевые слова<br />
                  <input size="115" type="text" name="keywords" value="<?=set_value('keywords', $keywords);?>"><br />
                        <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('keywords');?></span>
              </td>
           </tr>
            <tr>
              <td>Название<br />
                  <input size="115" type="text" name="title" value="<?=set_value('title', $title);?>"><br />
                        <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('title');?></span>
              </td>
           </tr>
           <tr>
              <td>Текст на странице<br /><br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('main_texts');?></span>
                 <textarea id="editor1" name="main_texts" cols="150" rows="20"><?=set_value('main_texts', $main_texts);?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor1' );
                    </script><br /><br />
              </td>
           </tr>
  
             <tr><td colspan="2"><center><input type = "submit" name = "edit_page_button" value = "Обновить страницу"></center></td></tr>
           <tr>
           <td colspan="2"><center><a href="<?=base_url();?>administration">Вернуться на главную страницу админки</a></center></td>
           </tr>
          </table></center> 
                
        </form>
    
    </div>