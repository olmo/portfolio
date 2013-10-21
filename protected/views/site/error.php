<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<section class="page-top">
    <div class="container">
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                    <li class="active">Pages</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <h2>404 - Page Not Found</h2>
            </div>
        </div>
    </div>
</section>

<div class="container">

    <section class="page-not-found">
        <div class="row">
            <div class="span6 offset1">
                <div class="page-not-found-main">
                    <h2>404 <i class="icon-file"></i></h2>
                    <p><?php echo CHtml::encode($message); ?></p>
                </div>
            </div>
            <div class="span4">
                <h4>Here are some useful links</h4>
                <ul class="nav nav-list primary">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>

</div>