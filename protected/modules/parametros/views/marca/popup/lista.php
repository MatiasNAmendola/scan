<?php
/**
 * @author josesambrano
 * @company B.O.S
 * @package modules.parametros.controller
 */
?>

<table width="100%">
    <thead>
    <th>Marca:</th>
    <th>Empresa</th>
    </thead>
    <tbody>
    <?php if(count($lista)>0):?>
        
            <?php foreach ($lista as $key =>$value):
           $js="select".$modelo.$id."('".$value->id."','".trim($value->nombre)."','".$modelo."_".$obj_fk."','".$obj_name."')";
            ?>
            <tr>
            <td><?php  echo CHtml::link($value->nombre,'javascript:'.$js); ?></td>
            <td><?php echo  Empresa::model()->buscaNombre($value->idempresa) ?></td>

            </tr>
            <?php endforeach;?>
        
    <?php else: ?>
        <tr>
            <td colspan="2">No se encontraron registros</td>
        </tr>
    <?php endif;?>
    </tbody>
</table>