<?php

class hasil
{
	function tampil(){
		$lines = file('pesan.txt'); 

		foreach ($lines as $line_num => $line){
			echo "-" . $line . "<br />\n"; 
		}
	}
}

?>
