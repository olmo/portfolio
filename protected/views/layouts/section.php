<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="#">Blog</a> <span class="divider">/</span></li>
                    <li class="active">Full Width</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <h2>Blog</h2>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>
