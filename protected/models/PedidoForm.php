<?php

class PedidoForm extends CFormModel
{
    public $nombre;
    public $email;
    public $comentario;
    public $obra;
    public $tamano;
    public $montaje;
    public $precio;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array('nombre, email, comentario, obra, tamano, montaje, precio', 'required'),
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
            'email'=>'Email',
            'obra'=>'Obra',
            'tamano'=>'Tamano',
            'montaje'=>'Montaje',
            'precio'=>'Precio',
        );
    }
}