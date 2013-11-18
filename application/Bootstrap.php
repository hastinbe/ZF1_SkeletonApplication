<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	/**
	 * Initialize the auto loader
	 *
	 * @return Zend_Application_Module_Autoloader
	 */
	protected function _initAutoload()
	{
		$autoloader = new Zend_Application_Module_Autoloader(array(
			'namespace' => 'Default',
			'basePath' => dirname(__FILE__),
		));
		return $autoloader;
	}

	/**
	 * Initialize the layout helper. Allows loading module specific layouts
	 *
	 * @return void
	 */
	protected function _initLayoutHelper()
	{
		$this->bootstrap('frontController');
		$layout = Zend_Controller_Action_HelperBroker::addHelper(
			new Zoovio_Controller_Action_Helper_LayoutLoader());
	}
}