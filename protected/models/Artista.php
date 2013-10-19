<?php

/**
 * This is the model class for table "artistas".
 *
 * The followings are the available columns in table 'artistas':
 * @property integer $id
 * @property string $nombre
 * @property string $informacion
 * @property integer $id_categoria
 * @property string $imagen
 *
 * The followings are the available model relations:
 * @property ArtistasCategoria $idCategoria
 * @property Fotos[] $fotoses
 */
class Artista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artistas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, informacion, id_categoria, imagen', 'required'),
			array('id_categoria', 'numerical', 'integerOnly'=>true),
			array('nombre, imagen', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, informacion, id_categoria, imagen', 'safe', 'on'=>'search'),
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
			'idCategoria' => array(self::BELONGS_TO, 'ArtistasCategorias', 'id_categoria'),
			'fotoses' => array(self::HAS_MANY, 'Fotos', 'id_artista'),
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
			'informacion' => 'Informacion',
			'id_categoria' => 'Id Categoria',
			'imagen' => 'Imagen',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('informacion',$this->informacion,true);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('imagen',$this->imagen,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Artista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
