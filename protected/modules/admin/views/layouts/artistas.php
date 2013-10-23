<?php $this->beginContent('/layouts/main'); ?>
    <div id="sidebar">
        <?php $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'active',
            'htmlOptions'=>array('class'=>'sideNav'),
            'items'=>array(
                array('label'=>'Artistas', 'url'=>array('/admin/artistas/index'),),
                array('label'=>'Categorías', 'url'=>array('/admin/artistas/view/categorias')),
            ),
        )); ?>
    </div>
    <!-- // #sidebar -->

    <!-- h2 stays for breadcrumbs -->
    <?php if(isset($this->breadcrumbs)):?>
        <h2>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?>
        </h2>
    <?php endif?>

    <div id="main">
        <?php echo $content; ?>
    </div>
<?php $this->endContent(); ?>