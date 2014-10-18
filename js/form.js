function changeType(){
	choice=$("#type").selectIndex();
	if(choice == "procedure"){
		$("label[for='sortie']").text("Paramètre de sortie");
	}else if(choice == "fonction"){
		$("label[for='sortie']").text("Retourne");
	}
	alert("Coucou");
}
