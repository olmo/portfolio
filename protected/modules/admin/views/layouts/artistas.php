<?php $this->beginContent('/layouts/main'); ?>
    <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="well sidebar-nav">
            <?php $this->widget('zii.widgets.CMenu',array(
                'activeCssClass'=>'active',
                'htmlOptions'=>array('class'=>'nav'),
                'items'=>array(
                    array('label'=>'Artistas', 'url'=>array('/admin/artistas/index'),),
                    array('label'=>'Categorías', 'url'=>array('/admin/artistas/view/tipo/categorias')),
                ),
            )); ?>
        </div>
    </div>

    <div class="col-xs-12 col-sm-9">
        <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Submenú</button>
        </p>
        <div class="well">
            <?php echo $content; ?>
        </div>
    </div>

<?php $this->endContent(); ?>