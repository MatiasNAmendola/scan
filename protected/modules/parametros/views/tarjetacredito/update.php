<?php
/**
 * @author josesambrano
 * @company B.O.S
 * @package modules.parametros.controller
 */
?>
<h1><?php echo MessageHandler::transformar('UpdateTitle','Parametros','TarjetaCredito',array('{nombre}'=>$model->nombre)) ?></h1>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarjeta-credito-form',
	'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'focus'=>array($model,'nombre'),
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
<?php echo CHtml::hiddenField('scenario', 'insert')?>
        <br>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
        <?php
                $this->widget('HintWidget', array(
			'text' =>MessageHandler::transformar('nombre_tooltip','Parametros','TarjetaCredito'),
			'effect' => 'normal'
        	));
            ?>
        <br>


		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'direccion'); ?>
        <?php
                $this->widget('HintWidget', array(
			'text' =>MessageHandler::transformar('direccion_tooltip','Parametros','TarjetaCredito'),
			'effect' => 'normal'
        	));
            ?>
        <br>
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
        <?php
                $this->widget('HintWidget', array(
			'text' =>MessageHandler::transformar('telefono_tooltip','Parametros','TarjetaCredito'),
			'effect' => 'normal'
        	));
            ?>
        <br>
	 <?php
            $this->widget('BotonesWidget',array('permitidos'=>array('save','exit')));
         ?>
<?php $this->endWidget(); ?>

