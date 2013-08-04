<?php
/* @var $this BlogController */
/* @var $model Entrada */

$this->breadcrumbs=array(
	'Entradas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Entrada', 'url'=>array('index')),
	array('label'=>'Manage Entrada', 'url'=>array('admin')),
);
?>

<div class="layout full clearfix">
<h1>Nueva Entrada</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

</div>