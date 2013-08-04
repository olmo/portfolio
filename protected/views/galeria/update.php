<?php
/* @var $this GaleriaController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'View Elemento', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<h1>Update Elemento <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>