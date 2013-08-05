<?php
/* @var $this CategoriasController */
/* @var $model Categorias */

$this->breadcrumbs=array(
	'Categoriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Categorias', 'url'=>array('index')),
	array('label'=>'Manage Categorias', 'url'=>array('admin')),
);
?>

<div class="layout full clearfix">
    <h1>Añadir Categoría</h1>

    <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>