<?php
/* @var $this GaleriaController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Galería';

/*$this->breadcrumbs=array(
	'Elementos',
);



$this->menu=array(
	array('label'=>'Create Elemento', 'url'=>array('create')),
	array('label'=>'Manage Elemento', 'url'=>array('admin')),
);*/

$this->breadcrumbs=array(
    'Galería'=>array('index'),
);

?>

<div class="row">
<!--<div class="span3">-->
<!--    <aside class="sidebar">-->
<!--        <h4>Categorias</h4>-->
<!--        <p align=""><small>Seleccione preferencias para depurar su búsqueda.</small></p>-->
<!--        --><?php //$form=$this->beginWidget('CActiveForm', array(
//            'id'=>'filtro-form',
//            'method'=>'get',
//        )); ?>
<!--        <ul id="filtro" class="nav nav-list primary pull-bottom">-->
<!--            <li data-toggle="collapse" data-target="#idartistas"><a href="#artistas">Artistas</a></li>-->
<!--            <ul id="idartistas" style="padding-top: 10px;" class="collapse --><?php //if(is_array($model->artistas)) echo (array_sum($model->artistas)>0)? 'in' : ''; ?><!--">-->
<!--                --><?php //echo $form->checkBoxList($model, 'artistas', CHtml::listData(ArtistasCategorias::model()->findAll(), 'id', 'nombre'),
//                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
<!--            </ul>-->
<!--            <li data-toggle="collapse" data-target="#idtecnicas"><a href="#tecnicas">Técnicas</a></li>-->
<!--            <ul id="idtecnicas" style="padding-top: 10px;" class="collapse --><?php //if(is_array($model->tecnicas)) echo (array_sum($model->tecnicas)>0)? 'in' : ''; ?><!--">-->
<!--                --><?php //echo $form->checkBoxList($model, 'tecnicas', CHtml::listData(ObrasTecnica::model()->findAll(), 'id', 'nombre'),
//                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
<!--            </ul>-->
<!--            <li data-toggle="collapse" data-target="#idtemas"><a href="#temas">Temas</a></li>-->
<!--            <ul id="idtemas" style="padding-top: 10px;" class="collapse --><?php //if(is_array($model->temas)) echo (array_sum($model->temas)>0)? 'in' : ''; ?><!--">-->
<!--                --><?php //echo $form->checkBoxList($model, 'temas', CHtml::listData(ObrasTema::model()->findAll(), 'id', 'nombre'),
//                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
<!--            </ul>-->
<!--            <li data-toggle="collapse" data-target="#idtamano"><a href="#tamanos">Tamaño</a></li>-->
<!--            <ul id="idtamano" style="padding-top: 10px;" class="collapse --><?php //if(is_array($model->tamanos)) echo (array_sum($model->tamanos)>0)? 'in' : ''; ?><!--">-->
<!--                --><?php //echo $form->checkBoxList($model, 'tamanos', CHtml::listData(ObrasTamano::model()->findAll(), 'id', 'nombre'),
//                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
<!--            </ul>-->
<!--            <li data-toggle="collapse" data-target="#idformato"><a href="#formatos">Formato</a></li>-->
<!--            <ul id="idformato" style="padding-top: 10px;" class="collapse --><?php //if(is_array($model->formatos)) echo (array_sum($model->formatos)>0)? 'in' : ''; ?><!--">-->
<!--                --><?php //echo $form->checkBoxList($model, 'formatos', CHtml::listData(ObrasFormato::model()->findAll(), 'id', 'nombre'),
//                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
<!--            </ul>-->
<!--        </ul>-->
<!--        --><?php //$this->endWidget(); ?>
<!--    </aside>-->
<!--</div>-->

<div class="span12">
    <div class="row" style="margin-bottom: -10px;">
        <div class="span9">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'filtro-form2',
                'method'=>'get',
            )); ?>
            <ul class="nav nav-pills dropdown-menu-form">
                <li class="dropdown <?php if(is_array($model->artistas)) echo (array_sum($model->artistas)>0)? 'active' : ''; ?>">
                    <a id="drop1" role="button" data-toggle="dropdown" href="#">Artistas <b class="caret"></b></a>
                    <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <?php echo $form->checkBoxList($model, 'artistas', CHtml::listData(ArtistasCategorias::model()->findAll(), 'id', 'nombre'),
                            array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
                    </ul>
                </li>
                <li class="dropdown <?php if(is_array($model->tecnicas)) echo (array_sum($model->tecnicas)>0)? 'active' : ''; ?>">
                    <a id="drop2" role="button" data-toggle="dropdown" href="#" class="active">Técnicas <b class="caret"></b></a>
                    <ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop2">
                        <?php echo $form->checkBoxList($model, 'tecnicas', CHtml::listData(ObrasTecnica::model()->findAll(), 'id', 'nombre'),
                            array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
                    </ul>
                </li>
                <li class="dropdown <?php if(is_array($model->temas)) echo (array_sum($model->temas)>0)? 'active' : ''; ?>">
                    <a id="drop3" role="button" data-toggle="dropdown" href="#">Temas <b class="caret"></b></a>
                    <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop3">
                        <?php echo $form->checkBoxList($model, 'temas', CHtml::listData(ObrasTema::model()->findAll(), 'id', 'nombre'),
                            array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
                    </ul>
                </li>
                <li class="dropdown <?php if(is_array($model->tamanos)) echo (array_sum($model->tamanos)>0)? 'active' : ''; ?>">
                    <a id="drop4" role="button" data-toggle="dropdown" href="#">Tamaño <b class="caret"></b></a>
                    <ul id="menu4" class="dropdown-menu" role="menu" aria-labelledby="drop4">
                        <?php echo $form->checkBoxList($model, 'tamanos', CHtml::listData(ObrasTamano::model()->findAll(), 'id', 'nombre'),
                            array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
                    </ul>
                </li>
                <li class="dropdown <?php if(is_array($model->formatos)) echo (array_sum($model->formatos)>0)? 'active' : ''; ?>">
                    <a id="drop5" role="button" data-toggle="dropdown" href="#">Formato <b class="caret"></b></a>
                    <ul id="menu5" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                        <?php echo $form->checkBoxList($model, 'formatos', CHtml::listData(ObrasFormato::model()->findAll(), 'id', 'nombre'),
                            array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a id="drop6" role="button" data-toggle="dropdown" href="#">Ordenar por <b class="caret"></b></a>
                    <ul id="menu6" class="dropdown-menu" role="menu" aria-labelledby="drop6">
                        <li><label class="radio"><input onclick="this.form.submit();" value="recientes" type="radio" name="FiltroForm[ordenar]" <?php echo ($model->ordenar=='recientes' || $model->ordenar=='')? 'checked' : '' ?>>Más recientes</label></li>
                        <li><label class="radio"><input onclick="this.form.submit();" value="titulo" type="radio" name="FiltroForm[ordenar]" <?php echo ($model->ordenar=='titulo')? 'checked' : '' ?>>Título</label></li>
                    </ul>
                </li>
            </ul>
            <?php $this->endWidget(); ?>
        </div>
        <div class="span3" style="margin-top: 10px;">
            Visualizando <?php echo $dataProvider->getItemCount(); ?> de <?php echo $dataProvider->getTotalItemCount(); ?> obras.
        </div>
    </div>

    <hr />

    <div class="row">

        <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_view',
                'enableSorting'=>false,
                'template'=>"{items}"
            )); ?>
        </ul>

    </div>

    <div class="pagination">
        <?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination,
            'cssFile'=>false,
            'selectedPageCssClass'=>'active',
            'hiddenPageCssClass'=>'disabled',
            'header'          => '',
            'firstPageLabel' => '<<',
            'prevPageLabel'  => '<',
            'nextPageLabel'  => '>',
            'lastPageLabel'  => '>>',
        )); ?>
    </div>
</div>
</div>