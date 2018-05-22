
<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">
           <form action = "<?=base_url()."administration/add_banner";?>" method="post" enctype="multipart/form-data">
          <center> <table style="width: 80%;margin-top: 55px;" >
                <tr>
                    <th>Название<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('alt_text');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="alt_text" popover-trigger="focus" value="<?=set_value('alt_text');?>"/><br />
                    </th>
                </tr>
                <tr>
                    <th>ссылка на сайт (!!! формат ввода: ra-kontur.by !!!!!)<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('link');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="link" popover-trigger="focus" value="<?=set_value('link');?>"/><br />
                    </th>
                </tr>
                <tr >
                    <th style="padding-bottom: 15px;">Логотип партнера(<strong>не более 90px в высоту.</strong>)<br />
                    <input type="file" name="baseimg" /></th>
                </tr>
                <tr>
                    <th>ширина в пикселях(например: 125)<br />
                    <span style="color: red;font-weight: bolder;" class="show_error"><?=form_error('width');?></span>
                    <input class="form-control ng-scope" size="50" type="text" name="width" popover-trigger="focus" value="<?=set_value('width');?>"/><br />
                    </th>
                </tr>
                <tr>
                    <td>
                        <center>
                            <input style="margin-top: 15px;" class="btn btn-success btn-block" type = "submit" name = "add_banner" value = "Добавить в партнеры"/>
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