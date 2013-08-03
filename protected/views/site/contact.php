<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contacto';
$this->breadcrumbs=array(
	'Contact',
);
?>

<div class="map left" id="map">

    <div class="google_map" data-latitude="37.16246" data-longitude="-3.5959" data-zoom="19"></div>

</div>

<section class="layout contact right"><div class="skew"></div>

    <h1>Contacto</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at turpis nisi, vitae ullamcorper elit. Proin rhoncus bibendum sollicitudin. Mauris interdum, erat vitae dignissim placerat, nunc elit vehicula elit, in dignissim lacus leo at dolor.</p>

    <br>

    <!-- Contact information -->
    <p class="column">
        <strong>Oficina:</strong><br>
        Calle Primavera 8<br>
        Granada, España
    </p>
    <p class="column">
        <strong>Contacto:</strong><br>
        info@decorvinilo.com<br>
        607 53 53 35
    </p>

    <div class="clearfix"></div>
    <br>

    <h3>Mandenos un e-mail</h3>

    <p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

    <!-- Contact form -->
    <?php if(Yii::app()->user->hasFlash('contact')): ?>

        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
        </div>

    <?php else: ?>

        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'contact-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

        <div class="form">

            <?php echo $form->errorSummary($model); ?>

            <div class="one_half first">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name'); ?>
                <?php echo $form->error($model,'name'); ?>
            </div>

            <div class="one_half last">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email'); ?>
                <?php echo $form->error($model,'email'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'subject'); ?>
                <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
                <?php echo $form->error($model,'subject'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model,'body'); ?>
                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($model,'body'); ?>
            </div>

            <?php if(CCaptcha::checkRequirements()): ?>
                <div class="row">
                    <?php echo $form->labelEx($model,'verifyCode'); ?>
                    <div>
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model,'verifyCode'); ?>
                    </div>
                    <div class="hint">Please enter the letters as they are shown in the image above.
                        <br/>Letters are not case-sensitive.</div>
                    <?php echo $form->error($model,'verifyCode'); ?>
                </div>
            <?php endif; ?>

            <div>
                <?php echo CHtml::submitButton('Submit', array('class' => 'button')); ?>
                <!-- <p class="status"></p> -->
            </div>

            <?php $this->endWidget(); ?>
        </div>

<?php endif; ?>

</section>

<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>