<?php
/* @var $this GaleriaController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Galería';

/*$this->breadcrumbs=array(
	'Elementos',
);



$this->menu=array(
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);*/

$this->breadcrumbs=array(
    'Galería'=>array('index'),
);

$cs=Yii::app()->clientScript;
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/galleryindex.js', CClientScript::POS_END);
?>

<div class="row">
<div class="span3">
    <aside class="sidebar">
        <h4>Categories</h4>
        <ul id="filtro" class="nav nav-list primary pull-bottom">
            <li><a href="#">Artistas</a></li>
            <li><a href="#">Técnicas</a></li>
            <ul>
                <li><a href="#">asdf</a></li>
                <li><a href="#">123</a></li>
                <li><a href="#">Temas</a></li>
                <li><a href="#">Tamaño</a></li>
                <li><a href="#">Formato</a></li>
            </ul>
            <li><a href="#">Temas</a></li>
            <ul>
                <li><a href="#">htreh</a></li>
                <li><a href="#">asdf</a></li>
                <li><a href="#">Temas</a></li>
                <li><a href="#">Tamaño</a></li>
                <li><a href="#">Formato</a></li>
            </ul>
            <li><a href="#">Tamaño</a></li>
            <li><a href="#">Formato</a></li>
        </ul>
    </aside>
</div>

<div class="span9">
    <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
        <li data-option-value="*" class="active"><a href="#">Mostrar Todo</a></li>
        <?php foreach($temas->getData() as $data): ?>
            <li data-option-value=".<?php echo CHtml::encode($data->nombre); ?>"><a href="#"><?php echo CHtml::encode($data->nombre); ?></a></li>
        <?php endforeach; ?>
    </ul>

    <hr />

    <div class="row">

        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'enableSorting'=>false,
                'template'=>"{items}"
            )); ?>
        </ul>

    </div>
</div>
</div>