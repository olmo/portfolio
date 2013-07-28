<?php
/* @var $this ImagenesBlogController */
/* @var $model ImagenesBlog */

$this->breadcrumbs=array(
	'Imagenes Blogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ImagenesBlog', 'url'=>array('index')),
	array('label'=>'Create ImagenesBlog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imagenes-blog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Imagenes Blogs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imagenes-blog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'titulo',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
