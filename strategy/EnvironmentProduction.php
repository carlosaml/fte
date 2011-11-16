<?php
class EnvironmentProduction extends Environment {
	function setConf( $features ) {
		$this->conf     = "HOT STUFF! Be careful!\n-----\n";
		$this->features = $features;
	}
}
?>

