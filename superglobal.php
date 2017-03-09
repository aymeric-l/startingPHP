<!DOCTYPE html>
<html>
<head>
	<title>SUPERGLOBAL</title>
</head>
<body>
<?php 
echo 'Nom du serveur : '.$_SERVER['SERVER_NAME'];
echo "<br>";
echo 'L\'user agent : '.$_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo 'L\'adresse IP : '.$_SERVER['SERVER_ADDR'];
?>

</body>
</html>