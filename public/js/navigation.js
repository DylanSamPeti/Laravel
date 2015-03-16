$( document ).ready(function() {

$("#nav li a").click(function(event) {
var attr = $(this).data("scrollto");
if(attr != "no"){
event.preventDefault();

    $('html, body').animate({
        scrollTop: $("." + attr).offset().top
    }, 1000);


}

});
});