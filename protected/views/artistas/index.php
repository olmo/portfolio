<?php
/* @var $this ArtistasController */
/* @var $dataProvider CActiveDataProvider */

/*
$this->breadcrumbs=array(
	'Artistases',
);

$this->menu=array(
	array('label'=>'Create Artistas', 'url'=>array('create')),
	array('label'=>'Manage Artistas', 'url'=>array('admin')),
);
*/

$this->breadcrumbs=array(
    'Artistas'=>array('index'),
);

?>

<div class="container">
    <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
        <li data-option-value="*" class="active"><a href="#">Mostrar Todo</a></li>
        <?php foreach($categorias->getData() as $data): ?>
            <li data-option-value=".<?php echo CHtml::encode($data->nombre); ?>"><a href="#"><?php echo CHtml::encode($data->nombre); ?></a></li>
        <?php endforeach; ?>
    </ul>

    <hr />

    <div class="row">

        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'enableSorting'=>false,
                'template'=>"{items}",
                'enablePagination'=>false,
                'summaryText'=>''
            )); ?>
        </ul>

    </div>
</div>
