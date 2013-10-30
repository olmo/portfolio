<?php

class BlogController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/section';
    public $titulo='';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $this->titulo = 'Blog';

        $form = new BlogComentario;

        if(isset($_POST['BlogComentario']))
        {
            $form->attributes=$_POST['BlogComentario'];
            if($form->save()){
                Yii::app()->user->setFlash('contact','Su comentario ha sido publicado.');
                $this->refresh();
            }
        }

		$this->render('view',array(
			'model'=>$this->loadModel($id),
            'formComentario'=>$form,
		));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->titulo = 'Blog';

        $criteria=new CDbCriteria(array(
            'order'=>'fecha_publicacion DESC',
        ));

		$dataProvider=new CActiveDataProvider('BlogEntrada', array(
            'pagination'=>array(
                'pageSize'=>5,
            ),
            'criteria'=>$criteria,
        ));

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}



	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Entrada the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BlogEntrada::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

}
