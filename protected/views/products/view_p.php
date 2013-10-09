<?php
/* @var $this ProductsController */
/* @var $model Products */

/*$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->code,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->code)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->code),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);*/
?>

<h1>View Product: <?php echo $model->denomination; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'code',
		'denomination',
		array(
			'name'=>'description',
			'value'=>CHtml::encode($model->description),
		),
		array(
			'label'=>'Image',
			'type'=>'raw',
			'value'=>html_entity_decode(CHtml::image(Yii::app()->request->baseUrl.'/images/upload/'.$model->image_name,"image_name")),
		),
	),
));
