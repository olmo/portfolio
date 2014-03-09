<?php

Yii::import('zii.widgets.CPortlet');

class SearchBlock extends CPortlet
{
    public $title='';

    protected function renderContent()
    {
        echo CHtml::beginForm(array('search/search'), 'get', array('class'=>'form-search', 'id'=>'searchForm')) .
             CHtml::textField('q', '', array('placeholder'=> 'Buscar...', 'type'=>'text', 'class' => 'input-medium search-query', 'name'=>'q', 'id'=>'q')) .
             // CHtml::submitButton('',array('class'=>'glyphicon glyphicon-search')) .
             CHtml::endForm('');
    }
}