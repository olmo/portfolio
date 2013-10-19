<?php
/* @var $this ArtistasCategoriasController */
/* @var $model ArtistasCategoria */

$this->breadcrumbs=array(
	'Artistas Categoriases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ArtistasCategorias', 'url'=>array('index')),
	array('label'=>'Create ArtistasCategorias', 'url'=>array('create')),
	array('label'=>'Update ArtistasCategorias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ArtistasCategorias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArtistasCategorias', 'url'=>array('admin')),
);
?>

<h1>View ArtistasCategorias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
