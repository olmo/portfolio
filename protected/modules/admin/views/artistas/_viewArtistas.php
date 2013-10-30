<tr>
    <td><?php echo CHtml::encode($data->nombre); ?></td>
    <td class="col-md-2">
        <?php echo CHtml::link('Editar',array('updateArtista', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('deleteArtista', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>