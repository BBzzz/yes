<?php
/* @var $this StockController */
/* @var $model Stock */

$this->breadcrumbs=array(
	'Stocks'=>array('index'),
	$model->prod_code=>array('view','id'=>$model->prod_code),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stock', 'url'=>array('index')),
	array('label'=>'Create Stock', 'url'=>array('create')),
	array('label'=>'View Stock', 'url'=>array('view', 'id'=>$model->prod_code)),
	array('label'=>'Manage Stock', 'url'=>array('admin')),
);
?>

<h1>Update Stock <?php echo $model->prod_code; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>