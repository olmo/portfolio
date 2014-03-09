<?php

    Yii::app()->clientScript->registerCoreScript('jquery');

?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap-admin.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/custom.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/js/bootstrap-switch.min.js"></script>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->request->baseUrl; ?>/img/apple-touch-icon-144x144.png">

</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo Yii::app()->homeUrl; ?>">Global Arte</a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i> <?php echo Yii::app()->user->name; ?> <i class="caret"></i></a>
                            <ul class="dropdown-menu">
                                <li><?php echo CHtml::link('Salir' ,array('/admin/default/logout')); ?></li>
                            </ul>
                        </li>
                    </ul>

                    <?php $this->widget('zii.widgets.CMenu',array(
                        'activeCssClass'=>'active',
                        'htmlOptions'=>array('class'=>'nav navbar-nav',),
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/admin'),),
                            array('label'=>'Artistas', 'url'=>array('/admin/artistas/index'), 'active'=>Yii::app()->controller->id=='artistas',),
                            array('label'=>'Obras', 'url'=>array('/admin/obras/index'), 'active'=>Yii::app()->controller->id=='obras',),
                            array('label'=>'Blog', 'url'=>array('/admin/blog/index'), 'active'=>Yii::app()->controller->id=='blog',),
                        ),
                    )); ?>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <?php echo $content; ?>
        </div>
        <hr>
        <footer>
            <p></p>
        </footer>
    </div>


</body>

</html>
