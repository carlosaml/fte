<?php
class EnvironmentMaintenance extends Environment {
	function setConf( $features ) {
		$this->conf     = "MAINTENANCE... come back later\n-----\n";
		$this->features = $features;
	}
}
?>

