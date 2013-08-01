<?php
/* @var $this BlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradas',
);

$this->menu=array(
	array('label'=>'Create Entrada', 'url'=>array('create')),
	array('label'=>'Manage Entrada', 'url'=>array('admin')),
);
?>

<div class="articles">
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
)); ?>
</div>
