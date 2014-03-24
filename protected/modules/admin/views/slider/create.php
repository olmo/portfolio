<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo ($tipo =='create' ? 'Añadir Slider' : 'Actualizar Slider'); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
            <div class="form-horizontal" role="form">

                <?php $form = $this->beginWidget('CActiveForm', array(
                    'id'=>'form',
                    'enableAjaxValidation'=>false,
                    'errorMessageCssClass'=>'has-error',
                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
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

                    <div class="form-group<?php echo $model->getError('path')  ? ' has-error' : ''; ?>">
                        <?php echo $form->labelEx($model,'path', array('class'=>'col-lg-2 control-label')); ?>
                        <div class="col-lg-10">
                            <?php echo $form->fileField($model,'path'); ?>
                        </div>
                        <?php if($model->isNewRecord!='1'): ?>
                            <div class="col-lg-10">
                                <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sliders/'.$model->path,"path",array("width"=>200)); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>
                </fieldset>

                <?php $this->endWidget(); ?>

            </div>
        </div>
    </div>
</div>