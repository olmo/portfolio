
<tr>
    <td><?php echo CHtml::encode($data->nombre); ?></td>
    <td class="action">
        <?php echo CHtml::link('Editar',array('update', 'id'=>$data->id, 'tipo'=>$tipo),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('delete', 'id'=>$data->id, 'tipo'=>$tipo),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
