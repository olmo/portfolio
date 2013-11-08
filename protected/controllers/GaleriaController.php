<?php

class GaleriaController extends Controller
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
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
        $this->titulo = 'Galería';
        $model = $this->loadModel($id);
        $form=new PedidoForm;

        $criteria=new CDbCriteria(array(
            'condition'=>'id_tema='.$model->id_tema,
            'order'=>'rand()',
            'offset'=>0,
            'limit' => 4,
        ));

        $related=new CActiveDataProvider('Obra', array('criteria'=>$criteria,));

        if(isset($_POST['PedidoForm'])){
            $form->attributes=$_POST['PedidoForm'];

            if($model->validate()){
                $tam = ObrasTamanosRelation::model()->findByAttributes(array('id_obra'=>$id, 'id_tamano'=>$form->tamano));
                $precio = $tam->precio + ($tam->alto*$tam->ancho/10000)*ObrasMontaje::model()->findByPk($form->montaje)->precio;

                $name='=?UTF-8?B?'.base64_encode($form->nombre).'?=';
                $subject='=?UTF-8?B?'.base64_encode('Pedido - '.$model->titulo).'?=';
                $headers="From: $name <{$form->email}>\r\n".
                    "Reply-To: {$form->email}\r\n".
                    "MIME-Version: 1.0\r\n".
                    "Content-type: text/plain; charset=UTF-8";

                $contenido = "Obra: ".$model->titulo."\n";
                $contenido .= "Tamaño: ".ObrasTamano::model()->findByPk($form->tamano)->nombre."\n";
                $contenido .= "Montaje: ".ObrasMontaje::model()->findByPk($form->montaje)->nombre."\n";
                $contenido .= "Precio: ".$precio."€\n\n";
                $contenido .= "Nombre del cliente: ".$form->nombre."\n\n";
                $contenido .= "".$form->comentario."\n";

                mail(Yii::app()->params['adminEmail'],$subject,$contenido,$headers);
                Yii::app()->user->setFlash('contact','Gracias por confiar en nosotros. Le responderemos tan pronto como sea posible.');
                $this->refresh();
            }
        }

		$this->render('view',array(
			'model'=>$model,
            'related'=>$related,
            'formmodel'=>$form,
		));


	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
        $model=new FiltroForm;
        $this->titulo = 'Galería';

        $criteria=new CDbCriteria();

        if(isset($_POST['FiltroForm'])){
            $model->attributes=$_POST['FiltroForm'];
            $model->artistas=$_POST['FiltroForm']['artistas'];
            $model->temas=$_POST['FiltroForm']['temas'];
            $model->tecnicas=$_POST['FiltroForm']['tecnicas'];
            $model->tamanos=$_POST['FiltroForm']['tamanos'];
            $model->formatos=$_POST['FiltroForm']['formatos'];

            if($model->validate()){
                $cadena = '';
                $join = '';

                if($model->temas != null){
                    $cadena .= '(';
                    $i=0;
                    foreach($model->temas as $tema){
                        if($i==0){
                            $cadena .= ' id_tema='.$tema;
                            $i++;
                        }
                        else
                            $cadena .= ' or id_tema='.$tema;
                    }
                    $cadena .= ')';
                }

                if($model->tecnicas != null){
                    if($cadena!='')
                        $cadena .= ' and (';
                    else
                        $cadena .= '(';

                    $i = 0;

                    foreach($model->tecnicas as $tema){
                        if($i==0){
                            $cadena .= ' id_tecnica='.$tema;
                            $i++;
                        }
                        else
                            $cadena .= ' or id_tecnica='.$tema;
                    }
                    $cadena .= ')';
                }

                if($model->formatos != null){
                    if($cadena!='')
                        $cadena .= ' and (';
                    else
                        $cadena .= '(';

                    $i=0;
                    foreach($model->formatos as $tema){
                        if($i==''){
                            $cadena .= ' id_formato='.$tema;
                            $i++;
                        }
                        else
                            $cadena .= ' or id_formato='.$tema;
                    }
                    $cadena .= ')';
                }

                if($model->tamanos != null){
                    $join .= ' LEFT JOIN obras_tamanos_relation ON obras_tamanos_relation.id_obra = t.id ';
                    if($cadena!='')
                        $cadena .= ' and (';
                    else
                        $cadena .= '(';

                    $i=0;
                    foreach($model->tamanos as $tema){
                        if($i==''){
                            $cadena .= ' obras_tamanos_relation.id_tamano='.$tema;
                            $i++;
                        }
                        else
                            $cadena .= ' or obras_tamanos_relation.id_tamano='.$tema;
                    }
                    $cadena .= ')';
                }

                if($model->artistas != null){
                    $join .= ' LEFT JOIN artistas ON artistas.id = t.id_artista ';
                    if($cadena!='')
                        $cadena .= ' and (';
                    else
                        $cadena .= '(';

                    $i=0;
                    foreach($model->artistas as $tema){
                        if($i==''){
                            $cadena .= ' artistas.id_categoria='.$tema;
                            $i++;
                        }
                        else
                            $cadena .= ' or artistas.id_categoria='.$tema;
                    }
                    $cadena .= ')';
                }

                $criteria->join = $join;
                $criteria->condition = $cadena;
            }
        }

        $dataProvider=new CActiveDataProvider('Obra', array('criteria'=>$criteria,
            'pagination'=>array(
                'pageSize'=>12,
            ),
        ));

        $temas=new CActiveDataProvider('ObrasTema');

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
            'temas'=>$temas,
            'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Foto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Obra::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Foto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='elemento-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
