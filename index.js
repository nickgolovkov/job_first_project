'use strict';
$('#header-order-call-viber-image').hover(function () {
  $(this).attr('src', 'images/ховер-вайбер.png');
}, function () {
  $(this).attr('src', 'images/вайбер.png');
})

$('#content-first-image-itself').hover(function(){
  $(this).attr('src','images/Прямоугольник-1-чб.png');
},function(){
  $(this).attr('src','images/Слой-56.png');
})

$('#content-second-image-itself').hover(function(){
  $(this).attr('src','images/Прямоугольник-2-чб.png');
},function(){
  $(this).attr('src','images/ИНТЕРЬЕРНАЯ--ПЕЧАТЬ.png');
})

$('#content-third-image-itself').hover(function(){
  $(this).attr('src','images/Прямоугольник-3-чб.png');
},function(){
  $(this).attr('src','images/НАРУЖНАЯ-РЕКЛАМА.png');
})

$('#content-fourth-image-itself').hover(function(){
  $(this).attr('src','images/Прямоугольник-4-чб.png');
},function(){
  $(this).attr('src','images/ШИРОФОРМАТНАЯ-ПЕЧАТЬ.png');
})


var first_clicked_counter=0;
var second_clicked_counter = 0;
var third_clicked_counter = 0;
var fourth_clicked_counter = 0;

$('#wrapper-id').on('change_1', function () {
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','100px');
    $('#background-image').attr('src', 'images/срочная_печать_фон.jpg');
    $('#background-image').fadeIn(700)
  });
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('СРОЧНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-img-id').fadeOut(700);
  $('#second-headline-id').fadeOut(700, function () {
    $('#copy-block-content-headlines-id').css('align-items','baseline');
    $('#second-headline-id').html('ЦИФРОВАЯ ПЕЧАТЬ');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('С каждым днем реклама становится основным двигателем продвижения Вашей компании, товаров и услуг, т.к. ежедневно создается новая конкуренция, которая стимулирует усиливать поток информации о Вашей деятельности. И ни для кого не секрет, что эффективность каждой компании приносит качество и скорость – что говорит о работе нашей компании. Если Вам требуется сделать рекламу в самые короткие сроки? Тогда Вам к нам!');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/иконка.png');
    $('#second-text-img-id').fadeIn(700);
  })
});


$('#wrapper-id').on('change_2', function () {
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','100px');
    $('#background-image').attr('src', 'images/интерьерная печать фон.jpg');
    $('#background-image').fadeIn(700)
  })
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('ИНТЕРЬЕРНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-img-id').fadeOut(700);
  $('#second-headline-id').fadeOut(700, function () {
    $('#copy-block-content-headlines-id').css('align-items','baseline');
    $('#second-headline-id').html('ПОСМОТРЕТЬ ПРИМЕРЫ');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('С распространением интернет технологий значение полиграфии не исчезло, а трансформировалось.В частности, важное значение в нашей жизни занимает интерьерная печать баннеров и другой полиграфической продукции.Интерьерная печать, как видно из названия, предназначена для продукции, которой отделываются стены и помещения офисов, выставок, квартир, магазинов, выставок, концертов или спортивных событий.');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/noun_2529-300x300.png');
    $('#second-text-img-id').fadeIn(700);
  })
});

$('#wrapper-id').on('change_3', function () {
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','83px');
    $('#background-image').attr('src', 'images/широкоформатная_печать_фон_2.jpg');
    $('#background-image').fadeIn(700)
  })
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('НАРУЖНАЯ РЕКЛАМА');
    $('#first-headline-id').fadeIn(700);
  })

  $('#second-headline-id').fadeOut(700, function () {
    $('#second-headline-id').empty();
    $('#copy-block-content-headlines-id').css('align-items','normal');
    $('#second-headline-id').fadeIn(700);
    $('#second-headline-img-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('Неотъемлемая часть лица компании, которая подчеркивает и указывает место Вашего нахождения, в тот же момент и играет роль распространителя информации о компании. Наши профессиональные сотрудники предложат Вам оптимальное расположение элементов рекламы с учетом восприятия наружной рекламы в разных условиях. Дизайнер подберет яркую и заметную цветопередачу для каждого индивидуального объекта. Изготовление самых ярких и выразительных конструкции, также входит в наши возможности.');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/announcement.png');
    $('#second-text-img-id').fadeIn(700);
  })
})


$('#wrapper-id').on('change_4', function () {
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','100px');
    $('#background-image').attr('src', 'images/широкоформатная_печать_фон.jpg');
    $('#background-image').fadeIn(700)
  })
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('ШИРОКОФОРМАТНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-img-id').fadeOut(700);
  $('#second-headline-id').fadeOut(700, function () {
    $('#copy-block-content-headlines-id').css('align-items','baseline');
    $('#second-headline-id').html('ПОСМОТРЕТЬ ПРИМЕРЫ');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('Это есть печать большого размера, которая используется не только в рекламно-экстерьерных целях но и в интерьере. На сегодняшний день широкие возможности технологий, позволяют воплотить в реальность любую фантазию. Для не особо просвещенных пользователей, экстерьерная печать используется для оформления фасадов здания, окон заборов, а также любых объектов, на котором будет располагаться печатный носитель, до места обзора не менее 6 метров.');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/untitled.png');
    $('#second-text-img-id').fadeIn(700);
  })
});


$('#content-first-image').on('click', function () {
  first_clicked_counter=first_clicked_counter+1;
  second_clicked_counter=0;
  third_clicked_counter=0;
  fourth_clicked_counter=0;
  if(first_clicked_counter==1){
  var change_1 = new jQuery.Event('change_1');
  $('#wrapper-id').trigger(change_1);
  }
});
$('#content-second-image').on('click', function () {
  second_clicked_counter=second_clicked_counter+1;
  first_clicked_counter=0;
  third_clicked_counter=0;
  fourth_clicked_counter=0;
  if(second_clicked_counter==1){
  var change_2 = new jQuery.Event('change_2');
  $('#wrapper-id').trigger(change_2);
  }
})
$('#content-third-image').on('click', function () {
  third_clicked_counter=third_clicked_counter+1;
  first_clicked_counter=0;
  second_clicked_counter=0;
  fourth_clicked_counter=0;
  if(third_clicked_counter==1){
  var change_3 = new jQuery.Event('change_3');
  $('#wrapper-id').trigger(change_3);
  }
})
$('#content-fourth-image').on('click', function () {
  fourth_clicked_counter=fourth_clicked_counter+1;
  first_clicked_counter=0;
  second_clicked_counter=0;
  third_clicked_counter=0;
  if(fourth_clicked_counter==1){
  var change_4 = new jQuery.Event('change_4');
  $('#wrapper-id').trigger(change_4);
  }
})
var activated=true;
$('#mobile-header-icons-wrap-id').on('click',function(){
  if(activated){
  $('#mobile-onclick-header-id').slideDown(700);
  } else{
    $('#mobile-onclick-header-id').slideUp(700);
  }
  activated=!activated;
})
var activated2 = true;
$('#header-text-content-id').on('click',function(){
  if(activated2){
    $('#mobile-print-text-second-id').slideUp(700);
  } else {
    $('#mobile-print-text-second-id').slideDown(700);
  }
  activated2=!activated2;
})