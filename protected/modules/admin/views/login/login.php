<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
    'Login',
);
?>

<div class="form-horizontal" role="form">

    <h3>Login</h3>

    <p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

    <div class="clearfix"></div>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'elemento-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <fieldset>

        <p class="note">Los campos con <span style="color: red;">*</span> son obligatorios.</p>

        <?php if($model->hasErrors()): ?>
            <div class="panel panel-danger">
                <div class="panel-heading">Errores</div>
                <div class="panel-body">
                    <?php echo $form->errorSummary(array_merge(array($model))); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="form-group<?php echo $model->getError('username')  ? ' has-error' : ''; ?>">
            <?php echo $form->labelEx($model,'username', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50, 'class'=>'form-control', 'placeholder'=>'Usuario')); ?>
            </div>
        </div>

        <div class="form-group<?php echo $model->getError('password')  ? ' has-error' : ''; ?>">
            <?php echo $form->labelEx($model,'password', array('class'=>'col-lg-2 control-label')); ?>
            <div class="col-lg-10">
                <?php echo $form->textField($model,'password',array('size'=>50,'maxlength'=>50, 'class'=>'form-control', 'placeholder'=>'Contraseña')); ?>
            </div>
        </div>

        <div class="form-group<?php echo $model->getError('rememberMe')  ? ' has-error' : ''; ?>">
            <div class="col-lg-offset-2 col-lg-10">
                <div class="checkbox">
                    <?php echo $form->label($model,'rememberMe'); ?>
                    <?php echo $form->checkBox($model,'rememberMe',array('size'=>50,'maxlength'=>50)); ?>
                </div>
            </div>
        </div>


        <?php echo CHtml::submitButton('Entrar', array('class'=>'btn btn-primary pull-left')); ?>


        <?php $this->endWidget(); ?>

    </fieldset>

</div>
