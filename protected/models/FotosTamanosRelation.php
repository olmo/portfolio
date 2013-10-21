<?php

/**
 * This is the model class for table "fotos_tamanos_relation".
 *
 * The followings are the available columns in table 'fotos_tamanos_relation':
 * @property integer $id_foto
 * @property integer $id_tamano
 * @property string $precio
 * @property integer $stock_inicial
 * @property integer $stock_restante
 * @property string $ancho
 * @property string $alto
 */
class FotosTamanosRelation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FotosTamanosRelation the static model class
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
		return 'fotos_tamanos_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_foto, id_tamano, precio, stock_inicial, stock_restante, ancho, alto', 'required'),
			array('id_foto, id_tamano, stock_inicial, stock_restante', 'numerical', 'integerOnly'=>true),
			array('precio, ancho, alto', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_foto, id_tamano, precio, stock_inicial, stock_restante, ancho, alto', 'safe', 'on'=>'search'),
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
            'idFoto' => array(self::BELONGS_TO, 'Foto', 'id_foto'),
            'idTamano' => array(self::BELONGS_TO, 'FotosTamano', 'id_tamano'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_foto' => 'Id Foto',
			'id_tamano' => 'Id Tamano',
			'precio' => 'Precio',
			'stock_inicial' => 'Stock Inicial',
			'stock_restante' => 'Stock Restante',
			'ancho' => 'Ancho',
			'alto' => 'Alto',
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

		$criteria->compare('id_foto',$this->id_foto);
		$criteria->compare('id_tamano',$this->id_tamano);
		$criteria->compare('precio',$this->precio,true);
		$criteria->compare('stock_inicial',$this->stock_inicial);
		$criteria->compare('stock_restante',$this->stock_restante);
		$criteria->compare('ancho',$this->ancho,true);
		$criteria->compare('alto',$this->alto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}