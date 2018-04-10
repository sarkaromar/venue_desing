let name = "Md. Monir hossain";
console.log(name);

$(document).ready(function(){
    $('.res-bar').click(function(){
        console.log("click")
        $('.top-nav').slideToggle();
    });
});