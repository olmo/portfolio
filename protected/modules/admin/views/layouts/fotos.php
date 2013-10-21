<?php $this->beginContent('/layouts/main'); ?>
    <div id="sidebar">
        <?php $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'active',
            'htmlOptions'=>array('class'=>'sideNav'),
            'items'=>array(
                array('label'=>'Fotos', 'url'=>array('/admin/fotos/index'),),
                array('label'=>'Formatos', 'url'=>array('/admin/fotos/indexFormato')),
                array('label'=>'Tamaños', 'url'=>array('/admin/fotos/indexTamano')),
                array('label'=>'Técnicas', 'url'=>array('/admin/fotos/indexTecnica')),
                array('label'=>'Temas', 'url'=>array('/admin/fotos/indexTema')),
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