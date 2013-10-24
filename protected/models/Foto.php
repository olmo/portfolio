<?php

/**
 * This is the model class for table "elementos".
 *
 * The followings are the available columns in table 'elementos':
 * @property integer $id
 * @property string $nombre
 * @property string $titulo
 * @property string $descripcion
 * @property integer $id_categoria
 * @property integer $id_imagen
 *
 * The followings are the available model relations:
 * @property Categorias $idCategoria
 * @property ElementosImagenes $idImagen
 * @property ElementosImagenes[] $elementosImagenes
 */
class Foto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Foto the static model class
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
		return 'fotos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('titulo, imagen, descripcion, id_artista, id_formato, id_tecnica, id_tema, montaje_recomendado', 'required'),
			array('id_artista', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, descripcion, id_artista', 'safe', 'on'=>'search'),
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
            'idArtista' => array(self::BELONGS_TO, 'Artistas', 'id_artista'),
			'idFormato' => array(self::BELONGS_TO, 'FotosFormatos', 'id_formato'),
            'idTecnica' => array(self::BELONGS_TO, 'FotosTecnicas', 'id_tecnica'),
            'idTema' => array(self::BELONGS_TO, 'FotosTema', 'id_tema'),
            'idMontaje' => array(self::BELONGS_TO, 'FotosMontajes', 'montaje_recomendado'),
			'fotoTamano' => array(self::HAS_MANY, 'FotosTamanosRelation', 'id_foto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'titulo' => 'Titulo',
			'descripcion' => 'Descripción',
			'id_artista' => 'Artista',
            'fotoTamanos' => 'Tamaños',
            'id_formato' => 'Formato',
            'id_tecnica' => 'Técnica',
            'id_tema' => 'Tema',
            'montaje_recomendado' => 'Montaje',
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
		$criteria->compare('id_categoria',$this->id_categoria);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}