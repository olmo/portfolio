<?php
/* @var $this ArtistasCategoriasController */
/* @var $model ArtistasCategorias */

$this->breadcrumbs=array(
	'Artistas Categoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArtistasCategorias', 'url'=>array('index')),
	array('label'=>'Manage ArtistasCategorias', 'url'=>array('admin')),
);
?>

<h1>Create ArtistasCategorias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>