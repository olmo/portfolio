<?php

    Yii::app()->clientScript->registerScriptFile('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js');

    $str_js = "
        var fixHelper = function(e, ui) {
            ui.children().each(function() {
                $(this).width($(this).width());
            });
            return ui;
        };

        $(function() {
            $( '#sortable' ).sortable({
                placeholder: 'ui-state-highlight',
                forcePlaceholderSize: true,
                forceHelperSize: true,
                items: 'tr',
                start: function (event, ui) {
                    ui.placeholder.height(ui.helper.outerHeight());
                    ui.placeholder.html('<td colspan=\"2\"></td>');
                },
                update : function () {
                    serial = $('#sortable').sortable('serialize', {key: 'items[]', attribute: 'class'});
                    $.ajax({
                        'url': '" . $this->createUrl('/admin/obras/sort') . "',
                        'type': 'post',
                        'data': serial,
                        'success': function(data){
                        },
                        'error': function(request, status, error){
                            alert('We are unable to set the sort order at this time.  Please try again in a few minutes.');
                        }
                    });
                },
                helper: fixHelper
            });

            $( '#sortable' ).disableSelection();
        });
    ";
Yii::app()->clientScript->registerScript('sortable-items', $str_js);

?>

<div class="row">
    <?php if(Yii::app()->user->hasFlash('exito')): ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo Yii::app()->user->getFlash('exito'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="text-muted bootstrap-admin-box-title"><?php echo CHtml::encode('Ordenar Obras'); ?></div>
        </div>
        <div class="bootstrap-admin-panel-content">
            <p>Para ordenar las obras pulse sobre una obra y arrastre hasta colocarla en la posición deseada. El nuevo orden quedará guardado de forma automática.</p>
            <table class="table">
                <thead><tr><th>Título</th><th>Autor</th></tr></thead>
                <tbody id="sortable">
                <?php foreach($obras as $obra): ?>
                    <tr class="items[]_<?php echo $obra->id; ?>"><td><?php echo $obra->titulo; ?></td><td><?php echo $obra->idArtista->nombre; ?></td></tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
