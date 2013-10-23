<?php

class ArtistasController extends Controller
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
        );

        $this->tiposS = array(
            'categoria'=>'Categoría',
            'tamano'=>'Tamaño',
            'tecnica'=>'Técnica',
            'tema'=>'Tema',
        );

        $this->tiposP = array(
            'categoria'=>'Categorías',
            'tamano'=>'Tamaños',
            'tecnica'=>'Técnicas',
            'tema'=>'Temas',
        );

        parent::__construct($id,$module);
    }


    public function actionIndex()
    {
        $this->layout = 'artistas';
        $this->render('index');
    }

    public function actionCreateFoto()
    {
        $this->layout = 'fotos';

        $model=new Foto();
        $tamanos = new FotosTamanosRelation();

        $validateTamanos = array();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Foto']))
        {
            $model->attributes=$_POST['Foto'];

            if(MultiModelForm::validate($tamanos, $validateTamanos,$deleteItems) && $model->save()){
                $masterValues = array ('foto_id'=>$model->id);

                if (MultiModelForm::save($tamanos,$validateTamanos,$deleteMembers,$masterValues))
                    $this->redirect(array('index'));
            }
        }

        $this->render('createFoto',array(
            'model'=>$model,
            'tamanos'=>$tamanos,
        ));
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

        $tiposModelos = array(
            'formato'=>'FotosFormato',
            'tamano'=>'FotosTamano',
            'tecnica'=>'FotosTecnica',
            'tema'=>'FotosTema',
        );

        $tiposS = array(
            'formato'=>'Formato',
            'tamano'=>'Tamaño',
            'tecnica'=>'Técnica',
            'tema'=>'Tema',
        );

        $tiposP = array(
            'formato'=>'Formatos',
            'tamano'=>'Tamaños',
            'tecnica'=>'Técnicas',
            'tema'=>'Temas',
        );

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST[$tiposModelos[$tipo]]))
        {
            $model->attributes=$_POST[$tiposModelos[$tipo]];
            if($model->save())
                $this->redirect(array('view','tipo'=>$tipo));
        }

        $this->render('createSimple',array(
            'model'=>$model,
            'tipo'=>$tipo,
            'tipoS'=>$tiposS[$tipo],
            'tipoP'=>$tiposP[$tipo],
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
        else if($tipo=='categoria')
            $model=Categorias::model()->findByPk($id);
        else if($tipo=='tamano')
            $model=FotosTamano::model()->findByPk($id);
        else if($tipo=='montaje')
            $model=FotosMontaje::model()->findByPk($id);

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