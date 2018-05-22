<div id="content" style=" padding-top: 46px;">
            <form action = "<?=base_url()."administration/edit_contakt";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 70%;">
       
           <tr>
              <td>Почтовый адрес<br /><br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('main_texts');?></span>
                 <textarea id="editor1" name="main_texts" cols="150" rows="20"><?=set_value('main_texts', $main_texts);?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor1' );
                    </script><br /><br />
              </td>
           </tr>
            <tr>
              <td>Реквизиты<br /><br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('main_texts1');?></span>
                 <textarea id="editor2" name="main_texts1" cols="150" rows="20"><?=set_value('main_texts1', $main_texts1);?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor2' );
                    </script><br /><br />
              </td>
           </tr>
           <tr>
              <td>Карта<br /><br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('main_texts2');?></span>
                 <textarea  name="main_texts2" cols="100" rows="20"><?=set_value('main_texts2', $main_texts2);?></textarea>
                  <br /><br />
              </td>
           </tr>
             <tr><td colspan="2"><center><input type = "submit" name = "edit_contakt" value = "Обновить страницу контактов"/></center></td></tr>
           <tr>
           <td colspan="2"><center><a href="<?=base_url();?>administration">Вернуться на главную страницу админки</a></center></td>
           </tr>
          </table></center> 
                
        </form>
    
    </div>