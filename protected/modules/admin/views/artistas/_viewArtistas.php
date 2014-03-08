<tr>
    <td><?php echo CHtml::encode($data->nombre); ?></td>
    <td class="col-md-4">
        <?php echo CHtml::link('Editar',array('updateArtista', 'id'=>$data->id),
            array('class' => 'edit')); ?>

        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('deleteArtista', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>

        <?php echo CHtml::link('BorrarS1',"#", array("submit"=>array('deleteArtistaSlide1', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>

        <?php echo CHtml::link('BorrarS2',"#", array("submit"=>array('deleteArtistaSlide2', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>

        <?php echo CHtml::link('BorrarS3',"#", array("submit"=>array('deleteArtistaSlide3', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>

    </td>
</tr>