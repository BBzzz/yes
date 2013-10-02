<?php
/* @var $this StockController */
/* @var $data Stock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prod_code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prod_code), array('view', 'id'=>$data->prod_code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('p_price')); ?>:</b>
	<?php echo CHtml::encode($data->p_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_price')); ?>:</b>
	<?php echo CHtml::encode($data->s_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('init_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->init_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_in')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_out')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_out); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('last_entry_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_entry_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_exit_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_exit_date); ?>
	<br />

	*/ ?>

</div>