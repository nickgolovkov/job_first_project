<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">

<div class="ui-tab-container ui-tab-success">
                                <tabset class="ui-tab">
                                <style>.tab-content{overflow: hidden;}.alert-success{border-color: #0006FF;background-color: #EFFB3D;}</style>
                                    <tab heading="Дизайн">
                                        <?php foreach ($shop_list1 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                    <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                    
                                    <tab heading="Печатная продукция">
                                    <?php foreach ($shop_list2 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                    <tab heading="POS-материалы">
                                        <?php foreach ($shop_list3 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                    <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                    <tab heading="Рекламное оборудование">
                                        <?php foreach ($shop_list4 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                    <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                    <tab heading="Праздник">
                                        <?php foreach ($shop_list6 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                    <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                    
                                    <tab heading="Аквариумы">
                                        <?php foreach ($shop_list5 as $item):?>
                                                <div style="float: left;margin-left: 10px;width: 290px;height: 55px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
                                                    <div class="material_<?=$item['id'];?>" ng-transclude="">
                                                        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_shop/<?=$item['id'];?>"><?=$item['title'];?></a></span>
                                                    </div>
                                                </div>
                                    <?php endforeach;?>
                                    </tab>
                                </tabset>
                            </div>          

 <div class="col-md-12" style="margin-top: 50px;">
<center><a class="btn btn-w-md btn-info btn-direction btn-down" href="<?=base_url();?>administration">Вернуться на главную страницу админки</a></center>
</div>
</div></div></div></section>
</div>

  <script src="<?=base_url();?>js/my.js"></script>    
  <script src="<?=base_url();?>js/vendor.js"></script>
  <script src="<?=base_url();?>js/appp.js"></script><!---->
  <script src="<?=base_url();?>js/ui.js"></script>
  </body>
</html>