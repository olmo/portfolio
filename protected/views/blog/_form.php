<?php
/* @var $this BlogController */
/* @var $model Entrada */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entrada-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_publicacion'); ?>
		<?php echo $form->textField($model,'fecha_publicacion'); ?>
		<?php echo $form->error($model,'fecha_publicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor'); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->