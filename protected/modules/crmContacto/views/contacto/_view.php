<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_modificacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_modificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_oficina')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_oficina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_celular')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_celular); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_alternativo')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_alternativo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_cumpleanos')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_cumpleanos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_sistema')); ?>:</b>
	<?php echo CHtml::encode($data->estado_sistema); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipodocumento')); ?>:</b>
	<?php echo CHtml::encode($data->tipodocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numerodocumento')); ?>:</b>
	<?php echo CHtml::encode($data->numerodocumento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idequipo')); ?>:</b>
	<?php echo CHtml::encode($data->idequipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	*/ ?>

</div>