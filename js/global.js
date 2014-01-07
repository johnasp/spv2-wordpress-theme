$("section").fitVids();

//Used to fade homepage subscription option out for mobile view
$("#hide").click(function(){
	$("#listen").fadeOut();
});

//Toggle <body> class on and off for showing the filter nav
$("#show-hide-nav").on("click",function() {
	$("body").toggleClass("show-filter-nav");
})


