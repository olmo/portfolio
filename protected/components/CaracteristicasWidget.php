<?php

class CaracteristicasWidget extends CWidget {
    public $modelo;

    public function run() {

        $modelos = array(
            'formato'=>ObrasFormato::model(),
            'tamano'=>ObrasTamano::model(),
            'tecnica'=>ObrasTecnica::model(),
            'tema'=>ObrasTema::model(),
        );

        $models = $modelos[$this->modelo]->findAll();

        $this->render('caracteristicas', array(
            'models'=>$models,
            'tipo'=>$this->modelo,
        ));
    }
}