<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		function date() {
		   $.ajax({
		      type: "GET",
		      url: "ladate.php"
		   }).done(function (html) {
		      $('#oui').html(html); // Retourne dans #maDiv le contenu de ta page
		      setTimeout(date, 1000);
		   });
		}      
		date();
	</script>
</head>
<body>
<div id="oui">

</div>

</body>
</html>
