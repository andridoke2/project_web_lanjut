$(".nav-link .menu").click(function() {
	$(".nav-link .menu").removeClass("active");
	$(this).addClass("active");
});

// $(function() {
// 	$(".nav-link .menu").on("click", function() {
// 		$(this)
// 			.parent()
// 			.find("a.active")
// 			.removeClass("active");
// 		$(this).addClass("active");
// 	});
// });
