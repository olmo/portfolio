<?php
/* @var $this ImagenesBlogController */
/* @var $model ImagenesBlog */

$this->breadcrumbs=array(
	'Imagenes Blogs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ImagenesBlog', 'url'=>array('index')),
	array('label'=>'Create ImagenesBlog', 'url'=>array('create')),
	array('label'=>'Update ImagenesBlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ImagenesBlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ImagenesBlog', 'url'=>array('admin')),
);
?>

<h1>View ImagenesBlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'titulo',
		'descripcion',
	),
)); ?>
