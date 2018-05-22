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

$('#first-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-7.png');
}, function () {
  $(this).attr('src', 'images/untitled-22.png');
})

$('#second-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-8.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия22.png');
})

$('#third-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-9.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия-2.png');
})

$('#fourth-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-10.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия-3.png');
})

$('#fifth-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-11.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия-4.png');
})

$('#sixth-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-12.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия-5.png');
})

$('#seventh-img-id').hover(function () {
  $(this).attr('src', 'images/untitled-копия-13.png');
}, function () {
  $(this).attr('src', 'images/untitled-копия-6.png');
})





var first_clicked_counter=0;
var second_clicked_counter = 0;
var third_clicked_counter = 0;
var fourth_clicked_counter = 0;

$('#wrapper-id').on('change_1', function () {
  $('#copy-block-content-image-1-id').fadeOut(700);
  $('#copy-block-content-image-2-id').fadeOut(700);
  $('#copy-block-content-image-3-id').fadeOut(700);
  $('#copy-block-content-image-4-id').fadeOut(700);
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','79px');
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
    $('#second-headline-id').css('text-decoration','none');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('С каждым днем реклама становится основным двигателем продвижения Вашей компании, товаров и услуг, т.к. ежедневно создается новая конкуренция, которая стимулирует усиливать поток информации о Вашей деятельности. И ни для кого не секрет, что эффективность каждой компании приносит качество и скорость – что говорит о работе нашей компании. Если Вам требуется сделать рекламу в самые короткие сроки? Тогда Вам к нам!');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/иконка.png');
    $('#copy-block-content-image-1-id').fadeIn(700);
    $('#copy-block-content-image-2-id').fadeIn(700);
    $('#copy-block-content-image-3-id').fadeIn(700);
    $('#copy-block-content-image-4-id').fadeIn(700);
    $('#second-text-img-id').fadeIn(700);
  })
});


$('#wrapper-id').on('change_2', function () {
  $('#copy-block-content-image-1-id').fadeOut(700);
  $('#copy-block-content-image-2-id').fadeOut(700);
  $('#copy-block-content-image-3-id').fadeOut(700);
  $('#copy-block-content-image-4-id').fadeOut(700);
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','79px');
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
    $('#second-headline-id').css('text-decoration','underline');
    $('#second-headline-id').attr('href','https://vk.com/away.php?utf=1&to=https%3A%2F%2Fvk.com%2Falbum-93025919_228494838');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('С распространением интернет технологий значение полиграфии не исчезло, а трансформировалось.В частности, важное значение в нашей жизни занимает интерьерная печать баннеров и другой полиграфической продукции.Интерьерная печать, как видно из названия, предназначена для продукции, которой отделываются стены и помещения офисов, выставок, квартир, магазинов, выставок, концертов или спортивных событий.');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/noun_2529-300x300.png');
    $('#copy-block-content-image-1-id').fadeIn(700);
    $('#copy-block-content-image-2-id').fadeIn(700);
    $('#copy-block-content-image-3-id').fadeIn(700);
    $('#copy-block-content-image-4-id').fadeIn(700);
    $('#second-text-img-id').fadeIn(700);
  })
});

$('#wrapper-id').on('change_3', function () {
  $('#copy-block-content-image-1-id').fadeOut(700);
  $('#copy-block-content-image-2-id').fadeOut(700);
  $('#copy-block-content-image-3-id').fadeOut(700);
  $('#copy-block-content-image-4-id').fadeOut(700);
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','59px');
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
    $('#copy-block-content-image-1-id').fadeIn(700);
    $('#copy-block-content-image-2-id').fadeIn(700);
    $('#copy-block-content-image-3-id').fadeIn(700);
    $('#copy-block-content-image-4-id').fadeIn(700);
    $('#second-text-img-id').fadeIn(700);
  })
})


$('#wrapper-id').on('change_4', function () {
  $('#copy-block-content-image-1-id').fadeOut(700);
  $('#copy-block-content-image-2-id').fadeOut(700);
  $('#copy-block-content-image-3-id').fadeOut(700);
  $('#copy-block-content-image-4-id').fadeOut(700);
  $('#background-image').fadeOut(700, function () {
    $('#copy-block-content-images-id').css('margin-top','59px')
    $('#background-image').attr('src', 'images/широкоформатная_печать_фон.jpg');
    $('#background-image').fadeIn(700)
  })
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('ШИРОФОРМАТНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-img-id').fadeOut(700);
  $('#second-headline-id').fadeOut(700, function () {
    $('#copy-block-content-headlines-id').css('align-items','baseline');
    $('#second-headline-id').html('ПОСМОТРЕТЬ ПРИМЕРЫ');
     $('#second-headline-id').css('text-decoration','underline');
     $('#second-headline-id').attr('href','https://vk.com/away.php?utf=1&to=https%3A%2F%2Fvk.com%2Falbum-93025919_215244641');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('Это есть печать большого размера, которая используется не только в рекламно-экстерьерных целях но и в интерьере. На сегодняшний день широкие возможности технологий, позволяют воплотить в реальность любую фантазию. Для не особо просвещенных пользователей, экстерьерная печать используется для оформления фасадов здания, окон заборов, а также любых объектов, на котором будет располагаться печатный носитель, до места обзора не менее 6 метров.');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/untitled.png');
    $('#copy-block-content-image-1-id').fadeIn(700);
    $('#copy-block-content-image-2-id').fadeIn(700);
    $('#copy-block-content-image-3-id').fadeIn(700);
    $('#copy-block-content-image-4-id').fadeIn(700);
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
var activated3 = true;
$('#mobiles-maps-header-id').on('click',function(){
  if(activated3){
    $('#mobiles-maps-id').slideDown(700);
  } else {
    $('#mobiles-maps-id').slideUp(700);
  }
  activated3=!activated3;
})


$('#photos-itself-1').hover(function(){
  $('#photos-itself-1').find('#photos-img-1').css('opacity','0.1');
  $('#photos-itself-text-1').css('display','flex');
},function(){
  $('#photos-itself-1').find('#photos-img-1').css('opacity','1');
  $('#photos-itself-text-1').css('display','none');
})

$('#photos-itself-2').hover(function(){
  $('#photos-itself-2').find('#photos-img-2').css('opacity','0.1');
  $('#photos-itself-text-2').css('display','flex');
},function(){
  $('#photos-itself-2').find('#photos-img-2').css('opacity','1');
  $('#photos-itself-text-2').css('display','none');
})

$('#photos-itself-3').hover(function(){
  $('#photos-itself-3').find('#photos-img-3').css('opacity','0.1');
  $('#photos-itself-text-3').css('display','flex');
},function(){
  $('#photos-itself-3').find('#photos-img-3').css('opacity','1');
  $('#photos-itself-text-3').css('display','none');
})

$('#photos-itself-4').hover(function(){
  $('#photos-itself-4').find('#photos-img-4').css('opacity','0.1');
  $('#photos-itself-text-4').css('display','flex');
},function(){
  $('#photos-itself-4').find('#photos-img-4').css('opacity','1');
  $('#photos-itself-text-4').css('display','none');
})

$('#photos-itself-5').hover(function(){
  $('#photos-itself-5').find('#photos-img-5').css('opacity','0.1');
  $('#photos-itself-text-5').css('display','flex');
},function(){
  $('#photos-itself-5').find('#photos-img-5').css('opacity','1');
  $('#photos-itself-text-5').css('display','none');
})

$('#photos-itself-6').hover(function(){
  $('#photos-itself-6').find('#photos-img-6').css('opacity','0.1');
  $('#photos-itself-text-6').css('display','flex');
},function(){
  $('#photos-itself-6').find('#photos-img-6').css('opacity','1');
  $('#photos-itself-text-6').css('display','none');
})

$('#photos-itself-7').hover(function(){
  $('#photos-itself-7').find('#photos-img-7').css('opacity','0.1');
  $('#photos-itself-text-7').css('display','flex');
},function(){
  $('#photos-itself-7').find('#photos-img-7').css('opacity','1');
  $('#photos-itself-text-7').css('display','none');
})

$('#photos-itself-8').hover(function(){
  $('#photos-itself-8').find('#photos-img-8').css('opacity','0.1');
  $('#photos-itself-text-8').css('display','flex');
},function(){
  $('#photos-itself-8').find('#photos-img-8').css('opacity','1');
  $('#photos-itself-text-8').css('display','none');
})

$('#photos-itself-9').hover(function(){
  $('#photos-itself-9').find('#photos-img-9').css('opacity','0.1');
  $('#photos-itself-text-9').css('display','flex');
},function(){
  $('#photos-itself-9').find('#photos-img-9').css('opacity','1');
  $('#photos-itself-text-9').css('display','none');
})

$('#photos-itself-10').hover(function(){
  $('#photos-itself-10').find('#photos-img-10').css('opacity','0.1');
  $('#photos-itself-text-10').css('display','flex');
},function(){
  $('#photos-itself-10').find('#photos-img-10').css('opacity','1');
  $('#photos-itself-text-10').css('display','none');
})

$('#photos-itself-11').hover(function(){
  $('#photos-itself-11').find('#photos-img-11').css('opacity','0.1');
  $('#photos-itself-text-11').css('display','flex');
},function(){
  $('#photos-itself-11').find('#photos-img-11').css('opacity','1');
  $('#photos-itself-text-11').css('display','none');
})

$('#photos-itself-12').hover(function(){
  $('#photos-itself-12').find('#photos-img-12').css('opacity','0.1');
  $('#photos-itself-text-12').css('display','flex');
},function(){
  $('#photos-itself-12').find('#photos-img-12').css('opacity','1');
  $('#photos-itself-text-12').css('display','none');
})




$('#photos-itself-11').hover(function(){
  $('#photos-itself-11').find('#photos-img-11').css('opacity','0.1');
  $('#photos-itself-text-11').css('display','flex');
},function(){
  $('#photos-itself-11').find('#photos-img-11').css('opacity','1');
  $('#photos-itself-text-11').css('display','none');
})

$('#photos-itself-21').hover(function(){
  $('#photos-itself-21').find('#photos-img-21').css('opacity','0.1');
  $('#photos-itself-text-21').css('display','flex');
},function(){
  $('#photos-itself-21').find('#photos-img-21').css('opacity','1');
  $('#photos-itself-text-21').css('display','none');
})

$('#photos-itself-31').hover(function(){
  $('#photos-itself-31').find('#photos-img-31').css('opacity','0.1');
  $('#photos-itself-text-31').css('display','flex');
},function(){
  $('#photos-itself-31').find('#photos-img-31').css('opacity','1');
  $('#photos-itself-text-31').css('display','none');
})

$('#photos-itself-41').hover(function(){
  $('#photos-itself-41').find('#photos-img-41').css('opacity','0.1');
  $('#photos-itself-text-41').css('display','flex');
},function(){
  $('#photos-itself-41').find('#photos-img-41').css('opacity','1');
  $('#photos-itself-text-41').css('display','none');
})

$('#photos-itself-51').hover(function(){
  $('#photos-itself-51').find('#photos-img-51').css('opacity','0.1');
  $('#photos-itself-text-51').css('display','flex');
},function(){
  $('#photos-itself-51').find('#photos-img-51').css('opacity','1');
  $('#photos-itself-text-51').css('display','none');
})

$('#photos-itself-61').hover(function(){
  $('#photos-itself-61').find('#photos-img-61').css('opacity','0.1');
  $('#photos-itself-text-61').css('display','flex');
},function(){
  $('#photos-itself-61').find('#photos-img-61').css('opacity','1');
  $('#photos-itself-text-61').css('display','none');
})

$('#photos-itself-71').hover(function(){
  $('#photos-itself-71').find('#photos-img-71').css('opacity','0.1');
  $('#photos-itself-text-71').css('display','flex');
},function(){
  $('#photos-itself-71').find('#photos-img-71').css('opacity','1');
  $('#photos-itself-text-71').css('display','none');
})

$('#photos-itself-81').hover(function(){
  $('#photos-itself-81').find('#photos-img-81').css('opacity','0.1');
  $('#photos-itself-text-81').css('display','flex');
},function(){
  $('#photos-itself-81').find('#photos-img-81').css('opacity','1');
  $('#photos-itself-text-81').css('display','none');
})

$('#photos-itself-91').hover(function(){
  $('#photos-itself-91').find('#photos-img-91').css('opacity','0.1');
  $('#photos-itself-text-91').css('display','flex');
},function(){
  $('#photos-itself-91').find('#photos-img-91').css('opacity','1');
  $('#photos-itself-text-91').css('display','none');
})

$('#photos-itself-101').hover(function(){
  $('#photos-itself-101').find('#photos-img-101').css('opacity','0.1');
  $('#photos-itself-text-101').css('display','flex');
},function(){
  $('#photos-itself-101').find('#photos-img-101').css('opacity','1');
  $('#photos-itself-text-101').css('display','none');
})

$('#photos-itself-111').hover(function(){
  $('#photos-itself-111').find('#photos-img-111').css('opacity','0.1');
  $('#photos-itself-text-111').css('display','flex');
},function(){
  $('#photos-itself-111').find('#photos-img-111').css('opacity','1');
  $('#photos-itself-text-111').css('display','none');
})

$('#photos-itself-121').hover(function(){
  $('#photos-itself-121').find('#photos-img-121').css('opacity','0.1');
  $('#photos-itself-text-121').css('display','flex');
},function(){
  $('#photos-itself-121').find('#photos-img-121').css('opacity','1');
  $('#photos-itself-text-121').css('display','none');
})



$('.mobile-slider-block').slick({
dots:true,
  mobileFirst:true,
  arrows:false,
});



var top_show = 150; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
  var delay = 1000; // Задержка прокрутки
  $(document).ready(function () {
    $(window).scroll(function () { // При прокрутке попадаем в эту функцию
      /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
      if ($(this).scrollTop() > top_show) $('#top').fadeIn();
      else $('#top').fadeOut();
    });
    $('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
      /* Плавная прокрутка наверх */
      $('body, html').animate({
        scrollTop: 0
      }, delay);
    });
  });
        

function timing(){
var date = new Date();
var nowDate = new Date();
var finishMonth = 4;
var finishDate = 20;
var finishHours = 9;
var finishMinutes = 10;
if (finishMonth - date.getMonth()!=0){
  $('#days').text(30*(finishMonth - date.getMonth())+(finishDate - date.getDate()));
} else $('#days').text(finishDate - date.getDate())

if ((finishHours - date.getHours()) <0 ){
  if(finishMinutes - date.getMinutes() >=0 )
  $('#hours').text(24 - (date.getHours()-finishHours))
  else $('#hours').text(24 - (date.getHours()-finishHours)-1)
} else{if (finishMinutes - date.getMinutes() >=0)
$('#hours').text(finishHours - date.getHours())
else $('#hours').text(finishHours - date.getHours()-1)
      }
  if ((date.getMinutes()-finishMinutes)<= 0 ){
$('#minutes').text(Math.abs(date.getMinutes()-finishMinutes));
  } else ($('#minutes').text(60-Math.abs(date.getMinutes()-finishMinutes)))
}

timing();
setInterval(timing,60000);

var clicked_small_but1 = true;
$('#slide-small-but-id-4').on('click',function(){
  if(clicked_small_but1){
  $('.slide-button-4').fadeOut(700);
  $('#slide-small-but-id-4').fadeOut(700,function(){
    $('#slide-small-but-id-4').html('Печать на самоклеющейся<br>пленке. Печать на<br>самоклеющейся пленке с<br>ламинацией. Печать на <br>самоклеющейся пленке с<br>плоттерной вырубкой. Печать<br>на пленке с перфорацией.<br>Печать на баннере. Печать на<br>баннере с перфорацией.<br> Печать на текстиле. Печать на<br>бумаге большого формата.<br>Установка люверсов для<br>крепления');
    $('.mobile-all-content').find('.slide-small-but-id-4').css('margin-top','0%');
    $('.mobile-all-content').find('.slide-button-4').css('margin-top','0%');
  $('#slide-small-but-id-4').css('text-align','center');
  $('#slide-small-but-id-4').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-small-but-id-4').css('font-size','180%');
  $('#slide-small-but-id-4').css('line-height','1.5');
  $('#slide-small-but-id-4').css('margin-bottom','8px');
  $('#slide-small-but-id-4').css('color','#f6e032');
     $('#slide-small-but-id-4').fadeIn(700);
  });
  $('#slide-header-id-4').fadeOut(700,function(){
    $('#slide-header-id-4').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-header-id-4').css('font-size','300%');
  $('#slide-header-id-4').text('ШИРОКОФОРМАТНАЯ ПЕЧАТЬ');
    $('.slide-button-4').css('bottom','-13px');
    $('.slide-button-4').fadeIn(700);
    $('#slide-header-id-4').fadeIn(700);
  });
  $('#slide-image-id-4').fadeOut(700);
   $('#slide-small-text-2-id-4').fadeOut(700);
  }
  clicked_small_but1 = false;
})

var clicked_small_but2 = true;
$('#slide-small-but-id-1').on('click',function(){
  if(clicked_small_but2){
  $('.slide-button').fadeOut(700);
  $('#slide-small-but-id-1').fadeOut(700,function(){
    $('#slide-small-but-id-1').html('Таблички, указатели<br>Плоские вывески<br>Объемные вывески<br>Живую рекламу<br>Световые короба<br>Объемные буквы<br>Объемные световые буквы<br>Крышные конструкции<br>Консоли<br>Баннера (растяжки)');
  $('#slide-small-but-id-1').css('text-align','center');
  $('#slide-small-but-id-1').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-small-but-id-1').css('font-size','180%');
  $('#slide-small-but-id-1').css('line-height','1.5');
  $('#slide-small-but-id-1').css('color','#f6e032');
     $('#slide-small-but-id-1').fadeIn(700);
  });
  $('#slide-header-id-1').fadeOut(700,function(){
    $('#slide-header-id-1').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-header-id-1').css('font-size','300%');
  $('#slide-header-id-1').text('НАРУЖНАЯ РЕКЛАМА');
    $('#slide-header-id-1').fadeIn(700);
  });
  $('#slide-image-id-1').fadeOut(700);
   $('#slide-small-text-2-id-1').fadeOut(700,function(){
    $('#slide-small-text-2-id-1').html('Согласование наружной рекламы<br>изготовление паспорта рекламы)');
    $('#slide-small-text-2-id-1').css('font-size','10pt');
     $('.mobile-all-content').find('#slide-small-text-2-id-1').css('font-size','200%');
    $('#slide-small-text-2-id-1').css('color','#929292');
     $('#slide-small-text-2-id-1').css('margin-top','23px');
     $('.slide-button').css('bottom','-30px');
     $('.slide-button').fadeIn(700);
    $('#slide-small-text-2-id-1').fadeIn(700);
  }); 
  }
  clicked_small_but2 = false;
})


var clicked_small_but3 = true;
$('#slide-small-but-id-2').on('click',function(){
  if(clicked_small_but3){
  $('.slide-button-blue').fadeOut(700);
  $('#slide-small-but-id-2').fadeOut(700,function(){
    $('#slide-small-but-id-2').html('Гарантия на систему- 1 год.<br>Срочное изготовление и поставка по<br>индивидуальному заказу.<br>Сложные формы. Подбор<br>оптимального исполнения исходя<br>из конкретного заказа.<br>Разработка индивидуального<br>дизайна. Доставка и монтаж<br>Необычные цвета- от ртутного<br>до жемчужного и голограмного.');
  $('#slide-small-but-id-2').css('text-align','center');
  $('#slide-small-but-id-2').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-small-but-id-2').css('font-size','180%');
  $('#slide-small-but-id-2').css('line-height','1.5');
  $('#slide-small-but-id-2').css('color','#fff');
     $('#slide-small-but-id-2').fadeIn(700);
  });
  $('#slide-header-id-2').fadeOut(700,function(){
    $('#slide-header-id-2').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-header-id-2').css('font-size','300%');
  $('#slide-header-id-2').text('НАРУЖНАЯ РЕКЛАМА');
    $('#slide-header-id-2').fadeIn(700);
  });
  $('#slide-image-id-2').fadeOut(700,function(){
    $('#slide-image-id-2').find('img').attr('src','https://image.ibb.co/mCSd47/image.png');
    $('#slide-image-id-2').css('margin-top','25px');
        $('.slide-button-blue').css('bottom','-10px');
$('.slide-button-blue').fadeIn(700);
    $('#slide-image-id-2').fadeIn(700);
});
   $('#slide-small-text-2-id-2').fadeOut(700); 
}
  clicked_small_but3=false;
})


var clicked_small_but4 = true;
$('#slide-small-but-id-3').on('click',function(){
  if(clicked_small_but4){
  $('.slide-button-pink').fadeOut(700);
  $('#slide-small-but-id-3').fadeOut(700,function(){
    $('#slide-small-but-id-3').html('Ксерокопия<br>Контрольные работы<br>Афиши<br>Плакаты<br>Визитки<br>Грамоты<br>Благодарности<br>Пригласительные<br>Открытки');
  $('#slide-small-but-id-3').css('text-align','center');
  $('#slide-small-but-id-3').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-small-but-id-3').css('font-size','180%');
  $('#slide-small-but-id-3').css('line-height','1.5');
  $('#slide-small-but-id-3').css('color','#fff');
     $('#slide-small-but-id-3').fadeIn(700);
  });
  $('#slide-header-id-3').fadeOut(700,function(){
    $('#slide-header-id-3').css('font-size','11pt');
    $('.mobile-all-content').find('#slide-header-id-3').css('font-size','300%');
  $('#slide-header-id-3').text('НАРУЖНАЯ РЕКЛАМА');
    $('#slide-header-id-3').fadeIn(700);
  });
  $('#slide-image-id-3').fadeOut(700);
   $('#slide-small-text-2-id-3').fadeOut(700,function(){
    $('#slide-small-text-2-id-3').html('На нашем Японском оборудовании<br>изготовим печатную продукцию в<br>кратчайшие сроки. Услуги<br>дизайнера');
    $('#slide-small-text-2-id-3').css('font-size','10pt');
     $('.mobile-all-content').find('#slide-small-text-2-id-3').css('font-size','180%');
    $('#slide-small-text-2-id-3').css('color','#ccb9c2');
     $('#slide-small-text-2-id-3').css('margin-top','23px');
     $('.slide-button-pink').css('bottom','-23px');
     $('.slide-button-pink').fadeIn(700);
      //$('.slide-button-pink').css('bottom','-23px');
    $('#slide-small-text-2-id-3').fadeIn(700);
  }); 
  }
  clicked_small_but4=false;
})

$('#social-vk-id').hover(function(){
  $('#social-vk-id').css('outline','2px solid white');
},function(){
  $('#social-vk-id').css('outline','2px');
})

$('#social-2-id').hover(function(){
  $('#social-2-id').css('outline','2px solid white');
},function(){
  $('#social-2-id').css('outline','2px');
})

$('#social-3-id').hover(function(){
  $('#social-3-id').css('outline','2px solid white');
},function(){
  $('#social-3-id').css('outline','2px');
})

$('#social-4-id').hover(function(){
  $('#social-4-id').css('outline','2px solid white');
},function(){
  $('#social-4-id').css('outline','2px');
})

$('#social-5-id').hover(function(){
  $('#social-5-id').css('outline','2px solid white');
},function(){
  $('#social-5-id').css('outline','2px');
})




if ($( window ).width() > 440){
  $('#kseroprint-logo-img-id-mob').css('width','85%');
  $('#kseroprint-logo-img-id-mob').css('top','25%');
  $('#kseroprint-logo-img-id-mob').css('left','10%');
}






if ($( window ).width() < 1600){
 
  $('.kseroprint-logo').css('margin-left','30px');
   $('.copy-block-content').css('margin-left','30px');
  $('.pre-footer-wrap').css('margin-left','30px');
  $('.footer-content').css('margin-left','30px');
  $('.book-block-text').css('left','30px');
  $('.book-block-book').css('margin-left','50px');
  $('.footer-content').css('margin-left','30px');
  $('.book-banner').css('margin-left','983px');
  $('.yellow-text-blocks').css('margin-left','30px');
  $('.banner-cont').css('margin-right','50px');
  $('.yellow-slides-block').css('margin-left','30px');
  $('.chain-blocks').css('margin-left','5px');
  $('.another-yellow-header').css('margin-left','465px');
  $('.another-yellow-blocks-1').css('margin-left','70px');
  $('.another-yellow-blocks-2').css('margin-left','70px');
  $('.photos-block').css('margin-left','50px');
  $('.photos-gallery').css('margin-left','36px');
  $('.photos-social').css('margin-left','50px');
  $('.pre-footer-content-zone').css('margin-left','45px');
  $('.final-foot-red-content').css('padding-left','30px');
  $('.red-banner').css('margin-right','90px');
  $('.icons-yellow').css('margin-left','30px');
  $('.cont-banner-red').css('margin-right','90px');
  $('.cont-banner-red').css('width','334px');
  $('.foot-gray-line').find('span').css('padding-left','30px');
  $('.banner-foot-maps').css('margin-left','503px');
  $('.chain-text-f').css('font-size','7pt');
  $('.chain-text-l').css('font-size','7pt');
  $('.chain-text').css('font-size','7pt');
  $('#chain-block-1').css('padding-right','20px');
  $('#chain-block-1').css('width','160px');
  $('#chain-block-1').css('padding-left','60px');
  $('#chain-block-3').find('.chain-text').css('width','130px');
  $('#chain-block-3').css('margin-bottom','0px');
  $('#chain-block-5').css('margin-right','0px');
  $('#chain-block-5').css('margin-left','0px');
  $('#chain-block-7').css('margin-right','0px');
  $('#chain-block-7').css('margin-left','0px');
  $('.chain-text-l').css('padding-right','70px');
  $('.chain-text-l').css('width','160px');
  $('#chain-block-9').css('margin-top','10px');
   $('.final-foot-content-zone').css('margin-left','10px');
  $('.final-cont-2').css('margin-left','10px');
}






$('.mobile-all-content').find('.icon-box-text').find('.icon-box-text-content').css('font-size','150%');

$('.mobile-all-content').find('.icon-box-text').find('.icon-box-text-header').css('font-size','25pt');

$('.mobile-all-content').find('.icon-box-text').find('.icon-box-text-content').css('width','450px');

$('.mobile-all-content').find('.icon-box-text').css('color','#fff');

$('.mobile-all-content').find('.icon-boxes').css('margin-top','0px');

$('.mobile-all-content').find('.icon-boxes').find('.mobile-logo-lines-its').css('margin-top','15px');


$('.mobile-all-content').find('.price-list-banner').css('margin-top','0px');
$('.mobile-all-content').find('.price-list-banner').css('margin','30px');
$('.mobile-all-content').find('.price-list-banner').css('width','55%');
$('.mobile-all-content').find('.price-list-banner').css('height','20%');
$('.mobile-all-content').find('.price-list-banner').css('font-size','110%');

$('.mobile-all-content').find('.percent-line').css('min-width','70%');
$('.mobile-all-content').find('.percent-line-fullfill-1').css('min-width','70%');
$('.mobile-all-content').find('.icon-content').css('font-size','170%');
$('.mobile-all-content').find('.square-icon').css('width','20px');
$('.mobile-all-content').find('.square-icon').css('height','20px');
$('.mobile-all-content').find('.book-block-text').css('left','0px');
$('.mobile-all-content').find('.book-banner').css('margin-left','0px');


$('.mobile-all-content').find('.yellow-slides-block').css('margin-left','0px'); 
$('.mobile-all-content').find('.yellow-slides-block').css('margin-top','0px'); 






$('.mobile-all-content').find('.banner-foot-maps').css('margin-left','0px');
$('.mobile-all-content').find('.banner-foot-maps').css('margin-top','0px');
$('.slick-track').width($('body').width);


$('.mobile-yellow-block').find('.another-yellow-blocks-1').css('margin-left','3%');
$('.mobile-yellow-block').find('.another-yellow-blocks-2').css('margin-left','3%');

$(document).ready(function() {
         $("#my-menu").mmenu({
            extensions: ["fullscreen","position-right"]
         });
      });


var API = $("#my-menu").data( "mmenu" );


$('#closeMenu').on('click',function(){
  $('#my-menu').css('opacity','0');
  $('#mm-0').css('opacity','1')
})


$('.mob-logo-lines-img').on('click',function(){
  $("#my-menu").css('opacity','1');
   $(this).attr('href','#my-menu');
   $('#mm-0').fadeOut(300,function(){
     $(this).css('opacity','0');
     $(this).fadeIn(300);
   })
})
 


      
         
       
      
      


/*
var slideClicked = true;
$('.mob-logo-lines-img').on('click',function(){
  if(!slideClicked){
  $('.slide-menu').slideUp(700)} 
  else {
    
    $('.slide-menu').slideDown({
      start:function(){
        $(this).css('display','flex')
      }
    },700);}
  slideClicked= !slideClicked;
})
*/

var bigHeaders=['СРОЧНАЯ ПЕЧАТЬ','ИНТЕРЬЕРНАЯ ПЕЧАТЬ','НАРУЖНАЯ РЕКЛАМА','ШИРОФОРМАТНАЯ ПЕЧАТЬ'];

var headerImages=['images/иконка.png','images/noun_2529-300x300.png','images/announcement.png','images/untitled.png'];

var bigtextes=['С каждым днем реклама становится основным двигателем продвижения Вашей компании, товаров и услуг, т.к. ежедневно создается новая конкуренция, которая стимулирует усиливать поток информации о Вашей деятельности. И ни для кого не секрет, что эффективность каждой компании приносит качество и скорость – что говорит о работе нашей компании. Если Вам требуется сделать рекламу в самые короткие сроки? Тогда Вам к нам','С распространением интернет технологий значение полиграфии не исчезло, а трансформировалось.В частности, важное значение в нашей жизни занимает интерьерная печать баннеров и другой полиграфической продукции.Интерьерная печать, как видно из названия, предназначена для продукции, которой отделываются стены и помещения офисов, выставок, квартир, магазинов, выставок, концертов или спортивных событий.','Неотъемлемая часть лица компании, которая подчеркивает и указывает место Вашего нахождения, в тот же момент и играет роль распространителя информации о компании. Наши профессиональные сотрудники предложат Вам оптимальное расположение элементов рекламы с учетом восприятия наружной рекламы в разных условиях. Дизайнер подберет яркую и заметную цветопередачу для каждого индивидуального объекта. Изготовление самых ярких и выразительных конструкции, также входит в наши возможности.','Это есть печать большого размера, которая используется не только в рекламно-экстерьерных целях но и в интерьере. На сегодняшний день широкие возможности технологий, позволяют воплотить в реальность любую фантазию. Для не особо просвещенных пользователей, экстерьерная печать используется для оформления фасадов здания, окон заборов, а также любых объектов, на котором будет располагаться печатный носитель, до места обзора не менее 6 метров.'];

var backgrounds = ['https://image.ibb.co/gt4pcS/image.jpg','images/интерьерная печать фон.jpg','images/широкоформатная_печать_фон_2.jpg','images/широкоформатная_печать_фон.jpg'];


var hederTextTimeout = setInterval(chengeText, 11000);

var countertext = 1;
function chengeText() {
   $('#mobile-text-big-last').fadeOut(700,function(){
     $('.mob-big-text-header-text').text(bigHeaders[countertext]);
     $('.mob-big-text-big-content').text(bigtextes[countertext]);
     $('.mob-big-text-header-icon').find('img').attr('src',headerImages[countertext]);
     $('#mobile-text-big-last').css('background-image','url('+backgrounds[countertext]+')');
     $(this).fadeIn(700);
   })
    countertext++;
    if (countertext >= backgrounds.length) {
      countertext = 0
    };
  }


$('.lines-box-line-1').width($('.why-we-block').width()-240);
$('.lines-box-line-2').width($('.why-we-block').width()-240);
$('.lines-box-line-3').width($('.why-we-block').width()-240);
$('.lines-box-line-4').width($('.why-we-block').width()-240);
$('.lines-box-line-5').width($('.why-we-block').width()-240);
$('.lines-box-line-6').width($('.why-we-block').width()-240);


/*
$(document).on('scroll', function() {
    if($(document).scrollTop()>=1150){
      
        $('.yellow-slide').fadeIn(1500).css('display','flex');
      
       setTimeout(function(){
         $('.yellow-slide-2').fadeIn(1500).css('display','flex');
       },400);
      
      setTimeout(function(){
         $('.yellow-slide-3').fadeIn(1500).css('display','flex');
       },800);
      
      setTimeout(function(){
         $('.yellow-slide-4').fadeIn(1500).css('display','flex');
       },1200);
    }
})




$('#kseroprint-logo-img-id').fadeIn(2000);
      
      setTimeout(function(){
        $('.banner-adv').fadeIn(2000);
},600);
      
            setTimeout(function(){
        $('.banner-print-adv').fadeIn(2000).css('display','flex');
},1200);

 
$(document).on('scroll', function() {
    if($(document).scrollTop()>=0){
      
    }
})







function fading1(){
  $('#icon-box-1').fadeIn(1000).css('display','flex');
}
function fading2(){
  $('#icon-box-2').fadeIn(1000).css('display','flex');
}
function fading3(){
  $('#icon-box-3').fadeIn(500).css('display','flex');
}
 fading1();
setTimeout(fading2,500);
setTimeout(fading3,1000);

*/
$(document).on('scroll', function() {
    if($(document).scrollTop()>=160){
      $('.percent-line-fulfill-1').animate({
  width: '475px',
},3000);

$('.percent-line-fulfill-2').animate({
  width: '448px',
},3000);

$('.percent-line-fulfill-3').animate({
  width: '421px',
},3000);
                  
$('.percent-line-fulfill-4').animate({
  width: '260px',
},3000);
                  
$('.percent-line-fulfill-5').animate({
  width: '134px',
},3000);
  
$('.percent-line-fulfill-6').animate({
  width: '74px',
},3000); 

    }
})


$(document).on('scroll', function() {
    if($(document).scrollTop()>=2150){
      $('.color-line-1').animate({
  width: '90%',
},3000);

$('.color-line-2').animate({
  width: '85%',
},3000);

$('.color-line-3').animate({
  width: '75%',
},3000);
                  
$('.color-line-4').animate({
  width: '50%',
},3000);
                  
$('.color-line-5').animate({
  width: '30%',
},3000);
  
$('.color-line-6').animate({
  width: '74px',
},3000); 

    }
})




$('#header-text-content-id-1').on('click',function(){
  $('#mobile-print-text-second-id-1').slideDown(700);
})
$('#header-text-content-id-2').on('click',function(){
  $('#mobile-print-text-second-id-2').slideDown(700,function(){
    $('.mobile-ex-1').fadeIn(400);
  });
})
$('#header-text-content-id-3').on('click',function(){
  $('#mobile-print-text-second-id-3').slideDown(700);
})

$('#header-text-content-id-4').on('click',function(){
  $('#mobile-print-text-second-id-4').slideDown(700,function(){
    $('.mobile-ex-2').fadeIn(400);
  });
  })
/*

$(document).on('scroll', function() {
    if($(document).scrollTop()>=250){
       $('#icon-itself-1').fadeIn(1000).css('display','flex');
      
       setTimeout(function(){
         $('#icon-itself-2').fadeIn(1000).css('display','flex');
       },200);
      
      setTimeout(function(){
         $('#icon-itself-3').fadeIn(1000).css('display','flex');
       },400);
      
      setTimeout(function(){
         $('#icon-itself-4').fadeIn(1000).css('display','flex');
       },600);
      
      setTimeout(function(){
         $('#icon-itself-5').fadeIn(1000).css('display','flex');
       },800);
      
      setTimeout(function(){
         $('#icon-itself-6').fadeIn(1000).css('display','flex');
       },1000);
      
      setTimeout(function(){
         $('#icon-itself-7').fadeIn(1000).css('display','flex');
       },1200);
      
      setTimeout(function(){
         $('#icon-itself-8').fadeIn(1000).css('display','flex');
       },1400);
      
      setTimeout(function(){
         $('#icon-itself-9').fadeIn(1000).css('display','flex');
       },1600);
      
       setTimeout(function(){
         $('.final-button').fadeIn(1000).css('display','flex');
       },1800);
    }
})



$(document).on('scroll', function() {
    if($(document).scrollTop()>=600){
      //$('.yellow-slide').css('display','flex')
        $('.book-block-text-1').fadeIn(2000).css('display','flex');
      $('.book-block-text-2').fadeIn(2000).css('display','flex');
      $('.book-banner-text-big').fadeIn(2000).css('display','flex');
      $('.book-banner-text-small').fadeIn(2000).css('display','flex');
      $('.book-banner-sale-perc').fadeIn(2000).css('display','flex');
      
    }
})




$(document).on('scroll', function() {
    if($(document).scrollTop()>=1670){
       $('.chain-blocks').fadeIn(2000).css('display','flex');
    }
})

$(document).on('scroll', function() {
    if($(document).scrollTop()>=3100){
      //$('.yellow-slide').css('display','flex')
        $('.adv-zone').fadeIn(1800).css('display','flex');
      
    }
})

$(document).on('scroll', function() {
    if($(document).scrollTop()>=2175){
      //$('.yellow-slide').css('display','flex')
        $('.insta-textes-block').fadeIn(2200).css('display','flex');   
    }
})

$(document).on('scroll', function() {
    if($(document).scrollTop()>=3320){
      //$('.yellow-slide').css('display','flex')
        $('.final-foot-header').fadeIn(2200).css('display','flex');
      $('.red-banner-text-2').fadeIn(2200).css('display','flex');
      
    }
})


$(document).on('scroll', function() {
    if($(document).scrollTop()>=3681){
      //$('.yellow-slide').css('display','flex')
        $('#first-img-id').fadeIn(1800).css('display','flex');
      setTimeout(function(){
        $('#second-img-id').fadeIn(1800).css('display','flex');
      },300);
      
       setTimeout(function(){
        $('#third-img-id').fadeIn(1800).css('display','flex');
      },600);
      
        setTimeout(function(){
        $('#fourth-img-id').fadeIn(1800).css('display','flex');
      },900);
      
       setTimeout(function(){
        $('#fifth-img-id').fadeIn(1800).css('display','flex');
      },1200);
      
       setTimeout(function(){
        $('#sixth-img-id').fadeIn(1800).css('display','flex');
      },1500);
      
        setTimeout(function(){
        $('#seventh-img-id').fadeIn(1800).css('display','flex');
      },1800)
      
    }
})


$(document).on('scroll', function() {
    if($(document).scrollTop()>=3800){
      //$('.yellow-slide').css('display','flex')
        $('.foot-maps-ksero-logo').fadeIn(2200).css('display','flex');
      
      
    }
})



$(document).on('scroll', function() {
    if($(document).scrollTop()>=4150){
      //$('.yellow-slide').css('display','flex')
        $('.fotter-img-2').fadeIn(1400).css('display','flex');
      
      
    }
})
/*
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 400) {
    $('footer').fadeIn(1000);
    
  } else {
    $('footer').fadeOut();
  }
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 800) {
    $('.book-block').fadeIn(1000);
  } else {
    $('.book-block').fadeOut();
  }
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1400) {
    $('.yellow-block').fadeIn(1000);
  } else {
    $('.yellow-block').fadeOut();
  }
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 1700) {
    $('.another-yellow-block').fadeIn(1000);
  } else {
    $('.another-yellow-block').fadeOut();
  }
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 2300) {
    $('.photos-block-wrap').fadeIn(1000);
  } else {
    $('.photos-block-wrap').fadeOut();
  }
});


$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 3100) {
    $('.pre-final-footer-wrap').fadeIn(1000);
  } else {
    $('.pre-final-footer-wrap').fadeOut();
  }
});


$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 3800) {
    $('.final-footer').fadeIn(1000);
  } else {
    $('.final-footer').fadeOut();
  }
});


$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 4300) {
    $('.final-foot-yellow-content').fadeIn(1000);
  } else {
    $('.final-foot-yellow-content').fadeOut();
  }
});


$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 4300) {
    $('.foot-gray-line').fadeIn(1000);
  } else {
    $('.foot-gray-line').fadeOut();
  }
});

$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 4300) {
    $('.footer-maps').fadeIn(1000);
  } else {
    $('.footer-maps').fadeOut();
  }
});*/