<tr>
    <td><?php echo CHtml::encode($data->path); ?></td>
    <td class="col-md-2">
        <?php echo CHtml::link('Editar',array('update', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('delete', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
