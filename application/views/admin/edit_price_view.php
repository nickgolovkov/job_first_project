<div id="content" style=" padding-top: 46px;">
            <form action = "<?=base_url()."administration/edit_price/$material_id";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 70%;">
       
            <tr>
              <td>заметки<br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('zametka');?></span>
                 <textarea id="editor1" name="main_texts1" cols="150" rows="20"><?=set_value('zametka', $zametka);?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor1' );
                    </script><br /><br />
              </td>
           </tr>
           <tr>
              <td>фото прайса<br />
                 <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('gallery');?></span>
                 <textarea id="editor2" name="gallery" cols="150" rows="20"><?=set_value('gallery', $gallery);?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor2' );
                    </script><br /><br />
              </td>
           </tr>
             <tr><td colspan="2"><center><input type = "submit" name = "edit_price" value = "Обновить страницу контактов"/></center></td></tr>
           <tr>
           <td colspan="2"><center><a href="<?=base_url();?>administration">Вернуться на главную страницу админки</a></center></td>
           </tr>
          </table></center> 
                
        </form>
    
    </div>
    <script src="<?=base_url();?>js/my.js"></script>    
<script src="<?=base_url();?>js/vendor.js"></script>
<script src="<?=base_url();?>js/appp.js"></script><!---->
<script src="<?=base_url();?>js/ui.js"></script>