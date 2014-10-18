
        <nav class="navbar navbar-inverse"id="footer">
				<div >
      				<div class="container">
        				<p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
      				</div>
				</div>
    	</nav>


<script>

$(function footer(){
		if($(window).height() >= $("body").height()){
			//$("body").css("height",$(window).height());
			$("#footer").css({"position": "absolute","bottom": "0","width":"100%","margin-bottom":"0px"});
		}
});

</script>