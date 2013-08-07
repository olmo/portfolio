<?php
/* @var $this GaleriaController */
/* @var $model Elemento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'elemento-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


    <div class="row">
        <div class="one_half first">
            <?php echo $form->labelEx($model,'nombre'); ?>
            <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'nombre'); ?>
            </div>
        <div class="one_half last">
            <?php echo $form->labelEx($model,'id_categoria'); ?>
            <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(Categorias::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
            <?php echo $form->error($model,'id_categoria'); ?>
        </div>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'elementosImagenes'); ?>
        <?php $this->widget('CMultiFileUpload', array(
            'name' => 'images',
            'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
            'duplicate' => 'Duplicate file!', // useful, i think
            'denied' => 'Invalid file type', // useful, i think
        )); ?>
        <?php echo $form->error($model,'elementosImagenes'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Añadir' : 'Guardar', array('class' => 'button green')); ?>
	</div>

<?php $this->endWidget(); ?>


</div><!-- form -->