<?php
class EnvironmentMaintenance extends AbstractEnvironment {
	function EnvironmentMaintenance( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "MAINTENANCE... no donut for you\n-----\n";
		$this->features = $features;
	}
}
?>

