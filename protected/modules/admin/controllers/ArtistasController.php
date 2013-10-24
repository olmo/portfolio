<?php

class ArtistasController extends Controller
{
    // public $layout='//layouts/fotos';
    private $tiposModelos;
    private $modelos;
    private $tiposS;
    private $tiposP;

    public function __construct($id,$module=null)
    {
        $this->tiposModelos = array(
            'categorias'=>'ArtistasCategorias',
            'artistas'=>'Artistas',
        );

        $this->modelos = array(
            'categorias'=>ArtistasCategorias::model(),
            'artistas'=>Artistas::model(),
        );

        $this->tiposS = array(
            'categorias'=>'Categoria',
        );

        $this->tiposP = array(
            'categorias'=>'Categorias',
        );

        parent::__construct($id,$module);
    }


    public function actionIndex()
    {
        $this->layout = 'artistas';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider('Artistas', array(
            'criteria'=>$criteria,
        ));

        $this->render('index',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionView($tipo)
    {
        $this->layout = 'artistas';

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
        $this->layout = 'artistas';

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
        $this->layout = 'artistas';

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

    public function actionCreateArtista()
    {
        $this->layout = 'artistas';

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
                $this->redirect(array('index'));
            }
        }
        $this->render('createArtista',array(
            'model'=>$model,
        ));
    }

    public function actionUpdateArtista($id)
    {
        $this->layout = 'artistas';

        $model=$this->loadModel($id, 'artistas');

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
                $this->redirect(array('index'));
            }

            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('createArtista',array(
            'model'=>$model,
        ));
    }

    public function actionDeleteArtista($id)
    {
        $model = $this->loadModel($id, 'artistas');

        if(file_exists(Yii::getPathOfAlias('webroot').'/images/artistas/'.$model->imagen))
            unlink(Yii::getPathOfAlias('webroot').'/images/artistas/'.$model->imagen);
        if(file_exists(Yii::getPathOfAlias('webroot').'/images/artistas/thumbs/'.$model->imagen))
            unlink(Yii::getPathOfAlias('webroot').'/images/artistas/thumbs/'.$model->imagen);

        $model->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function actionDelete($id, $tipo)
    {
        $this->loadModel($id, $tipo)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            if($tipo=='categorias')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));
            else if($tipo=='tema')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('view','tipo'=>$tipo));

            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
    }

    public function loadModel($id, $tipo)
    {
        if($tipo=='categorias')
            $model=ArtistasCategorias::model()->findByPk($id);
        else if($tipo=='artistas')
            $model=Artistas::model()->findByPk($id);

        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='artistas-categorias-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}