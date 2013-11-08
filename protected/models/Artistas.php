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
 * @property string $imgslide1
 * @property string $imgslide2
 * @property string $imgslide3
 *
 * The followings are the available model relations:
 * @property ArtistasCategorias $idCategoria
 * @property Obras[] $obrases
 */
class Artistas extends CActiveRecord
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
            array('nombre, imagen, imgslide1, imgslide2, imgslide3', 'length', 'max'=>100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, nombre, informacion, id_categoria, imagen, imgslide1, imgslide2, imgslide3', 'safe', 'on'=>'search'),
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
            'obrases' => array(self::HAS_MANY, 'Obras', 'id_artista'),
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
            'id_categoria' => 'Categoria',
            'imagen' => 'Imagen',
            'imgslide1' => 'Slide 1',
            'imgslide2' => 'Slide 2',
            'imgslide3' => 'Slide 3',
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
        $criteria->compare('imgslide1',$this->imgslide1,true);
        $criteria->compare('imgslide2',$this->imgslide2,true);
        $criteria->compare('imgslide3',$this->imgslide3,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Artistas the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
