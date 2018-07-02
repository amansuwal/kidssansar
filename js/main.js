$(document).ready(function () {
    var adHeight = $('.ad').height() + 5;
    var headerHeight = $('.main-header').height() + 5;
    $('.sub-menu').css('top', adHeight + headerHeight);

    $('.fas').click(function () {
       if ($(this).parent('.toggle-expand').hasClass('expand')) {
           $(this).parent('.toggle-expand').removeClass('expand');
       } else {
           $('.toggle-expand').removeClass('expand');
           $(this).parent('.toggle-expand').addClass('expand');
       }
    });
});