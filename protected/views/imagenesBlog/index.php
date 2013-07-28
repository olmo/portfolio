<?php
/* @var $this ImagenesBlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagenes Blogs',
);

$this->menu=array(
	array('label'=>'Create ImagenesBlog', 'url'=>array('create')),
	array('label'=>'Manage ImagenesBlog', 'url'=>array('admin')),
);
?>

<h1>Imagenes Blogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
