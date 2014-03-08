<?php
/* @var $this GaleriaController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Colecciones';

/*$this->breadcrumbs=array(
	'Elementos',
);



$this->menu=array(
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);*/

$this->breadcrumbs=array(
    'Colecciones'=>array('colecciones'),
);

?>

<div class="row">
    <!--<div class="span3">
        <aside class="sidebar">
            <h4>Colecciones</h4>
            <ul id="filtro" class="nav nav-list primary pull-bottom">
                <?php /*foreach($colecciones->getData() as $key=>$value): */?>
                    <li><?php /*echo CHtml::link($value->nombre,array('colecciones', 'id'=>$value->id)); */?></li>
                <?php /*endforeach; */?>
            </ul>
        </aside>
    </div>-->

    <div class="span12">
        <ul class="nav nav-pills">
            <?php foreach($colecciones->getData() as $key=>$value): ?>
                <li <?php echo (Yii::app()->getRequest()->getParam('id')==$value->id)? 'class="active"' : ''; ?>><?php echo CHtml::link($value->nombre,array('colecciones', 'id'=>$value->id)); ?></li>
            <?php endforeach; ?>
        </ul>

        <hr />

        <?php if($dataProvider==null): ?>
            <div class="row">

                <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
                    <?php $this->widget('zii.widgets.CListView', array(
                        'dataProvider'=>$colecciones,
                        'itemView'=>'_viewColeccion',
                        'enableSorting'=>false,
                        'template'=>"{items}"
                    )); ?>
                </ul>

            </div>
        <?php else: ?>
            <h5><?php echo $coleccion->nombre; ?></h5>
            <?php echo $coleccion->descripcion; ?>

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
        <?php endif;?>

    </div>
</div>