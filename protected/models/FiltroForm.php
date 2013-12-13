<?php

class FiltroForm extends CFormModel
{
    public $artistas;
    public $tecnicas;
    public $temas;
    public $tamanos;
    public $formatos;
    public $ordenar;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            //array('artistas, tecnicas, temas, tamanos, temas', 'required'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'artistas'=>'Artistas',
            'tecnicas'=>'Técnicas',
            'temas'=>'Temas',
            'tamanos'=>'Tamanos',
            'formatos'=>'Formatos',
        );
    }
}