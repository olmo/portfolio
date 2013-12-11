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
<div class="span3">
    <aside class="sidebar">
        <h4>Categorias</h4>
        <p align=""><small>Seleccione preferencias para depurar su búsqueda.</small></p>
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'filtro-form',
            'method'=>'get',
        )); ?>
        <ul id="filtro" class="nav nav-list primary pull-bottom">
            <li data-toggle="collapse" data-target="#idartistas"><a href="#artistas">Artistas</a></li>
            <ul id="idartistas" style="padding-top: 10px;" class="collapse <?php if(is_array($model->artistas)) echo (array_sum($model->artistas)>0)? 'in' : ''; ?>">
                <?php echo $form->checkBoxList($model, 'artistas', CHtml::listData(ArtistasCategorias::model()->findAll(), 'id', 'nombre'),
                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
            </ul>
            <li data-toggle="collapse" data-target="#idtecnicas"><a href="#tecnicas">Técnicas</a></li>
            <ul id="idtecnicas" style="padding-top: 10px;" class="collapse <?php if(is_array($model->tecnicas)) echo (array_sum($model->tecnicas)>0)? 'in' : ''; ?>">
                <?php echo $form->checkBoxList($model, 'tecnicas', CHtml::listData(ObrasTecnica::model()->findAll(), 'id', 'nombre'),
                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
            </ul>
            <li data-toggle="collapse" data-target="#idtemas"><a href="#temas">Temas</a></li>
            <ul id="idtemas" style="padding-top: 10px;" class="collapse <?php if(is_array($model->temas)) echo (array_sum($model->temas)>0)? 'in' : ''; ?>">
                <?php echo $form->checkBoxList($model, 'temas', CHtml::listData(ObrasTema::model()->findAll(), 'id', 'nombre'),
                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
            </ul>
            <li data-toggle="collapse" data-target="#idtamano"><a href="#tamanos">Tamaño</a></li>
            <ul id="idtamano" style="padding-top: 10px;" class="collapse <?php if(is_array($model->tamanos)) echo (array_sum($model->tamanos)>0)? 'in' : ''; ?>">
                <?php echo $form->checkBoxList($model, 'tamanos', CHtml::listData(ObrasTamano::model()->findAll(), 'id', 'nombre'),
                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
            </ul>
            <li data-toggle="collapse" data-target="#idformato"><a href="#formatos">Formato</a></li>
            <ul id="idformato" style="padding-top: 10px;" class="collapse <?php if(is_array($model->formatos)) echo (array_sum($model->formatos)>0)? 'in' : ''; ?>">
                <?php echo $form->checkBoxList($model, 'formatos', CHtml::listData(ObrasFormato::model()->findAll(), 'id', 'nombre'),
                    array('onclick'=>'this.form.submit();', 'container'=>'','separator'=>'', 'template'=>'<li><label class="checkbox">{input}{label}</label></li>')); ?>
            </ul>
        </ul>
        <?php $this->endWidget(); ?>
    </aside>
</div>

<div class="span9">
    <!--<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
        <li data-option-value="*" class="active"><a href="#">Mostrar Todo</a></li>
        <?php /*foreach($temas->getData() as $data): */?>
            <li data-option-value=".<?php /*echo CHtml::encode($data->nombre); */?>"><a href="#"><?php /*echo CHtml::encode($data->nombre); */?></a></li>
        <?php /*endforeach; */?>
    </ul>-->

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