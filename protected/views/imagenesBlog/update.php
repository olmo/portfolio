<?php
/* @var $this ImagenesBlogController */
/* @var $model ImagenesBlog */

$this->breadcrumbs=array(
	'Imagenes Blogs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ImagenesBlog', 'url'=>array('index')),
	array('label'=>'Create ImagenesBlog', 'url'=>array('create')),
	array('label'=>'View ImagenesBlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ImagenesBlog', 'url'=>array('admin')),
);
?>

<h1>Update ImagenesBlog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>