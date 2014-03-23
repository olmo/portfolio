<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Regalos';
$cs=Yii::app()->clientScript;
$cs->registerScriptFile('http://maps.google.com/maps/api/js?sensor=false', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/vendor/jquery.gmap.js', CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/map.js', CClientScript::POS_END);

$this->breadcrumbs=array(
	'Regalos'=>array('gift'),
);
?>

<section class="page-top" xmlns="http://www.w3.org/1999/html">
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if(isset($this->breadcrumbs)):?>
                    <ul class="breadcrumb">
                        <?php $this->widget('ext.CBreadcrumbs', array(
                            'links'=>$this->breadcrumbs,
                            'separator'=>''
                        )); ?>
                    </ul>
                <?php endif?>
            </div>
        </div>
        <?php if(isset($this->titulo)):?>
            <div class="row">
                <div class="span12">
                    <h2><?php echo $this->titulo; ?></h2>
                </div>
            </div>
        <?php endif?>
    </div>
</section>

<div class="container">

    <h2>Cheques <strong> regalo </strong> </h2>

    <div class="row">
        <div class="span12">
            <p class="lead">
                Elije tu <span class="alternative-font">cheque regalo</span> o personaliza tu oferta y contacta con nosotros.
            </p>
        </div>
    </div>

    <hr class="tall" />

    <div class="row">
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/gift/bono2.jpg" alt="">
    </div>

    <br/>

    <div class="row">
        <div class="span12">
            <p class="lead">
               Para realizar un  <span class="alternative-font">pedido</span> de un bono regalo pulsa el siguiente botón:
            </p>
        </div>
    </div>

    <div class="row">
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                    Realizar Pedido
                </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="span6">
                        <p class="note">Los campos con <span style="color: red;">*</span> son obligatorios.</p>

                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'gift-form',
                            'enableClientValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                        )); ?>

                        <?php if($model->hasErrors()): ?>
                            <div class="alert alert-block alert-error fade in">
                                <h4 class="alert-heading">Errores</h4>
                                <?php echo $form->errorSummary($model); ?>
                            </div>
                        <?php endif; ?>

                        <div class="row controls">
                            <div class="span3 control-group">
                                <?php echo $form->labelEx($model,'name'); ?>
                                <?php echo $form->textField($model,'name', array('class'=>'span3')); ?>
                            </div>

                            <div class="span3 control-group">
                                <?php echo $form->labelEx($model,'email'); ?>
                                <?php echo $form->textField($model,'email', array('class'=>'span3')); ?>
                            </div>
                        </div>

                        <!--
                        <div class="row controls">
                            <div class="span6 control-group">
                                <?php // echo $form->labelEx($model,'subject'); ?>
                                <?php // echo $form->textField($model,'subject',array('size'=>100,'maxlength'=>128, 'class'=>'span6')); ?>
                            </div>
                        </div>
                        -->
                        <div class="row controls">
                            <div class="span6 control-group">
                                <?php echo $form->labelEx($model,'importe'); ?>
                                <?php echo $form->dropDownList($model,'importe', array('30' => '30 €', '50' => '50 €', '100' => '100 €', 'personalizado' => 'Personalizado'),array('empty'=>'Selecciona un importe...', 'class'=>'span6')); ?>
                            </div>
                        </div>

                        <div class="row controls">
                            <div class="span6 control-group">
                                <?php echo $form->labelEx($model,'body'); ?>
                                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'span6')); ?>
                            </div>
                        </div>

                        <br/>

                        <div>
                            <?php echo CHtml::submitButton('Enviar', array('class' => 'btn btn-primary btn-large')); ?>
                            <!-- <p class="status"></p> -->
                        </div>
                    </div>
                    <div class="span5">
                        <h4 class="pull-top"><strong>Instrucciones</strong></h4>
                        <p style="text-align: justify;">Para solicitar un bono regalo basta con seguir los siguientes pasos:</p>
                        <ol style="text-align: justify;">
                            <li style="text-align: justify;">Rellene el formulario.</li>
                            <li style="text-align: justify;">Elija su bono regalo.</li>
                            <li style="text-align: justify;">Envia el formulario y nos podremos en contacto lo antes posible con usted.</li>
                        </ol>
                        <p style="text-align: justify;">En el caso de que quiera un <b>importe personalizado</b> indiquelo en la sección mensaje.</p>
                    </div>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <hr class="tall" />

    <h3 class="short"><strong>Cuadros </strong> en promoción</h3>

    <div class="row">

        <ul id="related2" class="portfolio-list">
            <?php
            $data = $related->getData();
            foreach($data as $i => $item)
                Yii::app()->controller->renderPartial('_related', array('index' => $i, 'data' => $item, 'widget' => $this));
            ?>
        </ul>

    </div>

</div>

