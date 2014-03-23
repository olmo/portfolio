<?php

/**
 * GiftForm class.
 * GiftForm is the data structure for keeping
 * gift form data. It is used by the 'contact' action of 'SiteController'.
 */
class GiftForm extends CFormModel
{
    public $name;
    public $email;
    public $importe;
    public $body;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('name, email, importe', 'required'),
            // email has to be a valid email address
            array('email', 'email'),
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
            'name'=>'Nombre',
            'importe'=>'Importe',
            'body'=>'Mensaje'
        );
    }
}