<!DOCTYPE html>
<html lang="en">
<head>
<title>Админ зона</title>
<link rel="stylesheet" href="<?=base_url();?>css/fon/bower_components/font-awesome/styles/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/fon/bower_components/weather-icons/styles/weather-icons.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/main.css">
<style>#cke_15, #cke_21, #cke_33, #cke_29, #cke_57, #cke_64{display: none !important;}</style>
<script type="text/javascript" src="<?=base_url();?>js/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="<?=base_url();?>js/ckeditor/ckeditor.js"></script>
  <!--<script src="//cdn.ckeditor.com/4.5.1/full/ckeditor.js"></script>-->
</head>
  <body data-ng-app="app" id="app" class="app" data-custom-page="" data-off-canvas-nav="" data-ng-controller="AppCtrl" data-ng-class=" {'layout-boxed': admin.layout === 'boxed' } ">
        <section id="header" class="header-container" data-ng-class=" {'header-fixed': admin.fixedHeader} " data-ng-controller="HeaderCtrl">
<header class="top-header clearfix">
    <!-- Logo -->
    <div class="logo">
        <a href="http://www.ra-kontur.by/administration">
            
            <span>ra-kontur</span>
        </a>
    </div>
    <div class="menu-button" toggle-off-canvas>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="top-nav">
        <ul class="nav-left list-unstyled">
            <li>
                <a href="#/" data-toggle-nav-collapsed-min
                             class="toggle-min"
                             id="step3"
                             ><i class="fa fa-bars"></i></a>
            </li>
            <li class="dropdown hidden-xs">
                <a href="javascript:;" class="dropdown-toggle" id="step1" data-toggle="dropdown"><i class="fa fa-cogs"></i></a>
                <div class="dropdown-menu with-arrow panel panel-dark admin-options" ui-not-close-on-click>
                    <div class="panel-heading"> Admin Options </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <p>Menu Style</p>
                            <label class="ui-radio"><input name="menu" type="radio" value="vertical" ng-model="admin.menu"><span>Vertical</span></label>
                            <label class="ui-radio"><input name="menu" type="radio" value="horizontal" ng-model="admin.menu"><span>Horizontal</span></label>
                        </li>
                    </ul>
                </div>
            </li>
            <li><h3 style="padding: 0 25px 0 25px;"><?=$info;?></h3></li>
        </ul> 
        <ul class="nav-right pull-right list-unstyled">

            <li class="dropdown text-normal nav-profile">
                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                   <span class="hidden-xs">
                        <span data-i18n="Сечко Олег"></span>
                    </span>
                </a>
                <ul class="dropdown-menu with-arrow pull-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-lock"></i>
                            <span data-i18n="Пароль"></span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.ra-kontur.by/administration/logout">
                            <i class="fa fa-sign-out"></i>
                            <span data-i18n="Выход"></span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
</header></section>

        <div class="main-container">
            <aside id="nav-container" class="nav-container nav-vertical" data-ng-class=" {'nav-fixed': admin.fixedSidebar, 'nav-horizontal': admin.menu === 'horizontal', 'nav-vertical': admin.menu === 'vertical'}">
<div class="nav-wrapper ng-scope">
<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">                  

    <ul id="nav" class="nav ng-scope" data-highlight-active="" data-collapse-nav="" data-slim-scroll="" data-ng-controller="NavCtrl" style="overflow: hidden; width: auto; height: 100%;">
        <li  class="active">
            <a href="http://www.ra-kontur.by/administration"> <i class="fa fa-dashboard"></i><span data-i18n="Главная">Главная</span> </a>
        
        </li>
        <li>
        <a href="#"><i class="fa fa-magic"></i><span data-i18n="Титульник">Титульник</span></a>
           <ul>
                <li><a href="http://www.ra-kontur.by/administration/pages_listok"><i class="fa fa-angle-right"></i><span data-i18n="Редактировать"></span></a></li>
                </ul> 
            </li>
        <li>
            <a href="#"><i class="fa fa-file-text-o"></i><span data-i18n="Портфолио">Портфолио</span></a>
            <ul>
                <li><a href="http://www.ra-kontur.by/administration/add_portfolio"><i class="fa fa-angle-right"></i><span data-i18n="Добавить"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/portfolio_listok"><i class="fa fa-angle-right"></i><span data-i18n="Редактировать"></span></a></li>
                </ul>
            <i class="fa fa-angle-down icon-has-ul-h"></i>
                <i class="fa fa-angle-right icon-has-ul"></i>
        </li>
        <li>
            <a href="#"><i class="fa fa-file-text-o"></i><span data-i18n="Прайс">Прайс</span></a>
            <ul>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_diz"><i class="fa fa-angle-right"></i><span data-i18n="Дизайн"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_web"><i class="fa fa-angle-right"></i><span data-i18n="Создание сайтов"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_style"><i class="fa fa-angle-right"></i><span data-i18n="Фирменный стиль"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_advert"><i class="fa fa-angle-right"></i><span data-i18n="Наружная реклама"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_inet"><i class="fa fa-angle-right"></i><span data-i18n="Инетрнет реклама"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_happy"><i class="fa fa-angle-right"></i><span data-i18n="Праздничная прод."></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_s_print"><i class="fa fa-angle-right"></i><span data-i18n="Широкоформ. печать"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_t_print"><i class="fa fa-angle-right"></i><span data-i18n="Цифровая песать"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/edit_price/price_advert_materials"><i class="fa fa-angle-right"></i><span data-i18n="Рекламное обор-ие"></span></a></li>
                
                
                </ul>
            <i class="fa fa-angle-down icon-has-ul-h"></i>
                <i class="fa fa-angle-right icon-has-ul"></i>
        </li>
       <li>
            <a href="http://www.ra-kontur.by/administration/edit_contakt"><i class="fa fa-flag"></i><span data-i18n="Контакты"></span></a>
            
        </li>
        <li>
            <a href="http://www.ra-kontur.by/administration/sitemap"><i class="fa fa-bar-chart-o"></i><span data-i18n="sitemap"></span></a>
            
        </li>
        <li class="nav-task">
            <a href="http://www.ra-kontur.by/administration/#"><i class="fa fa-tasks"></i><span data-i18n="Банеры"></span></a>
            <ul>
                <li><a href="http://www.ra-kontur.by/administration/add_banner"><i class="fa fa-angle-right"></i><span data-i18n="Добавить"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/banner_listok"><i class="fa fa-angle-right"></i><span data-i18n="Редактировать"></span></a></li>
                </ul>
            <i class="fa fa-angle-down icon-has-ul-h"></i>
                <i class="fa fa-angle-right icon-has-ul"></i>
                
               
            
        </li>
        
        <li class="nav-task">
            <a href="http://www.ra-kontur.by/administration/#"><i class="fa fa-shopping-cart"></i><span data-i18n="Магазин"></span></a>
            <ul>
                <li><a href="http://www.ra-kontur.by/administration/add_shop"><i class="fa fa-angle-right"></i><span data-i18n="Добавить"></span></a></li>
                <li><a href="http://www.ra-kontur.by/administration/shop_listok"><i class="fa fa-angle-right"></i><span data-i18n="Редактировать"></span></a></li>
                </ul>
            <i class="fa fa-angle-down icon-has-ul-h"></i>
                <i class="fa fa-angle-right icon-has-ul"></i>
                
               
            
        </li>
    </ul>
</div></div></aside>

           

