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
class Obra extends CActiveRecord
{
    public $montajesIds = array();

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
		return 'obras';
	}

    public function behaviors()
    {
        return array(
            'activerecord-relation'=>array(
                'class'=>'ext.activerecord-relation-behavior.EActiveRecordRelationBehavior',
            ));
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
            array('montajesIds', 'safe'),
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
			'idFormato' => array(self::BELONGS_TO, 'ObrasFormatos', 'id_formato'),
            'idTecnica' => array(self::BELONGS_TO, 'ObrasTecnicas', 'id_tecnica'),
            'idTema' => array(self::BELONGS_TO, 'ObrasTema', 'id_tema'),
            'idMontaje' => array(self::BELONGS_TO, 'ObrasMontaje', 'montaje_recomendado'),
			'obraTamano' => array(self::HAS_MANY, 'ObrasTamanosRelation', 'id_obra'),
            'montajes' => array(self::MANY_MANY, 'ObrasMontaje', 'obras_montajes_relation(id_obra, id_montaje)'),
		);
	}

    public function afterFind()
    {
        if (!empty($this->montajes))
        {
            foreach ($this->montajes as $n => $montaje)
                $this->montajesIds[] = $montaje->id;
        }

        parent::afterFind();
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
            'montaje_recomendado' => 'Montaje recomendado',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_artista',$this->id_artista);
        $criteria->compare('fecha_publicacion',$this->fecha_publicacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function beforeSave() {
        if ($this->isNewRecord){
            $this->fecha_publicacion = new CDbExpression('NOW()');
            $this->publicado = 1;
        }

        return parent::beforeSave();
    }
}