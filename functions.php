<?php

//Socket Test function
function stest($ip, $portt) {
	$fp = @fsockopen($ip, $portt, $errno, $errstr, 0.1);
	if (!$fp) {
		//print "Error: $errstr </br> Error #: $errno </br>"; //Troubleshooting line
		return false;
	} else {
		fclose($fp);
		return true;
	}
}

?>