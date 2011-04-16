<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	function _initViewHelpers()
	{	
		$this->bootstrap('layout');
		$layout = $this->getResource('layout');
		$view = $layout->getView();
		
		$view->doctype('HTML5');
		
		// Meta tags
		$view->headMeta()->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');
		
		// Set title
		$view->headTitle("Jon is gay lololololol");
	}

}

