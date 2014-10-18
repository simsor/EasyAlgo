function changeTypeCartouche(){
	var choice=$("#type option:selected").attr('value');
	$("#cartouche2").hide();
	$("#cartouche1").show();
	if(choice == "procedure"){
		$("label[for='sortie']").text("Paramètre de sortie");
		$(".postCond").show();
		$("#addParamSortie").show();
	}else if(choice == "fonction"){
		$("label[for='sortie']").text("Retourne");
		$(".postCond").hide();
		$("#addParamSortie").hide();
	}else{
		$("#cartouche1").hide();
		$("#cartouche2").show();
	}

}

function addInput(o){
	alert($(o).attr("id"));
}

$("input[type='button']").click(function() { addInput(this); } );
