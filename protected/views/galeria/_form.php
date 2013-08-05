<?php
/* @var $this GaleriaController */
/* @var $model Elemento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elemento-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php
        if ($a->isNewRecord==false) { $b=ElementosImagenes::model()->findByPk($a->id_imagen); }

        echo $form->errorSummary(array($a, $b));
    ?>

	<div class="row">
		<?php echo $form->labelEx($a,'nombre'); ?>
		<?php echo $form->textField($a,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($a,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'titulo'); ?>
		<?php echo $form->textField($a,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($a,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'descripcion'); ?>
		<?php echo $form->textField($a,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($a,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'id_categoria'); ?>
		<?php echo $form->textField($a,'id_categoria'); ?>
		<?php echo $form->error($a,'id_categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($a,'id_imagen'); ?>
		<?php echo $form->textField($a,'id_imagen'); ?>
		<?php echo $form->error($a,'id_imagen'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($b,'nombre'); ?>
        <?php echo $form->textField($b,'nombre'); ?>
        <?php echo $form->error($b,'nombre'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($a->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->