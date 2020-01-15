import $ from 'jquery';
window.$ = window.jQuery = $;

$(function(){
    $('a.menu').click(function(){
       $('#footer').toggleClass('menu-hidden');
    });
});