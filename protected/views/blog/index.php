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

<section class="layout left blog"><div class="skew"></div>

    <ul class="articles">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
            'template'=>"{items}\n{pager}",
        )); ?>

    </ul>

    <!-- Pagination -->
    <div class="pagination">
        <a href="#">« Previous posts</a>
        <a href="#">Next posts »</a>
    </div>

</section>