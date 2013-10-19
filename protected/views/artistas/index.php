<?php
/* @var $this ArtistasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Artistases',
);

$this->menu=array(
	array('label'=>'Create Artistas', 'url'=>array('create')),
	array('label'=>'Manage Artistas', 'url'=>array('admin')),
);
?>

<h1>Artistases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
