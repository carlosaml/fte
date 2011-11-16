<?php
class EnvironmentDevelopment extends AbstractEnvironment {
	function EnvironmentDevelopment( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "DEV environment\n-----\n";
		$this->features = $features;
	}
}
?>

