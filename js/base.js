// Arquivo JS base para todas as páginas

// Clique no menu para descer para seção com animação suave
var menu_principal = $("#barra-navegacao ul li"),
tamanho_menu_principal = 80;

// offset
menu_principal.click(function(e){
    // pega os links
    var href = $(this).children().attr("href");
    // divide a string presente nos links
    var temp = href.split('#');
    // deixa apenas a div alvo, para encontrar o offset certo
    var href = "#" + temp[1];
    // distância do offset
    if(href == "#"){
        var offset = 0;
    }else{
        var offset = $(href).offset().top-tamanho_menu_principal;
    }

    jQuery('html, body').stop().animate({
        scrollTop: offset
    }, 1500)
    e.preventDefault();

});

$(document).ready(function(){
    $('#carousel').slick({
        autoplay: true,
        autoplaySpeed: 5000,
    });
});
