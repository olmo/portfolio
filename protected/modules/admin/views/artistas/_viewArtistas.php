<tr>
    <td><?php echo CHtml::encode($data->titulo); ?></td>
    <td class="action">
        <?php echo CHtml::link('Editar',array('updateFoto', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('deleteFoto', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>