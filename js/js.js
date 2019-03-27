$("#btn-add").click(function(event) {
	event.preventDefault();
	$(this).toggleClass("rotar");
	$("#boardAdd").toggleClass("show");
	$("#boardEdit").removeClass("show");
});

$("#board").on("click",".edit", function(event) {
	event.preventDefault();
	$("#boardEdit").toggleClass("show");
	$("#boardAdd").removeClass("show");
	$("#btn-add").removeClass("rotar");
});

$("#boardEdit").on("click","#cancel-edit", function(event) {
	event.preventDefault();
	$("#boardEdit").scrollTop(0);
	$("#boardAdd").scrollTop(0);
	$("#boardEdit").removeClass("show");
	$("#boardAdd").removeClass("show");
	$("#btn-add").removeClass("rotar");
});

$("#boardAdd").on("click","#cancel-add", function(event) {
	event.preventDefault();
	$("#btn-add").toggleClass("rotar");
	$("#boardEdit").scrollTop(0);
	$("#boardAdd").scrollTop(0);
	$("#frm-add")[0].reset();
	$("#boardEdit").removeClass("show");
	$("#boardAdd").removeClass("show");
	$("#btn-add").removeClass("rotar");
});
