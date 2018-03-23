
<?php
class SystemComponent{
	private $settings;
	function getSetting(){
			$settings['dbusername']='root';
			$settings['dbpassword']='root'; 
			$settings['dbname']='faucet2';
			$settings['dbhost']='localhost';
			return $settings;
	}
}