// -- EXPAND ELEMENTS ----------------------------------------------------------

var expandTrigger= document.getElementsByClassName('expander-trigger');
var expandArea= document.getElementsByClassName('expanding-area');
var icon = document.getElementsByClassName("icon-handle");
var framgangsfaktor = document.getElementsByClassName("framgangsfaktor");
var framgangsfaktorTrigger= document.getElementsByClassName('framgangsfaktor-trigger');

for (var i = 0; i<expandTrigger.length; i++){
    expandTrigger[i].addEventListener("click" ,function expander (event){
    this.parentNode.childNodes[3].classList.toggle('show');
    this.firstElementChild.classList.toggle('expander-modifier');

});}

for (var i = 0; i<framgangsfaktorTrigger.length; i++){
    framgangsfaktorTrigger[i].addEventListener("click" ,function framgangsfaktor (event){
    this.parentNode.childNodes[3].classList.toggle('show');
    this.classList.toggle('expander-modifier');

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



<<<<<<< HEAD

// Carousel


// (function() {
//
//   // store the slider in a local variable
//   var window = jQuery(window),
//       flexslider = { vars:{} };
//
//   // tiny helper function to add breakpoints
//   function getGridSize() {
//     return (window.innerWidth < 600) ? 2 :
//            (window.innerWidth < 900) ? 3 : 4;
//   }
//
//   (function() {
//     SyntaxHighlighter.all();
//   });
//
//    window.load(function() {
//     jQuery('.flexslider').flexslider({
//       animation: "slide",
//       animationLoop: false,
//       itemWidth: 100,
//       itemMargin: 5,
//       minItems: getGridSize(), // use function to pull in initial value
//       maxItems: getGridSize() // use function to pull in initial value
//     });
//   });
//
//   // check grid size on resize event
//    window.resize(function() {
//     var gridSize = getGridSize();
//
//     flexslider.vars.minItems = gridSize;
//     flexslider.vars.maxItems = gridSize;
//   });
// }());


//https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_slideshow_self
// var wwidth = window.innerWidth;
//
// var slideIndex = 1;
// showDivs(slideIndex);
//
// function plusDivs(n) {
//   showDivs(slideIndex += n);
// }
//
// function showDivs(n) {
//   var i;
//   var x = document.getElementsByClassName("singleProjectSlider");
//   if (n > x.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = x.length}
//   for (i = 0; i < x.length; i++) {
//      x[i].style.display = "none";
//   }
//   x[slideIndex-1].style.display = "block";
=======
-- CATEGORY ICONS
var filters = document.getElementsByClassName('filters-form');
var iconArea = document.getElementsByClassName('icon-area');
var topic_bike = document.getElementsByClassName('cat-item-14');

var categoryTrigger = document.querySelector(".filters-form").querySelectorAll("h4");
var iconArea = document.querySelector(".filters-form").querySelectorAll("h4");

// var timelow = document.getElementsByClassName('cat-item-23').classList.add('icon');

for (var i = 0; i<categoryTrigger.length; i++){
    categoryTrigger[i].addEventListener("click" ,function (event){
    event.currentTarget.nextElementSibling.classList.toggle('show');
});}


// // -- Scroll icon anmiation only when overflow scroll available
// var scrollarea = document.getElementsByClassName('scroll-y');
// var scrollicon = document.getElementsByClassName('fa fa-arrow-circle-down');
//
//
//
// if (jQuery("scrollarea").prop('scrollWidth') > jQuery("scrollarea").width() ) {
//   this.classList.toggle('show');
// }
// else {
//  alert("this element is not overflowing!!");
>>>>>>> 0c17a95d126edf9b3763a875c6ed5b3fcf192b17
// }
