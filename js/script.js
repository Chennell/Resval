// -- EXPAND ELEMENTS ----------------------------------------------------------

var expandTrigger= document.getElementsByClassName('expander-trigger');
var expandArea= document.getElementsByClassName('expanding-area');
var icon = document.getElementsByClassName("icon-handle");
var framgangsfaktor = document.getElementsByClassName("framgangsfaktor");
var framgangsfaktorTrigger= document.getElementsByClassName('framgangsfaktor-trigger');

for (var i = 0; i<expandTrigger.length; i++){
    expandTrigger[i].addEventListener("click" ,function (event){
    this.parentNode.childNodes[3].classList.toggle('show');
    this.firstElementChild.classList.toggle('expander-modifier');

});}

for (var i = 0; i<framgangsfaktorTrigger.length; i++){
    framgangsfaktorTrigger[i].addEventListener("click" ,function (event){
    this.parentNode.childNodes[3].classList.toggle('show');
    this.classList.toggle('expander-modifier');

});}



// -- FLEX SLIDER --------------------------------------------------------------
//-- code taken from: http://flexslider.woothemes.com/basic-carousel.html
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemMargin: 5
  });
});
