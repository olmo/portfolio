<?php

class FotosController extends Controller
{
    //public $layout='//layouts/fotos';
    private $tiposModelos;
    private $tiposS;
    private $tiposP;

    public function __construct($id,$module=null)
    {
        $this->tiposModelos = array(
            'formato'=>'FotosFormato',
            'tamano'=>'FotosTamano',
            'tecnica'=>'FotosTecnica',
            'tema'=>'FotosTema',
            'montaje'=>'FotosMontaje',
        );

        $this->tiposS = array(
            'formato'=>'Formato',
            'tamano'=>'Tamaño',
            'tecnica'=>'Técnica',
            'tema'=>'Tema',
            'montaje'=>'Montaje',
        );

        $this->tiposP = array(
            'formato'=>'Formatos',
            'tamano'=>'Tamaños',
            'tecnica'=>'Técnicas',
            'tema'=>'Temas',
            'montaje'=>'Montajes',
        );


        parent::__construct($id,$module);
    }


    public function actionIndex()
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'titulo ASC',
        ));

        $dataProvider=new CActiveDataProvider('Foto', array(

            'criteria'=>$criteria,
        ));

        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionCreateFoto()
    {
        Yii::import('ext.multimodelform.MultiModelForm');
        $this->layout = 'fotos';

        $model=new Foto();
        $tamanos = new FotosTamanosRelation();
        $validatedTamanos = array();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Foto']))
        {
            $model->attributes=$_POST['Foto'];

            $uploadedFile=CUploadedFile::getInstance($model,'imagen');
            $fileName = $model->idArtista->nombre .' - '.$model->titulo.'.'.$uploadedFile->extensionName;
            $model->imagen = $fileName;

            if(MultiModelForm::validate($tamanos, $validatedTamanos,$deleteTamanos) && $model->save()){
                $masterValues = array ('id_foto'=>$model->id);
                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/fotos/'.$fileName);

                if (MultiModelForm::save($tamanos,$validatedTamanos,$deleteTamanos,$masterValues))
                    $this->redirect(array('index'));
            }
        }

        $this->render('createFoto',array(
            'model'=>$model,
            'tamanos'=>$tamanos,
            'validatedTamanos'=>$validatedTamanos,
        ));
    }

    public function actionUpdateFoto($id)
    {
        Yii::import('ext.multimodelform.MultiModelForm');
        $this->layout = 'fotos';

        $model=$this->loadModel($id, 'foto');
        $tamanos = new FotosTamanosRelation();

        $validatedTamanos = array();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Foto']))
        {
            $_POST['Foto']['imagen'] = $model->imagen;
            $model->attributes=$_POST['Foto'];
            $uploadedFile=CUploadedFile::getInstance($model,'imagen');

            $masterValues = array ('id_foto'=>$model->id);

            if(MultiModelForm::save($tamanos,$validatedTamanos,$deleteTamanos,$masterValues) && $model->save()){
                if(!empty($uploadedFile))
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../images/fotos/'.$model->imagen);
                }
                $this->redirect(array('index'));
            }
        }

        $this->render('createFoto',array(
            'model'=>$model,
            'tamanos'=>$tamanos,
            'validatedTamanos'=>$validatedTamanos,
        ));
    }

    public function actionDeleteFoto($id)
    {
        Yii::import('ext.multimodelform.MultiModelForm');

        $model = $this->loadModel($id, 'foto');

        if(file_exists(Yii::getPathOfAlias('webroot').'/images/fotos/'.$model->imagen))
            unlink(Yii::getPathOfAlias('webroot').'/images/fotos/'.$model->imagen);

        $model->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function actionView($tipo)
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider($this->tiposModelos[$tipo], array(

            'criteria'=>$criteria,
        ));

        $this->render('indexSimple',array(
            'dataProvider'=>$dataProvider,
            'tipo'=>$tipo,
            'tipoS'=>$this->tiposS[$tipo],
            'tipoP'=>$this->tiposP[$tipo],
        ));
    }

    public function actionCreate($tipo)
    {
        $this->layout = 'fotos';


        $model=new $this->tiposModelos[$tipo]();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST[$this->tiposModelos[$tipo]]))
        {
            $model->attributes=$_POST[$this->tiposModelos[$tipo]];
            if($model->save())
                $this->redirect(array('view','tipo'=>$tipo));
        }

        $this->render('createSimple',array(
            'model'=>$model,
            'tipo'=>$tipo,
            'tipoS'=>$this->tiposS[$tipo],
            'tipoP'=>$this->tiposP[$tipo],
        ));
    }

    public function actionUpdate($tipo, $id)
    {
        $this->layout = 'fotos';

        $model=$this->loadModel($id, $tipo);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST[$this->tiposModelos[$tipo]]))
        {
            $model->attributes=$_POST[$this->tiposModelos[$tipo]];
            if($model->save())
                $this->redirect(array('view','tipo'=>$tipo));
        }

        $this->render('createSimple',array(
            'model'=>$model,
            'tipo'=>$tipo,
            'tipoS'=>$this->tiposS[$tipo],
            'tipoP'=>$this->tiposP[$tipo],
        ));
    }

    public function actionDelete($id, $tipo)
    {
        $this->loadModel($id, $tipo)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            if($tipo=='tecnica')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            else if($tipo=='tema')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            else if($tipo=='formato')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            else if($tipo=='tamano')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            else if($tipo=='montaje')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function loadModel($id, $tipo)
    {
        if($tipo=='tecnica')
            $model=FotosTecnica::model()->findByPk($id);
        else if($tipo=='tema')
            $model=FotosTema::model()->findByPk($id);
        else if($tipo=='formato')
            $model=FotosFormato::model()->findByPk($id);
        else if($tipo=='tamano')
            $model=FotosTamano::model()->findByPk($id);
        else if($tipo=='montaje')
            $model=FotosMontaje::model()->findByPk($id);
        else if($tipo=='foto')
            $model=Foto::model()->findByPk($id);

        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='tema-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}