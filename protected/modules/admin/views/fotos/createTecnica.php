<?php

$this->breadcrumbs=array(
    'Fotos'=>array('index'),
    'Técnicas'=>array('index'),
    'Añadir',
);

?>

<h3>Añadir Técnica</h3>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tecnica-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>
    <fieldset>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'nombre'); ?>
        <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'nombre'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>
    </fieldset>

    <?php $this->endWidget(); ?>

</div>