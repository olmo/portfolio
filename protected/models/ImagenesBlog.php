<?php

/**
 * This is the model class for table "imagenes_blog".
 *
 * The followings are the available columns in table 'imagenes_blog':
 * @property integer $id
 * @property string $nombre
 * @property string $titulo
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Entradas[] $entradases
 */
class ImagenesBlog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ImagenesBlog the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagenes_blog';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, titulo, descripcion', 'required'),
			array('nombre', 'length', 'max'=>100),
			array('titulo', 'length', 'max'=>150),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, titulo, descripcion', 'safe', 'on'=>'search'),

            array('imagen', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('titulo, imagen', 'length', 'max'=>255, 'on'=>'insert,update'),
        );
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'entradases' => array(self::MANY_MANY, 'Entradas', 'imagenes_entradas(id_imagen, id_entrada)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'titulo' => 'Titulo',
			'descripcion' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
/*
    public function actionCreate()
    {
        $model=new Banner;  // this is my model related to table
        if(isset($_POST['Banner']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Banner'];

            $uploadedFile=CUploadedFile::getInstance($model,'image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->image = $fileName;

            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                $this->redirect(array('admin'));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        if(isset($_POST['Banner']))
        {
            $_POST['Banner']['image'] = $model->image;
            $model->attributes=$_POST['Banner'];

            $uploadedFile=CUploadedFile::getInstance($model,'image');

            if($model->save())
            {
                if(!empty($uploadedFile))  // check if uploaded file is set or not
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$model->image);
                }
                $this->redirect(array('admin'));
            }

        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }
*/
}