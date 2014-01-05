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
                <div class="span11">
                    <h2><?php echo $this->titulo; ?></h2>
                </div>
                <?php if(isset($this->flag)):?>
                    <div class="span1">
                        <a href="?lang=<?php echo ($this->flag=='SPA')?'spa':'eng'; ?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/<?php echo $this->flag; ?>.png" /></a>
                    </div>
                <?php endif?>
            </div>
        <?php endif?>
    </div>
</section>
<div class="container">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>
