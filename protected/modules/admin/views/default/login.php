<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
?>

<h2 class="form-signin-heading" style="text-align:center">Login</h2>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'elemento-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <?php if($model->hasErrors()): ?>
        <div class="panel panel-danger">
            <div class="panel-heading">Errores</div>
            <div class="panel-body">
                <?php echo $form->errorSummary(array_merge(array($model))); ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="form-group<?php echo $model->getError('username')  ? ' has-error' : ''; ?>">
        <?php echo $form->textField($model,'username',array('size'=>50,'maxlength'=>50, 'class'=>'form-control', 'placeholder'=>'Usuario')); ?>
    </div>

    <div class="form-group<?php echo $model->getError('password')  ? ' has-error' : ''; ?>">
        <?php echo $form->passwordField($model,'password',array('size'=>50,'maxlength'=>50, 'class'=>'form-control', 'placeholder'=>'Contraseña')); ?>
    </div>

    <div class="checkbox">
        <?php echo $form->label($model,'rememberMe'); ?>
        <?php echo $form->checkBox($model,'rememberMe',array('size'=>50,'maxlength'=>50)); ?>
    </div>

    <?php echo CHtml::submitButton('Entrar', array('class'=>'btn btn-lg btn-primary btn-block')); ?>


<?php $this->endWidget(); ?>
