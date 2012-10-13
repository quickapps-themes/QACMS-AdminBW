<?php
class InstallComponent extends Component {
	public $Installer;

	public function beforeInstall() {
		return true;
	}

	function afterInstall() {
		return true;
	}

	public function beforeUninstall() {
		return true;
	}

	public function afterUninstall() {
		return true;
	}
}