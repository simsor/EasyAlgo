function changeTypeCartouche(){
  var choice=$("#type option:selected").attr('value');
  $("#cartouche2").hide();
  $("#cartouche1").show();
  if(choice == "procedure"){
    $("label[for='sortie']").text("Paramètre de sortie");
    $("#blocPostCond").show();
    $("#addParamSortie").show();
    
    $("#blocSortie a.moins").show();
    $("#blocSortie a.plus").show();
    
  }else if(choice == "fonction"){
    $("label[for='sortie']").text("Retourne");
    $("#blocPostCond").hide();
    $("#addParamSortie").hide();
    
    $("#blocSortie a.moins").hide();
    $("#blocSortie a.plus").hide();
    
    if(!$("#blocSortie textarea").length){ //Correction du bug découvert par Simon : retourne sans champ
    	var nouvEntree = document.createElement("textarea");
    	nouvEntree.setAttribute("placeholder", "Retourne");
   		nouvEntree.setAttribute("class", "form-control");
    	nouvEntree.setAttribute("cols", "40");
    	nouvEntree.setAttribute("rows", "1");
   	 	nouvEntree.setAttribute("name", "sortie1");
    	$("#blocSortie").append(nouvEntree);
    	$("#blocSortie").append(br);
    	$("#blocSortie textarea:last").hide().fadeIn("slow");
    }
  }else{
    $("#cartouche1").hide();
    $("#cartouche2").show();
  }

}

function addInput(o){
  var parent = $(o).parent();
  var br = document.createElement("br");
  switch(parent.attr("id"))
  {
    case "blocEntree":
    var lastName = $("#blocEntree textarea:last").attr("name");
    if(lastName){
    	var number = lastName.replace("entree", "");
    }else{
    	var number = 1;
    }
    number++;
    if (number > 10)
      return;
    var nouvEntree = document.createElement("textarea");
    nouvEntree.setAttribute("placeholder", "Paramètre en Entrée");
    nouvEntree.setAttribute("class", "form-control");
    nouvEntree.setAttribute("cols", "40");
    nouvEntree.setAttribute("rows", "1");
    nouvEntree.setAttribute("name", "entree"+number);
    $("#blocEntree").append(nouvEntree);
    $("#blocEntree").append(br);
    $("#blocEntree textarea:last").hide().fadeIn("slow");
    break;

    case "blocSortie":
    var lastName = $("#blocSortie textarea:last").attr("name");
    if(lastName){
    	var number = lastName.replace("entree", "");
    }else{
    	var number = 1;
    }
    number++;
    if (number > 10)
      return;
    var nouvEntree = document.createElement("textarea");
    nouvEntree.setAttribute("placeholder", "Paramètre en Sortie");
    nouvEntree.setAttribute("class", "form-control");
    nouvEntree.setAttribute("cols", "40");
    nouvEntree.setAttribute("rows", "1");
    nouvEntree.setAttribute("name", "sortie"+number);
    $("#blocSortie").append(nouvEntree);
    $("#blocSortie").append(br);
    $("#blocSortie textarea:last").hide().fadeIn("slow");
    break;

    case "blocPreCond":
    var lastName = $("#blocPreCond textarea:last").attr("name");
    if(lastName){
    	var number = lastName.replace("entree", "");
    }else{
    	var number = 1;
    }
    number++;
    if (number > 10)
      return;
    var nouvEntree = document.createElement("textarea");
    nouvEntree.setAttribute("placeholder", "Pré-condition");
    nouvEntree.setAttribute("class", "form-control");
    nouvEntree.setAttribute("cols", "40");
    nouvEntree.setAttribute("rows", "1");
    nouvEntree.setAttribute("name", "precondition"+number);
    $("#blocPreCond").append(nouvEntree);
    $("#blocPreCond").append(br);
    $("#blocPreCond textarea:last").hide().fadeIn("slow");
    break;

    case "blocPostCond":
    var lastName = $("#blocPostCond textarea:last").attr("name");
    if(lastName){
    	var number = lastName.replace("entree", "");
    }else{
    	var number = 1;
    }
    number++;
    if (number > 10)
      return;
    var nouvEntree = document.createElement("textarea");
    nouvEntree.setAttribute("placeholder", "Post-condition");
    nouvEntree.setAttribute("class", "form-control");
    nouvEntree.setAttribute("cols", "40");
    nouvEntree.setAttribute("rows", "1");
    nouvEntree.setAttribute("name", "postcondition"+number);
    $("#blocPostCond").append(nouvEntree);
    $("#blocPostCond").append(br);
    $("#blocPostCond textarea:last").hide().fadeIn("slow");
    break;

    case "blocPreCond":
    var lastName = $("#blocPreCond textarea:last").attr("name");
    if(lastName){
    	var number = lastName.replace("entree", "");
    }else{
    	var number = 1;
    }
    number++;
    if (number > 10)
      return;
    var nouvEntree = document.createElement("textarea");
    nouvEntree.setAttribute("placeholder", "Pré-condition");
    nouvEntree.setAttribute("class", "form-control");
    nouvEntree.setAttribute("cols", "40");
    nouvEntree.setAttribute("rows", "1");
    nouvEntree.setAttribute("name", "precondition"+number);
    $("#blocPreCond").append(nouvEntree);
    $("#blocPreCond").append(br);
    $("#blocPreCond textarea:last").hide().fadeIn("slow");
    break;

  }
  
  var id = $(parent).attr("id");
  $("#"+id+" a.moins").show();
  
}

$(function() {

  $("a.plus").click(function(){
    addInput(this);
  });

});

function removeInput(o){
	var parent = $(o).parent();
	var id = $(parent).attr("id");
	$("#"+id+" textarea:last").remove();
	$("#"+id+" br:last").remove();
	if(!$("#"+id+" textarea").length){
		$("#"+id+" a.moins").hide();
	}
}

$(function (){
	$("a.moins").click(function(){
		removeInput(this);
	});
});

//Pour afficher correctement le formulaire lors de l'actualisation
$(function(){
	changeTypeCartouche();
} );
