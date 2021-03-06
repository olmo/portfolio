<?php

class ArtistasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout='//layouts/section';
    public $titulo = '';

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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
        $model=new Artistas;  // este es el modelo relacionado a la tabla
        if(isset($_POST['Artistas']))
        {
            $rnd = rand(0,9999);  // Generamos un numero aleatorio entre 0-9999
            $model->attributes=$_POST['Artistas'];
            
            $uploadedFile=CUploadedFile::getInstance($model,'imagen');
            $fileName = "{$rnd}-{$uploadedFile}";  // numero aleatorio  + nombre de archivo
            $model->imagen = $fileName;
            
            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/artistas/'.$fileName);  // la imagen se subirá a la carpeta raiz /banner/
                $this->redirect(array('admin'));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
        $model=$this->loadModel($id);

        if(isset($_POST['Artistas']))
        {
            $_POST['Artistas']['imagen'] = $model->imagen;
            $model->attributes=$_POST['Artistas'];

            $uploadedFile=CUploadedFile::getInstance($model,'imagen');

            if($model->save())
            {
                if(!empty($uploadedFile))  // checkeamos si el archivo subido esta seteado o no
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../images/artistas/'.$model->imagen);
                }
                $this->redirect(array('admin'));
            }

            if($model->save())
                $this->redirect(array('admin'));
        }

        $this->render('update',array(
             'model'=>$model,
        ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->titulo='Artistas';
        $model = $this->loadModel($id);


        $criteria=new CDbCriteria(array(
            'condition'=>'publicado=1 AND id_artista='.$model->id,
        ));

        $related = new CActiveDataProvider('Obra', array('criteria'=>$criteria,));

        $this->render('view',array(
            'model'=>$this->loadModel($id),
            'related'=>$related,
        ));
    }

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $this->layout = 'section';
        $this->titulo = 'Artistas';

		$dataProvider=new CActiveDataProvider('Artistas', array(
            'pagination'=>array(
                'pageSize'=>24,
            ),
        ));
        $categorias = new CActiveDataProvider('ArtistasCategorias');
        $obras = new CActiveDataProvider('Obra');

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
            'categorias'=>$categorias,
            'obras'=>$obras,

		));
	}




	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Artistas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Artistas']))
			$model->attributes=$_GET['Artistas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Artistas the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Artistas::model()->findByPk($id);
		if($model===null)
        throw new CHttpException(404,'The requested page does not exist.');
        return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Artistas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='artista-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
