<tr>
    <td><?php echo CHtml::encode($data->nombre); ?>
        <?php if ($tipo=='montaje'): ?>
            <?php echo CHtml::encode($data->precio); ?>
        <?php endif; ?>
    </td>
    <td class="col-md-2">
        <?php echo CHtml::link('Editar',array('update', 'id'=>$data->id, 'tipo'=>$tipo),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('delete', 'id'=>$data->id, 'tipo'=>$tipo),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
