<section id="content" class="content-container ainmate-scale-up">
<div class="page page-dashboard ng-scope" data-ng-controller="DashboardCtrl">

 <div class="row">
        <div class="col-md-12">


<?php foreach ($portfolio_list as $item):?>
<div style="float: left;margin-left: 10px;width: 290px;" class="alert ng-isolate-scope alert-success alert-dismissable" role="alert"  type="success" >
    <button class="close del_portfolio" name="<?=$item['id'];?>" type="button" >
        <span aria-hidden="true">×</span>
        <span class="sr-only">Close</span>
    </button>
    <div class="material_<?=$item['id'];?>" ng-transclude="">
        <span class="ng-binding ng-scope"><a href="<?=base_url();?>administration/edit_portfolio/<?=$item['id'];?>"><?=$item['title'];?></a></span>
    </div>
</div>
<?php endforeach;?>
    

 <div class="col-md-12">
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