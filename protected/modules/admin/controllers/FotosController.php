<?php

class FotosController extends Controller
{
    //public $layout='//layouts/fotos';

    public function actionIndex()
    {
        $this->layout = 'fotos';
        $this->render('index');
    }

    public function actionCreateFoto()
    {
        $this->layout = 'fotos';

        $model=new Foto();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Foto']))
        {
            $model->attributes=$_POST['Foto'];
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('createFoto',array(
            'model'=>$model,
        ));
    }

    public function  actionIndexTecnica()
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider('FotosTecnica', array(

            'criteria'=>$criteria,
        ));

        $this->render('indexTecnica',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionCreateTecnica()
    {
        $this->layout = 'fotos';

        $model=new FotosTecnica();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['FotosTecnica']))
        {
            $model->attributes=$_POST['FotosTecnica'];
            if($model->save())
                $this->redirect(array('indexTecnica'));
        }

        $this->render('createTecnica',array(
            'model'=>$model,
        ));
    }

    public function  actionIndexFormato()
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider('FotosFormato', array(

            'criteria'=>$criteria,
        ));

        $this->render('indexFormato',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionCreateFormato()
    {
        $this->layout = 'fotos';

        $model=new FotosFormato();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['FotosFormato']))
        {
            $model->attributes=$_POST['FotosFormato'];
            if($model->save())
                $this->redirect(array('indexFormato'));
        }

        $this->render('createFormato',array(
            'model'=>$model,
        ));
    }

    public function  actionIndexTema()
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider('FotosTema', array(

            'criteria'=>$criteria,
        ));

        $this->render('indexTema',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionCreateTema()
    {
        $this->layout = 'fotos';

        $model=new FotosTema();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['FotosTema']))
        {
            $model->attributes=$_POST['FotosTema'];
            if($model->save())
                $this->redirect(array('FotosTema'));
        }

        $this->render('createTema',array(
            'model'=>$model,
        ));
    }

    public function  actionIndexTamano()
    {
        $this->layout = 'fotos';

        $criteria=new CDbCriteria(array(
            'order'=>'nombre ASC',
        ));

        $dataProvider=new CActiveDataProvider('FotosTamano', array(

            'criteria'=>$criteria,
        ));

        $this->render('indexTamano',array(
            'dataProvider'=>$dataProvider,
        ));
    }

    public function actionCreateTamano()
    {
        $this->layout = 'fotos';

        $model=new FotosTamano();

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['FotosTamano']))
        {
            $model->attributes=$_POST['FotosTamano'];
            if($model->save())
                $this->redirect(array('FotosTamano'));
        }

        $this->render('createTamano',array(
            'model'=>$model,
        ));
    }

    public function actionDelete($id, $tipo)
    {
        $this->loadModel($id, $tipo)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            if($tipo=='tecnica')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('indexTecnica'));
            else if($tipo=='tema')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('indexTema'));
            else if($tipo=='formato')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('indexFormato'));
            else if($tipo=='tamano')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('indexTamano'));
            else if($tipo=='montaje')
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('indexMontaje'));
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

        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

}