// jQuery(document).ready(function ($) {
//
//   $('#checkbox').change(function(){
//     setInterval(function () {
//         moveRight();
//     }, 3000);
//   });
//
//     var slideCount = $('#slider ul li').length;
//     var slideWidth = $('#slider ul li').width();
//     var slideHeight = $('#slider ul li').height();
//     var sliderUlWidth = slideCount * slideWidth;
//
//     $('#slider').css({ width: slideWidth, height: slideHeight });
//
//     $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
//
//     $('#slider ul li:last-child').prependTo('#slider ul');
//
//     function moveLeft() {
//         $('#slider ul').animate({
//             left: + slideWidth
//         }, 200, function () {
//             $('#slider ul li:last-child').prependTo('#slider ul');
//             $('#slider ul').css('left', '');
//         });
//     };
//
//     function moveRight() {
//         $('#slider ul').animate({
//             left: - slideWidth
//         }, 200, function () {
//             $('#slider ul li:first-child').appendTo('#slider ul');
//             $('#slider ul').css('left', '');
//         });
//     };
//
//     $('a.control_prev').click(function () {
//         moveLeft();
//     });
//
//     $('a.control_next').click(function () {
//         moveRight();
//     });
//
// });
var feedbackBtn = document.querySelector('.company-feedback-btn');
var feedbackPopup = document.querySelector('.feedback');
var feedbackClose = document.querySelector('.feedback-close');
var feedbackCancel = document.querySelector('.feedback-cancel');

if(feedbackPopup != null &&
    feedbackClose != null &&
    feedbackCancel != null) {
    // добавляем событие на элемент
    feedbackBtn.addEventListener('click', function (event) {
       // прерываем событие по умолчанию
        event.preventDefault();
        // Добавляем класс
        // classList - объект для работы с классами
        feedbackPopup.classList.add('show-block');
    });

    feedbackClose.addEventListener('click', function (event) {
        event.preventDefault();
        feedbackPopup.classList.remove('show-block');
    })

    feedbackCancel.addEventListener('click', function (event) {
        event.preventDefault();
        feedbackPopup.classList.remove('show-block');
    })

    window.addEventListener('keydown', function (event) {
        if(event.keyCode == 27) {
            feedbackPopup.classList.remove('show-block');
        }
    });

    window.addEventListener('click', function (event) {
        if (event.target.closest(".show-block")) {
            feedbackPopup.classList.remove('show-block');
        }
    });
}

/*var catalogBtn = document.querySelector('.catalog-button');
var catalogBuy = document.querySelector('.cart-notification');

if(catalogBuy != null && catalogBtn !=null) {
    catalogBtn.addEventListener('click', function (event) {
        event.preventDefault();
        catalogBuy.classList.add('show-block');
    });
}*/

var catalogBtn = document.querySelectorAll('.catalog-item-buy');
var catalogBuy = document.querySelector('.cart-notification');
var catalogClose = document.querySelector('.cart-notification-close');
var catalogCancel = document.querySelector('.cart-cancel-btn');
var catalogOrder = document.querySelector('.cart-order-btn');


for (i = 0; i < catalogBtn.length; ++i) {
    catalogBtn[i].addEventListener("click", function (event) {
        event.preventDefault(event);
        catalogBuy.classList.add("show-block");
    })
}
catalogClose.addEventListener('click', function (event) {
    event.preventDefault();
    catalogBuy.classList.remove('show-block');
})
catalogCancel.addEventListener('click', function (event) {
    event.preventDefault();
    catalogBuy.classList.remove('show-block');
})

catalogOrder.addEventListener('click', function (event) {
    event.preventDefault();
     window.location.href='catalog.html';
})