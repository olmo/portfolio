<?php

/**
 * This is the model class for table "entradas".
 *
 * The followings are the available columns in table 'entradas':
 * @property integer $id
 * @property string $titulo
 * @property string $texto
 * @property string $fecha_publicacion
 * @property integer $autor
 *
 * The followings are the available model relations:
 * @property Usuarios $autor0
 * @property ImagenesBlog[] $imagenesBlogs
 */
class BlogEntrada extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Entrada the static model class
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
		return 'blog_entradas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, texto', 'required'),
			array('titulo', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, texto', 'safe', 'on'=>'search'),
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
			'idAutor' => array(self::BELONGS_TO, 'Usuario', 'autor'),
            'comentarios' => array(self::HAS_MANY, 'BlogComentario', 'id_entrada','order'=>'fecha_publicacion ASC'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Título',
			'texto' => 'Texto',
			'fecha_publicacion' => 'Fecha publicación',
			'autor' => 'Autor',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);
		$criteria->compare('autor',$this->autor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function beforeSave() {
        if ($this->isNewRecord){
            $this->fecha_publicacion = new CDbExpression('NOW()');
            $this->autor = Yii::app()->user->id;
        }

        return parent::beforeSave();
    }

    public function getUrl()
    {
        return Yii::app()->createUrl('post/view', array(
            'id'=>$this->id,
            'title'=>$this->title,
        ));
    }
}