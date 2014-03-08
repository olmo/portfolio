<?php
/* @var $this ArtistasController */
/* @var $model Artistas */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
    )); ?>

    <div class="row">
        <?php echo $form->label($model,'id'); ?>
        <?php echo $form->textField($model,'id'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'nombre'); ?>
        <?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'informacion'); ?>
        <?php echo $form->textArea($model,'informacion',array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'id_categoria'); ?>
        <?php echo $form->textField($model,'id_categoria'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'imagen'); ?>
        <?php echo $form->textField($model,'imagen',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'imgslide1'); ?>
        <?php echo $form->textField($model,'imgslide1',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'imgslide2'); ?>
        <?php echo $form->textField($model,'imgslide2',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'imgslide3'); ?>
        <?php echo $form->textField($model,'imgslide3',array('size'=>60,'maxlength'=>100)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->