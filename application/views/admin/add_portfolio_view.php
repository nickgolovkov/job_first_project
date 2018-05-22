
<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">
           <form action = "<?=base_url()."administration/add_portfolio";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 80%;margin-top: 55px;" >
                <tr>
                    <th>Название<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('title');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="title" maxlength="35" popover-trigger="focus" value="<?=set_value('title');?>"/><br />
                    </th>
                </tr>
                
                <tr>
                    <td class="label" style="color: black;">Страниа<br />
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "diz" <?=set_checkbox('category','diz')?>/>Дизайн<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "web" <?=set_checkbox('category','web')?>/>Создание сайтов<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "style" <?=set_checkbox('category','style')?>/>Фирменный стиль<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "advert" <?=set_checkbox('category','advert')?>/>Наружная реклама<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "inet" <?=set_checkbox('category','inet')?>/>Интернет реклама<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "happy" <?=set_checkbox('category','happy')?>/>Праздничная продукция<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "s_print" <?=set_checkbox('category','s_print')?>/>Широкоформатная печать<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "t_print" <?=set_checkbox('category','t_print')?>/>Цифровая печать<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "advert_materials" <?=set_checkbox('category','advert_materials')?>/>Рекламное оборудование<br/>
                    </td>
                 </tr>
                
                <tr >
                    <th style="padding-bottom: 15px;">Фото-миниатюра (<strong>240 пикселей на 170 пикселей.</strong>)<br />
                    <input type="file" name="baseimg_s" /></th>
                </tr>
                <tr >
                    <th style="padding-bottom: 15px;">Фото-полное (<strong>не более 950px в ширину.</strong>)<br />
                    <input type="file" name="baseimg" /></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input style="margin-top: 15px;" class="btn btn-success btn-block" type = "submit" name = "add_portfolio" value = "Добавить в портфолио"/>
                        </center>
                    </td>
                </tr>
                   <tr>
                   <td style="padding-top: 10px; padding-bottom: 25px;" colspan="2"><center><a class="btn btn-w-md btn-info btn-direction btn-down" href="<?=base_url();?>administration">Вернуться на главную страницу админки</a></center></td>
                   </tr>
            </table>
            </center> 
                
        </form>
</div></div></div></section></div>
<script src="<?=base_url();?>js/my.js"></script>    
<script src="<?=base_url();?>js/vendor.js"></script>
<script src="<?=base_url();?>js/appp.js"></script><!---->
<script src="<?=base_url();?>js/ui.js"></script>
</body></html>