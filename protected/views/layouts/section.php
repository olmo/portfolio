<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php if(isset($this->breadcrumbs)):?>
                    <ul class="breadcrumb">
                            <?php $this->widget('ext.CBreadcrumbs', array(
                                'links'=>$this->breadcrumbs,
                                'separator'=>''
                            )); ?>
                    </ul>
                <?php endif?>
            </div>
        </div>
        <?php if(isset($this->titulo)):?>
            <div class="row">
                <div class="span12">
                    <h2><?php echo $this->titulo; ?></h2>
                </div>
            </div>
        <?php endif?>
    </div>
</section>
<div class="container">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>
