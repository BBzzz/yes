<?php
/* @var $this StockController */
/* @var $model Stock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'prod_code'); ?>
		<?php echo $form->textField($model,'prod_code',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'p_price'); ?>
		<?php echo $form->textField($model,'p_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'s_price'); ?>
		<?php echo $form->textField($model,'s_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'init_quantity'); ?>
		<?php echo $form->textField($model,'init_quantity',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_in'); ?>
		<?php echo $form->textField($model,'quantity_in',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_out'); ?>
		<?php echo $form->textField($model,'quantity_out',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_entry_date'); ?>
		<?php echo $form->textField($model,'last_entry_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_exit_date'); ?>
		<?php echo $form->textField($model,'last_exit_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->