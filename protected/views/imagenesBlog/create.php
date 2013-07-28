<?php
/* @var $this ImagenesBlogController */
/* @var $model ImagenesBlog */

$this->breadcrumbs=array(
	'Imagenes Blogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ImagenesBlog', 'url'=>array('index')),
	array('label'=>'Manage ImagenesBlog', 'url'=>array('admin')),
);
?>

<h1>Create ImagenesBlog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>