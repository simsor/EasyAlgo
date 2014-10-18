
        <nav class="navbar navbar-inverse"id="footer">
				<div >
      				<div class="container">
        				<p class="text-muted credit">Réalisé par Courtin, Garrelou, Jarrige, Imbert, Tricard</p>
        				<p class="text-muted credit">Avec PhP, Boutstrap, Aptana, Sublime Text 2, JQuery</p>
        				<p class="text-muted credit">Dans le cadre du Limoges Hack 2014© organisé par l'association de l'OEIL (Organisation des Etudiants en Informatique de Limoges) </p>
      				</div>
				</div>
    	</nav>


<script>

$(function footer(){
		if($(window).height() >= $("body").height()){
			$("#footer").css({"position": "absolute","bottom": "0"});
		}
		$("#footer").css({"width":"100%","margin-bottom":"0px"});
});

</script>