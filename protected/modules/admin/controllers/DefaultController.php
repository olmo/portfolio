<?php

class DefaultController extends CController
{
    // public $layout='//layouts/login';

	public function actionIndex()
	{
        $this->layout = 'login';

		$this->render('index');
	}
}