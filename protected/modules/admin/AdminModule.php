<?php

class AdminModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));

        $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        $this->layout = 'main';
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
            $controller->layout = 'main';
			return true;
		}
		else
			return false;
	}
}
