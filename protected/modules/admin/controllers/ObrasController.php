<?php

class ObrasController extends Controller
{
    //public $layout='//layouts/obras';
    private $tiposModelos;
    private $modelos;
    private $tiposS;
    private $tiposP;

    public function __construct($id,$module=null)
    {
        $this->tiposModelos = array(
            'formato'=>'ObrasFormato',
            'tamano'=>'ObrasTamano',
            'tecnica'=>'ObrasTecnica',
            'tema'=>'ObrasTema',
            'montaje'=>'ObrasMontaje',
            'obra'=>'Obra',
        );

        $this->modelos = array(
            'formato'=>ObrasFormato::model(),
            'tamano'=>ObrasTamano::model(),
            'tecnica'=>ObrasTecnica::model(),
            'tema'=>ObrasTema::model(),
            'montaje'=>ObrasMontaje::model(),
            'obra'=>Obra::model(),
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

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index','view', 'createObra', 'updateObra', 'deleteObra',
                    'create','update','delete'),
                'users'=>array('admin'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }



    public function actionIndex()
    {
        $this->layout = 'obras';

        $criteria=new CDbCriteria(array(
            'order'=>'titulo ASC',
        ));

        $dataProvider=new CActiveDataProvider('Obra', array(
            'criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>20,
            ),
        ));

        $model=new Obra('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Obra']))
            $model->attributes=$_GET['Obra'];

        $this->render('index',array(
            'dataProvider'=>$dataProvider,
            'model'=>$model,
        ));
    }

    public function actionCreateObra()
    {
        Yii::import('ext.multimodelform.MultiModelForm');
        $this->layout = 'obras';

        $model=new Obra();
        $tamanos = new ObrasTamanosRelation();
        $validatedTamanos = array();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Obra']))
        {
            $model->attributes=$_POST['Obra'];
            $model->montajes = $model->montajesIds;
            $uploadedFile=CUploadedFile::getInstance($model,'imagen');

            if($uploadedFile!=null){
                $fileName = $model->idArtista->nombre .' - '.$model->titulo.'.'.$uploadedFile->extensionName;
                $model->imagen = $fileName;
            }

            if(MultiModelForm::validate($tamanos, $validatedTamanos,$deleteTamanos) && $model->save()){
                $masterValues = array ('id_obra'=>$model->id);

                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/obras/'.$fileName);
                $im = new EasyImage(Yii::getPathOfAlias('webroot').'/images/obras/'.$fileName);
                $im->resize(NULL, 260);
                $im->save(Yii::getPathOfAlias('webroot').'/images/obras/thumbs/'.$fileName);

                foreach ($validatedTamanos as $tam){
                    $tam->stock_restante = $tam->stock_inicial;
                }

                if (MultiModelForm::save($tamanos,$validatedTamanos,$deleteTamanos,$masterValues))
                    $this->redirect(array('index'));
            }
        }

        $this->render('createObra',array(
            'tipo'=>'create',
            'model'=>$model,
            'tamanos'=>$tamanos,
            'validatedTamanos'=>$validatedTamanos,
        ));
    }

    public function actionUpdateObra($id)
    {
        Yii::import('ext.multimodelform.MultiModelForm');
        $this->layout = 'obras';

        $model=$this->loadModel($id, 'obra');
        $tamanos = new ObrasTamanosRelation();

        $validatedTamanos = array();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Obra']))
        {
            $_POST['Obra']['imagen'] = $model->imagen;
            $model->attributes=$_POST['Obra'];
            $model->montajes = $model->montajesIds;

            if($model->validate()){
                $uploadedFile=CUploadedFile::getInstance($model,'imagen');

                $masterValues = array ('id_obra'=>$model->id);

                if(MultiModelForm::save($tamanos,$validatedTamanos,$deleteTamanos,$masterValues) && $model->save()){
                    if(!empty($uploadedFile))
                    {
                        $uploadedFile->saveAs(Yii::app()->basePath.'/../images/obras/'.$model->imagen);
                        $im = new EasyImage(Yii::getPathOfAlias('webroot').'/images/obras/'.$model->imagen);
                        $im->resize(NULL, 260);
                        $im->save(Yii::getPathOfAlias('webroot').'/images/obras/thumbs/'.$model->imagen);
                    }
                    $this->redirect(array('index'));
                }
            }
        }

        $this->render('createObra',array(
            'tipo'=>'update',
            'model'=>$model,
            'tamanos'=>$tamanos,
            'validatedTamanos'=>$validatedTamanos,
        ));
    }

    public function actionDeleteObra($id)
    {
        Yii::import('ext.multimodelform.MultiModelForm');

        $model = $this->loadModel($id, 'obra');

        if(file_exists(Yii::getPathOfAlias('webroot').'/images/obras/'.$model->imagen))
            unlink(Yii::getPathOfAlias('webroot').'/images/obras/'.$model->imagen);
        if(file_exists(Yii::getPathOfAlias('webroot').'/images/obras/thumbs/'.$model->imagen))
            unlink(Yii::getPathOfAlias('webroot').'/images/obras/thumbs/'.$model->imagen);

        $model->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function actionView($tipo)
    {
        $this->layout = 'obras';

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
        $this->layout = 'obras';


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
            'accion'=>'create',
            'tipo'=>$tipo,
            'tipoS'=>$this->tiposS[$tipo],
            'tipoP'=>$this->tiposP[$tipo],
        ));
    }

    public function actionUpdate($tipo, $id)
    {
        $this->layout = 'obras';

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
            'accion'=>'update',
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
            if($tipo=='obra')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
    }

    public function loadModel($id, $tipo)
    {
        $model=$this->modelos[$tipo]->findByPk($id);

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