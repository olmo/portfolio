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
    'Colecciones'=>array('index'),
);

?>

<div class="row">
    <div class="span3">
        <aside class="sidebar">
            <h4>Colecciones</h4>
            <ul id="filtro" class="nav nav-list primary pull-bottom">
                <?php foreach($colecciones->getData() as $key=>$value): ?>
                    <li><?php echo CHtml::link($value->nombre,array('colecciones', 'id'=>$value->id)); ?></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>

    <div class="span9">
        <?php if($dataProvider==null): ?>
            Seleccione una colección en el menú de la izquierda.
        <?php else: ?>
            <h5><?php echo $coleccion->nombre; ?></h5>
            <?php echo $coleccion->descripcion; ?>

            <hr />

            <div class="row">
                <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$dataProvider,
                        'itemView'=>'_viewColecciones',
                        'enableSorting'=>false,
                        'template'=>"{items}"
                    )); ?>
                </ul>
            </div>
        <?php endif;?>

    </div>
</div>