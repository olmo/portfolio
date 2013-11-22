<?php

class BlogController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    //public $layout='//layouts/column1';

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
            array('allow',
                'actions'=>array('index', 'create', 'update', 'delete', 'imgUpload', 'updateComentario', 'deleteComentario'),
                'users'=>array('admin'),
            ),
            array('deny',
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
        $this->layout = 'blog';
        $model=new BlogEntrada;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['BlogEntrada']))
        {
            $model->attributes=$_POST['BlogEntrada'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create',array(
            'model'=>$model,
            'accion'=>'create',
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $this->layout = 'blog';
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['BlogEntrada']))
        {
            $model->attributes=$_POST['BlogEntrada'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('create',array(
            'model'=>$model,
            'accion'=>'update',
        ));
    }

    public function actionUpdateComentario($id)
    {
        $this->layout = 'blog';
        $model=BlogComentario::model()->findByPk($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['BlogComentario']))
        {
            $model->attributes=$_POST['BlogComentario'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('editComentario',array(
            'model'=>$model,
            'accion'=>'update',
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
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function actionDeleteComentario($id)
    {
        $model=BlogComentario::model()->findByPk($id);
        $model->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $this->layout = 'blog';

        $criteria=new CDbCriteria(array(
            'order'=>'fecha_publicacion DESC',
        ));

        $dataProvider=new CActiveDataProvider('BlogEntrada', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));

        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actions()
    {
        return array(
            'imgUpload'=>array(
                'class' => 'ext.imperavi-redactor-widget.actions.imgUpload.RedactorUploadAction',
                'directory'=>'uploads/images',
                'validator'=>array(
                    'mimeTypes' => array('image/png', 'image/jpg', 'image/gif', 'image/jpeg', 'image/pjpeg'),
                )
            ),
        );
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

    /**
     * Performs the AJAX validation.
     * @param Entrada $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='entrada-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}
