// ======================================= INDEX ======================================= //
$(".history").mouseover(function() {
	$(this).find(".text-perfil").css("display", "block");
	$(this).find(".history-img").css("height", "70%");
});

$(".history").mouseout(function() {
	$(this).find(".text-perfil").css("display", "none");
	$(this).find(".history-img").css("height", "80%");
});