<?php
/* @var $this GaleriaController */
/* @var $model Elemento */

$this->breadcrumbs=array(
	'Elementos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Elemento', 'url'=>array('index')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);
?>

<div class="layout full clearfix">
<h1>Añadir Vinilo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>