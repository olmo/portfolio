<?php
/* @var $this ArtistasCategoriasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artistas Categoriases',
);

$this->menu=array(
	array('label'=>'Create ArtistasCategorias', 'url'=>array('create')),
	array('label'=>'Manage ArtistasCategorias', 'url'=>array('admin')),
);
?>

<h1>Artistas Categoriases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
