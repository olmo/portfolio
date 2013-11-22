<tr>
    <td><?php echo CHtml::encode($data->titulo); ?></td>
    <td><?php echo CHtml::encode($data->idAutor->username); ?></td>
    <td class="col-md-2">
        <?php echo CHtml::link('Ver',array('/blog/view', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Editar',array('update', 'id'=>$data->id),
            array('class' => 'edit')); ?>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('delete', 'id'=>$data->id),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
