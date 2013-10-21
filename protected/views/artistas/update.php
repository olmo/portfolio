<?php
/* @var $this ArtistasController */
/* @var $model Artistas */

$this->breadcrumbs=array(
	'Artistases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Artistas', 'url'=>array('index')),
	array('label'=>'Create Artistas', 'url'=>array('create')),
	array('label'=>'View Artistas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Artistas', 'url'=>array('admin')),
);
?>

<h1>Update Artistas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>