<?php
/* @var $this ArtistasCategoriasController */
/* @var $model ArtistasCategoria */

$this->breadcrumbs=array(
	'Artistas Categoriases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArtistasCategorias', 'url'=>array('index')),
	array('label'=>'Create ArtistasCategorias', 'url'=>array('create')),
	array('label'=>'View ArtistasCategorias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ArtistasCategorias', 'url'=>array('admin')),
);
?>

<h1>Update ArtistasCategorias <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>