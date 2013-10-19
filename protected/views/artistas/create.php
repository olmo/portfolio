<?php
/* @var $this ArtistasController */
/* @var $model Artista */

$this->breadcrumbs=array(
	'Artistases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Artistas', 'url'=>array('index')),
	array('label'=>'Manage Artistas', 'url'=>array('admin')),
);
?>

<h1>Create Artistas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>