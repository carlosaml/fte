<?php
class EnvironmentDevelopment extends Environment {
	function setConf( $features ) {
		$this->conf     = "DEV environment\n-----\n";
		$this->features = $features;
	}
}
?>
