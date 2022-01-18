var animation = bodymovin.loadAnimation({
    container: document.getElementById('navbarlogo'),
    rederer: 'svg',
    loop: false,
    autoplay: false,
    path: 'js/data_navbarlogo.json'
    
});

var animation = bodymovin.loadAnimation({
    container: document.getElementById('navbarlogomotion'),
    rederer: 'svg',
    loop: true,
    autoplay: true,
    path: 'js/data_navbarlogo.json'
    
});

$('#navbarlogo').hover(function(){
    $('#navbarlogomotion').css({'opacity': 1})},
function(){
    $('#navbarlogomotion').css({'opacity': 0})
})

$('#navbarlogo').hover(function(){
    $('#navbarlogo').css({'opacity': 0})},
function(){
    $('#navbarlogo').css({'opacity': 1})
})
