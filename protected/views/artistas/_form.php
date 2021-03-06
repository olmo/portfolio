<?php
/* @var $this ArtistasController */
/* @var $model Artistas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'artistas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data',
                           ),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'informacion'); ?>
		<?php echo $form->textArea($model,'informacion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'informacion'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_categoria'); ?>
        <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(ArtistasCategorias::model()->findAll(), 'id', 'nombre'), array('empty'=>'Seleccione la categoría')); ?>
        <?php echo $form->error($model,'id_categoria'); ?>
    </div>



    <div class="row">
        <?php echo $form->labelEx($model,'imagen'); ?>
        <?php echo CHtml::activeFileField($model, 'imagen'); ?>
        <?php echo $form->error($model,'imagen'); ?>
    </div>
    <?php if($model->isNewRecord!='1'): ?>
    <div class="row">
        <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/artistas/'.$model->imagen,"imagen",array("width"=>200)); ?>
    </div>
    <?php endif; ?>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->