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

    <?php echo $form->errorSummary(array_merge(array($model),$validatedTamanos)); ?>


    <div class="row">
        <?php echo $form->labelEx($model,'titulo'); ?>
        <?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->error($model,'titulo'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_artista'); ?>
        <?php echo $form->dropDownList($model,'id_artista', CHtml::listData(Artistas::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
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
        <?php echo $form->labelEx($model,'montaje_recomendado'); ?>
        <?php echo $form->dropDownList($model,'montaje_recomendado', CHtml::listData(FotosMontaje::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona una categoría')); ?>
        <?php echo $form->error($model,'montaje_recomendado'); ?>
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
        <?php echo $form->labelEx($model,'imagen'); ?>
        <?php echo CHtml::activeFileField($model, 'imagen'); ?>
        <?php echo $form->error($model,'imagen'); ?>
    </div>
    <?php if($model->isNewRecord!='1'): ?>
        <div class="row">
            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/fotos/'.$model->imagen,"imagen",array("width"=>200)); ?>
        </div>
    <?php endif; ?>

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
                'id_foto'=>array(
                    'type'=>'hidden'
                ),
                'id_tamano'=>array(
                    'type'=>'dropdownlist',
                    //it is important to add an empty item because of new records
                    'items'=>$arr,
                ),
                'ancho'=>array(
                    'type'=>'text',
                    'maxlength'=>5,
                ),
                'alto'=>array(
                    'type'=>'text',
                    'maxlength'=>5,
                ),
                'precio'=>array(
                    'type'=>'text',
                    'maxlength'=>10,
                ),
                'stock_inicial'=>array(
                    'type'=>'text',
                    'maxlength'=>3,
                ),
                'stock_restante'=>array(
                    'type'=>'text',
                    'maxlength'=>3,
                ),
            ));

        $this->widget('ext.multimodelform.MultiModelForm',array(
            'id' => 'idfoto', //the unique widget id
            'formConfig' => $memberFormConfig, //the form configuration array
            'model' => $tamanos, //instance of the form model
            'tableView' => true,

            //if submitted not empty from the controller,
            //the form will be rendered with validation errors
            'validatedItems' => $validatedTamanos,

            //array of member instances loaded from db
            'data' => $tamanos->findAll('id_foto=:id_foto', array(':id_foto'=>$model->id)),
        ));
        ?>

        <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Añadir' : 'Guardar'); ?>
    </div>

    </fieldset>

    <?php $this->endWidget(); ?>


</div><!-- form -->