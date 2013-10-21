<?php
/* @var $this GaleriaController */
/* @var $model Foto */
/* @var $form CActiveForm */
Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
?>

<h3>Añadir Foto</h3>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'elemento-form',
        'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )); ?>

    <fieldset>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'titulo'); ?>
        <?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'titulo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_artista'); ?>
        <?php echo $form->dropDownList($model,'id_artista', CHtml::listData(Artista::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
        <?php echo $form->error($model,'id_artista'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_formato'); ?>
        <?php echo $form->dropDownList($model,'id_formato', CHtml::listData(FotosFormato::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
        <?php echo $form->error($model,'id_formato'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_tecnica'); ?>
        <?php echo $form->dropDownList($model,'id_tecnica', CHtml::listData(FotosTecnica::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
        <?php echo $form->error($model,'id_tecnica'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_tema'); ?>
        <?php echo $form->dropDownList($model,'id_tema', CHtml::listData(FotosTema::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
        <?php echo $form->error($model,'id_tema'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'descripcion'); ?>
        <?php $this->widget('ImperaviRedactorWidget', array(
            // You can either use it for model attribute
            'model' => $model,
            'attribute' => 'descripcion',

            'options' => array(
                'lang' => 'es',
                'minHeight' => 200,
                'autoresize' => true,
                'imageUpload' => 'http://localhost:8000'.$this->createUrl('blog/imgUpload'),
                'imageUploadErrorCallback'=>new CJavaScriptExpression('function(obj, json){ alert(json.error); }'),
            ),
        ));
        ?>
        <?php echo $form->error($model,'descripcion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'elementosImagenes'); ?>
        <?php $this->widget('CMultiFileUpload', array(
            'name' => 'images',
            'accept' => 'jpeg|jpg|gif|png', // useful for verifying files
            'duplicate' => '¡Archivo duplicado!', // useful, i think
            'denied' => 'Tipo de archivo inválido.', // useful, i think
        )); ?>
        <?php echo $form->error($model,'elementosImagenes'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Añadir' : 'Guardar'); ?>
    </div>

    </fieldset>

    <?php $this->endWidget(); ?>


</div><!-- form -->