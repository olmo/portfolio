<?php
    Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
?>

<h3><?php echo ($accion=='create' ? 'Añadir Entrada' : 'Actualizar Entrada'); ?></h3>

<div class="form-horizontal" role="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>
    <fieldset>

        <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

        <?php if($model->hasErrors()): ?>
            <div class="panel panel-danger">
                <div class="panel-heading">Errores</div>
                <div class="panel-body">
                    <?php echo $form->errorSummary($model); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="form-group<?php echo $model->getError('titulo')  ? ' has-error' : ''; ?>">
            <?php echo $form->labelEx($model,'titulo', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group<?php echo $model->getError('texto')  ? ' has-error' : ''; ?>">
            <?php echo $form->labelEx($model,'texto', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php $this->widget('ImperaviRedactorWidget', array(
                    // You can either use it for model attribute
                    'model' => $model,
                    'attribute' => 'texto',

                    'options' => array(
                        'lang' => 'es',
                        'minHeight' => 200,
                        'autoresize' => true,
                        'imageUpload' => 'http://localhost:8000'.$this->createUrl('blog/imgUpload'),
                        'imageUploadErrorCallback'=>new CJavaScriptExpression('function(obj, json){ alert(json.error); }'),
                    ),
                ));
                ?>
            </div>
        </div>

        <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>
    </fieldset>

    <?php $this->endWidget(); ?>

</div>