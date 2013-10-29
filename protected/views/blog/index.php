<?php
/* @var $this BlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog',
);

?>

<div class="row">
    <div class="span12">
        <div class="blog-posts">
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'template'=>"{items}",
            )); ?>
        </div>

        <div class="pagination">
            <?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination,
                'cssFile'=>false,
                'selectedPageCssClass'=>'active',
                'hiddenPageCssClass'=>'disabled',
                'header'          => '',
                'firstPageLabel' => '<<',
                'prevPageLabel'  => '<',
                'nextPageLabel'  => '>',
                'lastPageLabel'  => '>>',
            )); ?>
        </div>
    </div>
</div>
