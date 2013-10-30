<?php

/**
 * This is the model class for table "blog_comentarios".
 *
 * The followings are the available columns in table 'blog_comentarios':
 * @property integer $id
 * @property integer $id_entrada
 * @property string $nombre
 * @property string $texto
 * @property string $fecha_publicacion
 *
 * The followings are the available model relations:
 * @property BlogEntradas $idEntrada
 */
class BlogComentario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BlogComentario the static model class
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
		return 'blog_comentarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_entrada, nombre, texto, email', 'required'),
			array('id_entrada', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_entrada, nombre, texto, fecha_publicacion', 'safe', 'on'=>'search'),
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
			'idEntrada' => array(self::BELONGS_TO, 'BlogEntradas', 'id_entrada'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_entrada' => 'Id Entrada',
			'nombre' => 'Nombre',
			'texto' => 'Texto',
			'fecha_publicacion' => 'Fecha Publicacion',
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
		$criteria->compare('id_entrada',$this->id_entrada);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('fecha_publicacion',$this->fecha_publicacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function beforeSave() {
        if ($this->isNewRecord){
            $this->fecha_publicacion = new CDbExpression('NOW()');
        }

        return parent::beforeSave();
    }
}