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

<h1>Create Elemento</h1>

<?php echo $this->renderPartial('_form', array('a'=>$a, 'b'=>$b)); ?>