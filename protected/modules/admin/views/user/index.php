<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);
if(Yii::app()->authManager->checkAccess("admin", Yii::app()->user->id))
{
	$this->menu=array(
		array('label'=>'Create User', 'url'=>array('create')),
		array('label'=>'Manage User', 'url'=>array('admin')),
	);
}

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Users</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'email',
		'username',
		'last_login_time',
		'create_time',
		/*
		'create_user_id',
		'update_time',
		'update_user_id',
		
		array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
