<?php $this->beginContent('/layouts/main'); ?>
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="well sidebar-nav">
            <?php $this->widget('zii.widgets.CMenu',array(
                //'activeCssClass'=>'active',
                'htmlOptions'=>array('class'=>'nav'),
                'items'=>array(
                    array('label'=>'Fotos', 'url'=>array('obras/index'),),
                    array('label'=>'Formatos', 'url'=>array('obras/view/tipo/formato')),
                    array('label'=>'Tamaños', 'url'=>array('obras/view/tipo/tamano')),
                    array('label'=>'Técnicas', 'url'=>array('obras/view/tipo/tecnica')),
                    array('label'=>'Temas', 'url'=>array('obras/view/tipo/tema')),
                    array('label'=>'Montajes', 'url'=>array('obras/view/tipo/montaje')),
                ),
            )); ?>
        </div><!--/.well -->
    </div><!--/span-->



    <!-- h2 stays for breadcrumbs -->
    <?php if(isset($this->breadcrumbs)):?>
        <h2>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                    )); ?>
        </h2>
    <?php endif?>

    <div class="col-xs-12 col-sm-9">
        <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="well">
            <?php echo $content; ?>
        </div>
    </div>

<?php $this->endContent(); ?>