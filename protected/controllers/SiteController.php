<?php

class SiteController extends Controller
{
    public $titulo = '';
    public $flag = '';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
    {
        $this->titulo = 'Inicio';
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionAbout()
    {
        $this->layout = 'section';

        if(isset($_GET['lang'])){
            Yii::app()->session['lang']=$_GET['lang'];
        }

        if(!isset(Yii::app()->session['lang']))
            Yii::app()->session['lang']='spa';

        if(Yii::app()->session['lang']=='eng'){
            $this->titulo = 'About Us';
            $this->flag = 'SPA';
            $this->render('about_en');
        }
        else{
            $this->titulo = 'Sobre Nosotros';
            $this->flag = 'UK';
            $this->render('about');
        }
    }

    public function actionFaq()
    {
        $this->layout = 'section';

        if(isset($_GET['lang'])){
            Yii::app()->session['lang']=$_GET['lang'];
        }

        if(!isset(Yii::app()->session['lang']))
            Yii::app()->session['lang']='spa';

        if(Yii::app()->session['lang']=='eng'){
            $this->titulo = 'FAQ';
            $this->flag = 'SPA';
            $this->render('faq_en');
        }
        else{
            $this->titulo = 'FAQ';
            $this->flag = 'UK';
            $this->render('faq');
        }
    }

    public function actionCondiciones()
    {
        $this->layout = 'section';
        $this->titulo = 'Condiciones de venta';
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('condiciones');
    }

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
        $this->layout = 'section';
        $this->titulo = '404 - Página no encontrada';

		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
        $this->layout = 'main';
        $this->titulo = 'Contacto';

		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Gracias por contactar con nosotros. Le responderemos tan pronto como sea posible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

    public function actionGift()
    {
        $this->layout = 'main';
        $this->titulo = 'Regalos';

        $model = $this->loadModel($id);

        $criteria=new CDbCriteria(array(
            'distinct'=>true,
            'join'=> ' INNER JOIN obras_temas_relation ON obras_temas_relation.id_obra = t.id ',
            'condition'=>'obras_temas_relation.id_tema in (
                SELECT obras_temas_relation.id_tema FROM obras_temas_relation
                WHERE obras_temas_relation.id_obra='.$model->id.')',
            'order'=>'rand()',
            'offset'=>0,
            'limit' => 4,
        ));

        $related=new CActiveDataProvider('Obra', array('criteria'=>$criteria,'pagination'=>false,));

        $this->render('view',array(
            'model'=>$model,
            'related'=>$related,
            'formmodel'=>$form,
        ));


        $this->render('gift',array('model'=>$model));
    }

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}