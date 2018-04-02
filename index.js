'use strict';
$('#header-order-call-viber-image').hover(function () {
  $(this).attr('src', 'images/%D1%85%D0%BE%D0%B2%D0%B5%D1%80-%D0%B2%D0%B0%D0%B9%D0%B1%D0%B5%D1%80.png');
}, function () {
  $(this).attr('src', 'images/%D0%B2%D0%B0%D0%B9%D0%B1%D0%B5%D1%80.png');
})
var flag_check;
var flag_check2;

$('#wrapper-id').on('change_1', function () {
  $('#background-image').fadeOut(700, function () {
    $('#background-image').attr('src', 'images/%D1%81%D1%80%D0%BE%D1%87%D0%BD%D0%B0%D1%8F%20%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D1%8C%20%D1%84%D0%BE%D0%BD.jpg');
    $('#background-image').fadeIn(700)
  });
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('СРОЧНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-id').fadeOut(700, function () {
    $('#second-headline-id').html('ЦИФРОВАЯ ПЕЧАТЬ');
    $('#second-headline-id').fadeIn(700);
  })
  $('#first-text-id').fadeOut(700, function () {
    $('#first-text-id').html('С каждым днем реклама становится основным двигателем продвижения Вашей компании, товаров и услуг, т.к. ежедневно создается новая конкуренция, которая стимулирует усиливать поток информации о Вашей деятельности. И ни для кого не секрет, что эффективность каждой компании приносит качество и скорость – что говорит о работе нашей компании. Если Вам требуется сделать рекламу в самые короткие сроки? Тогда Вам к нам!');
    $('#first-text-id').fadeIn(700);
  })
  $('#second-text-img-id').fadeOut(700, function () {
    $('#second-text-img-id').attr('src', 'images/%D0%B8%D0%BA%D0%BE%D0%BD%D0%BA%D0%B0.png');
    $('#second-text-img-id').fadeIn(700);
  })

  $('#content-first-image-itself').attr('src', 'images/%D0%9F%D1%80%D1%8F%D0%BC%D0%BE%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA-1-%D1%87%D0%B1.png');
  $('#content-first-image-itself');
  $('#content-second-image-itself').attr('src', 'images/%D0%98%D0%9D%D0%A2%D0%95%D0%A0%D0%AC%D0%95%D0%A0%D0%9D%D0%90%D0%AF--%D0%9F%D0%95%D0%A7%D0%90%D0%A2%D0%AC.png');
  $('#content-third-image-itself').attr('src', 'images/%D0%9D%D0%90%D0%A0%D0%A3%D0%96%D0%9D%D0%90%D0%AF-%D0%A0%D0%95%D0%9A%D0%9B%D0%90%D0%9C%D0%90.png');
  $('#content-fourth-image-itself').attr('src', 'images/%D0%A8%D0%98%D0%A0%D0%9E%D0%A4%D0%9E%D0%A0%D0%9C%D0%90%D0%A2%D0%9D%D0%90%D0%AF-%D0%9F%D0%95%D0%A7%D0%90%D0%A2%D0%AC.png');

})
$('#wrapper-id').on('change_2', function () {
  $('#background-image').fadeOut(700, function () {
    $('#background-image').attr('src', 'images/%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D1%8C%D0%B5%D1%80%D0%BD%D0%B0%D1%8F%20%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D1%8C%20%D1%84%D0%BE%D0%BD.jpg');
    $('#background-image').fadeIn(700)
  })
  $('#first-headline-id').fadeOut(700, function () {
    $('#first-headline-id').html('ИНТЕРЬЕРНАЯ ПЕЧАТЬ');
    $('#first-headline-id').fadeIn(700);
  })
  $('#second-headline-id').fadeOut(700, function () {
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
  $('#content-second-image-itself').attr('src', 'images/%D0%9F%D1%80%D1%8F%D0%BC%D0%BE%D1%83%D0%B3%D0%BE%D0%BB%D1%8C%D0%BD%D0%B8%D0%BA-2-%D1%87%D0%B1.png');
  $('#content-first-image-itself').attr('src', 'images/%D0%A1%D0%BB%D0%BE%D0%B9-56.png');
  $('#content-third-image-itself').attr('src', 'images/%D0%9D%D0%90%D0%A0%D0%A3%D0%96%D0%9D%D0%90%D0%AF-%D0%A0%D0%95%D0%9A%D0%9B%D0%90%D0%9C%D0%90.png');
  $('#content-fourth-image-itself').attr('src', 'images/%D0%A8%D0%98%D0%A0%D0%9E%D0%A4%D0%9E%D0%A0%D0%9C%D0%90%D0%A2%D0%9D%D0%90%D0%AF-%D0%9F%D0%95%D0%A7%D0%90%D0%A2%D0%AC.png');

});



$('#content-first-image').on('click', function () {
  var change_1 = new jQuery.Event('change_1');
  $('#wrapper-id').trigger(change_1);
});
$('#content-second-image').on('click', function () {
  var change_2 = new jQuery.Event('change_2');
  $('#wrapper-id').trigger(change_2);
  flag_check = false;
  flag_check2 = true;
})