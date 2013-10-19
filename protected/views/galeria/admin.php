<?php
/* @var $this GaleriaController */
/* @var $model Foto */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#elemento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="layout full clearfix">
    <h1>Administrar vinilos</h1>

    <p>
    Puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
    o <b>=</b>) al principio de cada uno de los elementos de la búsqueda para indicar el tipo de comparación.
    </p>

    <?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
    <div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
        'model'=>$model,
    )); ?>
    </div><!-- search-form -->

    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'elemento-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'id',
            'nombre',
            'titulo',
            'descripcion',
            'id_categoria',
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    )); ?>
</div>