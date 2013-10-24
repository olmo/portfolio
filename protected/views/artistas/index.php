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

<div class="row">
    <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
        )); ?>
    </ul>
</div>