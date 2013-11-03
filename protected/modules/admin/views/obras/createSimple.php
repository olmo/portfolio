<?php

/*$this->breadcrumbs=array(
    'Artistas'=>array('index'),
    $tipoP=>array('index'),
    'Añadir',
);*/

?>

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo ($accion=='create' ? 'Añadir '.$tipoS : 'Actualizar '.$tipoS); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
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
                                <?php echo $form->errorSummary(array_merge(array($model),$validatedTamanos)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group<?php echo $model->getError('nombre')  ? ' has-error' : ''; ?>">
                        <?php echo $form->labelEx($model,'nombre', array('class'=>'col-lg-2 control-label')); ?>
                        <div class="col-lg-10">
                            <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
                        </div>
                    </div>

                    <?php if ($tipo=='montaje'): ?>
                        <div class="form-group<?php echo $model->getError('precio')  ? ' has-error' : ''; ?>">
                            <?php echo $form->labelEx($model,'precio', array('class'=>'col-lg-2 control-label')); ?>
                            <div class="col-lg-10">
                                <?php echo $form->textField($model,'precio',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>
                </fieldset>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>