<?php
/* @var $this GaleriaController */
/* @var $model Foto */

/*
 * <div class="slider portfolio_slider animation_slide" data-animation="slide" data-controls="1">
    <ul>
        <?php foreach ($model->elementosImagenes as $imagen): ?>
            <li>
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/galeria/<?php echo $model->id; ?>/<?php echo $imagen->nombre; ?>" alt="">
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<section class="portfolio_description layout left">
    <div class="skew"></div>
    <a href="#" class="hide"></a>

    <h2><?php echo $model->nombre; ?></h2>
    <?php echo $model->descripcion; ?>
</section>

 */

    $cs=Yii::app()->clientScript;
    $cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.carouFredSel-6.2.1-packed.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.touchSwipe.min.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.transit.min.js', CClientScript::POS_END);
    $cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/gallery.js', CClientScript::POS_END);

    $this->breadcrumbs=array(
        'Galería'=>array('index'),
    );

    $this->pageTitle=Yii::app()->name . ' - '.$model->titulo;
?>

<h3><?php echo $model->idArtista->nombre; ?></h3>

<div class="row">
    <div class="span6">
        <a class="thumbnail lightbox pull-left" href="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/<?php echo $model->imagen; ?>" data-plugin-options='{"type":"image"}'>
            <img class="span6" alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/<?php echo $model->imagen; ?>">
            <span class="zoom"><i class="icon-16 icon-white-shadowed icon-search"></i></span>
        </a>
    </div>

    <div class="span6">

        <h4><?php echo $model->titulo; ?></h4>
        <?php echo $model->descripcion; ?>


        <?php if(Yii::app()->user->hasFlash('contact')): ?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('contact'); ?>
            </div>
        <?php else: ?>

            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'pedido-form',
            )); ?>
            <?php echo $form->hiddenField($formmodel,'obra'); ?>
            <?php echo $form->hiddenField($formmodel,'tamano'); ?>
            <?php echo $form->hiddenField($formmodel,'montaje'); ?>
            <?php echo $form->hiddenField($formmodel,'precio'); ?>

            <?php if($formmodel->hasErrors()): ?>
                <div class="alert alert-block alert-error fade in">
                    <h4 class="alert-heading">Errores</h4>
                    <?php echo $form->errorSummary($formmodel); ?>
                </div>
            <?php endif; ?>

            <?php if($model->oferta>0): ?>
                <h4 class="pull-top">¡Oferta disponible! Descuento del <span id="descuento"><?php echo $model->oferta; ?></span>%</h4>
                El descuento se muestra aplicado sobre el precio total más abajo.
            <?php endif; ?>

            <h4 class="pull-top">Tamaños</h4>

            <table class="table table-hover">
                <?php /*echo $form->checkBoxList($formmodel, 'tamano', CHtml::listData(ObrasTamanosRelation::model()->findAll(array('condition'=>'id_obra='.$model->id)), 'id', 'nombre'),
                    array('container'=>'','separator'=>'',
                        'template'=>'<tr><td class="span1">{input}</td><td class="span4">'.$data->alto.' x '.$data->ancho.' cm</td><td class="span1 precio">'.$data->precio.' €</td></tr>'));*/ ?>
                <tr><th></th><th>Alto x Ancho</th><th>Ediciones limitadas</th><th>Precio</th></tr>
                <?php foreach($model->obraTamano as $i=>$tamano): ?>
                    <tr><td class="span1"><input value="<?php echo $tamano->id_tamano; ?>" style="margin: 0;" type="checkbox" name="tamanos[]" <?php if ($i==0) echo 'checked'; ?>></td><td class="span3 tamano"><?php echo $tamano->alto; ?> x <?php echo $tamano->ancho; ?> cm</td><td class="span1"><?php echo $tamano->stock_restante; ?> / <?php echo $tamano->stock_inicial; ?></td><td class="span1 precio"><?php echo $tamano->precio; ?>€</td></tr>
                <?php endforeach; ?>
            </table>

            <h4 class="pull-top">Montaje</h4>

            <table id="montajes" class="table table-hover">
                <?php foreach($model->montajes as $montaje): ?>
                    <tr><td class="span1"><input value="<?php echo $montaje->id; ?>" style="margin: 0;" name="montajes[]" type="checkbox" <?php if($montaje->id==$model->montaje_recomendado) echo 'checked'; ?>></td><td class="span3"><?php echo $montaje->nombre; ?></td><td class="span1"><?php if($montaje->id==$model->montaje_recomendado) echo 'Recomendado'; ?></td><td class="precio2 span1"></td><td class="precio hidden"><?php echo $montaje->precio; ?>€</td></tr>
                <?php endforeach; ?>
            </table>

            <hr class="tall" />

            <div>Precio Total: <span id="total" class="pull-right"><strong></strong></span></div>

            <br />

            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            Realizar Pedido
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <div class="row controls">
                                <div class="span6 control-group">
                                    <?php echo $form->labelEx($formmodel,'nombre'); ?>
                                    <?php echo $form->textField($formmodel,'nombre', array('class'=>'span5')); ?>
                                </div>
                                <div class="span6 control-group">
                                    <?php echo $form->labelEx($formmodel,'email'); ?>
                                    <?php echo $form->textField($formmodel,'email', array('class'=>'span5')); ?>
                                </div>
                            </div>
                            <div class="row controls">
                                <div class="span6 control-group">
                                    <?php echo $form->labelEx($formmodel,'comentario'); ?>
                                    <?php echo $form->textArea($formmodel,'comentario',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>
                                </div>
                            </div>

                            <div><?php echo CHtml::submitButton('Enviar', array('class' => 'btn btn-primary btn-large')); ?></div>
                        </div>
                    </div>
                </div>
            </div>



            <?php $this->endWidget(); ?>
        <?php endif; ?>
    </div>
</div>

<hr />

<div class="row">

    <div class="span12">
        <h3>Obras <strong>relacionadas</strong></h3>
    </div>

    <ul id="related2" class="portfolio-list">
        <?php
            $data = $related->getData();
            foreach($data as $i => $item)
                Yii::app()->controller->renderPartial('_related', array('index' => $i, 'data' => $item, 'widget' => $this));
        ?>
    </ul>

</div>