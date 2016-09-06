<?php
	echo "<div style ='font:100px Arial,tahoma,sans-serif;color:#000000'> FIN </div>";
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = localStorage.getItem('i_1');
	fwrite($myfile, $txt);
	$txt = "Jane Doe\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
