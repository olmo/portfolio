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

?>

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
