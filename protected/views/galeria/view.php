<?php
/* @var $this GaleriaController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Update Elemento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Elemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1>View Elemento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'titulo',
		'descripcion',
		'id_categoria',
	),
)); ?>
