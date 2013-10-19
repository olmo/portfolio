<?php
/* @var $this ArtistasController */
/* @var $model Artistas */

$this->breadcrumbs=array(
	'Artistases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Artistas', 'url'=>array('index')),
	array('label'=>'Create Artistas', 'url'=>array('create')),
	array('label'=>'Update Artistas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Artistas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Artistas', 'url'=>array('admin')),
);
?>

<h1>View Artistas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'informacion',
		'id_categoria',
		'imagen',
	),
)); ?>
