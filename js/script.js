// var expandTrigger= document.getElementsByClassName('"expander-trigger');
// var expandArea= document.getElementsByClassName('expanding-area');
//
// expandTrigger.addEventListener("click" ,function (event){
//     event.expandArea.classList.toggle('show');
// });


$(document).ready(function() {

	$("#expander-trigger").click(function(event) {
		event.preventDefault();
		$("#expanding-area").toggleClass("open");
	});
});
