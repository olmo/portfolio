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

        <?php

        // see http://www.yiiframework.com/doc/guide/1.1/en/form.table
        // Note: Can be a route to a config file too,
        //       or create a method 'getMultiModelForm()' in the member model
        $tams = FotosTamano::model()->findAll();
        $arr = array();
        $arr[''] = '-';
        foreach($tams as $t)
        {
            $arr[$t->id] = $t->nombre;
        }

        $memberFormConfig = array(
            'elements'=>array(
                'id_tamano'=>array(
                    'type'=>'dropdownlist',
                    //it is important to add an empty item because of new records
                    'items'=>$arr,
                ),
                'ancho'=>array(
                    'type'=>'text',
                    'maxlength'=>40,
                ),
                'alto'=>array(
                    'type'=>'text',
                    'maxlength'=>40,
                ),
                'precio'=>array(
                    'type'=>'text',
                    'maxlength'=>40,
                ),
                'stock_inicial'=>array(
                    'type'=>'text',
                    'maxlength'=>40,
                ),
            ));

        $this->widget('ext.multimodelform.MultiModelForm',array(
            'id' => 'id_foto', //the unique widget id
            'formConfig' => $memberFormConfig, //the form configuration array
            'model' => $tamanos, //instance of the form model

            //if submitted not empty from the controller,
            //the form will be rendered with validation errors
            //'validatedItems' => $validatedMembers,

            //array of member instances loaded from db
           // 'data' => $member->findAll('groupid=:groupId', array(':groupId'=>$model->id)),
        ));
        ?>

        <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Añadir' : 'Guardar'); ?>
    </div>

    </fieldset>

    <?php $this->endWidget(); ?>


</div><!-- form -->