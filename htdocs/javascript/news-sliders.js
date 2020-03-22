jQuery(document).ready(function ($) {

    var interval = setInterval(function () {
        moveRight();
    }, 4000);
  
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider').width();
    var slideHeight = $('#slider').height();
    var sliderUlWidth = slideCount * slideWidth;
    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    var percentWidth = 100.0 / slideCount;
    $('#slider ul li').css("width", percentWidth + "%");
    
    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        slideWidth = $('#slider').width();
	    slideHeight = $('#slider').height();
	    sliderUlWidth = slideCount * slideWidth;

	    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

        $('#slider ul').animate({
            left: + slideWidth
        }, 500, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
    	slideWidth = $('#slider').width();
	    slideHeight = $('#slider').height();
	    sliderUlWidth = slideCount * slideWidth;
	    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

        $('#slider ul').animate({
            left: - slideWidth
        }, 500, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
        clearInterval(interval);
        interval = setInterval(function () {
            moveRight();
        }, 4000);
    });

    $('a.control_next').click(function () {
        moveRight();
        clearInterval(interval);
        interval = setInterval(function () {
            moveRight();
        }, 4000);
    });

});






$( window ).resize(function() {
    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider').width();
    var slideHeight = $('#slider').height();
    var sliderUlWidth = slideCount * slideWidth;
    $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
});