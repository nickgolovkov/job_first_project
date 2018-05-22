
<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">
           <form action = "<?=base_url()."administration/add_shop";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 98%;margin-top: 55px;" >
                <tr>
                    <th>Название<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('title');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="title" maxlength="35" popover-trigger="focus" value="<?=set_value('title');?>"/><br />
                    </th>
                </tr>
                
                <tr>
                    <th>Описание<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('text');?></span>
                    <textarea id="editor1" name="text" cols="150" rows="20"><?=set_value('text');?></textarea>
                  <script type="text/javascript">
    	               CKEDITOR.replace( 'editor1' );
                    </script>
                    
                    </th>
                </tr>
                <tr>
                    <th>Стоимость<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('price');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="price" maxlength="35" popover-trigger="focus" value="<?=set_value('price');?>"/><br />
                    
                    </th>
                </tr>
                <tr>
                  <td >  
                            <div class="col-md-12">
                            <div class="ui-tab-container ui-tab-success">
                                <tabset class="ui-tab">
                                    <tab heading="Дизайн">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_diz_sait" <?=set_checkbox('category','shpo_diz_sait')?>/>Сайты<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_diz_vizitka" <?=set_checkbox('category','shpo_diz_vizitka')?>/>Визитки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_diz_listovka" <?=set_checkbox('category','shop_diz_listovka')?>/>Листовки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_diz_priglasitelnie" <?=set_checkbox('category','shop_diz_priglasitelnie')?>/>Пригласительные<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_diz_otkritki" <?=set_checkbox('category','shop_diz_otkritki')?>/>Открытки<br/>
                                        
                                    </tab>
                                    <tab heading="Печатная продукция">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pp_krujki" <?=set_checkbox('category','shop_pp_krujki')?>/>Кружки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pp_podushki" <?=set_checkbox('category','shop_pp_podushki')?>/>Подушки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pp_tarelki" <?=set_checkbox('category','shop_pp_tarelki')?>/>Тарелки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pp_magnit" <?=set_checkbox('category','shop_pp_magnit')?>/>Магниты<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pp_nakleyka" <?=set_checkbox('category','shop_pp_nakleyka')?>/>Наклейки<br/>
                                    </tab>
                                    <tab heading="POS-материалы">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pos_info_stend" <?=set_checkbox('category','shop_pos_info_stend')?>/>Информационные стенды<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pos_beydj" <?=set_checkbox('category','shop_pos_beydj')?>/>Бейджи<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pos_tablichki" <?=set_checkbox('category','shop_pos_tablichki')?>/>Таблички<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pos_aks_for_sale" <?=set_checkbox('category','shop_pos_aks_for_sale')?>/>Аксессуары для торговли<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_pos_other" <?=set_checkbox('category','shop_pos_other')?>/>Другое<br/>
                                    </tab>
                                    <tab heading="Рекламное оборудование">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_roll_stend" <?=set_checkbox('category','shop_reklama_oborud_roll_stend')?>/>Ролл-стенды<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_x_banner" <?=set_checkbox('category','shop_reklama_oborud_x_banner')?>/>Х-баннеры<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_pop_up_stend" <?=set_checkbox('category','shop_reklama_oborud_pop_up_stend')?>/>Pop-up стенды с стоийки для през-ий<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_komplekt_for_pop_up" <?=set_checkbox('category','shop_reklama_oborud_komplekt_for_pop_up')?>/>Комплектующие для pop-up стендов<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_br_stoyki" <?=set_checkbox('category','shop_reklama_oborud_br_stoyki')?>/>Брошюрные стойки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_poster_ramka" <?=set_checkbox('category','shop_reklama_oborud_poster_ramka')?>/>Настенные постерные рамки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_flagshtok" <?=set_checkbox('category','shop_reklama_oborud_flagshtok')?>/>Флагштоки<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_reklama_oborud_shtender" <?=set_checkbox('category','shop_reklama_oborud_shtender')?>/>Штендеры<br/>
                                   
                                    </tab>
                                    <tab heading="Праздник">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_prazdnik_bloknot" <?=set_checkbox('category','shop_prazdnik_bloknot')?>/>Блокноты<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_prazdnik_kalendar" <?=set_checkbox('category','shop_prazdnik_kalendar')?>/>Календари<br/>
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_prazdnik_suvenir" <?=set_checkbox('category','shop_prazdnik_suvenir')?>/>Сувениры<br/>
                                     
                                    </tab>
                                    <tab heading="Аквариумы">
                                        <input style="width: 25px;" id="check" type = "checkbox" name = "category"  value = "shop_akvarium" <?=set_checkbox('category','shop_akvarium')?>/>Аквариумы<br/>
                                    </tab>
                                </tabset>
                            </div>                    
                        </div>
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
                            <input style="margin-top: 15px;" class="btn btn-success btn-block" type = "submit" name = "add_shop" value = "Добавить в магазин"/>
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