// ======================================= INDEX ======================================= //
$(document).ready(function(){
	$("#history").mouseover(function(){
		$("#text-perfil").css("display", "block");
        $("#history-img").css("height", "70%");
	});

    $("#history").mouseout(function(){
		$("#text-perfil").css("display", "none");
        $("#history-img").css("height", "80%");
	});
});