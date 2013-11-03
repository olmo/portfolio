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
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.js.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <div class="navbar-header">

                </div>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo Yii::app()->homeUrl; ?>"><span class="navbar-brand">Global Arte</span></a>
                <div class="navbar-collapse collapse" style="height: 1px;">
                    <p class="navbar-text pull-right hidden-xs">
                        Has entrado como <a href="#" class="navbar-link"><?php echo Yii::app()->user->name; ?></a>
                    </p>

                    <?php $this->widget('zii.widgets.CMenu',array(
                        'activeCssClass'=>'active',
                        'htmlOptions'=>array('class'=>'nav navbar-nav',),
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/admin'),),
                            array('label'=>'Artistas', 'url'=>array('/admin/artistas/index'), 'active'=>Yii::app()->controller->id=='artistas',),
                            array('label'=>'Obras', 'url'=>array('/admin/obras/index'), 'active'=>Yii::app()->controller->id=='obras',),
                            array('label'=>'Blog', 'url'=>array('/admin/blog/index'), 'active'=>Yii::app()->controller->id=='blog',),
                            // array('label'=>'Login', 'url'=>array('/admin/login/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/admin/default/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                    )); ?>
                </div>
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
