<?php

class ArtistasController extends Controller
{
    // public $layout='//layouts/obras';
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
                'actions'=>array('index','view', 'createArtista', 'updateArtista', 'deleteArtista',
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

        $model=new Artistas;

        if(isset($_POST['Artistas']))
        {
            $rnd = rand(0,9999);
            $rnd1 = rand(0,9999);
            $rnd2 = rand(0,9999);
            $rnd3 = rand(0,9999);

            $model->attributes=$_POST['Artistas'];

            $uploadedFile=CUploadedFile::getInstance($model,'imagen');
            $fileName = "{$rnd}-{$uploadedFile}";
            $model->imagen = $fileName;

            $uploadedFile1=CUploadedFile::getInstance($model,'imgslide1');
            $fileName1 = "{$rnd1}-{$uploadedFile1}";
            $model->imgslide1 = $fileName1;

            $uploadedFile2=CUploadedFile::getInstance($model,'imgslide2');
            $fileName2 = "{$rnd2}-{$uploadedFile2}";
            $model->imgslide2 = $fileName2;

            $uploadedFile3=CUploadedFile::getInstance($model,'imgslide3');
            $fileName3 = "{$rnd3}-{$uploadedFile3}";
            $model->imgslide3 = $fileName3;

            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../images/artistas/'.$fileName);

                $uploadedFile1->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$fileName1);
                $uploadedFile2->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$fileName2);
                $uploadedFile3->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$fileName3);

                // Redimensionar la imagen ancho x alto (ancho adaptable)
                $im = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/'.$fileName);
                $im->resize(NULL, 260);
                $im->save(Yii::getPathOfAlias('webroot').'/images/artistas/'.$fileName);

                // Slides (548x365)
                $im1 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName1);
                $im1->resize(548,365);
                $im1->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName1);

                $im2 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName2);
                $im2->resize(548,365);
                $im2->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName2);

                $im3 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName3);
                $im3->resize(548,365);
                $im3->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$fileName3);

                $this->redirect(array('index'));
            }
        }
        $this->render('createArtista',array(
            'tipo'=>'create',
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
            $uploadedFile1=CUploadedFile::getInstance($model,'imgslide1');
            $uploadedFile2=CUploadedFile::getInstance($model,'imgslide2');
            $uploadedFile3=CUploadedFile::getInstance($model,'imgslide3');

            if($model->save())
            {
                if(!empty($uploadedFile))  // checkeamos si el archivo subido esta seteado o no
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../images/artistas/'.$model->imagen);

                    // Redimensionar la imagen ancho x alto (ancho adaptable)
                    $im = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/'.$model->imagen);
                    $im->resize(NULL, 260);
                    $im->save(Yii::getPathOfAlias('webroot').'/images/artistas/'.$model->imagen);
                }

                if(!empty($uploadedFile1))
                {
                    $uploadedFile1->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$model->imgslide1);

                    $im1 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide1);
                    $im1->resize(548,365);
                    $im1->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide1);
                }

                if(!empty($uploadedFile2))
                {
                    $uploadedFile2->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$model->imgslide2);

                    $im2 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide2);
                    $im2->resize(548,365);
                    $im2->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide2);
                }

                if(!empty($uploadedFile3))
                {
                    $uploadedFile3->saveAs(Yii::app()->basePath.'/../images/artistas/slides/'.$model->imgslide3);

                    $im3 = new EasyImage(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide3);
                    $im3->resize(548,365);
                    $im3->save(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide3);
                }

                $this->redirect(array('index'));
            }

            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('createArtista',array(
            'tipo'=>'update',
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
        if(file_exists(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide1))
            unlink(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide1);
        if(file_exists(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide2))
            unlink(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide2);
        if(file_exists(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide3))
            unlink(Yii::getPathOfAlias('webroot').'/images/artistas/slides/'.$model->imgslide3);

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