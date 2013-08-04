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

<div class="slider animation_fade" data-animation="fade" data-interval="5000">
    <ul>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/blog/1.jpg" alt="">
        </li>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/blog/2.jpg" alt="">
        </li>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/blog/3.jpg" alt="">
        </li>
    </ul>
</div>

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
        <a href="#">« Página anterior</a>
        <a href="#">Página siguiente »</a>
    </div>

</section>