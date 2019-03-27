var id_to_delete = 0;
var element;

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

	$('#frm-editar').attr('action', './db/edit_juego.php?id='+$(this).attr("id"));

	$.ajax({
	    type: 'GET',
	    url: "db/load_editar.php?id="+$(this).attr("id"),
	    contentType: false,
	    processData: false,
	    cache: false, 
	    // Mostramos un mensaje con la respuesta de PHP
	    success: function(data) {
	      $('#frm-editar').empty();
	      $('#frm-editar').append(data);
	    }
	 });
  
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

$("#cancel-dialogo").click(function(event){
	event.preventDefault();
	$("#dialogo").removeClass("show");
	$("#opaque").removeClass("show");
	setTimeout("closeopaque()", 500);
});
$("#yes-dialogo").click(function(event){
	event.preventDefault();
	$("#dialogo").removeClass("show");
	$("#opaque").removeClass("show");
	setTimeout("closeopaque()", 500);
	//llamar ajax que elimina
	$.ajax({
	    type: 'GET',
	    url: "db/delete_juego.php?id="+id_to_delete,
	    contentType: false,
	    processData: false,
	    cache: false, 
	    // Mostramos un mensaje con la respuesta de PHP
	    success: function(data) {
	    	$("#alerta").text(data);
	      	$("#alerta").addClass("show");
	      	element.remove();
			setTimeout("closealert()", 2500);
	    }
	 });
});

function closeopaque(){
	$("#opaque").css('cssText', 'display: none;');
}

$("#board").on("click",".delete", function(event) {
	event.preventDefault();
	$("#opaque").css('cssText', 'display: inline-block;');
	$("#dialogo").addClass("show");
	$("#opaque").addClass("show");
	id_to_delete = $(this).attr("id");
	element = $(this).parent().parent();
});
$("#opaque").click(function(event){
	event.preventDefault();
	$("#dialogo").removeClass("show");
	$("#opaque").removeClass("show");
	setTimeout("closeopaque()", 500);
});

function closealert(){
	$("#alerta").removeClass("show");
}

$('#frm-editar').submit(function(event) {
  event.preventDefault();
  $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        // Mostramos un mensaje con la respuesta de PHP
        success: function(data) {
        	reloadData();
        	$("#boardEdit").scrollTop(0);
			$("#boardAdd").scrollTop(0);
			$("#boardEdit").removeClass("show");
			$("#boardAdd").removeClass("show");
			$("#btn-add").removeClass("rotar");
           	$("#alerta").text("¡Editado correctamente!");
	      	$("#alerta").addClass("show");
			setTimeout("closealert()", 2500);        }
    })        
    return false;
}); 


$('#frm-add').submit(function(event) {
  event.preventDefault();
  $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: $(this).serialize(),
        // Mostramos un mensaje con la respuesta de PHP
        success: function(data) {
        	reloadData();
        	$("#btn-add").toggleClass("rotar");
			$("#boardEdit").scrollTop(0);
			$("#boardAdd").scrollTop(0);
			$("#frm-add")[0].reset();
			$("#boardEdit").removeClass("show");
			$("#boardAdd").removeClass("show");
			$("#btn-add").removeClass("rotar");
           	$("#alerta").text("¡Agregado correctamente!");
	      	$("#alerta").addClass("show");
			setTimeout("closealert()", 2500);        }
    })        
    return false;
}); 

function reloadData(){
	$.ajax({
	    type: 'GET',
	    url: "./content/elemento.php",
	    // Mostramos un mensaje con la respuesta de PHP
	    success: function(data) {
	    	$("#board").empty();
	      	$("#board").append(data);
	    }
	 });
}