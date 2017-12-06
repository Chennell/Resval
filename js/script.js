// -- EXPAND ELEMENTS ----------------------------------------------------------

var expandTrigger= document.getElementById('expander-trigger');
var expandArea= document.getElementById('expanding-area');
var icon = document.getElementsByClassName("icon-handle");

expandTrigger.addEventListener("click" ,function (event){
    expandArea.classList.toggle('show');
    // icon.style.

});


// $(document).ready(function() {
//
// 	$("#expander-trigger").click(function(event) {
// 		event.preventDefault();
// 		$("#expanding-area").toggleClass("open");
// 	});
// });

// document.addEventListener('DOMContentLoaded', el.classList.add)='slide'

// -- FLEX SLIDER --------------------------------------------------------------
//-- code taken from: http://flexslider.woothemes.com/basic-carousel.html
jQuery(window).load(function() {
  jQuery('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemMargin: 5,
    prevText: "&#8592;",
    nextText: "&#8594;"
  });
});
