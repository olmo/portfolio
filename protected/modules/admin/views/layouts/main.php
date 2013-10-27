<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/vendor/jquery.js.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/js/bootstrap.min.js"></script>

    <style type="text/css">
        body {
            padding-top: 70px;
        }
        footer {
            padding-left: 15px;
            padding-right: 15px;
        }

        /*
         * Off Canvas
         * --------------------------------------------------
         */
        @media screen and (max-width: 768px) {
            .row-offcanvas {
                position: relative;
                -webkit-transition: all 0.25s ease-out;
                -moz-transition: all 0.25s ease-out;
                transition: all 0.25s ease-out;
            }

            .row-offcanvas-right
            .sidebar-offcanvas {
                right: -50%; /* 6 columns */
            }

            .row-offcanvas-left
            .sidebar-offcanvas {
                left: -50%; /* 6 columns */
            }

            .row-offcanvas-right.active {
                right: 50%; /* 6 columns */
            }

            .row-offcanvas-left.active {
                left: 50%; /* 6 columns */
            }

            .sidebar-offcanvas {
                position: absolute;
                top: 0;
                width: 50%; /* 6 columns */
            }
        }
    </style>
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
                <a class="navbar-brand" href="#">Global Arte</a>
                <div class="navbar-collapse collapse" style="height: 1px;">
                    <p class="navbar-text pull-right">
                        Has entrado como <a href="#" class="navbar-link"><?php echo Yii::app()->user->name; ?></a>
                    </p>

                    <?php $this->widget('zii.widgets.CMenu',array(
                        'activeCssClass'=>'active',
                        'htmlOptions'=>array('class'=>'nav navbar-nav',),
                        'items'=>array(
                            array('label'=>'Inicio', 'url'=>array('/admin'),),
                            array('label'=>'Artistas', 'url'=>array('/admin/artistas/index')),
                            array('label'=>'Fotos', 'url'=>array('/admin/obras/index')),
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
