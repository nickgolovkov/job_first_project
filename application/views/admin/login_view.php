<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=base_url();?>css/fon/bower_components/font-awesome/styles/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/fon/bower_components/weather-icons/styles/weather-icons.min.css">
<link rel="stylesheet" href="<?=base_url();?>css/main-1.css">
<style>
.signin-header{margin-top: 150px;}
.logo{font-size: 26px;
    font-weight: 400;
    text-transform: uppercase;}
a{ color: #333;
    text-decoration: none;}
.signin-body{padding: 20px 10px;}   
.container:after, .container:before {
    content: " ";
    display: table;
}
.container:after {
    clear: both;
}
.container:after, .container:before {
    content: " ";
    display: table;
}
.container {
    width: 1170px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px;
}
.form-container{margin: 10px auto;
    max-width: 420px;}

.form-horizontal .form-group:after, .form-horizontal .form-group:before {
    content: " ";
    display: table;
}
.form-horizontal .form-group:after {
    clear: both;
}
.form-group{position: relative;}

.btn-icon-sm.btn-icon-lined {
    line-height: 26px;
}

.btn-icon-sm {
    height: 30px;
    width: 30px;
}
.btn-icon-round {
    border-radius: 50%;
}
.btn-icon-lined {
    background-color: #fff;
    display: inline-block;
    text-align: center;
}
</style>
<div>
    <div class="signin-header">
        <section class="logo text-center">
            <?= $info;?>
        </section>
    </div>
    
    
    <div class="signin-body">
        <div class="container">
            <div class="form-container">
                <form class="form-horizontal ng-pristine ng-valid" action = "<?=base_url();?>administration/login" method="post">
                    <fieldset>
                        <div class="form-group">
                            <div class="btn-icon-lined btn-icon-round btn-icon-sm btn-default-light">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input class="form-control input-lg input-round text-center" type="text" name="login" value="<?=set_value('login');?>" />
                        <br/><strong style="color: red;"><?=form_error('login');?></strong>
                        </div>
                            <div class="form-group">
                                <div class="btn-icon-lined btn-icon-round btn-icon-sm btn-default-light">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <input class="form-control input-lg input-round text-center" type="password" name="pass" />
                                <br><strong style="color: red;"><?=form_error('pass');?></strong>
                            </div>
                            
                            <div class="form-group">
                                <div style="position: absolute; top: 8px; left: 15px;"><?=$captcha;?></div>
                                <input class="form-control input-lg input-round text-center" type="text" name="captcha" /><br />
                                <strong style="color: red;"><?=form_error('captcha');?></strong>
                            </div>
                                <div class="form-group">
                                    <input type = "submit" name = "enter_button" value = "Войти" class="btn btn-primary btn-lg btn-round btn-block text-center" />
                                </div>
                    </fieldset>
                </form>
            
            </div>
        </div>
    </div>
</div>




<!--------------------------------------------------------------------------------------------------->
