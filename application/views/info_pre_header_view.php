<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
	<title>виртуальная версия</title>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/my.js"></script>
    <script src="<?=base_url();?>js/ajaxupload.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?=base_url();?>js/ckeditor/ckeditor.js"></script>
    <script src="<?=base_url();?>js/jquery.liMarquee.js"></script>
    <link rel="stylesheet" href="<?=base_url();?>css/liMarquee.css">
    <script>
      $(window).load(function(){
        $('.str_wrap').liMarquee();
      });
    </script>

<!----------------------------  Аккордеон меню левый --------------------------------------------------->
<script language="JavaScript" type="text/javascript">
$(function() {
$.fn.scrollToTop = function() {
$(this).hide().removeAttr("href");
if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
var scrollDiv = $(this);
$(window).scroll(function() {
if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
else $(scrollDiv).fadeIn("slow")
});
$(this).click(function() {
$("html, body").animate({scrollTop: 0}, "slow")
})
}
});
</script>
</head>
<body>