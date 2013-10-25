<tr>
    <td><?php echo CHtml::encode($data->titulo); ?></td>
    <td class="col-md-2">
        <?php echo CHtml::link('Editar',array('updateObra', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('deleteObra', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
