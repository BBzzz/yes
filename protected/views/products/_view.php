<?php
/* @var $this ProductsController */
/* @var $data Products */
?>

<div class="view">
      	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/upload/'.$data->image_name,"image_name",array("width"=>200)); ?>
  	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->code), array('view', 'id'=>$data->code)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denomination')); ?>:</b>
	<?php echo CHtml::encode(nl2br($data->denomination)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

</div>
