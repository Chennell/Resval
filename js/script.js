// -- EXPAND ELEMENTS ----------------------------------------------------------

var expandTrigger= document.getElementById('expander-trigger');
var expandArea= document.getElementById('expanding-area');

expandTrigger.addEventListener("click" ,function (event){
    expandArea.classList.toggle('show');
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
    itemWidth: 210,
    itemMargin: 5
  });
});
