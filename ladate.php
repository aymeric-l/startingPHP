<?php 
	$laDate = strftime('%A %d %B %Y, %H:%M:%S');
	echo '<h1 style ="color:red; font-size:75px">'.$laDate.'</h1>';
	echo 'Timestamp du jour : '. time().'</br>';
	echo 'Timestamp du mardi 2 mars 2016, 15h34m12s : '. mktime(15, 34, 12, 3, 2, 2016);
?>
