<?php
/**
 * @author josesambrano
 * @company B.O.S
 * @package modules.parametros.views
 */
?>
<h1><?php echo MessageHandler::transformar('Modulo','Compra'); ?></h1>
<h1>Compras Anteriores / Buscar Compra</h1>
<?php
$this->widget('ComandosWidget', array(
	'comandos' => array(
		array('Crear', array('compra/indexcomprasanteriores')),
	),
));?>
<br>

<?php
$this->widget('ListamoduloscomprasanterioresWidget',array('model'=>$model,'id'=>'proveedor'));
?>