<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/ie6.css" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/ie7.css" /><![endif]-->

    <!-- JavaScripts-->

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/js/jNice.js"></script>
</head>

<body>
    <div id="wrapper">
        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
        <h1><a href="#"><span>Transdmin Light</span></a></h1>

        <?php $this->widget('zii.widgets.CMenu',array(
            'activeCssClass'=>'active',
            'id'=>'mainNav',
            'items'=>array(
                array('label'=>'Inicio', 'url'=>array('/admin'),),
                array('label'=>'Artistas', 'url'=>array('/admin/artistas/index')),
                array('label'=>'Fotos', 'url'=>array('/admin/fotos/index')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'itemOptions'=>array('class'=>'logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        )); ?>

        <div id="containerHolder">
            <div id="container">
                <?php echo $content; ?>

                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>

    </div>
</body>

</html>
