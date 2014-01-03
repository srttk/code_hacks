<HTML>
<HEAD>
	<TITLE>Welcome to the test Page</TITLE>
	<SCRIPT type="text/javascript">
		window.onbeforeunload = function(event) {
			
			if (hasData()) {
				return "You entered information in the page. Are you sure you want to leave now?"; // Very important
			}
		}
		
		function hasData() {
			var someThing = document.getElementById("someThing");
			
			if (someThing.value != "") {
				return true;
			}		
			
			return false;
		}
	</SCRIPT>
	
</HEAD>
<BODY>
	<H1>Welcome to the test page</H1>
	
	<FORM>
		<LABEL for="someThing">Enter something here:</LABEL>
		<INPUT type="text" id="someThing"/>
	</FORM>
</BODY>
</HTML>