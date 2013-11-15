<?php

/**
 * This is the model class for table "obras_colecciones_relation".
 *
 * The followings are the available columns in table 'obras_colecciones_relation':
 * @property integer $id_obra
 * @property integer $id_coleccion
 */
class ObrasColeccionesRelation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ObrasColeccionesRelation the static model class
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
		return 'obras_colecciones_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_obra', 'required'),
			array('id_obra', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_obra, id_coleccion', 'safe', 'on'=>'search'),
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
            'Obra' => array(self::BELONGS_TO, 'Obra', 'id_obra'),
            'Coleccion' => array(self::BELONGS_TO, 'Coleccion', 'id_coleccion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_obra' => 'Obra',
			'id_coleccion' => 'Colección',
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

		$criteria->compare('id_obra',$this->id_obra);
		$criteria->compare('id_coleccion',$this->id_coleccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}