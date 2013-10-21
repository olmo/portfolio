<?php

class DefaultController extends CController
{
    //public $layout='//layouts/main';

	public function actionIndex()
	{
		$this->render('index');
	}
}