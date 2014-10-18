function changeTypeCartouche() {
	var choice = $("#type option:selected").attr('value');
	$("#cartouche2").hide();
	$("#cartouche1").show();
	if (choice == "procedure") {
		$("label[for='sortie']").text("Paramètre de sortie");
		$("#blocPostCond").show();
		$("#addParamSortie").show();

		$("#blocSortie a.moins").show();
		$("#blocSortie a.plus").show();

	} else if (choice == "fonction") {
		$("label[for='sortie']").text("Retourne");
		$("#blocPostCond").hide();
		$("#addParamSortie").hide();

		$("#blocSortie a.moins").hide();
		$("#blocSortie a.plus").hide();

		if (!$("#blocSortie textarea").length) {//Correction du bug découvert par Simon : retourne sans champ
			var nouvEntree = document.createElement("textarea");
			var br = document.createElement("br");
			nouvEntree.setAttribute("placeholder", "Retourne");
			nouvEntree.setAttribute("class", "form-control");
			nouvEntree.setAttribute("cols", "40");
			nouvEntree.setAttribute("rows", "1");
			nouvEntree.setAttribute("name", "sortie1");
			$("#blocSortie").append(nouvEntree);
			$("#blocSortie").append(br);
			$("#blocSortie textarea:last").hide().fadeIn("slow");
		}
	} else {
		$("#cartouche1").hide();
		$("#cartouche2").show();
	}

}

function addInput(o) {
	var parent = $(o).parent();
	var br = document.createElement("br");

	var id = $(parent).attr("id");
	var name;
	var placeholder;

	switch(id) {
	case "blocEntree":
		name = "entree";
		placeholder = "Paramètre d'entrée";
		break;

	case "blocSortie":
		name = "sortie";
		placeholder = "Paramètre de sortie";
		break;

	case "blocPreCond":
		name = "precondition";
		placeholder = "Pre-condition";
		break;

	case "blocPostCond":
		name = "postcondition";
		placeholder = "Post-condition";
		break;
	}
	
	var lastName = $("#" + id + " textarea:last").attr("name");
	if (lastName) {
		var number = lastName.replace(name, "");
		number++;
	} else {
		var number = 1;
		$("#"+id+ " br").remove();
	}
	if (number > 10)
		return;
	var nouvEntree = document.createElement("textarea");
	nouvEntree.setAttribute("placeholder", placeholder);
	nouvEntree.setAttribute("class", "form-control");
	nouvEntree.setAttribute("cols", "40");
	nouvEntree.setAttribute("rows", "1");
	nouvEntree.setAttribute("name", name + number);
	$("#" + id).append(nouvEntree);
	$("#" + id).append(br);
	$("#" + id + " textarea:last").hide().fadeIn("slow");

	var id = $(parent).attr("id");
	$("#" + id + " a.moins").show();

}

$(function() {

	$("a.plus").click(function() {
		addInput(this);
	});

});

function removeInput(o) {
	var parent = $(o).parent();
	var id = $(parent).attr("id");
	$("#" + id + " textarea:last").remove();
	if (!$("#" + id + " textarea").length) {
		$("#" + id + " a.moins").hide();
		var br = document.createElement("br");
		$("#"+id).append(br);
	} else {
		$("#" + id + " br:last").remove();
	}
}

$(function() {
	$("a.moins").click(function() {
		removeInput(this);
	});
});

//Pour afficher correctement le formulaire lors de l'actualisation
$(function() {
	changeTypeCartouche();
});
