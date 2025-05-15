$(document).ready(function(){
    $(".faq-question").click(function(){
        $(this).next().slideToggle("slow");
    });
});