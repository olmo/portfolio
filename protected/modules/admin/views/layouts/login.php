<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/css/signin.css" rel="stylesheet" type="text/css" media="screen" />
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

    <div class="container">
        <div class="form-signin">
            <?php echo $content; ?>
            <hr>
        </div>
    </div>

</body>
</html>