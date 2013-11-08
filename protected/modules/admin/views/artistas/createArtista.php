<?php
/* @var $this ArtistasController */
/* @var $model Artistas */
/* @var $form CActiveForm */
Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
?>

<div class="row">
    <div class="panel panel-default bootstrap-admin-no-table-panel">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo ($tipo=='create' ? 'Añadir Artista' : 'Actualizar Artista'); ?></div>
        </div>

        <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
            <div class="form-horizontal" role="form">

                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'artistas-form',
                    // Please note: When you enable ajax validation, make sure the corresponding
                    // controller action is handling ajax validation correctly.
                    // There is a call to performAjaxValidation() commented in generated controller code.
                    // See class documentation of CActiveForm for details on this.
                    'enableAjaxValidation'=>false,
                    'errorMessageCssClass'=>'has-error',
                    'htmlOptions' => array('enctype' => 'multipart/form-data',
                    ),
                )); ?>

                <fieldset>

                <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

                <?php if($model->hasErrors()): ?>
                    <div class="panel panel-danger">
                        <div class="panel-heading">Errores</div>
                        <div class="panel-body">
                            <?php echo $form->errorSummary(array_merge(array($model))); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="form-group<?php echo $model->getError('nombre')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'nombre', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50, 'class'=>'form-control')); ?>
                    </div>
                </div>

                    <div class="form-group<?php echo $model->getError('informacion')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'informacion', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php $this->widget('ImperaviRedactorWidget', array(
                            // You can either use it for model attribute
                            'model' => $model,
                            'attribute' => 'informacion',

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

                <div class="form-group<?php echo $model->getError('id_categoria')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'id_categoria', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->dropDownList($model,'id_categoria', CHtml::listData(ArtistasCategorias::model()->findAll(), 'id', 'nombre'), array('empty'=>'Selecciona la categoría','class'=>'form-control')); ?>
                    </div>
                </div>

                <div class="form-group<?php echo $model->getError('imagen')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'imagen', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->fileField($model, 'imagen'); ?>
                    </div>
                    <?php if($model->isNewRecord!='1'): ?>
                        <div class="row">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/artistas/'.$model->imagen,"imagen",array("width"=>200)); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Imagenes del slide [1-3] -->

                <div class="form-group<?php echo $model->getError('imgslide1')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'imgslide1', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->fileField($model, 'imgslide1'); ?>
                    </div>
                    <?php if($model->isNewRecord!='1'): ?>
                        <div class="row">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/artistas/slides/'.$model->imgslide1,"imgslide1",array("width"=>200)); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo $model->getError('imgslide2')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'imgslide2', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->fileField($model, 'imgslide2'); ?>
                    </div>
                    <?php if($model->isNewRecord!='1'): ?>
                        <div class="row">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/artistas/slides/'.$model->imgslide2,"imgslide2",array("width"=>200)); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="form-group<?php echo $model->getError('imgslide3')  ? ' has-error' : ''; ?>">
                    <?php echo $form->labelEx($model,'imgslide3', array('class'=>'col-lg-2 control-label')); ?>
                    <div class="col-lg-10">
                        <?php echo $form->fileField($model, 'imgslide3'); ?>
                    </div>
                    <?php if($model->isNewRecord!='1'): ?>
                        <div class="row">
                            <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/artistas/slides/'.$model->imgslide3,"imgslide3",array("width"=>200)); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Fin del slide -->

                <?php echo CHtml::htmlButton($model->isNewRecord ? 'Añadir' : 'Guardar',array('type' => 'submit', 'class'=>'btn btn-primary pull-right')); ?>

                </fieldset>

                <?php $this->endWidget(); ?>

            </div><!-- form -->
        </div>
    </div>
</div>