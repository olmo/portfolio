
<tr>
    <td><?php echo CHtml::encode($data->nombre); ?></td>
    <td class="action">
        <a href="#" class="edit">Editar</a>
        <?php echo CHtml::link('Borrar',"#", array("submit"=>array('delete', 'id'=>$data->id, 'tipo'=>$tipo),
            'confirm' => '¿Seguro que quieres borrar el elemento?', 'class' => 'delete')); ?>
    </td>
</tr>
