<?php
class EnvironmentProduction extends AbstractEnvironment {
	function EnvironmentProduction( $features ) {
		$this->setConf( $features );
	}
	
	function setConf( $features ) {
		$this->conf     = "This is PROD... be careful\n-----\n";
		$this->features = $features;
	}
}
?>

