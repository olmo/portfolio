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

<?php if(Yii::app()->user->getId()!==null): ?>
    <?php
    $this->beginWidget('zii.widgets.CPortlet', array(
        'title'=>'Operations',
    ));
    $this->widget('zii.widgets.CMenu', array(
        'items'=>$this->menu,
        'htmlOptions'=>array('class'=>'operations'),
    ));
    $this->endWidget();
    ?>
<?php endif; ?>

<div class="slider animation_fade" data-animation="fade" data-interval="5000">
    <ul>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fondos/1.jpg" alt="">
        </li>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fondos/2.jpg" alt="">
        </li>
        <li>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/fondos/3.jpg" alt="">
        </li>
    </ul>
</div>

<section class="layout left blog"><div class="skew"></div>

    <ul class="articles">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
            'template'=>"{items}",
        )); ?>

    </ul>

    <!-- Pagination -->
    <div class="pagination">
        <?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination,
            'header'          => '',
            'firstPageLabel' => '<<',
            'prevPageLabel'  => '<',
            'nextPageLabel'  => '>',
            'lastPageLabel'  => '>>',
        )); ?>
    </div>

</section>