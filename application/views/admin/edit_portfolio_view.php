
<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">
        <div id="portfolio_id" style="display: none;"><?=$id;?></div>
           <form action = "<?=base_url()."administration/update_portfolio/$id";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 80%;margin-top: 55px;" >
                <tr>
                    <th>Название<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('title');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="title" maxlength="35" popover-trigger="focus" value="<?=set_value('title', $title);?>"/><br />
                    </th>
                </tr>
                
                <tr>
                    <td class="label" style="color: black;">категория<br />
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "diz" <?=populate($id,$names,'diz'); echo set_checkbox('section[]','diz')?>/>Дизайн<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "web" <?=populate($id,$names,'web'); echo set_checkbox('section[]','web')?>/>Создание сайтов<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "style" <?=populate($id,$names,'style'); echo set_checkbox('section[]','style')?>/>Фирменный стиль<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "advert" <?=populate($id,$names,'advert'); echo set_checkbox('section[]','advert')?>/>Наружная реклама<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "inet" <?=populate($id,$names,'inet'); echo set_checkbox('section[]','inet')?>/>Интернет реклама<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "happy" <?=populate($id,$names,'happy'); echo set_checkbox('section[]','happy')?>/>Праздничная продукция<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "s_print" <?=populate($id,$names,'s_print'); echo set_checkbox('section[]','s_print')?>/>Широкоформатная печать<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "t_print" <?=populate($id,$names,'t_print'); echo set_checkbox('section[]','t_print')?>/>Цифровая печать<br/>
                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "advert_materials" <?=populate($id,$names,'advert_materials'); echo set_checkbox('section[]','advert_materials')?>/>Рекламное оборудование<br/>
                   <br /><br /> </td>
                 </tr>
                
                <tr >
                <td>Миниатюра (220px на 170px)<br />
                 <?php  
                   if($baseimg_s != ''){
                            echo '<div id="delimg-img-portfolio-s" style="cursor:pointer;"><img name="baseimg_s"  class="delimg-img-portfolio" rel="0" width="100" src="http://www.ra-kontur.by/userfiles/portfolio/' .$baseimg_s. '" alt="' .$baseimg_s. '"></div>';
                        }else{
                            echo '<div id="delimg-img-portfolio-s"><input type="file" name="baseimg_s" /></div>';
                            }
                ;?></td>
                </tr>
                <tr ><td> Основное фото<br />
                <?php 
                   if($baseimg != ''){
                            echo '<div id="delimg-img-portfolio" style="cursor:pointer;"><img name="baseimg"  class="delimg-img-portfolio" rel="1" width="100" src="http://www.ra-kontur.by/userfiles/portfolio/' .$baseimg. '" alt="' .$baseimg. '"></div>';
                        }else{
                            echo '<div id="delimg-img-portfolio"><input type="file" name="baseimg" /></div>';
                            }
                ;?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <input style="margin-top: 15px;" class="btn btn-success btn-block" type = "submit" name = "edit_portfolio" value = "Редактировать"/>
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