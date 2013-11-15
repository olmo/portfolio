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
    public $temasIds = array();
    public $tecnicasIds = array();
    public $artista_search;

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
			array('titulo, imagen, descripcion, id_artista, id_formato, montaje_recomendado', 'required'),
			array('id_artista', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>255),
            array('montajesIds, temasIds, tecnicasIds', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, titulo, descripcion, artista_search', 'safe', 'on'=>'search'),
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
            'idMontaje' => array(self::BELONGS_TO, 'ObrasMontaje', 'montaje_recomendado'),
			'obraTamano' => array(self::HAS_MANY, 'ObrasTamanosRelation', 'id_obra'),
            'montajes' => array(self::MANY_MANY, 'ObrasMontaje', 'obras_montajes_relation(id_obra, id_montaje)'),
            'temas' => array(self::MANY_MANY, 'ObrasTema', 'obras_temas_relation(id_obra, id_tema)'),
            'tecnicas' => array(self::MANY_MANY, 'ObrasTecnica', 'obras_tecnicas_relation(id_obra, id_tecnica)'),
		);
	}

    public function afterFind()
    {

        if (!empty($this->montajes)){
            foreach ($this->montajes as $n => $montaje)
                $this->montajesIds[] = $montaje->id;
        }

        if (!empty($this->temas)){
            foreach ($this->temas as $n => $tema)
                $this->temasIds[] = $tema->id;
        }

        if (!empty($this->tecnicas)){
            foreach ($this->tecnicas as $n => $tecnica)
                $this->tecnicasIds[] = $tecnica->id;
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
        $criteria->with = array( 'idArtista' );

		$criteria->compare('t.id',$this->id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('id_artista',$this->id_artista);
        $criteria->compare('fecha_publicacion',$this->fecha_publicacion);
        $criteria->compare('idArtista.nombre', $this->artista_search, true );

		return new CActiveDataProvider('Obra', array(
			'criteria'=>$criteria,
            'sort'=>array(
                'attributes'=>array(
                    'artista_search'=>array(
                        'asc'=>'idArtista.nombre',
                        'desc'=>'idArtista.nombre DESC',
                    ),
                    '*',
                ),
            ),
            'pagination'=>array(
                'pageSize'=>20,
            ),
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