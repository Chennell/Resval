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
    this.classList.toggle('framgangsfaktor-open');
    this.classList.toggle('framgangsfaktor-modifier');
    click = true;
});}



// -- FLEX SLIDER --------------------------------------------------------------
//-- code taken from: http://flexslider.woothemes.com/basic-carousel.html
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    // itemMargin: 5

  });
});



// -- CATEGORY ICONS
var filters = document.getElementsByClassName('filters-form');
var iconArea = document.getElementsByClassName('icon-area');

var categoryTrigger = document.querySelector(".filters-form").querySelectorAll("h4");
var iconArea = document.querySelector(".filters-form").querySelectorAll("h4");

// var timelow = document.getElementsByClassName('cat-item-23').classList.add('icon');

for (var i = 0; i<categoryTrigger.length; i++){
    categoryTrigger[i].addEventListener("click" ,function (event){
      var categoryTriggers = document.querySelector(".filters-form").querySelectorAll("h4");
      for (var i = 0; i<categoryTriggers.length; i++){
      if (categoryTriggers[i].classList.contains('item-color')){
          categoryTriggers[i].classList.remove('item-color');
      }
      if (categoryTriggers[i].nextElementSibling.classList.contains('show')){
          categoryTriggers[i].nextElementSibling.classList.remove('show');
      }
    }

    event.currentTarget.nextElementSibling.classList.toggle('show');
    event.currentTarget.classList.toggle('item-color');
});}


var cat_item = document.getElementsByClassName('cat-item');
function addClass(){
  for (var i=0; i < cat_item.length; i++){
    cat_item[i].classList.add("filter-icon" + (i + 1));
  }
}
addClass();







//--------------Hover on touch------------------------
//jQuery(document).ready(function() {
//    jQuery('.hover').bind('touchstart touchend', function(e) {
//        e.preventDefault();
//        jQuery(this).toggleClass('hover_effect');
//    });
//});
